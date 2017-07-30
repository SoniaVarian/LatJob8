<html>
<body>
<?php
include_once("mysql_connect.php");
$insert=mysql_query("INSERT INTO barang (kode, nama, kategori, jumlah, pokok, jual)
	VALUES ('100','handphone','samsung','2','1','5000000'),
			('101','laptop','acer','1','1','4000000'),
			('102','televisi','samsung','2','2','4000000'),
			('103','ac','samsung','2','1','5000000'),
			('104','laptop','lenovo','2','2','8000000'),
			('105','handphone','oppo','2','2','10000000'),
			('106','televisi','sharp','1','1','3000000'),
			('107','ac','polytron','1','1','2000000'),
			('108','handphone','lenovo','2','2','5000000'),
			('109','televisi','polytron','1','1','2000000')");
			
echo "<br><br>";
if($insert)
{echo "Berhasil menyisipkan data pada table barang";}
else
?>
</body>
</html>
