<?php


if(isset($_GET['id'])) {
    $id  =$_GET['id'];
    $queryAssets = 'SELECT * FROM assets WHERE id_gallery = ? ORDER BY id';
    $statement = $connection->prepare($queryAssets);
    $results = $statement->execute([$id]);
    $html = '<div class="row text-center text-lg-left">' . "\n";
    $html .= '';
    while($asset = $statement->fetch(PDO::FETCH_ASSOC)) {
        switch($asset['content-type']) {
            default: 
                $html .= '<div class="col-lg-3 col-md-4 col-xs-6">' ."\n";
                $html .= '<a href="galleries-img/gallery-' . $asset['id_gallery'] . '/' . $asset['path'] . '" data-lightbox="image-1" data-title="' . $asset['title'] .'" data-lightbox="gallery-' . $asset['id_gallery'] . '" class="d-block mb-4 h-100" data-lightbox="image-1" data-title="' . $asset['title'] .'">' . "\n";
                $html .= '<img class="img-fluid img-thumbnail" src="galleries-img/gallery-' . $asset['id_gallery'] . '/' . $asset['path'] . '" alt="">' . "\n";
                $html .= '</a>' . "\n";
                $html .= '</div>' . "\n";
                echo '<br>';
            break;

        }
    }
    $html .= "</div>\n";
    echo $html;
}

else {
    $query = 'SELECT * FROM galleries ORDER BY id';
    $statement = $connection->query($query);
    $galleries = $statement->fetchAll(PDO::FETCH_CLASS, 'Gallery');
    $html = '<div class="row text-center text-lg-left">' . "\n";
    foreach($galleries as $gallery) {
        $html .= '<div class="col-lg-3 col-md-4 col-xs-6">' . "\n";
        $html .= '<a href="?page=galleries&id=' . $gallery->getId() .'" class="d-block mb-4 h-100">' . "\n";
        $html .= '<img class="img-fluid img-thumbnail" src="' . $gallery->getThumbnail() . '" alt="">' . "\n";
        $html .= "<h4>{$gallery->getName()}</h4>\n";
        $html .= "</a>\n" ;
        $html .= "</div>\n";
    }
    $html .= '</div>' . "\n";
    echo $html;
}