<?php
require "koneksiMVC.php";

class m_suratKeluar {  
    private $tanggalSK;
    private $noSK;
    private $alamatTujuanSK;
    private $perihalSK;
    public $hasil = array();
    public $koneksi;

    public function __construct($tanggalSK, $noSK, $alamatTujuanSK, $perihalSK){
        $this->koneksi= Koneksi::getKoneksi();
        $this->tanggalSK = $tanggalSK;
        $this->noSK = $noSK;
        $this->alamatTujuanSK = $alamatTujuanSK;
        $this->perihalSK = $perihalSK;
    }

    public function setSK(){
        $this->koneksi->query("INSERT INTO suratkeluar VALUES ('$this->tanggalSK', '$this->noSK', '$this->alamatTujuanSK', '$this->perihalSK')");
    }
  
    public function getSK() {
        $rs = $this->koneksi->query("SELECT * FROM suratkeluar");
        $rows=array();
        
        while($row = $rs->fetch_assoc()) {
            $rows[] = $row;
        }
        $this->hasil = $rows;
        return $this->hasil;
    }

    public function updateSK( $noSK_new, $tanggalSK_new, $alamatTujuanSK_new, $perihalSK_new, $noSK){
        $this->koneksi->query("UPDATE suratkeluar SET noSK='$noSK_new', tanggalSK='$tanggalSK_new', alamatTujuanSK='$alamatTujuanSK_new', perihalSK='$perihalSK_new' WHERE noSK='$noSK'");
    }
    
    public function getRowSK($daftarSK, $noSK){
        foreach($daftarSK as $suratkeluar){
            if($suratkeluar['noSK'] == $noSK){
                return $suratkeluar;
            }
        }
    }
    
    public function deleteSK($noSK){
        $this->koneksi->query("DELETE FROM suratkeluar WHERE noSK='$noSK'");
    }   
}?>