<!-- <?php

// $hostname="localhost";
// $username="root";
// $password="";
// $dbname = "test";

// $connection=mysqli_connect($hostname,$username,$password,$dbname);

// if(!$connection){
//     die("connection failed");
// }else{echo "connected";}


// if($_SERVER["REQUEST_METHOD"]==="POST"){
//     $hostname="localhost";
//     $username="root";
//     $password="";
//     $dbname = "test";

//     $connection=mysqli_connect($hostname,$username,$password,$dbname);

//     if(!$connection){
//         die("connection failed");
//     }


//     $UserNameInput=$_POST["username"];
//     $PasswordInput=$_POST["password"];

    

//     $query="SELECT * FROM `data` WHERE `username`='{$UserNameInput}' AND `password` = '{$PasswordInput}'; ";
//     $result=mysqli_query($connection,$query);

//     //check from credintial
//     if(mysqli_num_rows($result)>0){
//         die("login successfuly");
//         mysqli_close($connection);

//     }else{
//         $error="<h4 style='color: red;'>your email or password is wrong";
//     }
    

// function sqlinjection($user){
//     $username=$user;
    

// }


// }

// ?>



<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
    </head>
    <body>
        <h1 style="text-align: center;">Login page</h1>
        <form style="text-align: center;" action="" method="POST">
            //<?php //echo @$error ; ?>
            <br>
            <br>
            <input type="text" name="username" placeholder="enter your UserName">
            <br>
            <br>
            <input type="password" name="password" placeholder="password">
            <br>
            <br>
            <input type="submit" name="Login">
        </form>
    </body>
</html> -->

<?php
            if($_SERVER["REQUEST_METHOD"]==="POST"){
                
                $data=$_POST["username"];
                echo "welcome " . $data;
            } 


        ?>


<!DOCTYPE html>
<html>
    <head>
        <title>XSS</title>
    </head>
    <body>
        <form action="" method="POST">
            <input type="text" name="username">
            <input type="submit">
        </form>    
        
    </body>
</html>








