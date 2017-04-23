<?php
$connection=mysqli_connect('192.186.210.163','enactusmpstme','PariPatchi123','i1119281_wp2');	if(!empty($_POST))
		$productname = $_POST['product'];
	else header('location:index.php');
		$query = mysqli_query($connection,"select description, project, price from products where name = '$productname'");
		$row = mysqli_fetch_assoc($query);
?>
<html>
<head>

<!-- title and meta -->
<meta charset="utf-8" />
<meta name="description" content="" />
<title>Enactus MPSTME</title>
    
	<link rel="shortcut icon" type="image/x-icon" href="img/en-icon.ico">
<link rel="stylesheet" href="css/style.css" />
 <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<style>
#addtocart {
	color:#fefefe;
	background-color:#ffd200;
    border: none;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
#gotocart{
	color:#fefefe;
	background-color:#ff6200;
    border: none;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
input[type=range] {
  -webkit-appearance: none;
}
input[type=range]::-webkit-slider-runnable-track {
  width: 100%;
  height: 3px;
  cursor: pointer;
  animate: 0.2s;
  box-shadow: 0px 0px 0px #000000;
  background: #2497E3;
  border-radius: 1px;
  border: 0px solid #000000;
}
input[type=range]::-webkit-slider-thumb {
  box-shadow: 0px 0px 0px #000000;
  border: 1px solid #2497E3;
  height: 18px;
  width: 18px;
  border-radius: 25px;
  background: #2497E3;
  cursor: pointer;
  -webkit-appearance: none;
  margin-top: -7px;
}
</style>
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
	function gotostore()
	{
		location.replace('products.php');
	}
</script>

</head>
<body style="background-color:#fff"class="home archive post-type-archive post-type-archive-product logged-in admin-bar no-customize-support custom-background wp-custom-logo woocommerce woocommerce-page right-sidebar woocommerce-active">
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
<!-- /Header -->

<!-- Content starts -->
<div style="margin-top:150px;background-color:#fff;">

	<div style="padding:20px;background-color:#fff;height:662px;">
		<div style="width:47.5%;height:622px;float:left;background-color:#fff">
		<div style = "height:622px;" class="card">
		<center>
		<img id = "main" class = "card" style = "padding:5px;margin:40px" src="assets/img/<?php echo $row['project'].'/'.$productname.'/'.$productname;?>.jpg" height="400px" width="400px"></img>
		
		<table>	
		<tr>
		<?php 
		for($x=1;$x<=4;$x++)
		{
			if(file_exists('assets/img/'.$row['project'].'/'.$productname.'/'.$x.'.jpg'))
				echo '<td><img onmouseout = "document.getElementById(\'main\').src=\'assets/img/'.$row['project'].'/'.$productname.'/'.$productname.'.jpg\'" onmouseover="document.getElementById(\'main\').src=\'assets/img/'.$row['project'].'/'.$productname.'/'.$x.'.jpg\'" class="card" style = "margin:10px" src="assets/img/'.$row['project'].'/'.$productname.'/'.$x.'.jpg" height="100px" width="100px" ></img></td>';
		}
		?>
			
		</tr>
		</table>
		</center>
		<br>
		</div>
		</div>
		<div class="card" style="width:52.5%;height:622px;float:left;padding:40px;background-color:#f8f8f8">
		<center>
		<h1><?php if(!empty($_POST)) echo $productname;?></h1>
		<br>
		<h3><?php echo '&#8377; '.$row['price'];?></h3>
		<div style="margin-top:50px;padding:30px;background-color:white" class="card">
		<h3 style="margin-bottom:10px;text-align:Left">Description</h5>
		<hr>
		<p style="text-align:justify"><?php echo $row['description'];?></p>
		</div>
		<br>
		<!--<p>Colors</p>		
			<table >
			<tr>
				<td class="card"style="padding:2px"><div style="background-color:red;height:20px;width:20px">
				</div></td>
				<td class="card"style="padding:2px"><div style="float:left;background-color:blue;height:20px;width:20px">
				</div></td>
				<td class="card"style="padding:2px"><div style="float:left;background-color:green;height:20px;width:20px">
				</div></td>
			</tr>
			</table> -->
			<br><br>
		<button id = "addtocart" onclick ="gotostore()" style="width:60%;height:50px">Go To Store</button>
		</center>
		</div>
	
	</div>
	

<!--	
	<div class="card content-main" style="padding:20px;background-color:#f8f8f8">
	<h1>You may also like</h1>
	<center>
	<table style="margin:10px">
		<tr>
		<td><div class="card"style ="background-color:#ffffff;margin:10px;padding:25px;height:400px; width:300px"><center><img onmouseover="this.src = 'assets/img/P-diary2.png'" onmouseout="this.src='assets/img/Patchwork Diary.png';this.style.cursor='pointer'" src = "assets/img/Patchwork Diary.png" height = "250px" width = "250px"></img><P style="font-size:25px;color: #484c51;">Patchwork Diary</P><p>&#8377; 200</p><button id = "addtocart" style="width:100%;height:50px">Add To Cart</button></center></div></td>
		<td><div class="card"style ="background-color:#ffffff;margin:10px;padding:25px;height:400px; width:300px"><center><img src = "assets/img/Notepads.png" height = "250px" width = "250px"></img><P style="font-size:25px;color: #484c51;">Notepad</P><p>&#8377; 30, &#8377; 100 for 4 </p><button id = "addtocart" style="width:100%;height:50px">Add To Cart</button></center></div></td>
		<td><div class="card"style ="background-color:#ffffff;margin:10px;padding:25px;height:400px; width:300px"><center><img src = "assets/img/Laptop Sleeve.png" height = "250px" width = "250px"></img><P style="font-size:25px;color: #484c51;">Laptop Sleeve</P><p>&#8377; 500</p><button id = "addtocart" style="width:100%;height:50px">Add To Cart</button></center></div></td>
		<td><div class="card"style ="background-color:#ffffff;margin:10px;padding:25px;height:400px; width:300px"><center><img src = "assets/img/Agarbattis.png" height = "250px" width = "250px"></img><P style="font-size:25px;color: #484c51;">Agarbattis</P><p>&#8377; 30</p><button id = "addtocart" style="width:100%;height:50px">Add To Cart</button></center></div></td>
		</tr>
		
	</table>
	</center>
	</div>
-->
</div>


<footer id="footer">
<br>
<ul style="float: left;width:100%">
<li style="float:left;width:33.33%;padding:20px;height:320px;border-right: 1px solid #707070;">
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
<li style="float:left;width:33.33%;padding:20px; height:320px;border-right: 1px solid #707070;">
<h1 style="line-height:100px">Get Connected</h1>
<div>
<ul>
<li class="social-media">
<img style="float:left"src="img/facebook.png" height="30px" width="30px"></img><span style="margin-left:5px;line-height:30px">Facebook</span>
</li>
<li class="social-media" style="margin-top:10px">
<img style="float:left"src="img/instagram.png" height="30px" width="30px"></img><span style="margin-left:5px;line-height:30px">Instagram</span>
</li>
<li class="social-media" style="margin-top:10px">
<img style="float:left"src="img/twitter.png" height="30px" width="30px"></img><span style="margin-left:5px;line-height:30px">Twitter</span>
</li></ul>
</div>
</li>
<li style="float:left;width:33.33%;height:325px;padding:20px;">
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

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	
</html>
	