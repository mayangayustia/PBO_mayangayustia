<?php
Class Kredit {
    var $jumlahPinjaman;
    var $bunga;
    var $lamaAngsuran;
    var $angsuran = [];

    function setPinjaman($jumlahPinjaman) {
        $this->jumlahPinjaman = $jumlahPinjaman;
    }

    function getPinjaman() {
        return $this->jumlahPinjaman;
    }

    function setBunga($bunga) {
        $this->bunga = $bunga;
    }
    
    function getBunga() {
        return $this->bunga;
    }

    function setlamaAngsuran($lamaAngsuran) {
        $this->lamaAngsuran = $lamaAngsuran;
    }

    function getlamaAngsuran() {
        return $this->lamaAngsuran;
    }

    function hitungAngsuran() {
        $angsuranPokok = $this->jumlahPinjaman / $this->lamaAngsuran;

        for ($i = 1; $i <= $this->lamaAngsuran; $i++) {
            $bungaPerBulan = ($this->jumlahPinjaman * ($this->bunga/100)) / $this->lamaAngsuran;
            $totalAngsuran = $angsuranPokok + ($bungaPerBulan * ($this->lamaAngsuran - $i + 1));
            $this->angsuran [] = $totalAngsuran;
        }
    }

    public function getAngsuran() {
        return $this->angsuran;
    }
}

$kredit = new Kredit();
$kredit->setPinjaman(1000000);
$kredit->setBunga(10);
$kredit->setlamaAngsuran(5);
$kredit->hitungAngsuran();
$angsuranArray = $kredit->getAngsuran();

echo "TOKO PEGADAIAN SYARIAH <br><br>";
echo "Jl Keadilan No 16 <br><br>";
echo "Telp 732746238 <br><br>";
echo "Program Penghitung Besaran Angsuran Hutang <br><br>";
echo "Besaran Pinjaman : Rp. " . number_format($kredit->getPinjaman(), 0, ',', '.') . "<br>";
echo "Masukan Besaran Bunga (%) : " . $kredit->getBunga() . "<br>";
echo "Lama Angsuran(bulan) : " . $kredit->getlamaAngsuran() . "<br>";

for ($i = 0; $i <count($angsuranArray); $i++) {
    echo "Angsuran ke- " . ($i+1) . " : Rp. " . number_format($angsuranArray[$i], 0, '.', '.'). "<br>";
}
?>

