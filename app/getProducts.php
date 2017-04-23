<?php
$connection=mysqli_connect('enactusmpstme.org','enactusmpstme','PariPatchi123','i1119281_wp2');
session_start();
$product[0][0] = 0;
$product[0][1] = 0;

$i=0;
$query = mysqli_query($connection,"select name, stock from products");
	while ($row = mysqli_fetch_assoc($query))
	{
		$product[$i][0] = $row['name'];
		$product[$i][1] = $row['stock'];
		$i++;
	}
	echo "S#";
	for ($i=0; $i<=(count($product)-1); $i++)
{
echo $product[$i][0] . "@" . $product[$i][1]."#";
}
?>