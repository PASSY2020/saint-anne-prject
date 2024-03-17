<?php
include "connection.php";
if (isset($_POST['register'])) {
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];

    $result=$conn->query("INSERT INTO users(username,password,email) VALUE('$username','$password','$email')");
    if($result){
        header("location:index1.php");
    }
    else{
   echo
        '
        <script>

        alert("user not registered");

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
    <link rel="stylesheet" href="./login.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="bootstrap.min.js"></script>
</head>
<body>
    <div class="container">

        <div class="header">
            <h3>INVENTORY MANAGEMENT SYSTEM</h3>
        </div>

        <div class="content">

        <div class="content-left">
            <div class="input">

                <form action="" method="post">
        
                <h1>Login form</h1>
        
                <div class="input1">
                <label for="username">username</label>
                <input type="text" class="form-control" name="username" required><br>
                </div>
        
                <div class="input2">
                 <label for="password">password</label>
                <input type="password" name="password" class="form-control" required><br>
                </div>

                <div class="input3">
                 <label for="email">email</label>
                <input type="mail" name="email" class="form-control" required><br>
                </div>
        
                <input type="submit" class="btn" name="register" value="register"><br><br>

                i have an account <a href="#">sign inn</a>

        
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






