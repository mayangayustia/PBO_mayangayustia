<?php
$buah = array('semangka','jeruk','apel','anggur');
echo $buah[2];

$buah['semangka'] = "isinya merah";
$buah['jeruk'] = "rasanya manis";
$buah['apel'] = "warnanya merah";
$buah['anngur'] = "harganya mahal";

echo $buah ['jeruk'];

$buah = array ('semangka' => "isinya merah", 'jeruk' => "rasanya manis", 'apel'=> "warnanya merah", 'anggur' => "harganya mahal");

echo $buah['jeruk'];
?>