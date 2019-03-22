<?php

class Database {

    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $db = 'onnefe2';

    function __construct() {
        $con = $this->connect();
        $this->selectDB($con);
    }

    function connect() {
        return(mysql_connect($this->host, $this->user, $this->pass));
    }

    function selectDB($con) {
        mysql_select_db($this->db, $con) or die(mysql_error());
    }

}
