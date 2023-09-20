<?php
class Koneksi{
    public static function getKoneksi(){
        $host= 'localhost';
        $username= 'root';
        $pass= 'rahasia';
        $db= 'projek_pw';
        $mysqli = new mysqli($host, $username, $pass, $db);

    if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }else return $mysqli;
    }
}?>