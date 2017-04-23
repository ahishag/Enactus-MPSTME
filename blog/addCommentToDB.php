<?php
session_start();
$title = $_SESSION['title'];
$connection=mysqli_connect('localhost','root','','enactus');
$comment = $_GET['comment'];
$query = mysqli_query($connection,"select comments from blog where title = '$title'");
$row = mysqli_fetch_assoc($query);
$comment = $comment + ", " + $row['comments'] ;
$query = mysqli_query($connection,"update blog set comments = '$comment' where title = '$title'");
echo $query;
?>