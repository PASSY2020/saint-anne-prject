<?php
include "connection.php";
if(isset($_POST['submit'])){
    $supplier_name=$_POST['supplier_name'];
    $supplier_adress=$_POST['supplier_adress'];
    $supplier_email=$_POST['supplier_email'];
    $supplier_contact=$_POST['supplier_contact'];

    $result=$conn->query( "INSERT INTO supplier(supplier_name,supplier_adress,supplier_email,supplier_contact) VALUE('$supplier_name','$supplier_adress','$supplier_email','$supplier_contact')");
     
    if($result){
        header("location:supplier.php");
    }

    else{
        echo
             '
             <script>
     
             alert("user not added");
     
             </script>;
             
             ';
         }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>stock management</title>
    <!-- <link rel="stylesheet" href="login.css"> -->
    <link rel="stylesheet" href="addsupplier.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="bootstrap.min.js"></script>
</head>
<body>
    <div class="container">

        <div class="header">
            <h3>SAINT ANNE STOCK MANAGEMENT SYSTEM </h3>
            <p>LOGOUT</p>
        </div>

        <div class="content">

        <div class="content-left">
            <div class="input">

                <form action="" method="post">
        
                <h1>ADD SUPPLIERS</h1>
        
                <div class="input1">
                <label for="supplier_name">supplier_name</label>
                <input type="text" class="form-control" name="supplier_name" required><br>
                </div>

                <div class="input2">
                 <label for="supplier_adress">supplier_adress</label>
                <input type="text" name="supplier_adress" class="form-control" required><br>
                </div>

                <div class="input2">
                 <label for="supplier_email">supplier_email</label>
                <input type="text" name="supplier_email" class="form-control" required><br>
                </div>

                <div class="input3">
                 <label for="supplier_contact">supplier_contact</label>
                <input type="text" name="supplier_contact" class="form-control" required><br>
                </div>
        
                <input type="submit" class="btn" name="submit" value="add supplier"><br><br>

                

        
                </form>
        
                </div>
        </div>
        <div class="content-right">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Error ut velit quas a. Saepe modi, ipsum laboriosam consequatur nihil sit expedita culpa blanditiis temporibus quae unde voluptates quibusdam nam nostrum, qui sint a eaque. Culpa, facere dolorum saepe deleniti voluptate corporis. Assumenda explicabo, laudantium, aliquam animi excepturi, fugiat autem ullam maiores numquam vel porro non totam itaque praesentium earum error nulla sint optio hic. Sit odio, velit cum maiores corporis dolore delectus consequuntur blanditiis soluta placeat, quas necessitatibus. Unde sunt rem asperiores fugiat eaque, facere voluptatum iste culpa amet rerum provident, ad officia reiciendis nam, sapiente ipsa. Itaque ut culpa tempora maxime veniam at quo dolores, quos inventore, corporis ipsam, eligendi rem quaerat sit consectetur quidem doloremque ullam animi! Excepturi voluptate aliquam, officia minus praesentium maiores. Sunt illum ut, blanditiis unde inventore qui vitae aperiam. Dolorem, eligendi? Voluptates asperiores omnis ipsa vel dicta dolorum! Nulla pariatur, quos odit voluptates reprehenderit, ut explicabo vel similique placeat non incidunt, inventore facilis vero deserunt repellat sunt. Ullam cumque similique ratione minima, vitae repellat atque facere fugit quos fugiat omnis, voluptas quis quo. Autem dolore cumque perspiciatis eveniet corporis est recusandae, error sequi. Dolore est placeat, excepturi optio aut eaque accusantium cupiditate maxime quam facilis ratione enim delectus laborum eum nihil quo explicabo, dolorem ab, repellendus necessitatibus in! Optio explicabo aperiam ipsum atque culpa omnis neque commodi voluptas vel, animi minus facere repudiandae quis veritatis accusamus quas eaque nobis aliquid suscipit in laborum. Quibusdam iure deserunt nihil, eveniet hic amet ab itaque nobis neque, quod autem. Voluptatibus corporis sit voluptas possimus minus rem provident, distinctio accusamus est porro ad autem tempora nisi doloribus magni eum odio iste. Nemo laudantium minus consectetur hic cum tempore asperiores cumque, placeat, ipsa perferendis consequatur voluptas nisi optio doloremque beatae nam sequi. Expedita non saepe omnis enim porro consectetur.
        </div>

        </div>
    
        </div>


        <div class="footer"></div>
        
    </div>
</body>
</html>