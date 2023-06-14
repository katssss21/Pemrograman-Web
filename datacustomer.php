<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Input Data customer | Ardiansyah Tria Sati</title>
</head>
<body>
<center>
<h1>Form Input Data customer</h1>
<h2>Silahkan isi form dibawah ini untuk melakukan pendataan customer</h2></center>
	<form method="POST" action="">
        <label for="kode_customer_ardiansyah">Kode :</label><br>
		<input type="text" name="kode_customer_ardiansyah" required><br><br>

        <label for="nama_customer_ardiansyah">Nama :</label><br>
		<input type="text" name="nama_customer_ardiansyah" required><br><br>

		<label for="alamat_customer_ardiansyah">Alamat :</label><br>
		<textarea name="alamat_customer_ardiansyah" required></textarea><br><br>

		<label for="no_telp_customer_ardiansyah">Nomor Telepon :</label><br>
		<input type="text" name="no_telp_customer_ardiansyah" required><br><br>

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

		$kode_customer_ardiansyah = $_POST['kode_customer_ardiansyah'];
		$nama_customer_ardiansyah = $_POST['nama_customer_ardiansyah'];
		$alamat_customer_ardiansyah = $_POST['alamat_customer_ardiansyah'];
		$no_telp_customer_ardiansyah = $_POST['no_telp_customer_ardiansyah'];

		$query = "INSERT INTO tbl_customer_ardiansyah (kode_customer_ardiansyah, nama_customer_ardiansyah, alamat_customer_ardiansyah, no_telp_customer_ardiansyah) VALUES ('$kode_customer_ardiansyah', '$nama_customer_ardiansyah', '$alamat_customer_ardiansyah', '$no_telp_customer_ardiansyah')";

			if (mysqli_query($conn, $query)) {
				echo "Data Berhasil Ditambahkan. <a href='viewdatacustomer.php'>Lihat Data</a>";
			} else {
				echo "Error: " . mysqli_error($conn);
			}

			mysqli_close($conn);
		}
	?>
</body>
</html>