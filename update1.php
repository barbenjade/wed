<?php
function updateOne(){
$connection = mysqli_connect('localhost', 'root', '', 'dbone');

    $query = "SELECT * FROM users";
    
    $results = mysqli_query($connection, $query);

}


function updateTwo($shrek){
    if(isset($_POST['updateN'])){
        // $username = $_POST['user_name'];
        // $password = $_POST['password'];

        // $query = "UPDATE users SET ";
        // $query .= "name = '$username'";
        // $query .= "password1 = '$password";
        // $query .= "WHERE id = $ID";

        // $results = mysqli_query($query, $connection);

        echo $shrek;
    }
}
updateTwo("shrek is one");
?>

<html>
<head>
<title>update</title>
</head>

<body>
<form>
    
</form>
</body>
</html>