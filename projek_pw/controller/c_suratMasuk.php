<?php
include_once "model/m_suratMasuk.php";

class c_suratMasuk {
    public $model;

    public function __construct(){
        $this->model = new m_suratMasuk(0,0,0,0);
    }
    public function invoke(){
        $daftarSM=$this->model->getSM();
        include "view/v_SM.php";
    }
    
    public function invokeView(){
        $daftarSM=$this->model->getSM();
        include "view/v_SMView.php";
    }

    public function formLogin(){
        include "view/v_login.php";
    }
    
    public function formTambahSM(){
        include "view/v_tambahSM.php";
    }
    
    public function tambahSM($noSM, $tanggalSM, $alamatPengirimSM, $perihalSM){
        $suratmasuk= new m_suratMasuk($noSM, $tanggalSM, $alamatPengirimSM, $perihalSM);
        $suratmasuk->setSM();
        header('location:index_SM.php');
    }

    public function formEditSM($noSM){
        $daftarSM=$this->model->getSM();
        $row=$this->model->getRowSM($daftarSM, $noSM);
        include "view/v_editSM.php";
    }

    public function editSM($noSM_new, $tanggalSM_new, $alamatPengirimSM_new, $perihalSM_new, $noSM){
        $this->model->updateSM($noSM_new, $tanggalSM_new, $alamatPengirimSM_new, $perihalSM_new, $noSM);
        header('location:index_SM.php');
    }

    public function deleteSM($noSM){
        $this->model->deleteSM($noSM);
        header('location:index_SM.php');
    }
}?>