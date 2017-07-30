<html>
<head>
<title>Contoh Koneksi Database Inventory</title>
</head>
<body>
<b>
<?php
//simpan sebagai file koneksi dengan nama "db_connect.php"
$host='localhost';//nama host server kita,
$username='root';//username database kita,
$password='';//password akses database,
$koneksi=mysql_connect($host,$username,$password);
if($koneksi)
	{ echo"Koneksi server berhasil <br><br>";}
else
	{ echo"Gagal koneksi ke server <br><br>";}
	
	$database='inventory';//database mysql yang kita gunakan
	$mydb=mysql_select_db($database,$koneksi);
if($mydb)
		{ echo "Berhasil memilih database";}
else
		{ echo "Tidak dapat memilih database";}
?>
</b>
</body>
</html>