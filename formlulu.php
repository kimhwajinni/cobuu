<html>
<head>
<title> membuat form </title>
</head>
<body>
	<h1>OPERATOR ARITMATIKA</h1><p>
	<form method="post" action="">
	Bilangan 1 = <input type="text" name="bila" required><br>
	Bilangan 2 = <input type="text" name="bilb" required>
	<input type="submit" name="submit" value="Proses">
	
	<?php
	$bil1 = $_POST["bila"];
	$bil2 = $_POST["bilb"];
	$jum = $bil1+$bil2;
	$kur = $bil1-$bil2;
	$kal = $bil1*$bil2;
	$bag = $bil1/$bil2;
	
	
	echo "<br/>Hasil Penjumlahan = " .$jum;
	echo "<br/>Hasil Pengurangan = " .$kur;
	echo "<br/>Hasil Pengalian = " .$kal;
	echo "<br/>Hasil Pembagian = " .$bag
	?>
	</form>
<body>
</html>