<?php
include_once "controller/c_pengurusRS.php";
$controller = new c_pengurusRS();
$controller->invoke();
if(isset($_POST['NIP']) && isset($_POST['pass'])){
    $controller->login($_POST['NIP'],$_POST['pass']);
}?>