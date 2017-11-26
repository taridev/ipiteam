<?php
class Event implements \JsonSerializable{
    protected $id;
    protected $name;
    protected $user_editor;
    protected $type_id;
    protected $date;
    protected $zip_code;
    protected $city;
    protected $street;
    protected $lat;
    protected $lng;
    protected $description;
    protected $summary;
    protected $img_path;


    public function __constructor($id, $name, $user_editor, $type_id, $date, $zip_code, $city, $street, $lat, $lng, $description, $summary, $img_path) {
        $this->id = $id;
        $this->name = $name;
        $this->user_editor = $user_editor;
        $this->type_id = $type_id;
        $this->date = $date;
        $this->zip_code = $zip_code;
        $this->city = $city;
        $this->street = $street;
        $this->lat = $lat;
        $this->lng = $lng;
        $this->description = $description;
        $this->summary = $summary;
        $this->img_path = $img_path;
    }

    public function store_db($connection) {
        $query = "INSERT INTO events (name, user_editor, type_id, date, zip_code, city, street, lat, lng, description, summary, img_path)
        VALUES( '{$this->name}', {$this->user_editor},
                {$this->type_id}, '{$this->date}', '{$this->zip_code}',
                '{$this->city}', '{$this->street}', {$this->lat}, {$this->lng}, 
                '{$this->description}', '{$this->summary}', '{$this->img_path}')";
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
        return $this->id;
    }
    
    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
    
    public function setUserEditor($user) {
        $this->user_editor = $user;
    }

    public function getUserEditor() {
        return $this->user_editor;
    }

    public function getTypeId() {
        return $this->type_id;
    }

    public function setTypeId($type_id) {
        $this->type_id = $type_id;
    }

    public function getDate() {
        return $this->date;
    }

    public function setDate($date) {
        $this->date = $date;
    }

    public function setZipCode($zip) {
        $this->zip_code = $zip;
    }

    public function getCity() {
        return $this->city;
    }

    public function setCity($city) {
        $this->city = $city;
    }

    public function getStreet() {
        return $this->street;
    }
    
    public function setStreet($street) {
        $this->street = $street;
    }

    public function getLat() {
        return $this->lat;
    }

    public function setLat($lat) {
        $this->lat = $lat;
    }

    public function getLng() {
        return $this->lng;
    }

    public function setLng($lng) {
        $this->lng = $lng;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function getSummary() {
        return $this->summary;
    }

    public function setSummary($summary) {
        $this->summary = $summary;
    }

    public function getImgPath() {
        return $this->img_path;
    }

    public function setImgPath($img_path) {
        $this->img_path = $img_path;
    }
}

?>