<html>
<body>
<table border="3">
<tr bgcolor="#CCCCC">
	<td>No</td>
	<td>Nama</td>
	<td>Kategori</td>
	<td>Jual</td>
</tr>
<?php
include_once("mysql_connect.php");
$selectview=mysql_query("select kode, nama, kategori, jumlah, pokok, jual from barang order by kode, nama asc");

while ($data=mysql_fetch_array($selectview))
{	echo"<tr>
	<td>$data[0]</td>
	<td>$data[1]</td>
	<td>$data[2]</td>
	<td>$data[3]</td>
	</tr>";
}
?>
</table>
</body>
</html>
