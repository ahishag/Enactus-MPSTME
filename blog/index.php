<?php
$connection=mysqli_connect('localhost','enactusmpstme','PariPatchi123','i1119281_wp2');
session_start();
?>
<html>
    <head>
		<title></title>
		<link type="text/css" rel="stylesheet" href="css/style.css">
		<link type="text/css" rel="stylesheet" href="../css/style.css">
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../js/classie.js"></script>
<script>
    function init() {
        window.addEventListener('scroll', function(e){
            var distanceY = window.pageYOffset || document.documentElement.scrollTop,
                shrinkOn = 25,
                header = document.querySelector("header");
            if (distanceY > shrinkOn) {
                classie.add(header,"smaller");
				document.getElementById("archives").style.top = "50px";
				//document.getElementById("navbar-logo").style.display="none";
				//document.getElementById("logo").style.display="block";
            } else {
				document.getElementById("archives").style.top = "150px";
                if (classie.has(header,"smaller")) {
                    classie.remove(header,"smaller");
                }
            }
			
			if (distanceY>2000)
			{
				document.getElementById("archives").style.height = "150px";
				document.getElementById("archives").style.overflowY = "scroll";
			}
			else
			{
				document.getElementById("archives").style.height = "auto";
				document.getElementById("archives").style.overflowY = "visible";
			}
			
			
			
        });
    }
    window.onload = init();
	
</script>
    </head>
<body>
<img src="img/backdrop.jpg" width="100%" style="top:0px;position:fixed; z-index:-1;">
<header>
<!-- <img src="img/logo-enactus.png" height="50px" width="50px" style="z-index:5;position:relative;top:25px;left:3.5%;"></img>-->
    <div class="container clearfix">
<!--<img id="navbar-logo"style="dl"src = "img/logo.png" height="150px" width="200px"></img>-->
		
		<h1  id="logo">
            Enactus
			<pre style="font-size:15px">
<br>Mukesh Patel School of Technology 
Management and Engineering</pre>
			<!--<img src = "../assets/img/logo.png" width="15%">-->
        </h1>
		
        <nav>
            <a href="../index.php#top">Home </a>
            <a href="../index.php#about-us" class="submenu-icon">About Us</a>
            <a href="../index.php#our-projects" class="submenu-icon">Projects </a>
			<a href="../products.php">Store</a>			
			<a href="#">Blog</a>
			<a href="../index.php#partners">Partners</a>
			<a href="../index.php#footer">Contact us </a>
        </nav>
    </div>
</header>
	<div id="sidecolumn">
	<img class="card" id = "leaf" src="img/leaf.png" width = "100%">
	<div style="background-color:#fff;margin-top:20px;">
	<center><p style="font-size:25px;padding:5px;">Our Writers<p></center>
	<hr>
	<br>
	<img class="card" id = "leaf" src="img/Anshul.png" width = "100%">
	<img style="margin-top:10px;"class="card" id = "leaf" src="img/Vijeet.png" width = "100%">
	</div>
	</div>
	<div style="padding-left:25.5%;margin-top:150px;">
	
    <div id="content">
	<?php
		$titles = [];
		$x =0;
		$query = mysqli_query($connection,"Select title, date, description, image from blog order by no desc");
		while($row=mysqli_fetch_assoc($query))
		{
			echo '<div class="post card">
			<center><img width="100%" src = "postimages/'.$row['image'].'.png">
			<h1>'.$row["title"].'</h1>
			<p style="margin-bottom:20px; font-size:20px">'.$row["description"].'</p>
			<a  class="view" href="post.php?title='.$row['title'].'" class="" role="button">READ MORE</a></center></div>';
			$titles[$x] = $row["title"];
			$x++;
		}
		$_SESSION['titles']=$titles;
	?>
    </div>
    <!--<div id="search">
        <form id="searchbox">
			<input type="search" name="search" placeholder="Search...">
        </form>
    </div>-->
    <div id="archives" class="card">
        <h2 style="text-decoration:none;">Archives</h2>
		<hr>
        <ul style="margin-top:10px;font-size:18px;">
		<?php
		
		for($i=0;$i<count($titles);$i++)
			echo '<li class="drop"><a href="post.php?title='.$titles[$i].'">'.$titles[$i].'</a></li>';
		?>
		</ul>
    </div>
	</div>
	
<footer id="footer">
<br>
<ul style="float: left;width:100%">
<li style="float:left;width:33.33%;padding:20px;height:365px;border-right: 1px solid #707070;">
<h2> <img src="../assets/img/logo.png" height="125px;" width="200px"></img></h2>
<div style="margin-left:20px;margin-top:20px">
<ul>
<li >
<strong><span style="color:#ffcc08;">En</span>trepreneurial</strong> - <span style="color:#8f8b89;">igniting business innovation with integrity and passion.</span>
</li>
<li style="margin-top:20px">
<strong><span style="color:#ffcc08;">Act</span>ion</strong> - <span style="color:#8f8b89;">the experience of social impact that sparks social enterprise.</span>
</li>
<li style="margin-top:20px">
<strong><span style="color:#ffcc08;">Us</span></Strong> - <span style="color:#8f8b89;">student, academic and business leaders collaborating to create a better world.</span>
</li>
</ul>
</div>
</li>
<li style="float:left;width:33.33%;padding:20px; height:365px;border-right: 1px solid #707070;">
<h1 style="line-height:100px">Get Connected</h1>
<div>
<ul>
<li class="social-media">
<img style="float:left"src="../img/facebook.png" height="30px" width="30px"></img><a href = "https://www.facebook.com/enactusmpstme" style="margin-left:5px;line-height:30px;color:#fff;text-decoration:none">Facebook</a>
</li>
<li class="social-media" style="margin-top:10px">
<img style="float:left"src="../img/instagram.png" height="30px" width="30px"></img><a href="https://www.instagram.com/enactusmpstme/" style="margin-left:5px;line-height:30px;color:#fff;text-decoration:none">Instagram</a>
</li>
<li class="social-media" style="margin-top:10px">
<img style="float:left"src="../img/twitter.png" height="30px" width="30px"></img><a href="https://twitter.com/Enactus_MPSTME" style="margin-left:5px;line-height:30px;color:#fff;text-decoration:none">Twitter</a>
</li></ul>
</div>
</li>
<li style="float:left;width:33.33%;height:365px;padding:20px;">
<h1 style="line-height:100px">Contact Us</h1>
<div>
<ul>
<li>
<img src="../img/mpstme.jpg" ></img>
</li>
<li style="margin-top:10px">
<strong>Enactus MPSTME</strong>
<p style="color:#8f8b89;">MPSTME, NMIMS University 
V.L.Mehta Road, JVPD, 
Opp Cooper Hospital, Vile Parle West 
Mumbai, Maharashtra 400056</p>
<br>
<strong>Email</strong> - <span style="color:#8f8b89;">enactus.nmims@gmail.com</span>
<br>
<strong>Contact</strong> - <span style="color:#8f8b89;">+919029098707</span>
</li>
</ul>
</div>
</li>
</ul>
<br>
    </footer>
    </body>
</html>