<?php
require('db-param.php');
require('../class/event.class.php');
require('../class/gallery.class.php');

header('Content-Type: application/json');


if(isset($_GET['request'])) {

    switch($_GET['request']) {

        case 'news':
            break;

        case 'new-article':
            if(isset($_GET['id'])) {
                $id = $_GET['id'];
            }
            break;

        case 'event':

            if(isset($_GET['id'])) {
                $id = $_GET['id'];
                $query = 'SELECT * FROM events WHERE id = ?';
                $statement = $connection->prepare($query);
                $results = $statement->execute([$id]);
                $event = $statement->fetchAll(PDO::FETCH_CLASS, 'Event');
                $json = json_encode($event);
                echo $json;

            }
            break;
        
        case 'events': 

            $query = 'SELECT * FROM events ORDER BY date DESC';
            $statement = $connection->query($query);
            $event = $statement->fetchAll(PDO::FETCH_CLASS, 'Event');
            $json = json_encode($event);
            echo $json;
            break;

        case 'galleries': 
            
            $query = 'SELECT * FROM galleries';
            $statement = $connection->query($query);
            $galleries = $statement->fetchAll(PDO::FETCH_CLASS, 'Gallery');
            $json = json_encode($galleries);
            echo $json;
            break;

        case 'gallery':

            if(isset($_GET['id'])) {
                $id = $_GET['id'];
                $query = 'SELECT * FROM assets WHERE id_gallery = ?';
                $statement = $connection->prepare($query);
                $results = $statement->execute([$id]);
                $assets = [];
                while($asset = $statement->fetch(PDO::FETCH_OBJ)) {
                    array_push($assets, $asset);
                }
                $json = json_encode($assets);
                echo $json;
                break;
            }

    }


}
?>