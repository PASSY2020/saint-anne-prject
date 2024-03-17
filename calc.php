<?php
if(isset($_POST['submit'])){
   $num1=$_POST['num1'];
   $num2=$_POST['num2'];
   $opp=$_POST['opp'];

//    $mathcalc=('$num1,$opp,$num2');
   $opp;

switch($opp):

case '+':
$sum=$num1+$num2;
echo $sum;
break;

case '-':
$diff=$num1-$num2;
echo $diff;
break;

case '*':
$prod=$num1*$num2;
echo $prod;
break;

case '/':
$div=$num1/$num2;
echo $div;
break;
default:
echo "unsupported input";
endswitch;
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="calc.css">
</head>
<body>
    <div class="container">


        <div class="header"></div>



        <div class="content">


            <div class="contentleft">

            <form action="" method="post">
                <input type="number" name="num1">

                <select name="opp" id="">
                    
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
                
                </select>

                <input type="number" name="num2">

                = <input type="number" name="result" value="<?php echo $sum; ?>">

                <button type="submit" name="submit">calculate</button>
            </form>
                

            </div>


            <!-- <div class="contentright"></div>


            <div class="contentmid"></div>


            <div class="contentanswer"></div> -->



        </div>



    </div>
</body>
</html>



<!-- php code  -->

<?php

function sum($x,$y){
    $z=$x+$y;
    echo $z;
}

echo"5+10=".sum(5,10)."<br>";

?>