<?php
require_once "koneksiMVC.php";

class pengurusRS {
  public $nama;
  public $nip;
  public $jabatan;
  private $password;
  public $koneksi;

  public function __construct(){
    $this->koneksi= Koneksi::getKoneksi();
  }

  public function cekNIP($NIP){
    $status = 0;
    $cek = $this->koneksi->query("SELECT NIP FROM user WHERE NIP='$NIP'");
    $hasil = $cek->fetch_row();
      if($hasil!= NULL){
        $status = 1; 
      }
      else{
        $status = 0;
      }
    return $status;
  }

  public function cekPassword($NIP, $password){
  $status = 0;
  $cek = $this->koneksi->query("SELECT NIP, password FROM user WHERE NIP='$NIP'");
  $hasil = $cek->fetch_row();
    
  switch ($hasil){
    case NULL : $status=0;
    break;
    case $hasil[1] == $password : $status=1;
    break;
  }
  return $status;
  }

  public function cekJabatan($NIP){
    $cek = $this->koneksi->query("SELECT jabatan FROM user WHERE NIP='$NIP'");
    $hasil = $cek->fetch_row()[0];
    return($hasil);
  }
}?>