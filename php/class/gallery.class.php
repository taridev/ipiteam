<?php
class Gallery implements \JsonSerializable {
    protected $id;
    protected $name;
    protected $gallery_creator;
    protected $date;
    protected $summary;
    protected $thumbnail;

    // public function __construct($id, $name, $gallery_creator, $date, $summary) {
    //     $this->id = $id;
    //     $this->name = $name;
    //     $this->gallery_creator = $gallery_creator;
    //     $this->date = $date;
    //     $this->summary = $summary;
    // }

    public function store_db($connection) {
        $query = "INSERT INTO users
                  VALUES ( {$this->id}, '{$this->name}', {$this->gallery_creator},
                          '{$this->date}', '{$this->summary}', '{$this->thumbnail}'";
        return $connection->exec($query);

    }

    public function jsonSerialize()
    {
        $vars = get_object_vars($this);

        return $vars;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getGallery_creator() {
        return $this->gallery_creator;
    }

    public function setGallery_creator($gallery_creator) {
        $this->gallery_creator = $gallery_creator;
    }

    public function getDate() {
        return $this->date;
    }

    public function setDate($date) {
        $this->date = $date;
    }

    public function getSummary() {
        return $this->summary;
    }

    public function setSummary($summary) {
        $this->summary = $summary;
    }

    public function getThumbnail() {
        return $this->thumbnail;
    }

    public function setThumbnail($thumbnail) {
        $this->thumbnail = $thumbnail;
    }

}