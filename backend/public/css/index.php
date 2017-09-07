<?php 
	$connection = mysqli_connect("localhost", "root", "", "sbmptn");
	if ($connection) {
		//Berhasil
	} else {
		//Error
		echo "Gagal melakukan koneksi ke database";
	}

	$nomor_peserta = "";
	$pesan = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (isset($_POST["nomor_peserta"])) {
			$nomor_peserta = $_POST["nomor_peserta"];
		}
	}

	if ($nomor_peserta == "") {
		echo "Harap masukkan nomor peserta";
	}

	$lulus = mysql_query($connection, "SELECT nomor FROM result WHERE nomor = '$nomor_peserta';");
	if ($lulus) {
		$isLulus = "Lulus";
	} else {
		$isLulus = "Tidak Lulus";
	}


?>
<!DOCTYPE html>
<html>
<head>
	<title>SBMPTN - 2018</title>
</head>
<body>
<div class="section">
	<div class="container">
		<h1>Cek Kelulusan</h1>
		<p><strong><?php echo "Peserta ".$nomor_peserta." ".$isLulus; ?></strong></p>
		<form method="post" action="index.php">
			<input type="text" name="nomor_peserta" id="nomor_peserta">
			<label for="nomor_peserta">Nomor Peserta</label>
			<input type="submit" name="submit">
		</form>
	</div>
</div>
</body>
</html>