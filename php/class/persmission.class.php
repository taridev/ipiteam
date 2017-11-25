<?php

class Permission {
    protected $id;
    protected $action_id;
    protected $item_id ;
    protected $allowdeny;
    protected $group_id ;

    public function __construct($id, $action_id, $item_id, $allowdeny, $group_id) {
        $this->id = $id;
        $this->action_id = $action_id;
        $this->item_id = $item_id;
        $this->allowdeny = $allowdeny;
        $this->group_id = $group_id;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getAction_id() {
        return $this->id;
    }

    public function setAction_id($action_id) {
        $this->action_id = $action_id;
    }
    
    public function getItem_id() {
        return $this->item_id;
    }

    public function setItem_id($item_id) {
        $this->item_id = $item_id;
    }
    
    public function getAllowDeny() {
        return $this->allowdeny;
    }

    public function setAllowDeny($allowdeny) {
        $this->allowdeny = $allowdeny;
    }
    
    public function getGroup_id() {
        return $this->group_id;
    }

    public function setGroup_id($group_id) {
        $this->group_id = $group_id;
    }

}

?>