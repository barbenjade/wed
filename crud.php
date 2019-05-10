<?php

$connection = mysqli_connect('localhost', 'root', '', 'dbone');

if(isset($_POST['submit'])) {
    $username = $_POST['user_name'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);

    // $hashFormat = "$2y$10$";
    // $salt = "iwritesomecrazystrings22";
    // $hashF_and_salt = $hashFormat . $salt;

    // $password = crypt($password, $hashF_and_salt);
    // if($password){
    //     echo "good";
    // }

    $query = "INSERT INTO users(name, password1) ";
    $query .= "VALUES ('$username', '$password')";

    $results = mysqli_query($connection, $query);
    if($results){
        echo "good";
    } else {
        echo "fail" . mysqli_error($results);
    }
}



?>

<html>
<head>
<title>Wedding</title>
</head>

<body>
<form action="crud.php" method="post">
    <label for="user_name">Name</label>
    <input type="text" name="user_name" id="user_name">
    <label for="password">Password</label>
    <input type="password" name="password" id="password">

    <input type="submit" name="submit" id="submit"> 
</form>

<div id="link1">
    <a href="read.php">DB Values</a>
</div>

</body>




</html>