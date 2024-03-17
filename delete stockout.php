<?php
include "connection.php";
if(isset($_GET['id'])){
    $id=$_GET['id'];

    $delete=$conn->query("DELETE FROM stock_out WHERE product_id='$id'");

    if($delete){
        header("location:stockout.php");
    }
}
?>