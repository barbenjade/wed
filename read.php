<?php
// include "crud.php";
include "update1.php";
$connection = mysqli_connect('localhost', 'root', '', 'dbone');


//     $query = "SELECT * FROM users ";

//     $results = mysqli_query($connection, $query);

mysqli_select_db($connection, "dbone");
$query = "SELECT * FROM users";
$results = mysqli_query($connection, "SELECT * FROM users");

echo "<table id=table1 border=1>
<tr>
<th>ID</th>
<th>Name</th>
<th>Password</th>
</tr>";
while($row = mysqli_fetch_assoc($results)){
    echo "<tr>";
    echo "<td>" . "<input type=text name=id value=" . $row['id'] . ">" . "</td>";
    echo "<td>" . "<input type=text name=name value=" . $row['name'] . ">" . "</td>";
    echo "<td>" . "<input type=text name=password value=" . $row['password1'] . ">" . "</td>";
    echo "<td>" . "<input type=button name=update class=button1 value=Update" . ">" . "</td>";
    echo "<td>" . "<input type=button name=delete class=button1 value=Delete" . ">" . "</td>";
    echo "</tr>";
}
echo "</table>";

?>

<html>
<head>
<title>Wedding</title>
<!-- paletton.com -->
<style>
.button1 {
    background-color: #6C81AF;
    border-radius: 8px;
}
#table1 td {
    height: 40px;
    padding: 8px;
    margin: 8px;
}
input {
    border-style: none;
}
</style>
</head>

<body>
<!-- <form action="crud.php" method="post">
    <label for="user_name">Name</label>
    <input type="text" name="user_name" id="user_name">
    <label for="password">Password</label>
    <input type="password" name="password" id="password">

    <input type="submit" name="submit" id="submit"> 
</form> -->

<div id="link1">
    <a href="crud.php">Home Page</a>
</div> 

</body>

</html>