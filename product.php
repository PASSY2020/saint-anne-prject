<?php
include "connection.php";


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>stock management</title>
    <link rel="stylesheet" href="product.css">
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
            <h1>SAINT ANNE STOCK MANAGEMENT SYSTEM</h1>
         </div>

        </div>

        <div class="content">

        <div class="content-left">

            <div class="dashboard">
            
           <li>

           <ol><a href="dashbord.php">dashboard</a></ol>
           <ol><a href="Product.php">Product</a></ol>
           <ol><a href="supplier.php">Supplier</a></ol>
           <ol><a href="stockin.php">stockin</a></ol>
           <ol><a href="#">stockout</a></ol>
           <ol><a href="#">report</a></ol>

           </li>

          </div>

        </div>
        <div class="content-right">
            <div class="content-top">
               <p>list of product</p>
               <p><a href="add product.php">add product</a></p> 
            </div>

         <table>
   
                <tr>
                <th>id</th>
                <th>name</th>
                <th>quantity</th>
                <th>quality</th>
                <th>action</th>
                <?php
     $product = $conn->query("SELECT * from product");
     foreach ($product as $row) {
        $id=$row['product_id'];
       
        echo'<tr> </tr>';
                    
        echo'<td>'. $row['product_id'].'</td>';
        echo'<td>'. $row['product_name'].'</td>';
        echo'<td>'. $row['quantity'].'</td>';
        echo'<td>'. $row['quality'].'</td>';
        echo
        '<td>
        <a href="update.php?id='.$id.'">update</a>
        <a href="delete.php?id='.$id.'">delet</a>
        </td>';
        
    
    
     }
     
    ?>
            
                <!-- <tr>
                    <td>111</td>
                    <td>wert</td>
                    <td>trey</td>
                    <td>yert</td>
                </tr>
            
                <tr>
                    <td>111</td>
                    <td>wert</td>
                    <td>trey</td>
                    <td>yert</td>
                </tr>
            
                <tr>
                    <td>111</td>
                    <td>wert</td>
                    <td>trey</td>
                    <td>yert</td>
                </tr>
            
                <tr>
                    <td>111</td>
                    <td>wert</td>
                    <td>trey</td>
                    <td>yert</td>
                </tr> -->
            
         </table>
        </div>

        </div>
    
        </div>


        <div class="footer"></div>
        
    </div>
</body>
</html>