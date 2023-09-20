<?php
include_once "controller/c_suratKeluar.php";
$controller=new c_suratKeluar();

if(isset($_GET['noSK'])){
    $controller->deleteSK($_GET['noSK']);   
}
?>