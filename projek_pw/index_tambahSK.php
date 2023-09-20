<?php
include_once "controller/c_suratKeluar.php";
$controller=new c_suratKeluar();
$controller->formTambahSK();
  if(isset($_POST['noSK']) && isset($_POST['tanggalSK']) && isset($_POST['alamatTujuanSK']) && isset($_POST['perihalSK'])){
    $controller->tambahSK($_POST['noSK'],$_POST['tanggalSK'],$_POST['alamatTujuanSK'],$_POST['perihalSK']);
  }?>