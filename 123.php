<?php
include "conection.php";
if(isset($_POST['username'])){
    $username=$_POST['username'];
    $password=$_POST['password'];


    $result=$conn->query(SELECT * FROM `user` WHERE username)
}
?>