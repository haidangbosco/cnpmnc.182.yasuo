<?php

    class Database{
        public $con;
        public function __construct(){
            $this->con = mysqli_connect("localhost","root","","yasuo_db");
            if (!$this->con) {
            echo "Error in Connecting ".mysqli_connect_error();
            }
            mysqli_set_charset($this->con,"utf8");
        }

    }

?>