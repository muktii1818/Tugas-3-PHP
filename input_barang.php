<?php
//connection database 
include "connection.php";

//menangkap data yang dikirim dari form
$merek = $_POST ['merek'];
$harga = $_POST ['harga'];

//menginput data ke database
mysqli_query  ($connection, "insert into barang values ('','$merek','$harga')");

?>


<form method="POST" action=""><!---Form untuk kirim data ke DB-->
<table border="1">
	<tr>
		<td>nama_barang</td>
		<td><input name="merek" type="text"></td>
	</tr>
	<tr>
		<td>harga</td>
		<td><input name="harga" type="number"></td>
	</tr>
	<tr>
		<td><input name="Simpan" type="submit"></td>
	</tr>
</table>
</form>