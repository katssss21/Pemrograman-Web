<?php

include_once("config.php");


if(isset($_GET['id'])){
    $id = $_GET['id'];
    
    
    $result = mysqli_query($mysqli, "DELETE FROM tbl_pesanan_ardiansyah WHERE id = '$id'");
    
    
    if($result){
        
        header("Location: viewdatapemesanan.php");
    } else{
        echo "Error in deleting data.";
    }
}
?>