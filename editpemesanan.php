<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
    $id = $_POST['id'];
    
        $nama_ardiansyah= $_POST['nama_ardiansyah'];
        $alamat_ardiansyah= $_POST['alamat_ardiansyah'];
        $no_hp_ardiansyah= $_POST['no_hp_ardiansyah'];
        $email_ardiansyah= $_POST['email_ardiansyah'];
        $pesanan_ardiansyah= $_POST['pesanan_ardiansyah']; 
        $ukuran_ardiansyah= $_POST['ukuran_ardiansyah'];  
        $jumlah_ardiansyah= $_POST['jumlah_ardiansyah'];
            
    // update user data
    $result = mysqli_query($mysqli, "UPDATE tbl_pesanan_ardiansyah SET nama_ardiansyah='$nama_ardiansyah', alamat_ardiansyah='$alamat_ardiansyah',no_hp_ardiansyah='$no_hp_ardiansyah',email_ardiansyah='$email_ardiansyah',pesanan_ardiansyah='$pesanan_ardiansyah',ukuran_ardiansyah='$ukuran_ardiansyah',jumlah_ardiansyah='$jumlah_ardiansyah' WHERE id=$id");
    
    // Redirect to homepage to display updated user in list
    header("Location: viewdatapemesanan.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT  * FROM tbl_pesanan_ardiansyah WHERE id=$id");
 
while($data_pesan = mysqli_fetch_array($result))
{
    $nama_ardiansyah = $data_pesan['nama_ardiansyah'];
    $alamat_ardiansyah = $data_pesan['alamat_ardiansyah'];
    $no_hp_ardiansyah = $data_pesan['no_hp_ardiansyah']; 
    $email_ardiansyah = $data_pesan['email_ardiansyah'];  
    $pesanan_ardiansyah = $data_pesan['pesanan_ardiansyah'];  
    $ukuran_ardiansyah = $data_pesan['ukuran_ardiansyah'];  
    $jumlah_ardiansyah = $data_pesan['jumlah_ardiansyah']; 
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
            <a href="viewdatapemesanan.php">Kembali</a> 
        </button>  
    </section>
    
    <form name="update_user" method="post" action="editpemesanan.php">
        <table border="0">
        <div class="form-group"> 
            <tr>
            <label for="exampleInputNama1">Nama</label>
            <input type="text" class="form-control col-5" id="exampleInputNama1" name="nama_ardiansyah"  value=<?php echo $nama_ardiansyah;?>> 
            </tr>
        </div>  

        <div class="form-group"> 
            <tr>
            <label for="exampleInputAlamat1">Alamat</label>
            <input type="text" class="form-control col-5" id="exampleInputAlamat1" name="alamat_ardiansyah" value=<?php echo $alamat_ardiansyah;?>> 
            </tr>
        </div>   

        <div class="form-group"> 
            <tr>
            <label for="exampleInputNomorHandphone">Nomor Handphone</label>
            <input type="text" class="form-control col-5" id="exampleInputNomorHandphone" name="no_hp_ardiansyah" value=<?php echo $no_hp_ardiansyah;?>> 
            </tr> 
             
            <div class="form-group"> 
            <tr>
            <label for="exampleInputAlamatemail1">Alamat Email</label>
            <input type="text" class="form-control col-5" id="exampleInputAlamatemail1" name="email_ardiansyah" value=<?php echo $email_ardiansyah;?>> 
            </tr> 
             
             
            <h5>PESANAN</h5>  
        <p>Pilih Salah Satu Pesanan</p>  
           
           
            <div class="form-check">
                 <input class="form-check-input" type="checkbox" value="<?php echo $pesanan_ardiansyah;?>" name="pesanan_ardiansyah" id="defaultCheck1">
                 <label class="form-check-label" for="defaultCheck1">Kaos</label> 
            </div>
             
            <div class="form-check">
                 <input class="form-check-input" type="checkbox" value="<?php echo $pesanan_ardiansyah;?>"  name="pesanan_ardiansyah" id="defaultCheck2">
                 <label class="form-check-label" for="defaultCheck2">Kemeja</label> 
            </div> 
             
            <div class="form-check">
                 <input class="form-check-input" type="checkbox" value="<?php echo $pesanan_ardiansyah;?>"  name="pesanan_ardiansyah" id="defaultCheck3">
                 <label class="form-check-label" for="defaultCheck3">Hem</label> 
            </div>  
             
             
            <p>Pilih Ukuran: </p> 
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="<?php echo $ukuran_ardiansyah;?>" name="ukuran_ardiansyah">
            <label class="form-check-label" for="inlineCheckbox1">S</label>
        </div> 

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="<?php echo $ukuran_ardiansyah;?>" name="ukuran_ardiansyah">
            <label class="form-check-label" for="inlineCheckbox2">M</label>
        </div>  

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="<?php echo $ukuran_ardiansyah;?>" name="ukuran_ardiansyah">
            <label class="form-check-label" for="inlineCheckbox3">L</label>
        </div> 
         
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="<?php echo $ukuran_ardiansyah;?>" name="ukuran_ardiansyah">
            <label class="form-check-label" for="inlineCheckbox4">XL</label>
        </div>  
         
        <div class="form-group"> 
            <tr>
            <label for="exampleInputjumlah1">Jumlah :</label>
            <input type="text" class="form-control col-3" id="exampleInputjumlah1" name="jumlah_ardiansyah" value=<?php echo $jumlah_ardiansyah;?>> 
            </tr>
        </div>  
        
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form> 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>