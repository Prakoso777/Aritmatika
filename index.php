
<html>
<head>
	<!–memberi nama halaman web->
<title>Aritmatika</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="kalkulator">
<h2 class="judul"><font face="FarCry" size="6,66px"> KALKULATOR </font></h2>

<div style="color: #fff">
<!–memanggil perintah-perintah dari file aritmatika.php->
<?php
include('aritmatika.php');
?>
</div>

<br>
<form method="post" action="">           
<input type="text" name="bil1" class="bil" placeholder="Masukkan Bilangan Pertama">
<input type="text" name="bil2" class="bil" placeholder="Masukkan Bilangan Kedua">
<!–operasi yagn akan di gunakan di aritmatika->
<select class="opt" name="operasi">
<option value="tambah">+</option>
<option value="kurang">-</option>
<option value="kali">x</option>
<option value="bagi">/</option>
</select>
<input type="submit" name="hitung" value="Hitung" class="tombol">                                           
</form>
<input type="text" value="<?php echo $hasil; ?>" class="bil">
<!–memanggil perintah-perintah dari file suara.php->
<?php
include('suara.php');
?>
</div>
</body>
</html>
