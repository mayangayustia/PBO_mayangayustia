<?php
class Kendaraan
{
    var $jumlahRoda;
    var $warna;
    var $bahanBakar;
    var $harga;
    var $merek;
    var $tahunPembuatan;

    
    function setjumlahRoda($x)
    {
        $this->jumlahroda=$x;
    }

    function getjumlahroda() {
        return $this->jumlahroda;
    }
    function setMerek($x)
    {
        $this->merek=$x;
    }

    function getMerek() {
        return $this->merek;
    }
    function setwarna($y)
    {
        $this->warna=$y;
    }

    function getwarna() {
        return $this->warna;
    }

    function setbahanBakar($z)
    {
        $this->bahanBakar=$z;
    }

    function getBahanBakar() {
        return $this->bahanBakar;
    }
    function setHarga($y)
    {
        $this->harga=$y;
    }
    function getHarga() {
        return $this->harga;
    }

 

$kendaraan1 = new Kendaraan;
$kendaraan1->setMerek('Yamaha Mio');
$kendaraan1->setHarga(10000000);
echo $kendaraan1->getMerek();
echo "<br>";
echo $kendaraan1->getHarga();


?>