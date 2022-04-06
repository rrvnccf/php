<?php 
// array
// variabel yang  dapat memiliki banyak nilai
// elemen pada aray boleh memiliki tipe data yang beda
// pasangan antara key dan value
// key nya adalah index, yang dimaulai dari 0


// membuat array
// cara lama
// nilai yang ada didalam array disebut elemen
$hari = array("Senin", "Selasa", "Rabu");
// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arrl = [123, "tulisan", false];

// cara menampilkan array
// var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// menampilkan 1 elemen pada array
// echo $arrl[0];
// echo "<br>";
// echo $bulan[1];

// menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jumat";
echo "<br>";
var_dump($hari);


?>