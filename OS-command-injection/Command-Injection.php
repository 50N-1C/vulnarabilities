<!-- <?php
// // Get the user input from a form
// if($_SERVER["REQUEST_METHOD"]==="POST"){
//     $filename = $_POST["filename"];

//     // Construct the shell command
//     $command = shell_exec("cat " . $filename);

//     // Execute the shell command
//     $output="echo $command";

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
            
            <br>
            <br>
            <input type="file" name="filename">
            <br>
            <br>
            <input type="submit">
            //<?php echo @$output;?>
        </form>
    </body>
</html> -->


<?php
// // Get the user input from a form
// if($_SERVER["REQUEST_METHOD"] === "POST"){
//     $filename = $_FILES["filename"];

//     // Read the contents of the file
//     $output = shell_exec("cat " . $filename);
// }
?>

<!-- <!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
    </head>
    <body>
        <h1 style="text-align: center;">Login page</h1>
        <form style="text-align: center;" action="" method="POST" enctype="multipart/form-data">
            
            <br>
            <br>
            <input type="file" name="filename">
            <br>
            <br>
            <input type="submit">
            <?php echo @$output;?>
        </form>
    </body>
</html> -->


<?php

if($_SERVER["REQUEST_METHOD"]==="POST"){
    $url = $_POST["url"];

    $command ="curl " . $url; // payload injection will be https://evil.com | whoami

    $output = shell_exec($command);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
    </head>
    <body>
        <h1 style="text-align: center;">Login page</h1>
        <form style="text-align: center;" action=""  method="POST">
            <br>
            <br>
            <input type="url" name="url">
            <br>
            <br>
            <input type="submit">
            <?php echo @$output;?>
        </form>
    </body>
</html>
