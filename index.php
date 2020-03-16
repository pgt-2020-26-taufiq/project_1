<?php
//koneksi ke database mysql 
$koneksi = mysqli_connect("localhost", "root", "", "aritmatika") ;

// ambil data dari tabel
$result = mysqli_query($koneksi, "SELECT * FROM penjumlahan");
if (!$result) {
	echo mysqli_error($koneksi);

}
//var_dump($result);
//ambil data mahasiswa dari objek result
//$opr = mysqli_fetch_assoc($result);
//var_dump($opr["hasil"]);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Aritmatika Sederhana</title>
	<style type="text/css">
		.kotak
	</style>
</head>
<body>
	<div class="kotak1"></div>
	<center>
		<h1>Penjumlahan</h1>
	<form action="" method="POST">
		<label>Angka A : <input type="number" name="a" placeholder="masukkan nilai pertama"></label><br><br>
		<label>Angka B : <input type="number" name="b" placeholder="masukkan nilai kedua"></label><br><br>
		<button type="submit" name="submit">HITUNG</button><br><br>

	</form>

	<?php
	if (isset($_POST['submit'])) {

	// ambil data dari tiap elemen form
	$a 		= $_POST['a'];
	$b 		= $_POST['b'];
	$c 		= $_POST['submit'];
	$c 		= $a + $b;
	echo $c;

	if ($c >= 0 && $c <= 25) {
      $keterangan = "Nilai D";
   }
   elseif ($c >= 26 && $c <= 45) {
      $keterangan = "Nilai C";
   }
   elseif ($c >= 46 && $c <= 65) {
      $keterangan = "Nilai B";
   }
   elseif ($c >= 66 && $c > 100) {
      $keterangan = "Nilai A";
   }
	echo  $keterangan;

		for ($i=1; $i <= 10 ; $i++) {
		$a = $b;
		$c = $a + $b;
		$b = $c;

	if ($c >= 0 && $c <= 25) {
      $keterangan = "Nilai D";
   }
   elseif ($c >= 26 && $c <= 45) {
      $keterangan = "Nilai C";
   }
   elseif ($c >= 46 && $c <= 65) {
      $keterangan = "Nilai B";
   }
   elseif ($c >= 66 && $c > 100) {
      $keterangan = "Nilai A";
   }
	echo $c; 	
	}


	// query insert data
	$query = "INSERT INTO penjumlahan VALUES ('', '$a', '$b', '$c', '$keterangan')";
	mysqli_query($koneksi, $query);

	}
	?>

	<hr>
	<h3>HISTORI TABEL PENJUMLAHAN</h3>
	<table border="2" cellpadding="10" cellspacing="0">
		<tr>
			<th>NO</th>
			<th>NILAI A</th>
			<th>NILAI B</th>
			<th>HASIL</th>
			<th>KETERANGAN</th>	
		</tr>

<?php while ($row = mysqli_fetch_assoc($result)) : ?>
		<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['a']; ?></td>
			<td><?php echo $row['b']; ?></td>
			<td><?php echo $row['c']; ?></td>
			<td><?php echo $row['keterangan']; ?></td>
		</tr>
<?php endwhile; ?>

	</table>
	</center>
	</body>

</html>