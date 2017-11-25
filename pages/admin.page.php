<?php

if(isset($_GET['events'])) {
    if(isset($_POST['submit'])) {

        echo '<br>';
        $date = explode ( '/' , $_POST['date']);
        $event = new Event();
        $event->setName($_POST['name']);
        $event->setUserEditor(1);
        $event->setTypeId($_POST['type_id']);
        $event->setDate("{$date[2]}-{$date[0]}-{$date[1]} 00:00:00");
        $event->setZipCode($_POST['zip_code']);
        $event->setCity($_POST['city']); // imp
        $event->setStreet($_POST['street']); // imp
        $event->setLng(0.00000000); // imp
        $event->setLat(0.00000000); // imp
        $event->setDescription($_POST['description']);
        $event->setSummary($_POST['summary']);
        $event->setImgPath('path');

        if($event->store_db($connection)) {
            echo 'imhotep !';
        }
        else {
            echo 'pas cool';
        }

    }
?>
<form method="post" action="" class="phpForm">
    <fieldset>
        <legend>Ajouter un évènement</legend>
            <div class="separator"></div>
        <label>Titre</label>
        <input type="text" name="name" placeholder="titre de l'évènement" />
        <br>
        <input type="hidden" name="user_editor" value="<?php echo isset($_SESSION['login']) ? $_SESSION['login']->getId() : ''; ?>" />
        <label>Type</label>
        <select name="type_id">
            <option value="1">Sportif</option>
            <option value="2">Collectif</option>
        </select>
        <br>
        <div class="dateForm">
            <label>Date</label>
            <input type="text" id="datepicker" name="date"/>
            <input class="time" tye="number" name="hour" placeholder="00" style="width: 35px; text-align: right;">
            <span class="twoPoints">:</span>
            <input class="time" tye="number" name="minutes" placeholder="00" style="width: 35px; text-align: right;">
        </div>
            <div class="separator"></div>
        <label>Description: </label><br>
        <textarea class="description" name="description" placeholder="description de l'évènement"></textarea>
        <br>
        <label>Résumé</label>
        <input type="text" name="summary" placeholder="résumé de l'événement" />
        <br>
        <label>Image d'illustration: </label>
        
        <input class="inputfile" name="img" type="file" />
    </fieldset>
    <div class="separator"></div>
    <label>Adresse de l'évènement: </label>
    <fieldset>
        <input type="text" class="adress" name="zip_code" placeholder="code Postal" /><br>
        <input type="text" class="adress" name="city" placeholder="ville" /><br>
        <input type="text" class="adress" name="street" placeholder="rue" /><br>
        <input type="hidden" name="lat" value="0" />
        <input type="hidden" name="lng" value="0" />
    </fieldset>
    <div class="separator"></div>
    <input type="submit" value="envoyer" name="submit" class="formButton" />
</form>

<?php

}
else if(isset($_GET['galleries'])) {
    
}