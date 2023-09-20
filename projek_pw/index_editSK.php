<?php
 include_once "controller/c_suratKeluar.php";
 $controller=new c_suratKeluar();
 if(isset($_GET['noSK'])){
    $controller->formEditSK($_GET['noSK']);   
 }

 if(isset($_POST['noSK']) && isset($_POST['tanggalSK']) && isset($_POST['alamatTujuanSK']) && isset($_POST['perihalSK']) && isset($_POST['noSK'])){
    $controller->editSK($_POST['noSK'],$_POST['tanggalSK'],$_POST['alamatTujuanSK'],$_POST['perihalSK'],$_POST['noSK']);
}?>