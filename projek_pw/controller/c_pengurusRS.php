<?php
require_once "model/m_pengurusRS.php";

class c_pengurusRS{
    public $model;
  
    public function __construct(){
        $this->model = new pengurusRS();
    }

    public function invoke(){
        include "view/v_login.php";
    }

    public function logout(){
        header('location : view/v_login.html');
    }

    public function login($NIP, $password){
    $status= $this->model->cekNIP($NIP);

    if($status == 1){
        $status = $this->model->cekPassword($NIP, $password);
        if($status == 1){
            $jabatan = $this->model->cekJabatan($NIP);
            if($jabatan == 'Pegawai'){
            header('location: dashboard_view.php');
            }
            else if($jabatan=='Sekretaris'){
            header('location: dashboard.php');
            }
        }
        else{
            echo '<script>alert("Maaf, password anda salah")</script>';
        }
    }
    else{
        echo '<script>alert("Maaf, NIP anda tidak terdaftar")</script>';
    } 
    }
}?>