<html>
<body>
<?php
include_once("mysql_connect.php");
$tabel=mysql_query("CREATE TABLE IF NOT EXISTS barang (
kode VARCHAR (10) NOT NULL,
nama VARCHAR (15) NOT NULL,
kategori VARCHAR (10) NOT NULL,
jumlah VARCHAR (15) NOT NULL,
pokok VARCHAR (10) NOT NULL,
jual VARCHAR (10) NOT NULL,
PRIMARY KEY (kode))");

echo "<br><br>";
if($tabel)
{echo "Berhasil membuat tabel barang melalui script php";}
else
{echo "Gagal membuat tabel";}
?>
</body>
</html>
