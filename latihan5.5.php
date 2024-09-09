<?php
Class Belanja{
}

function hitungDiskon($kartuMember, $totalBelanja) {
    switch ($kartuMember) {
        case "Memiliki":
            if ($totalBelanja >= 500000) {
                $diskon = 50000;
            } elseif ($totalBelanja >= 100000) {
                $diskon = 15000;
            } else {
                $diskon = 0;
            }
            break;
        case "Tidak Memiliki":
            if ($totalBelanja >= 100000)
                $diskon = 5000;
            else
                $diskon = 0;
            break;
        default:
            echo "Input kartu member tidak valid";
            exit();
    }
    return $diskon;
}

$pembeli = [
    ["Pembeli 1", "Memiliki", 200000],
    ["Pembeli 2", "Memiliki", 570000],
    ["Pembeli 3", "Tidak Memiliki", 120000],
    ["Pembeli 4", "Tidak Memiliki", 90000]
];

foreach ($pembeli as $i => $data) {
    $no = $i + 1;
    $pembeliNama = $data[0];
    $kartuMember = $data[1];
    $totalBelanja = $data[2];
    $diskon = hitungDiskon($kartuMember, $totalBelanja);
    $biayaDikeluarkan = $totalBelanja - $diskon;

echo "Apakah ada kartu member : " . $kartuMember . "<br>" ;
echo "<br>";
echo "Total Belanjaan : " . number_format($totalBelanja, 0, ',', '.'). "<br>";
echo "<br>";
echo "Total Bayar : ". number_format($biayaDikeluarkan, 0, ',', '.'). "<br>";
echo "<br>";
}

?>


