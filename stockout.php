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
            <h1>SAINT ANNE STOCK MANAGEMENT SYSTEM </h1>
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
           <ol><a href="stockout.php">stockout</a></ol>
           <ol><a href="#">report</a></ol>

           </li>

          </div>

        </div>
        <div class="content-right">
            <div class="content-top">
               <p>list of stockout</p>
               <p><a href="add stockout.php">add stockout</a></p> 
            </div>

         <table>
   
                <tr>
                <th>id</th>
                <th>name</th>
                <th>quantity</th>
                <th>price</th>
                <th>date</th>
                <th>action</th>
                <?php
     $product = $conn->query("SELECT * from stock_out");
     foreach ($product as $row) {
        $id=$row['product_id'];
       
        echo'<tr> </tr>';
                    
        echo'<td>'. $row['product_id'].'</td>';
        echo'<td>'. $row['product_name'].'</td>';
        echo'<td>'. $row['quantity'].'</td>';
        echo'<td>'. $row['price'].'</td>';
        echo'<td>'. $row['date'].'</td>';
        echo
        '<td>
        <a href="update stockout.php?id='.$id.'">update</a>
        <a href="delete stockout.php?id='.$id.'">delet</a>
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