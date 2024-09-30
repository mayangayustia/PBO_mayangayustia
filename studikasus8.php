<?php
class Karyawan {
    private $nama;
    private $golongan;
    private $jamLembur;
    private $gajiPokok;
    private $gajiLembur;
    private $totalGaji;
 
    // Daftar gaji pokok berdasarkan golongan
    private $gajiGolongan = [
        "Ib" => 1250000, "Ic" => 1300000, "Id" => 1350000,
        "IIa" => 2000000, "IIb" => 2100000, "IIc" => 2200000, "IId" => 2300000,
        "IIIa" => 2400000, "IIIb" => 2500000, "IIIc" => 2600000, "IIId" => 2700000,
        "IVa" => 2800000, "IVb" => 2900000, "IVc" => 3000000, "IVd" => 3100000
    ];
 
    // Constructor
    public function __construct($nama, $golongan, $jamLembur) {
        $this->nama = $nama;
        $this->golongan = $golongan;
        $this->jamLembur = $jamLembur;
        $this->gajiPokok = $this->getGajiPokok();
        $this->gajiLembur = $this->hitungLembur();
        $this->totalGaji = $this->hitungTotalGaji();
    }
 
    // Destructor
    public function __destruct() {
        echo "Data untuk {$this->nama} telah dihapus.\n";
    }
 
    // Method untuk mendapatkan gaji pokok
    public function getGajiPokok() {
        return $this->gajiGolongan[$this->golongan];
    }
 
    // Method untuk menghitung gaji lembur
    public function hitungLembur() {
        return $this->jamLembur * 15000;
    }
 
    // Method untuk menghitung total gaji
    public function hitungTotalGaji() {
        return $this->gajiPokok + $this->gajiLembur;
    }
 
    // Method untuk menampilkan data
    public function tampilkanGaji() {
        echo "{$this->nama} | Golongan: {$this->golongan} | Total Jam Lembur: {$this->jamLembur} | Total Gaji: Rp " . number_format($this->totalGaji, 2, ',', '.') . "<br>";
    }
}
 
// Data Karyawan
$karyawan = [
    ["Winny", "IIb", 30],
    ["Stendy", "IIIc", 32],
    ["Alfred", "IVb", 30],
    ["Ferdinand", "IIIc", 40]
];
 
// Menampilkan Data Gaji
foreach ($karyawan as $data) {
    $karyawanObj = new Karyawan($data[0], $data[1], $data[2]);
    $karyawanObj->tampilkanGaji();
}
 
?>