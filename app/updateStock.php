<?php
$connection=mysqli_connect('enactusmpstme.org','enactusmpstme','PariPatchi123','i1119281_wp2');
session_start();

$Pname = $_POST["pname"];
$Pstock = $_POST["pstock"];
$query = mysqli_query($connection,"Update products set stock = '$Pstock' where name = '$Pname'");
	if($query)
	echo "S";
else echo "R";
?>