<?php
function updateOne(){
$connection = mysqli_connect('localhost', 'root', '', 'dbone');

    $query = "SELECT * FROM users";
    

    $results = mysqli_query($connection, $query);
    
    while($row = mysqli_fetch_assoc($results)){
        $ID = $row['id'];
        "<option value=$ID>$ID</option>";

    }
}


function updateTwo(){
    if(isset($_POST['update'])){
        $username = $_POST['user_name'];
        $password = $_POST['password'];

        $query = "UPDATE users SET ";
        $query .= "name = '$username'";
        $query .= "password1 = '$password";
        $query .= "WHERE id = $ID";

        $results = mysqli_query($query, $connection);
    }
}

?>

<html>
<head>
<title>update</title>
</head>

<body>
<form>
    <select id="updateSelect">
        <?php echo updateOne() ?>
    </select>
</form>
</body>
</html>