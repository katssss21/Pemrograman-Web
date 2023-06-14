<?php

include_once("config.php");


if(isset($_GET['id'])){
    $id = $_GET['id'];
    
    
    $result = mysqli_query($mysqli, "DELETE FROM tbl_login_ardiansyah WHERE id = '$id'");
    
    
    if($result){
        
        header("Location: viewdatauser.php");
    } else{
        echo "Error in deleting data.";
    }
}