<?php

Class Kendaraan {

    var $bahanBakar;
    var $harga;
    var $tahunPembuatan;
    var $platNomor;


    function statusHarga()
    {
        if ($this->harga > 50000000) {
            $status = "Mahal";
        } else {
            $status = "Murah";
        }
        return $status;
    }
    function statusBBM()
    {
        if ($this->tahunPembuatan < 2005 && $this->bahanBakar == "Premium") {
            $status = "Mendapat Subsidi";
        } else {
            $status = "Tidak dapat subsidi";
        }
        return $status;
    }
    function HargaBekas() 
    {
        if ($this->tahunPembuatan > 2005)
        {$hargaBekas = $this->harga - ($this->harga * 20/100);} 
        elseif ($this->tahunPembuatan >= 2000 && $this->tahunPembuatan <=2005)
        {$hargaBekas = $this->harga - ($this->harga * 30/100);}
        elseif ($this->tahunPembuatan < 2000)
        {$hargaBekas = $this->harga - ($this->harga * 40/100);}       
        return $hargaBekas;
    }

    function bayarPajak() {
        if ($this->tahunPembuatan <= 2017)
        {$jumlahPajak = $this->harga * (2.5/100);}
        elseif ($this->tahunPembuatan > 2017)
        {$jumlahPajak = 0;}
        return $jumlahPajak;
    }

    function operasiPlatNomor(){
        if($this->platNomor %2 == 1)
        {$hariOperasi = "Senin, Rabu, Jumat, Minggu";}
        elseif($this->platNomor %2 == 0)
        {$hariOperasi = "Selasa, Kamis, Sabtu";}
        return $hariOperasi;
    }
}
$kendaraan1 = new Kendaraan;
$kendaraan2 = new Kendaraan;
$kendaraan3 = new Kendaraan;
$kendaraan1->harga = 50000000;
$kendaraan1->tahunPembuatan = 1999;
$kendaraan1->bahanBakar = "Premium";
$kendaraan1->platNomor = 2125;


echo "Status Harga : " . $kendaraan1->statusHarga();
echo "<br>";
echo "Status BBM : " . $kendaraan1->statusBBM();
echo "<br>";
echo "Harga Bekas : " . $kendaraan1->HargaBekas();
echo "<br>";
echo "Jumlah Pajak : " . $kendaraan1->bayarPajak();
echo "<br>";
echo "Hari Operasi : " . $kendaraan1->operasiPlatNomor();

?>
