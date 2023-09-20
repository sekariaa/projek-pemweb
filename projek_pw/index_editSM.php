<?php
 include_once "controller/c_suratMasuk.php";
 $controller=new c_suratMasuk();
 if(isset($_GET['noSM'])){
    $controller->formEditSM($_GET['noSM']);   
 }

 if(isset($_POST['noSM']) && isset($_POST['tanggalSM']) && isset($_POST['alamatPengirimSM']) && isset($_POST['perihalSM']) && isset($_POST['noSM']))

 {
    $controller->editSM($_POST['noSM'],$_POST['tanggalSM'],$_POST['alamatPengirimSM'],$_POST['perihalSM'],$_POST['noSM']);
}?>