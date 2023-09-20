<?php
include_once "controller/c_suratMasuk.php";
$controller=new c_suratMasuk();
$controller->formTambahSM();
  if(isset($_POST['noSM']) && isset($_POST['tanggalSM']) && isset($_POST['alamatPengirimSM']) && isset($_POST['perihalSM'])){
    $controller->tambahSM($_POST['noSM'],$_POST['tanggalSM'],$_POST['alamatPengirimSM'],$_POST['perihalSM']);
  }?>