<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM tbl_pesanan_ardiansyah ORDER BY id DESC");
?>
 
<html>
<head>     
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel= "stylesheet" href="style.css">
    <title>Data Pemesanan</title>
</head>
 
<body>  
     
<section class="button">
<button type="button" class="btn btn-outline-secondary">
<a href="datapemesanan.php">Tambahkan Data</a> 
</button>  
</section>

    <table class="table">
      <thead class="thead-dark">
    <tr>
        <th scope="col">Id</th><th scope="col">Nama</th><th scope="col">Alamat</th><th scope="col">No Telpon</th><th scope="col">Email</th><th scope="col">Pesanan</th><th scope="col">Ukuran</th><th scope="col">Jumlah</th></th><th scope="col">Update</th>
    </tr> 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
    <?php   
    while($data_pesan = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$data_pesan['id']."</td>";
        echo "<td>".$data_pesan['nama_ardiansyah']."</td>";
        echo "<td>".$data_pesan['alamat_ardiansyah']."</td>";  
        echo "<td>".$data_pesan['no_hp_ardiansyah']."</td>";
        echo "<td>".$data_pesan['email_ardiansyah']."</td>";
        echo "<td>".$data_pesan['pesanan_ardiansyah']."</td>";
        echo "<td>".$data_pesan['ukuran_ardiansyah']."</td>";
        echo "<td>".$data_pesan['jumlah_ardiansyah']."</td>";
        echo "<td><a href='editpemesanan.php?id=$data_pesan[id]'>Edit</a> | <a href='deletepemesanan.php?id=$data_pesan[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table> 

    
</body>
</html>