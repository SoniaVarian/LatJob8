<html>
<body>
<?php
include_once("mysql_connect.php");
$update=mysql_query("update barang set nama = 'HP' where kode=100");

echo "<br><br>";
if($update)
{echo"Berhasil mengupdate data pada tabel barang";}
else
{echo"Gagal mengupdate data";}
?>
</body>
</html>