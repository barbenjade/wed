<?php

$connection = mysqli__connect("8080", "root", "", "dbthree");

$query = "DELETE FROM updateone WHERE ID = '$variableinput'";

$result = mysqli_query($connection, $query);



?>