<?php
if(isset($_GET['id'])) {

    $id = $_GET['id'];
    $query = 'SELECT * FROM events WHERE id = ?';
    $statement = $connection->prepare($query);
    $results = $statement->execute([$id]);
    $event = $statement->fetchAll(PDO::FETCH_CLASS, 'Event');
    $html = "<div class=\"actualite front\">\n";
    $html .= "<h1> {$event[0]->getName()} </h1>\n";
    $html .= "<h2> {$event[0]->getDate()} </h2>\n";
    if($event[0]->getImgPath() != '')
        $html .= "<img src=\"events-img/{$event[0]->getImgPath()}\" />\n";
    $html .= "<p> {$event[0]->getDescription()} </p>\n";
    $html .= "</div>\n";
    echo $html;

}
else {

    $query = 'SELECT * FROM events ORDER BY date DESC';
    $statement = $connection->query($query);
    $events = $statement->fetchAll(PDO::FETCH_CLASS, 'Event');
    $html = "<div class=\"eventWrapper\">";
    foreach($events as $event) {
        $html = "<div class=\"actualite front\">\n";
        $html .= "<h1> {$event->getName()} </h1>\n";
        $html .= "<h2> {$event->getDate()} </h2>\n";
        if($event->getImgPath() != '')
            $html .= "<img src=\"events-img/{$event->getImgPath()}\" />\n";
        $html .= "<p> {$event->getSummary()} </p>\n";
        $html .= "<a class=\"lireLaSuite\" href=\"?page=events&id={$event->getId()}\">Lire la suite</a>\n";
        $html .= "</div>\n";
        echo $html;
    }
    $html .= "</div>";

}
?>