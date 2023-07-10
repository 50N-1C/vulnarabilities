<?php
if($_SERVER["REQUEST_METHOD"]==="POST"){

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Connect to the database
    $mysqli = new mysqli("localhost", "root", "", "test");

    // the SQL query
    $query = "SELECT * FROM data WHERE username='{$username}' AND password='{$password}'";

    // check for errors
    $result = $mysqli->query($query);
    if (!$result) {
    die("Error: " . $mysqli->error); // remove this condition and will be Blind SQL Injection
    }

    // Check from user credintial
    if ($result->num_rows > 0) {
    echo "Welcome, " . $username;

    } else {
    echo "Invalid username or password";
    }

    // Close the database connection
    $mysqli->close();
}
?>


<!DOCTYPE html>
<html>
    <head>
        <title>SQL Injection</title>
    </head>
    <body>
        <h1 style="text-align: center;">SQL Injection</h1>
        <form style="text-align: center;" action="" method="POST">
            <br>
            <br>
            <input type="text" name="username" placeholder="enter ur user name">
            <br>
            <br>
            <input type="password" name="password" placeholder="password">
            <br>
            <br>
            <input type="submit" name="Login">
        </form>
    </body>
</html>