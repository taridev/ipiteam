<?php

class User {
    protected $user_id;
    protected $user_name;
    protected $user_pass;
    protected $user_email;
    protected $user_date;
    protected $user_lvl;
    protected $user_status;

    public function __contruct($user_id, $user_name, $user_pass, $user_email, $user_date, $user_lvl, $user_status) {
        $this->user_id = $user_id;
        $this->user_name = $user_name;
        $this->user_pass = $user_pass;
        $this->user_email = $user_email;
        $this->user_date = $user_date;
        $this->group_user_id = $user_lvl;
        $this->user_status = $user_status;
    }

    public function getuser_id() {
        return $this->user_id;
    }

    public function setuser_id($user_id) {
        $this->user_id = $user_id;
    }

    public function getuser_name() {
        return $this->user_name;
    }

    public function setuser_name($user_name) {
        $this->user_name = $user_name;
    }

    public function setuser_pass($user_pass) {
        $this->user_pass = $user_pass;
    }

    public function getuser_pass() {
        return $this->user_pass;
    }

    public function getuser_lvl() {
        return $this->user_lvl;
    }

    public function setuser_lvl($user_lvl) {
        $this->user_lvl = $user_lvl;
    }

    public function getuser_status() {
        return $this->user_status;
    }

    public function setuser_status($user_status) {
        $this->user_status = $user_status;
    }

    public function store_db($connection) {
        return $connection->exec("INSERT INTO users VALUES ({$this->user_id}, '{$this->user_name}',
                                                            '{$this->user_pass}', '{$this->user_email}', 
                                                            '{$this->user_date}', '{$this->user_lvl}',
                                                            '{$this->user_status}')");
    }

    public static function search_database($connection, $name) {
        $results = [];
        $statement = $connection->query('SELECT * FROM users WHERE name = ' . $name);
        while($results = $statement->fetch(PDO::FETCH_CLASS, 'User'))
        return $results;
    }

}