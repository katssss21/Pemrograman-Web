<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Input Data Pesanan | Ardiansyah Tria Sati</title>
</head>
<body>
<center>
<h1>Form Input Data Pesanan</h1>
<h2>Silahkan isi form dibawah ini untuk melakukan pendataan pesanan</h2></center>
	<form method="POST" action="">
        <label for="nama_ardiansyah">Nama :</label><br>
		<input type="text" name="nama_ardiansyah" required><br><br>

        <label for="alamat_ardiansyah">Alamat :</label><br>
		<textarea name="alamat_ardiansyah" required></textarea><br><br>

        <label for="no_hp_ardiansyah">No Telpon :</label><br>
		<input type="text" name="no_hp_ardiansyah" required><br><br>

		<label for="email_ardiansyah">Email :</label><br>
		<input type="text" name="email_ardiansyah" required><br><br>

        <label>Pesanan:</label><br>
		<input type="checkbox" name="pesanan_ardiansyah[]" value="Kaos"> Kaos<br>
		<input type="checkbox" name="pesanan_ardiansyah[]" value="Kemeja"> Kemeja<br>
		<input type="checkbox" name="pesanan_ardiansyah[]" value="Hem"> Hem<br>

		<label>Ukuran:</label><br>
		<input type="radio" name="ukuran_ardiansyah" value="S"> S<br>
		<input type="radio" name="ukuran_ardiansyah" value="M"> M<br>
		<input type="radio" name="ukuran_ardiansyah" value="L"> L<br>
		<input type="radio" name="ukuran_ardiansyah" value="XL"> XL<br>

		<label for="jumlah">Jumlah:</label><br>
		<input type="number" name="jumlah_ardiansyah" min="1" required><br><br>

		<input type="submit" name="submit" value="Input">
	</form></br>

	<section class="button">
        <button type="button" class="btn btn-outline-secondary">
            <a href="index.php">Kembali</a> 
        </button>  
    </section>
    <?php
	if (isset($_POST['submit'])) {
		// Koneksi ke database
		$host = "localhost";
		$user = "root";
		$password = "";
		$database = "db_uts_06tplp009_ardiansyah";

		$conn = mysqli_connect($host, $user, $password, $database);

		// Cek koneksi
		if (mysqli_connect_errno()) {
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
			exit();
		}
		
		$nama_ardiansyah = $_POST['nama_ardiansyah'];
		$alamat_ardiansyah = $_POST['alamat_ardiansyah'];
		$no_hp_ardiansyah = $_POST['no_hp_ardiansyah'];
		$email_ardiansyah = $_POST['email_ardiansyah'];
		$pesanan_ardiansyah = implode(", ", $_POST['pesanan_ardiansyah']);
		$ukuran_ardiansyah = $_POST['ukuran_ardiansyah'];
		$jumlah_ardiansyah = $_POST['jumlah_ardiansyah'];

		$query = "INSERT INTO tbl_pesanan_ardiansyah (nama_ardiansyah, alamat_ardiansyah, no_hp_ardiansyah, email_ardiansyah, pesanan_ardiansyah, ukuran_ardiansyah, jumlah_ardiansyah) VALUES ('$nama_ardiansyah', '$alamat_ardiansyah', '$no_hp_ardiansyah', '$email_ardiansyah', '$pesanan_ardiansyah', '$ukuran_ardiansyah', '$jumlah_ardiansyah')";
			if (mysqli_query($conn, $query)) {
				echo "Data Berhasil Ditambahkan. <a href='viewdatapemesanan.php'>Lihat Data</a>";
			} else {
				echo "Error: " . mysqli_error($conn);
			}

			mysqli_close($conn);
		}
	?>
</body>
</html>