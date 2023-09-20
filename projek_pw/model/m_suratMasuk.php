<?php
require "koneksiMVC.php";

class m_suratMasuk {  
    private $tanggalSM;
    private $noSM;
    private $alamatPengirimSM;
    private $perihalSM;
    public $hasil = array();
    public $koneksi;

    public function __construct($tanggalSM, $noSM, $alamatPengirimSM, $perihalSM){
        $this->koneksi= Koneksi::getKoneksi();
        $this->tanggalSM = $tanggalSM;
        $this->noSM = $noSM;
        $this->alamatPengirimSM = $alamatPengirimSM;
        $this->perihalSM = $perihalSM;
    }

    public function setSM(){
        $this->koneksi->query("INSERT INTO suratmasuk VALUES ('$this->tanggalSM', '$this->noSM', '$this->alamatPengirimSM', '$this->perihalSM')");
    }
  
    public function getSM() {
        $rs = $this->koneksi->query("SELECT * FROM suratmasuk");
        $rows=array();
        
        while($row = $rs->fetch_assoc()) {
            $rows[] = $row;
        }
        $this->hasil = $rows;
        return $this->hasil;
    }

    public function updateSM( $noSM_new, $tanggalSM_new, $alamatPengirimSM_new, $perihalSM_new, $noSM){
        $this->koneksi->query("UPDATE suratmasuk SET noSM='$noSM_new', tanggalSM='$tanggalSM_new', alamatPengirimSM='$alamatPengirimSM_new', perihalSM='$perihalSM_new' WHERE noSM='$noSM'");
    }
    
    public function getRowSM($daftarSM, $noSM){
        foreach($daftarSM as $suratmasuk){
            if($suratmasuk['noSM'] == $noSM){
                return $suratmasuk;
            }
        }
    }
    
    public function deleteSM($noSM){
        $this->koneksi->query("DELETE FROM suratmasuk WHERE noSM='$noSM'");
    }   
}?>