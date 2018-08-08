<?php
//digunakan untuk menangani error
error_reporting(0);

if(isset($_POST['hitung'])){
$bil1 = $_POST['bil1'];
$bil2 = $_POST['bil2'];
$operasi = $_POST['operasi'];
//operasi aritmatika dari text yang akan dirubah menjadi suara
if($operasi == 'tambah'){
    $operator='Penjumlahan';
  }elseif ($operasi == 'kurang') {
    $operator='Pengurangan';
  }elseif ($operasi == 'kali') {
    $operator='Perkalian';
  }elseif ($operasi == 'bagi') {
    $operator='Pembagian';
  }

//doperasi aritmatika yang di tambah text
switch ($operasi) {
case 'tambah':
$hasil = $bil1+$bil2;
echo "Hasil Penjumlahan $bil1 dengan $bil2 = ".$hasil;
break;
case 'kurang':
$hasil = $bil1-$bil2;
echo "Hasil Pengurangan $bil1 dengan $bil2 = ".$hasil;
break;
case 'kali':
$hasil = $bil1*$bil2;
echo "Hasil Perkalian $bil1 dengan $bil2 = ".$hasil;
break;
case 'bagi':
$hasil = $bil1/$bil2;
echo "Hasil Pembagian $bil1 dengan $bil2 = ".$hasil;
break;           
}

}
?>
