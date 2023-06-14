<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Input Data Supplier | Ardiansyah Tria Sati</title>
</head>
<body>
<center>
<h1>Form Input Data User</h1>
<h2>Silahkan isi form dibawah ini untuk menambahkan User</h2></center>
	<form method="POST" action="">

        <label for="username_ardiansyah">Username :</label><br>
		<input type="text" name="username_ardiansyah" required><br><br>

		<label for="password_ardiansyah">Password :</label><br>
		<input type="password" name="password_ardiansyah" required></input><br><br>

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

		$username_ardiansyah = $_POST['username_ardiansyah'];
		$password_ardiansyah = $_POST['password_ardiansyah'];

		$query = "INSERT INTO tbl_login_ardiansyah (username_ardiansyah, password_ardiansyah) VALUES ('$username_ardiansyah', '$password_ardiansyah')";

			if (mysqli_query($conn, $query)) {
				echo "Data Berhasil Ditambahkan. <a href='viewdatauser.php'>Lihat Data</a>";
			} else {
				echo "Error: " . mysqli_error($conn);
			}

			mysqli_close($conn);
		}
	?>
</body>
</html>