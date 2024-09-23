<?php
Class Employee{
    public $nama;
    public $gaji;
    public $lamakerja; // dalam tahun

    public function __construct($nama, $gaji, $lamakerja){
        $this->nama = $nama;
        $this->gaji = $gaji;
        $this->lamakerja = $lamakerja;
    }

    public function setGaji($gaji) {
        $this->gaji = $gaji;
    }
    public function getGaji(){
        return $this->gaji;
    }

    public function getLamaKerja() {
        return $this->lamakerja;
    }

    public function getInfo() {
        return "Nama: $this->nama, Gaji Awal: $this->gaji, Lama Kerja: $this->lamakerja tahun";
    }
}

// Class Programmer inheret Class Employee
Class Programmer extends Employee {
    public function hitungBonus() {
        $lamakerja = $this->getLamaKerja();

        if ($lamakerja >= 1 && $lamakerja <=10) {
            // Tambahan bonus 0.01 dari lama kerja
            $bonus = 0.01 * $lamakerja * $this->getGaji();
        } elseif ($lamakerja > 10) {
            // Tambahan bonus 0.02 dari lama kerja
            $bonus = 0.02 * $lamakerja * $this->getGaji();
        } else {
            // Jika lama kerja di bawah 1 tahun, tidak ada bonus
            $bonus = 0;
        }

        // Set gaji baru dengan tambahan bonus
        $gajibaru = $this->getGaji() + $bonus;
        $this->setGaji($gajibaru);
    }

    public function getInfo() {
        return parent::getInfo() . ", Gaji Total: " . $this->hitungBonus();
    }
}

// Class Direktur inherit Class Employee
Class Direktur extends Employee {

    public function hitungBonusDanTunjangan() {
        $lamakerja = $this->getLamaKerja();

        // Bonus sebesar 0.5 dari lama kerja
        $bonus = 0.5 * $lamakerja * $this->getGaji();

        // Tunjangan sebesar 0.1 dari lama kerja
        $tunjangan = 0.1 * $lamakerja * $this->getGaji();

        // Gaji baru dengan tambahan bonus dan tunjangan
        $gajibaru = $this->getGaji() + $bonus + $tunjangan;
        $this->setGaji($gajibaru);
    }
    public function getInfo() {
        return parent::getInfo() . ", Gaji Total: " . $this->hitungBonusDanTunjangan();
    }
}

Class PegawaiMingguan extends Employee {
    private $hargaBarang;
    private $stokBarang;
    private $penjualan; // total penjualan pegawai

    public function __construct($nama, $gaji, $lamakerja, $hargaBarang, $stokBarang, $penjualan) {
        parent::__construct($nama, $gaji, $lamakerja);
        $this->hargaBarang = $hargaBarang;
        $this->stokBarang = $stokBarang;
        $this->penjualan = $penjualan;
    }

    public function hitungGajiPegawai() {
        // Cek apakah penjualan lebih dari 70% dari stock yang harus terjual
        if ($this->penjualan > 0.7 * $this->stokBarang) {
            //Bonus 10% dari harga barang per penjualan
            $bonus = 0.1 * $this->hargaBarang * $this->penjualan;
        } else {
            // Bonus 3% dari harga barang per penjualan
            $bonus = 0.03 * $this->hargaBarang * $this->penjualan;
        }
        // Set gaji baru dengan tambahan bonus
        $gajibaru = $this->getGaji() + $bonus;
        $this->setGaji($gajibaru);
        }

    public function getInfo() { 
        return parent::getInfo() . ", Barang Terjual: $this->penjualan, Gaji Total: " . $this->hitungGajiPegawai();
    }
}




$Programmer = new Programmer("Budi", 5000000,5); // Nama, gaji, lama kerja
echo $Programmer->getInfo() . "\n";
echo "Gaji setelah bonus: " . $Programmer->getGaji() . "\n";
echo "<br/>";
$Direktur = new Direktur("Andi", 10000000, 12); // Nama, gaji, lama kerja
echo $Direktur->getInfo() . "\n";
echo "Gaji setelah bonus dan tunjangan: " . $Direktur->getGaji() . "\n";
echo "<br/>";
$Pegawai = new PegawaiMingguan("Rani", 3000000, 3, 10000, 100, 80); // Nama, gaji, lama kerja, harga barang, stock, penjualan
echo $Pegawai->getInfo() . "\n";
echo "Gaji setelah bonus: " . $Pegawai->getGaji() . "\n";
?>