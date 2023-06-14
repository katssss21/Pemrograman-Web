<?php

include_once("config.php");


if(isset($_GET['id'])){
    $kode_supplier = $_GET['id'];
    
    
    $result = mysqli_query($mysqli, "DELETE FROM tbl_supplier_ardiansyah WHERE kode_supplier_ardiansyah = '$kode_supplier'");
    
    
    if($result){
        
        header("Location: viewdatasupplier.php");
    } else{
        echo "Error in deleting data.";
    }
}
?>