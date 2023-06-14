<?php

include_once("config.php");


if(isset($_GET['id'])){
    $kode_customer = $_GET['id'];
    
    
    $result = mysqli_query($mysqli, "DELETE FROM tbl_customer_ardiansyah WHERE kode_customer_ardiansyah = '$kode_customer'");
    
    
    if($result){
        
        header("Location: viewdatacustomer.php");
    } else{
        echo "Error in deleting data.";
    }
}
?>