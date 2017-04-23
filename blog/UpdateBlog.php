<?php
$connection=mysqli_connect('localhost','enactusmpstme','PariPatchi123','i1119281_wp2');
session_start();
if(isset($_GET['title']))
{
	$title = $_GET['title'];
	$desc = $_GET['desc'];
	$content = $_GET['content'];
	$month = date('F Y');
	$query = mysqli_query($connection,"insert into blog (title, description, content, date) values ('$title','$desc','$content','$month')") or die(mysqli_error($connection));
	if($query)
		echo 'Successful';
	else echo 'Upload Failed, Try again';
}
?>
<head>
	<link type="text/css" rel="stylesheet" href="../css/style.css">
</head>
<body style="background-color:#ededed;padding-right:12.5%;padding-left:12.5%;padding-top:5%;">
<div class="card" style="padding:50px;background-color:#fff;border-radius:5px; width:100%; height:auto">

<input type="text" id = "posttitle" style="width:100%;height:30px;" placeholder = "Enter Title"/><br><br>
<input type="text" id = "postdesc" style="width:100%;height:30px;" placeholder = "Enter Description"/><br><br>
<textarea style="height:400px;width:100%;" type="text" id="postcontent" placeholder = "Enter Content"></textarea>
<br><bR><button onclick="javascript:submitpost()">Submit Post</button>
</div>
</body>

<script>
	function submitpost()
	{
		var title = document.getElementById("posttitle");
		var desc = document.getElementById("postdesc");
		var content = document.getElementById("postcontent");
	
		if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                alert(xmlhttp.responseText.split("<")[0]);
	        }
        };
        xmlhttp.open("GET","UpdateBlog.php?title="+title.value+"&desc="+desc.value+"&content="+content.value,true);
        xmlhttp.send();
	}	

	
</script>