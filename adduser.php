<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Input Data Supplier | Ardiansyah Tria Sati</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="Menuutama.php">
    <img src="img/images.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="addpemesanan.php">Data Pemesanan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="addsupplier.php">Data Supplier</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Viewdata
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="viewdatacustomer.php">Customer</a></li>
            <li><a class="dropdown-item" href="viewdatapemesanan.php">Pemesanan</a></li>
            <li><a class="dropdown-item" href="viewdatasupplier.php">Supplier</a></li>
            <li><a class="dropdown-item" href="viewdatauser.php">user</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="addcustomer.php">Data Customer</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="adduser.php">Data User</a>
        </li>
      </ul>
      <form action="logout.php" method="post" class="d-flex">
        <button class="btn btn-outline-success" type="submit" name="logout">
        <a href="Index.php">Logout</a> 
        </button>
      </form>
    </div>
  </div>
</nav>
<center>
<h1>Form Input Data User</h1>
<h2>Silahkan isi form dibawah ini untuk menambahkan User</h2>
	<form method="POST" action="">

        <label for="username_ardiansyah">Username :</label><br>
		<input type="text" name="username_ardiansyah" required><br><br>

		<label for="password_ardiansyah">Password :</label><br>
		<input type="password" name="password_ardiansyah" required></input><br><br>

		<input type="submit" name="submit" value="Tambahkan" class="btn btn-primary">
	</form></br>
	</section></center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
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
        echo "<script>alert('Data Berhasil Ditambahkan.'); window.location.href='viewdatauser.php';</script>"; 

		}
	?>
</body>
</html>