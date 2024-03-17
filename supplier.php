<?php
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>stock management</title>
    <link rel="stylesheet" href="supplier.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="bootstrap.min.js"></script>
</head>
<body>
    <div class="container">

        <div class="heading">
            
        <div class="header-left">
           <h1>ADMIN HUB</h1>
        </div>

        <div class="header-right">
            <h1>SAINT ANNE STOCK MANAGEMENT SYSTEM </h1>
         </div>

        </div>

        <div class="content">

        <div class="content-left">

            <div class="dashboard">
            
           <li>

           <ol><a href="dashbord.php">dashboard</a></ol>
           <!-- <ol><a href="#">Category</a></ol> -->
           <ol><a href="product.php">Product</a></ol>
           <!-- <ol><a href="#">Customer</a></ol> -->
           <ol><a href="supplier.php">Supplier</a></ol>
           <ol><a href="stockin.php">stockin</a></ol>
           <ol><a href="stockout.php">stockout</a></ol>
           <ol><a href="#">report</a></ol>

           </li>

          </div>

        </div>
        <div class="content-right">
            <div class="content-top">
               <p>list of suppliers</p>
               <p><a href="add supplier.php">add supplier</a></p> 
        
            </div>

         <table>
    
                <tr>
                <th>id</th>
                <th>name</th>
                <th>adress</th>
                <th>email</th>
                <th>contact</th>
                <th>action</th>
                </tr>

                <?php
            $supplier = $conn->query("SELECT * from supplier");
            foreach ($supplier as $row) {
                $id=$row['supplier_id'];

                echo'<tr> </tr> ';

                echo'<td>'. $row['supplier_id'].'</td>';
                echo'<td>'. $row['supplier_name'].'</td>';
                echo'<td>'. $row['supplier_adress'].'</td>';
                echo'<td>'. $row['supplier_email'].'</td>';
                echo'<td>'. $row['supplier_contact'].'</td>';
                echo
               '<td>
                <a href="update supplier.php?id='.$id.'">update</a>
                <a href="delete supplier.php?id='.$id.'">delet</a>
                </td>';
            }    
                
                
            ?>

         </table>
        </div>

        </div>
    
        </div>


        <div class="footer"></div>
        
    </div>
</body>
</html>