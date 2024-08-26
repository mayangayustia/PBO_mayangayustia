<?php
Class Kendaraan
{
    var $jumlahRoda = 4;
    var $warna;
    var $bahabBakar = "Premium";
    var $harga = 100000000;
    var $merek;

    var $tahunPembuatan = 2004;
    var $status;

    function statusHarga()
    {
        if ($this->harga > 50000000) 
        {$status = "Mahal";}
        else {$status = "Murah" ; }
        return $status;
    }
}

$objekKendaraan1 = new Kendaraan;
$objekKendaraan1->harga = 1000000;
$objekKendaraan1->tahunPembuatan = 1999;
echo "Stastus Harga : ".$objekKendaraan->statusHarga();

$objekKendaraan2 = new Kendaraan;
$objekKendaraan2->bahanBakar = "Pertamax";
$objekKendaraan2->tahunPembuatan = 1999;
echo"<br>";
echo "Status BBM: ".$objekKendaraan2->dapatSubsidi();
echo "<br>";
echo "Harga Bekas: ".$objekKendaraan2->hargaSecondKendaraan();
?>