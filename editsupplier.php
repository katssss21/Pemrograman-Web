<?php
// include database connection file
$koneksi = mysqli_connect("localhost", "root", "", "db_uts_06tplp009_ardiansyah");
 
// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query untuk mendapatkan data supplier berdasarkan kode_supplier_ardiansyah
    $query = "SELECT * FROM tbl_supplier_ardiansyah WHERE kode_supplier_ardiansyah = '$id'";
    $result = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_assoc($result);

    // Memeriksa apakah data berhasil didapatkan
    if ($data) {
        $kode_supplier_ardiansyah = $data['kode_supplier_ardiansyah'];
        $nama_supplier_ardiansyah = $data['nama_supplier_ardiansyah'];
        $alamat_supplier_ardiansyah = $data['alamat_supplier_ardiansyah'];
        $no_telp_supplier_ardiansyah = $data['no_telp_supplier_ardiansyah'];
    } else {
        echo "Data tidak ditemukan.";
    }
}

// Menyimpan perubahan data jika tombol "Simpan" ditekan
if (isset($_POST['simpan'])) {
    $kode_supplier_ardiansyah = $_POST['kode_supplier_ardiansyah'];
    $nama_supplier_ardiansyah = $_POST['nama_supplier_ardiansyah'];
    $alamat_supplier_ardiansyah = $_POST['alamat_supplier_ardiansyah'];
    $no_telp_supplier_ardiansyah = $_POST['no_telp_supplier_ardiansyah'];

    // Query untuk mengupdate data supplier
    $query_update = "UPDATE tbl_supplier_ardiansyah SET nama_supplier_ardiansyah = '$nama_supplier_ardiansyah', alamat_supplier_ardiansyah = '$alamat_supplier_ardiansyah', no_telp_supplier_ardiansyah = '$no_telp_supplier_ardiansyah' WHERE kode_supplier_ardiansyah = '$kode_supplier_ardiansyah'";
    $result_update = mysqli_query($koneksi, $query_update);

    header("Location: viewdatasupplier.php");
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
            <a href="viewdatasupplier.php">Kembali</a> 
        </button>  
    </section>
    
    <h1>Edit Data Supplier</h1>
    <form method="POST" action="editsupplier.php">
        <label for="kode_supplier_ardiansyah">Kode Supplier:</label><br>
        <input type="text" class="form-control col-5" id="kode_supplier_ardiansyah" name="kode_supplier_ardiansyah" value="<?php echo $kode_supplier_ardiansyah; ?>" readonly><br>

        <label for="nama_supplier_ardiansyah">Nama Supplier:</label><br>
        <input type="text" class="form-control col-5" id="nama_supplier_ardiansyah" name="nama_supplier_ardiansyah" value="<?php echo $nama_supplier_ardiansyah; ?>" required><br>

        <label for="alamat_supplier_ardiansyah">Alamat Supplier:</label><br>
        <input type="text" class="form-control col-5" id="alamat_supplier_ardiansyah" name="alamat_supplier_ardiansyah" value="<?php echo $alamat_supplier_ardiansyah; ?>" required><br>

        <label for="no_telp_supplier_ardiansyah">No. Telepon Supplier:</label><br>
        <input type="text" class="form-control col-5" id="no_telp_supplier_ardiansyah" name="no_telp_supplier_ardiansyah" value="<?php echo $no_telp_supplier_ardiansyah; ?>" required><br>

        <input type="submit" name="simpan" value="UPDATE">
    </form>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>