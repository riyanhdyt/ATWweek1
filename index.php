<?php
echo "Hewan";
class Anjing{
	public $nama, $jumlah_kaki, $bisa_terbang, $suara;
}

$Anjing = new Anjing;
$Anjing->nama = "Goy";
$Anjing->jumlah_kaki = "4";
$Anjing->bisa_terbang = "tidak";
$Anjing->suara = "Guk Guk Guk";

echo "Anjing <br>";
echo " Nama: $Anjing->nama";
echo "<br>";
echo " Jumlah kaki: $Anjing->jumlah_kaki";
echo "<br>";
echo " Bisa terbang: $Anjing->bisa_terbang";
echo "<br>";
echo " Suara: $Anjing->suara";
echo "<hr>";