<?php
$connection=mysqli_connect('192.186.210.163','enactusmpstme','PariPatchi123','i1119281_wp2');
session_start();
$_SESSION['count'] = 0;
?>

<!--Roboto, fira sans -->
<!DOCTYPE html>
<html lang="en">

<head>

<!-- title and meta -->
<meta charset="utf-8" />
<meta name="description" content="" />
<title>Project Parivartan</title>
    
	
	<link rel="shortcut icon" type="image/x-icon" href="img/en-icon.ico">
<!-- css -->
<link rel="stylesheet" href="css/style.css" />
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<!-- js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/classie.js"></script>
<script>
    function init() {
        window.addEventListener('scroll', function(e){
            var distanceY = window.pageYOffset || document.documentElement.scrollTop,
                shrinkOn = 100,
                header = document.querySelector("header");
            if (distanceY > shrinkOn) {
                classie.add(header,"smaller");
				//document.getElementById("navbar-logo").style.display="none";
				//document.getElementById("logo").style.display="block";
            } else {
                if (classie.has(header,"smaller")) {
                    classie.remove(header,"smaller");
                }
            }
        });
    }
    window.onload = init();
	
</script>
<script type="text/JavaScript">
/*
var picCount=0; // global
var picArray= ["slide-banner-01.jpg","slide-banner-03.jpg"];

//
// gets next picture in array
function nextPic()
{ // check if adding 1 exceeds number of pics in array
picCount=(picCount+1<picArray.length)? picCount+1 : 0;
// build the img to write to page using the new pic reference
document.getElementById("banner").src="img/"+picArray[picCount];
// repeat this after a puse of 2000ms (2sec).
setTimeout('nextPic()',2000)
}*/
//-->
</script>
</head>



<body >
<header>
    <div class="container clearfix">
<!--<img id="navbar-logo"style="dl"src = "img/logo.png" height="150px" width="200px"></img>-->
		
		<h1  id="logo">
            Enactus
			<pre style="font-size:15px">
<br>Mukesh Patel School of Technology 
Management and Engineering</pre>
        </h1>
		
       <nav>
            <a href="index.php">Home </a>
            <a href="index.php#about-us" >About Us</a>
            <a href="index.php#our-projects">Projects </a>
			<a href="products.php">Store</a>		
			<a href="blog/">Blog</a>					
			<a href="index.php#partners">Partners</a>
			<!--<a href="#gallery">Gallery</a> -->
			<a href="index.php#footer">Contact us </a>
			
		 </nav>
    </div>
</header><!-- /header -->
<!--<section>
<div style="margin-top:150px;height:700px;width:100%">
<img id="banner" src = "img/logo-enactus.png" height="500px" width="500px">
</div>
</section>-->

<div class="content-main section-inside" style="height:auto;float:left;">
<h1 style="margin-top:100px;">Parivartan Products</h1>
<?php 
	$query = mysqli_query($connection,"select name, description from products where project = 'Parivartan'");
	while ($row = mysqli_fetch_assoc($query))
	{
		echo '<div class="card" style="float:left;margin-top:25px;width:100%;background-color:#fff">
<div style="float:left;height:200px;width:350px;"><center><img src="assets/img/Parivartan/'.$row['name'].'/'.$row['name'].'.jpg" height="200px"></center></div>
<div style="float:left;width:50%;margin:25px;font-size:20px">
<h2 style="text-decoration:none">'.$row['name'].'</h2>
<span>'.$row['description'].'</span>
</div>
<button style="float:right;margin-top:72px;margin-right:50px;" id = "addtocart" onclick="javascript:gotostore();">Go to Store</button>
</div>';
	}
?>
</div>
<footer id="footer">
<br>
<ul style="float: left;width:100%">
<li style="float:left;width:33.33%;padding:20px;height:365px;border-right: 1px solid #707070;">
<h2> <img src="assets/img/logo.png" height="125px;" width="200px"></img></h2>
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
<img style="float:left"src="img/facebook.png" height="30px" width="30px"></img><a href = "https://www.facebook.com/enactusmpstme" style="margin-left:5px;line-height:30px;color:#fff;text-decoration:none">Facebook</a>
</li>
<li class="social-media" style="margin-top:10px">
<img style="float:left"src="img/instagram.png" height="30px" width="30px"></img><a href="https://www.instagram.com/enactusmpstme/" style="margin-left:5px;line-height:30px;color:#fff;text-decoration:none">Instagram</a>
</li>
<li class="social-media" style="margin-top:10px">
<img style="float:left"src="img/twitter.png" height="30px" width="30px"></img><a href="https://twitter.com/Enactus_MPSTME" style="margin-left:5px;line-height:30px;color:#fff;text-decoration:none">Twitter</a>
</li></ul>
</div>
</li>
<li style="float:left;width:33.33%;height:365px;padding:20px;">
<h1 style="line-height:100px">Contact Us</h1>
<div>
<ul>
<li>
<img src="img/mpstme.jpg" ></img>
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
<div style="float:left;width:100%;padding:5px;background-color:#161616;color:#fff">
<center>© Copyright 2016, All Rights Reserved by Enactus MPSTME.<br>
Designed by Ahish Agrawal, Gourav Acharya.
</center>
</div>
</body>
<script>

window.addEventListener('scroll', function(e){
			
			 $('.fadeInImage').each( function(i){
            
            var bottom_of_object = $(this).position().top;
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            
            /* Adjust the "200" to either have a delay or that the content starts fading a bit before you reach it  */
            bottom_of_window = bottom_of_window + 200;  
          
            if( bottom_of_window > bottom_of_object ){
                
                $(this).animate({'opacity':'1'},10);
                    
            }
			
			
        }); 
        });
	
	var inside=false;
	$('#feedback').click(function(){
		$('#feedback-form').show();
	});
	$('#feedback-content-div').mouseover(function(){
		inside=true;
	});
	$('#feedback-content-div').mouseout(function(){
		inside=false;
	});
	
		$('#feedback-form').click(function(){
		if(!inside)
		{
		$('#feedback-form').hide();
		}
		else{
			$('#feedback-form').show();
		}
	});
	
	function gotostore()
	{
		location.replace('products.php');
	}
</script>
</html>