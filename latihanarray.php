<?php
Class Mahasiswa
{
    var $nama;
    var $kelas;
    var $matakuliah;
    var $nilai;

    function setNama($x)
    {
        $this->nama = $x;
    }

    function getNama()
    {
       return $this->nama;
    }

    function setKelas($y)
    {
        $this->kelas = $y;
    }

    function getKelas()
    {
       return $this->kelas;
    }

    function setMatakuliah($z)
    {
        $this->matakuliah = $z;
    }

    function getMatakuliah()
    {
       return $this->matakuliah;
    }

    function setNilai($a)
    {
        $this->nilai = $a;
    }

    function getNilai()
    {
       return $this->nilai;
    }
    function statusKuis()
    {
        if ($this->nilai>60)$status = 'Lulus Kuis';
        else $status = 'Tidak Lulus Kuis';
        return $status;
    }
}
$Data1 = array('Aditya','SI 2','Pemrograman Berorientasi Objek', 80);
$Data2 = array('Shinta','SI 2','Pemrograman Berorientasi Objek', 75);
$Data3 = array('Ineu', 'SI 2','Pemrograman Berorientasi Objek',55);

    for($i = 1; $i <= 3; $i++) {
    for($h = 0; $h <= 3; $h++) {
                ${"Mahasiswa$i"} = new Mahasiswa();
                ${"Mahasiswa$i"}->setNama(${"Data$i"} [0]);
                ${"Mahasiswa$i"}->setKelas(${"Data$i"} [1]);
                ${"Mahasiswa$i"}->setMatakuliah(${"Data$i"} [2]);
                ${"Mahasiswa$i"}->setNilai(${"Data$i"} [3]);
    }
}

    for($i = 1; $i <= 3 ; $i++) {
        echo "Mahasiswa$i<br>"
            .${"Mahasiswa$i"}->getNama()."<br>", "Nama ="
            .${"Mahasiswa$i"}->getKelas()."<br>", "Kelas ="
            .${"Mahasiswa$i"}->getMatakuliah()."<br>", "Mata Kuliah ="
            .${"Mahasiswa$i"}->getNilai()."<br>", "Nilai ="
            .${"Mahasiswa$i"}->statusKuis()."<br><br>";
}


?>