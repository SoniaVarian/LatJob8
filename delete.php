<html>
<body>
<?php
include_once("mysql_connect.php");
$kode=2;
$delete=mysql_query("delete from barang where kode='$kode'");

echo "<br><br>";
if($delete)
{echo"Berhasil menghapus data barang dengan kode $kode";}
else
{echo"Gagal menghapus data";}
?>
</body>
</html>