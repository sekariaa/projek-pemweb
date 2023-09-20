<?php
include_once "model/m_suratKeluar.php";

class c_suratKeluar {
    public $model;

    public function __construct(){
        $this->model = new m_suratKeluar(0,0,0,0);
    }
    public function invoke(){
        $daftarSK=$this->model->getSK();
        include "view/v_SK.php";
    }
    
    public function invokeView(){
        $daftarSK=$this->model->getSK();
        include "view/v_SKView.php";
    }

    public function formLogin(){
        include "view/v_login.php";
    }
    
    public function formTambahSK(){
        include "view/v_tambahSK.php";
    }
    
    public function tambahSK($noSK, $tanggalSK, $alamatTujuanSK, $perihalSK){
        $suratkeluar= new m_suratKeluar($noSK, $tanggalSK, $alamatTujuanSK, $perihalSK);
        $suratkeluar->setSK();
        header('location:index_SK.php');
    }

    public function formEditSK($noSK){
        $daftarSK=$this->model->getSK();
        $row=$this->model->getRowSK($daftarSK, $noSK);
        include "view/v_editSK.php";
    }

    public function editSK($noSK_new, $tanggalSK_new, $alamatTujuanSK_new, $perihalSK_new, $noSK){
        $this->model->updateSK($noSK_new, $tanggalSK_new, $alamatTujuanSK_new, $perihalSK_new, $noSK);
        header('location:index_SK.php');
    }

    public function deleteSK($noSK){
        $this->model->deleteSK($noSK);
        header('location:index_SK.php');
    }
}?>