<?php
session_start();
$count = $_SESSION['count'];
$pname = $_REQUEST['pname'];
$_SESSION['pname'][$count] = $pname;
$_SESSION['total']= $_SESSION['total'] - $_REQUEST['price'];
for($i=1;$i<=$count+1;$i++)
{
 if($_SESSION['pname'][$i]==$pname)
 {
	 $_SESSION['pcount']-=1;
	 $_SESSION['pname'][$i] = '0'; 
	 break;
 }
}
for($x=1;$x<=$count;$x++)
{
echo $_SESSION['pname'][$x].',';
}
?>