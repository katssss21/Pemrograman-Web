<?php
// include database connection file
$koneksi = mysqli_connect("localhost", "root", "", "db_uts_06tplp009_ardiansyah");
 
// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query untuk mendapatkan data customer berdasarkan kode_customer_ardiansyah
    $query = "SELECT * FROM tbl_customer_ardiansyah WHERE kode_customer_ardiansyah = '$id'";
    $result = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_assoc($result);

    // Memeriksa apakah data berhasil didapatkan
    if ($data) {
        $kode_customer = $data['kode_customer_ardiansyah'];
        $nama_customer = $data['nama_customer_ardiansyah'];
        $alamat_customer = $data['alamat_customer_ardiansyah'];
        $no_telp_customer = $data['no_telp_customer_ardiansyah'];
    } else {
        echo "Data tidak ditemukan.";
    }
}

// Menyimpan perubahan data jika tombol "Simpan" ditekan
if (isset($_POST['simpan'])) {
    $kode_customer = $_POST['kode_customer'];
    $nama_customer = $_POST['nama_customer'];
    $alamat_customer = $_POST['alamat_customer'];
    $no_telp_customer = $_POST['no_telp_customer'];

    // Query untuk mengupdate data customer
    $query_update = "UPDATE tbl_customer_ardiansyah SET nama_customer_ardiansyah = '$nama_customer', alamat_customer_ardiansyah = '$alamat_customer', no_telp_customer_ardiansyah = '$no_telp_customer' WHERE kode_customer_ardiansyah = '$kode_customer'";
    $result_update = mysqli_query($koneksi, $query_update);

    header("Location: viewdatacustomer.php");
}



?>
<html>
<head>	
    <title>Edit Data</title> 
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
 
<body> 
     
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4 text-center">Halaman Edit Data</h1>
  </div>
</div>   

   <section class="button">
        <button type="button" class="btn btn-outline-secondary">
            <a href="viewdatacustomer.php">Kembali</a> 
        </button>  
    </section>
    
    <h1>Edit Data customer</h1>
    <form method="POST" action="editcustomer.php">
        <label for="kode_customer">Kode customer:</label><br>
        <input type="text" class="form-control col-5" id="kode_customer" name="kode_customer" value="<?php echo $kode_customer; ?>" readonly><br>

        <label for="nama_customer">Nama customer:</label><br>
        <input type="text" class="form-control col-5" id="nama_customer" name="nama_customer" value="<?php echo $nama_customer; ?>" required><br>

        <label for="alamat_customer">Alamat customer:</label><br>
        <input type="text" class="form-control col-5" id="alamat_customer" name="alamat_customer" value="<?php echo $alamat_customer; ?>" required><br>

        <label for="no_telp_customer">No. Telepon customer:</label><br>
        <input type="text" class="form-control col-5" id="no_telp_customer" name="no_telp_customer" value="<?php echo $no_telp_customer; ?>" required><br>

        <input type="submit" name="simpan" value="UPDATE">
    </form>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>