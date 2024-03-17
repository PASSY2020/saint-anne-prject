<?php
include "connection.php";
if(isset($_GET['id'])){
    $id=$_GET['id'];

    $delete=$conn->query("DELETE FROM stock_in WHERE product_id='$id'");

    if($delete){
        header("location:stockin.php");
    }
}
?>