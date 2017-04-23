<?php
session_start();
$count = $_SESSION['count'];
$count = $count + 1;
$_SESSION['count'] = $count; 
$pname = $_REQUEST['pname'];
$_SESSION['pname'][$count] = $pname;
for($i=1;$i<=$count;$i++)
{
	$_SESSION['pcount']+=1;
echo $_SESSION['pname'][$i].',';
}
?>