<?php
Class kendaraan {
    var $Merek;
    var $jmlroda;
    var $Harga;
    var $warna;
    var $bhnbakar;
    var $tahun;
 
   
 
    function setMerek ($x) {
        $this->Merek =$x;
    }
   
        function getMerek() {
            return $this->Merek;
    }
 
    function setjmlroda ($y) {
        $this->jmlroda =$y;
    }
       
        function getjmlroda() {
            return $this->jmlroda;
    }
 
    function setHarga ($z) {
        $this->Harga =$z;
    }
       
        function getHarga() {
            return $this->Harga;
    }
 
    function setwarna ($v) {
        $this->warna =$v;
    }
       
        function getwarna() {
            return $this->warna;
    }
 
    function setbhnbakar ($r) {
        $this->bhnbakar =$r;
    }
       
        function getbhnbakar() {
            return $this->bhnbakar;
    }
 
    function settahun ($u) {
        $this->tahun =$u;
    }
       
        function gettahun() {
            return $this->tahun;
    }
 
    function statusHarga()
    {
        if ($this->Harga > 50000000) $status ='Mahal';
        else $status = 'Murah';
        return $status;
    }
 
 
}
$Data1 = array('Toyota Yaris','4','160000000','Merah','Pertamax','2014');
$Data2 = array('Honda Scoopy','2','13000000','Putih','Premium','2005');
$Data3 = array('Isuzu Panther','4','40000000','Hitam','Solar','1994');
 
    for($i = 1; $i <= 3; $i++) {
    for($h = 0; $h <= 5; $h++) {
                ${"kendaraan$i"} = new kendaraan() ;
                ${"kendaraan$i"}->setMerek(${"Data$i"}[0]);
                ${"kendaraan$i"}->setjmlroda(${"Data$i"}[1]);
                ${"kendaraan$i"}->setHarga(${"Data$i"}[2]);
                ${"kendaraan$i"}->setwarna(${"Data$i"}[3]);
                ${"kendaraan$i"}->setbhnbakar(${"Data$i"}[4]);
                ${"kendaraan$i"}->settahun(${"Data$i"}[5]);
 
 
        }
    }
 
    for($i = 1; $i <= 3; $i++) {
        echo "\$kendaraan$i <br>"
        .${"kendaraan$i"}->getMerek()."<br>"
        .${"kendaraan$i"}->getjmlroda()."<br>"
        .${"kendaraan$i"}->getHarga()."<br>"
        .${"kendaraan$i"}->getwarna()."<br>"
        .${"kendaraan$i"}->getbhnbakar()."<br>"
        .${"kendaraan$i"}->gettahun()."<br>"
        .${"kendaraan$i"}->statusHarga()."<br><br>";
    }
       
           
   
?>