<?php
include "update1.php";
$connection = mysqli_connect('localhost', 'root', '', 'dbthree');

mysqli_select_db($connection, "updaters");
$query = "SELECT * FROM updaters";
$result = mysqli_query($connection, $query);
echo "<table id=table1 border=1>
<tr>
<th>ID</th>
<th>Name</th>
<th>Password</th>
</tr>";
while($row = mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>" . "<input type=text value=" . $row['id'] . ">" . "</td>";
    echo "<td>" . "<input type=text value=" . $row['name'] . ">" . "</td>";
    echo "<td>" . "<input type=text value=" . $row['password'] . ">" . "</td>";
    echo "<form action=read.php method=POST id=formUp>";
    echo "<td>" . "<input type=submit form=formUP name=updateN class=button1 value=Edit" . ">" . "</td>";
    echo "</form>";
    echo "<td>" . "<input type=submit name=delete class=button1 value=Delete" . ">" . "</td>";
    echo "</tr>";
}
echo "</table>";

function updateN(){
if(isset($_POST['updateN'])){
    // $username = $_POST['user_name'];
    // $password = $_POST['password'];

    // $query = "UPDATE users SET ";
    // $query .= "name = '$username'";
    // $query .= "password1 = '$password";
    // $query .= "WHERE id = $ID";

    // $results = mysqli_query($query, $connection);
    echo "yes I do 666666";

}


}

updateN();
?>

<html>
<head>
<title>Wedding</title>
<link href="main.css" rel="stylesheet" type="text/css">
<!-- paletton.com -->
<style>
.button1 {
    background-color: #6C81AF;
    border-radius: 8px;
}
form {
    display: flex;
    justify-content: center;
    align-items: center;
}
#table1 td {
    height: 40px;
    padding: 8px;
    margin: 8px;
}
input {
    border-style: none;
}
.header {
    <background-color: green;
    height: 45px;
    width: auto;
}
</style>
</head>

<body>
<div class=header>
    <p>Header Text and image here</p>
</div>
<!-- <form action="read.php" method="POST">
    <input name="updateN" type="submit" id="updateN" value="Test">
</form> -->
<div id="link1">
    <a href="crud.php">Home Page</a>
</div> 

</body>

</html>