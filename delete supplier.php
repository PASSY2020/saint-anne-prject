<?php
include "connection.php";
if(isset($_GET['id'])){
    $id=$_GET['id'];

    $delete=$conn->query("DELETE FROM supplier WHERE supplier_id='$id'");

    if($delete){
        header("location:supplier.php");
    }
}
?>