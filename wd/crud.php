<?php
// include "read.php";
$connection = mysqli_connect('localhost', 'root', '', 'dbthree');

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

    $query = "INSERT INTO updaters(name, password) ";
    $query .= "VALUES ('$username', '$password')";

    $results = mysqli_query($connection, $query);
    if($results){
        echo "good";
    } else {
        echo "fail" . mysqli_error($connection);
    }

    if(strtolower($username) == "cory"){
        echo "Welcome Cory, great name";
    } else {
        echo "Welcome $username!";
    }
    if(empty($password)){
        echo "Must input a password";
    }

}

function datesOne() {
    $month = date("F");
    $dayofMonth = date("j");
    $car = date("Y");
    $time = date("g:i");
    $year = date("Y");

    echo "<br>Today is $month $dayofMonth, $year. <br><br>";
}
datesOne();

function countDown() {
    $weddingDate = mktime(0, 0, 0, 8, 16, 2019);
    $currentTime = time();

    $difference = $weddingDate - $currentTime;

    $days = floor($difference / 84600);
    $hours = $difference / 84600;
    $minutes = floor($difference / 60);
    $seconds = $difference; 

    echo "There are $days days until the wedding!<br>";
}

countDown();
if(isset($_POST['test1'])){
    echo "austin b";
}
?>

<html>
<head>
<title>Wedding</title>
<link href="main.css" rel="stylesheet" type="text/css">
</head>

<body>
<form action="crud.php" method="post">
    <label for="user_name">Name</label>
    <input type="text" name="user_name" id="user_name">
    <label for="password">Password</label>
    <input type="password" name="password" id="password">
    <a href="userinfo.php">
    <input type="submit" name="submit" id="submit"> 
    </a>
    <a href="https://mail.google.com/mail/u/0/#inbox">Click ME</a>
    <input type="button" name="test1" value="test">
</form>

<div id="link1">
    <a href="read.php">DB Values</a>
</div>

</body>




</html>