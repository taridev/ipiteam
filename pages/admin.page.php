<?php
if(isset($_SESSION['level']) and $_SESSION['level']<3) {
    if(isset($_GET['events'])) {
        $event_errors = [];
        $event_success = [];
        if(isset($_POST['submit'])) {

            echo '<br>';
            $date = explode ( '/' , $_POST['date']);
            $event = new Event();
            $event->setName(addslashes($_POST['name']));
            $event->setUserEditor(1);
            $event->setTypeId($_POST['type_id']);
            $event->setDate("{$date[2]}-{$date[0]}-{$date[1]} {$_POST['hours']}:{$_POST['minutes']}:00");
            $event->setZipCode($_POST['zip_code']);
            $event->setCity($_POST['city']); // imp
            $event->setStreet(addslashes($_POST['street'])); // imp
            $event->setLng($_POST['gllpLatitude']); // imp
            $event->setLat($_POST['gllpLongitude']); // imp
            $event->setDescription(addslashes($_POST['description']));
            $event->setSummary(addslashes($_POST['summary']));
            $event->setImgPath('path');

            if($event->store_db($connection)) {
                $insertId = $connection->lastInsertId();
                $event_success[] = "L'événement <?php echo $event->getName(); ?> a été créé avec succès.";
                $target_dir = "imgs/events/" . $insertId . "/";
                mkdir($target_dir, 0755);

                $target_file = $target_dir . basename($_FILES["img_file"]["name"]);
                $uploadOk = 1;
                $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
                // Check if image file is a actual image or fake image
                $check = getimagesize($_FILES["img_file"]["tmp_name"]);
                if($check !== false) {
                    $uploadOk = 1;
                } else {
                    $event_errors[] =  "Erreur [1]: le fichier n'est pas une image.";
                    $uploadOk = 0;
                }
                // Check if file already exists
                if (file_exists($target_file)) {
                    $event_errors[] = "Erreur [2]: le fichier est déjà là";
                    $uploadOk = 0;
                }
                // Check file size
                if ($_FILES["img_file"]["size"] > 2000000) {
                    $event_errors[] = "Erreur [3]: le fichier est trop volumineux";
                    $uploadOk = 0;
                }
                // Allow certain file formats
                if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif" ) {
                    $event_errors[] = "Erreur [4]: Seuls les fichiers JPG, JPEG, PNG & GIF sont autorisés.";
                    $uploadOk = 0;
                }
                if($uploadOk == 1) {
                    if (move_uploaded_file($_FILES["img_file"]["tmp_name"], $target_file)) {
                        $event_success[] = "Le fichier ". basename( $_FILES["img_file"]["name"]). " a été téléchargé.";
                        $query = "UPDATE events SET img_path = '$target_file' WHERE id = $insertId";
                        $event_errors[] = $query;
                        $connection->query($query);
                    } 
                    else {
                        $event_errors[] = "Erreur [4]: il y a eu une erreur pendant le téléchargement du fichier.";
                    }
                }
                
            }
            else {
                $event_errors[] = "L'événement n'a pu être créé.";
            }

        }
    if(sizeof($event_errors)>0) {
        echo '<div class="alert alert-danger"><ul>';
        foreach($event_errors as $error) {
            echo "<li>{$error}</li>\n";
        }
        echo '</ul></div>';
    }
    if(sizeof($event_success)>0) {
        echo '<div class="alert alert-success"><ul>';
        foreach($event_success as $success) {
            echo "<li>{$success}</li>\n";
        }
        echo '</ul></div>';
    }
?>
<form method="post" action="" enctype="multipart/form-data" class="form-horizontal">

    <h1>Ajouter un évènement</h1>
    <fieldset class="col-sm-6">
        <legend>Description</legend>
        <input class="form-control" type="text" name="name" placeholder="titre de l'évènement" required/>
        <input type="hidden" name="user_editor" value="<?php echo isset($_SESSION['user_id']) ? $_SESSION['user_id'] : ''; ?>" required/>
        <select class="form-control" t name="type_id">
            <option value="1">Sportif</option>
            <option value="2">Collectif</option>
        </select>
            <input type="text" id="datepicker" name="date" placeholder="date" required/>
            <!-- <input class="time" tye="number" name="hour" placeholder="00" style="width: 35px; text-align: right;"> -->
            <select name="hours" style="width: 60px; text-align: right;">
<?php
    for($i=0 ; $i<24 ; $i++) {
        echo '<option value="'.$i.'">'.$i.'</option>'."\n";
    }
?>          
            </select>
            <span class="twoPoints">:</span>
            <select name="minutes" style="width: 60px; text-align: right;">
<?php
    for($i=0 ; $i<60 ; $i++) {
        echo '<option value="'.$i.'">'.$i.'</option>'."\n";
    }
?> 
            </select>
            <!-- <input class="time" tye="number" name="minutes" placeholder="00" style="width: 35px; text-align: right;"> -->
        
        <textarea class="form-control" rows="8" name="description" placeholder="description de l'évènement"></textarea>
        <input class="form-control" type="text" name="summary" placeholder="résumé de l'événement" required/>
        
        <input class="inputfile" name="img_file" type="file" />
    </fieldset>
    <fieldset class="col-md-3">
        <legend>Adresse</legend>
        <input class="form-control" id="zip-code" type="text" class="adress" name="zip_code" placeholder="code Postal" /><br>
        <input class="form-control" id="city" type="text" class="adress" name="city" placeholder="ville" required/><br>
        <input class="form-control" id="street" type="text" class="adress" name="street" placeholder="rue" /><br>
    </fieldset>
    <fieldset class="gllpLatlonPicker col-md-3">
        <legend>Localisation</legend>
        <input id="google-maps-input" type="text" class="gllpSearchField">
        <input id="map-button" type="button" class="gllpSearchButton btn btn-primary form-control" value="search">
        <div class="gllpMap">Google Maps</div>
        <input type="hidden" name="gllpLatitude" class="gllpLatitude" value="20"/>
        <input type="hidden" name="gllpLongitude" class="gllpLongitude" value="20"/>
        <input id="map-zoom" type="hidden" class="gllpZoom" value="14"/>
    </fieldset>
    <fieldset class="col-sm-12">
        <input type="submit" value="Envoyer" name="submit" class="btn btn-primary" />
    </fieldset>
</form>

<?php

    }
    else if(isset($_GET['galleries'])) {
?>

<?php
    }

}
else {
    print '<div class="alert alert-danger">Vous ne disposez pas des autorisations suffisantes pour accéder à cette page.</div>';
}
?>