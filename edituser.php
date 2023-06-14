<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
    $id = $_POST['id'];
    
        $username_ardiansyah= $_POST['username_ardiansyah'];
        $password_ardiansyah= $_POST['password_ardiansyah'];
            
    // update user data
    $result = mysqli_query($mysqli, "UPDATE tbl_login_ardiansyah SET username_ardiansyah='$username_ardiansyah', password_ardiansyah='$password_ardiansyah' WHERE id=$id");
    
    // Redirect to homepage to display updated user in list
    header("Location: viewdatauser.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT  * FROM tbl_login_ardiansyah WHERE id=$id");
 
while($data_pesan = mysqli_fetch_array($result))
{
        $username_ardiansyah= $data_pesan['username_ardiansyah'];
        $password_ardiansyah= $data_pesan['password_ardiansyah'];
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
            <a href="viewdatauser.php">Kembali</a> 
        </button>  
    </section>
    
    <form name="update_user" method="post" action="edituser.php">
        <table border="0">
        <div class="form-group"> 
            <tr>
            <label for="exampleInputNama1">Username</label>
            <input type="text" class="form-control col-5" id="exampleInputNama1" name="username_ardiansyah"  value=<?php echo $username_ardiansyah;?>> 
            </tr>
        </div>  

        <div class="form-group"> 
            <tr>
            <label for="exampleInputAlamat1">Password</label>
            <input type="password" class="form-control col-5" id="exampleInputAlamat1" name="password_ardiansyah" value=<?php echo $password_ardiansyah;?>> 
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