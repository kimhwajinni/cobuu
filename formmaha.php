<html>
<head>
<title> form maha</title>
</head>
<body>
<h1>Mahasiswa</h1>
<form method="post" action="">
<table>
	<tr>
		<td>NIM</td>
		<td><input type="text" name="nim" required/></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama" required/></td>
	</tr>
	<tr>
		<td>Prodi</td>
		<td>
		<select name="prodi">
			<option value="">---pilih prodi---</option>
			<option value="MI">Manajemen Informatika</option>
			<option value="TK">Teknik Komputer</option>
			<option value="RPL">Teknologi Rekayasa Perangkat Lunak</option>
		</td>
	</tr>
	<tr>
		<td>Nilai</td>
		<td><input type="number" name="nilai" required/></td>
	</tr>
	<tr>
		<td> </td>
		<td>
			<input type="submit" name="Simpan" value="Simpan"/>
			<input type="reset" name="Reset" value="Reset"/>
		</td>
	</tr>
</table>
</form>
<?php
	if(isset($_POST['nilai']))
	{	
		echo " Nama = ".$_POST['nama'];
		echo " <br>Nim = ".$_POST['nim'];
		echo " <br>Prodi = ".$_POST['prodi'];
		echo " <br>Nilai = ".$_POST['nilai'];
		if($_POST['nilai']>80)
		{
			echo "<br>Nilai Huruf = A <br> Sangat Bagus";
		}
		else if($_POST['nilai']>65)
		{
			echo "<br>Nilai Huruf = B <br> Bagus";
		}
		else if($_POST['nilai']>50)
		{
			echo "<br>Nilai Huruf = C <br> Cukup";
		}
		else if($_POST['nilai']>35)
		{
			echo "<br>Nilai Huruf = D <br> Kurang";
		}
		else
		{
			echo "<br>Nilai Huruf = E <br> Sangat Kurang";
		}
	}
?>
</body>
</html>