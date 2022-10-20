<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<?php
    if(isset($_POST["submit"])){
        $a=$_POST['a'];
        $b=$_POST['b'];
        $c=$a+$b;
        // $d = "";
    }
    ?>
    <form method="POST">
        <input type="text" name="a" value="<?php 
        if(isset($_POST["submit"]))
        {echo $a;}?>
        ">
        <input type="text" name="b" value="<?php 
        if(isset($_POST["submit"]))
        {echo $b;}?>
        ">
        <input type="text" name="c" value="<?php 
        if(isset($_POST["submit"]))
        {echo $c;}?>
        ">
        <input type="text" name="d" value="<?php 
        if(isset($_POST["submit"]))
        {
            if ($c >=80 && $c <=100){
                echo "A+";
                 
            }
            else if($c >=70 && $c <=79){
                 echo "A";
                
            }
            else if($c >=60 && $c <=69){
                 echo "A-";
                 
            }
            else if($c >=50 && $c <=59){
                 echo "B";
                 
            }
            else if($c >=33 && $c <=49){
                 echo "C";
                 
            }
            else if($c >=0 && $c <=33){
                 echo "F";
                 
            }
        }
        ?>
        ">
        <input type="submit" name="submit" value="Get result">

        
        
    </form> 
</body>
</html>