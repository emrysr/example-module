<?php

// no direct access
defined('EMONCMS_EXEC') or die('Restricted access');

class Example {

    private $mysqli;
    // private $redis;

    public function __construct($mysqli) {
        $this->mysqli = $mysqli;
        // $this->redis = $redis;
    }

    public function get($userid) {
    
        $userid = (int) $userid;
        
        // $result = $this->mysqli->query("SELECT * FROM example WHERE `userid`='$userid'");
    }
    
    public function set($userid) {
    
        $userid = (int) $userid;
        
        // $result = $this->mysqli->query("SELECT * FROM example WHERE `userid`='$userid'");
    }

}
