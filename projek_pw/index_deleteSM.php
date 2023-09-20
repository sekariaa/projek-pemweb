<?php
include_once "controller/c_suratMasuk.php";
$controller=new c_suratMasuk();

if(isset($_GET['noSM'])){
    $controller->deleteSM($_GET['noSM']);   
}
?>