<?php
// Get the user input from a form
if($_SERVER["REQUEST_METHOD"]==="POST"){
    $filename = $_POST["filename"];

    // Construct the shell command
    $command = "convert $filename -resize 100x100 thumbnail.jpg";

    // Execute the shell command
    system($command);

}
?>

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
            <input type="submit" name="GET">
        </form>
    </body>
</html>