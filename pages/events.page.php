<?php
if(isset($_GET['id'])) {

    $id = $_GET['id'];
    $query = 'SELECT * FROM events WHERE id = ?';
    $statement = $connection->prepare($query);
    $results = $statement->execute([$id]);
    $event = $statement->fetchAll(PDO::FETCH_CLASS, 'Event');
    $html = "<div class=\"actualite front\">\n";
    $html .= "<h1>".stripslashes($event[0]->getName())."</h1>\n";
    $html .= "<p class=\"small\"> {$event[0]->getDate()} </h2>\n";
    if($event[0]->getImgPath() != '')
        $html .= "<div style=\"text-align: center; margin-bottom: 20px;\" class=\"ml-auto mr-autotext-center\"><img class=\"img-responsive\" src=\"{$event[0]->getImgPath()}\" /></div>\n";
    $html .= "<div \"width:80%;\" class=\"container\">\n";
    $html .= "<div class=\"row\"><div style=\"padding-right: 20px;\" id=\"\" class=\"col-sm-6\">\n";
    $html .= "<p id=\"event-description\" class=\"lead\">".stripslashes($event[0]->getDescription())."</p>\n";
    $html .= "</div>\n";
    $html .= "<div class=\"col-sm-6\" style=\"height: 100%;\">\n";
    $html .= "<iframe id=\"mapframe\" style=\"width: 100%; height: 100%; border:0;\" height=\"100%\" frameborder=\"0\" src=\"https://www.google.com/maps/embed/v1/view?zoom=12&center={$event[0]->getLat()},{$event[0]->getLng()}&key=AIzaSyCUjwKJh_yXYCW04dC9K6tKhT-8swp6RtM\" allowfullscreen></iframe>\n"; 
    $html .= "</div>\n";
    $html .= "</div>\n";
    $html .= "</div>\n";
    echo $html;

}
else {

    $query = 'SELECT * FROM events ORDER BY date DESC';
    $statement = $connection->query($query);
    $events = $statement->fetchAll(PDO::FETCH_CLASS, 'Event');
    $html = "<div class=\"eventWrapper\">";
    foreach($events as $event) {
        $html = "<div class=\"overthejumbo\"><div class=\"jumbotron text-white\" style=\"text-shadow: -1px -1px 1px #111, 2px 2px 1px #363636; color: white; background: url('{$event->getImgPath()}') 100% 30%;\">
        <div class=\"container\" style=\"max-width: 90%;\">
        <h1>".stripslashes($event->getName())."</h1>
        <p class=\"small\">{$event->getDate()}</p>
        <p style=\"max-width: 90%;\">" . stripslashes($event->getSummary())."</p>
        <a class=\"btn btn-primary btn-lg\" href=\"?page=events&id={$event->getId()}\" role=\"button\">Plus ></a></p>
        </div>
        </div></div>";
        echo $html;
    }
    $html .= "</div>";

}
?>