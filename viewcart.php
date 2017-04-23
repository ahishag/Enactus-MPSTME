<?php
$connection=mysqli_connect('192.186.210.163','enactusmpstme','PariPatchi123','i1119281_wp2');
session_start();
class Emp {
      public $CheckedDiary = "";
      public $SawdustPen  = "";
      public $LaptopSleeves = "";
      public $Bowtie = "";
      public $BoweyHairband = "";
      public $BoweyRubberband = "";
      public $BoweyTictac = "";
      public $KhaadiFolder = "";
	  public $SmallPouch = "";
	  public $BigPouch = "";
	  public $Agarbatti = "";
	  
	  
	  
	  
   }
   $e = new Emp();
?>

<head>
<style>
</style>
<!-- title and meta -->
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0" />
<meta name="description" content="" />
<title>Enactus MPSTME</title>
    
	<link rel="shortcut icon" type="image/x-icon" href="img/en-icon.ico">
<link rel="stylesheet" href="css/style.css" />
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<!-- js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/classie.js"></script>
<script type="text/Javascript">
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
	
	function confirm_order()
	{
		document.getElementById("total-p").innerHTML = "Total: "+document.getElementById("total-span").innerHTML;
		document.getElementById("confirm-order-page").style.display = "block";
	}
	

</script>
<style>
th{
	line-height:50px;
	font-size:20px;
	height:50px;
	background-color:#ffeb3b!important;
}
<!--tr:last-child{
	border-bottom: solid 3px #ffeb3b;
}-->
input[type=text] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
}
input[type=text]:focus {
	outline:none;
    border: 3px solid #ffeb3b;
}
input[type=submit]{
	 text-decoration:none;
	border: solid 2px black;
	color: black;
	font-weight:600;
	padding:10px;
 }
 input[type=submit]:hover{
	background-color:#ecc731;
	color:#fff;
	cursor:pointer;
 }
</style>

</head>



<body>
<div id="confirm-order-page" style="display:none;width:100%;height:700px;background-color:rgba(0,0,0,.5);position:fixed;z-index:1000;">
	<div  style="padding:50px;background-color:#f6f6f6;width:50%;margin-left:25%;margin-top:200px;">
	<a href="products.php" style="float:right;">Cancel Order</a>
	<center>
	<p id="total-p"></p>
	<form method="post" action="#">
	<input type="text" name="customer-name" placeholder="Your name"></input><br>
	<input type="text" name="customer-phone" placeholder="Your phone"></input><br>
	<input type="text" name="customer-address" placeholder="Your address"></input><br>
	<input type="text" name="customer-comments" placeholder="Comments (if any)"></input><br><br>
	<input type="submit" name="customer-submit" value="Place Order"></input>
	</form>
	</center>
	</div>
	</div>
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



<div style="margin-bottom:100px">
<!-- Content starts -->
<div style="background-color:#fff;padding-left:10%;padding-right:10%;padding-top:200px;">
	
	<p style="font-size:40px">Cart</p>
	<div style="margin-top:20px">
	<table width="100%" cellspacing="10">
	<tr >
		<th></th>
		<th>Product</th>
		<th>Price</th>
		<th>Quantity</th>
		<th>Total</th>
	</tr>
<?php
	$total=0;
	
$count = $_SESSION['count'];
$lsleeve = 0;
$pdiary = 0;
$spens = 0;
$bowtie = 0;
$kfolder = 0;
$bhairband = 0;
$brubberband = 0;
$btictac = 0;
$spouch = 0;
$bpouch = 0;
$agarbatti = 0;

for($i=1;$i<=$count;$i++)
{
	switch($_SESSION['pname'][$i])
	{
		case 'Checked Diary' : $pdiary= $pdiary+1;
								 break;
		case 'Sawdust Pen' : 	$spens = $spens+1;
								break;
		case 'Laptop Sleeve' :  $lsleeve = $lsleeve+1;
								break;
		case 'Bowtie' : $bowtie = $bowtie+1;
								 break;
		case 'Khaadi Folder' : $kfolder = $kfolder+1;
								 break;
		case 'Bowey - Hairband' : $bhairband = $bhairband+1;
								 break;
		case 'Bowey - Rubberband' : $brubberband = $brubberband+1;
								 break;
		case 'Bowey - Tictac' : $btictac = $btictac+1;
								 break;
		case 'Small Pouch' : $spouch = $spouch+1;
								 break;
		case 'Big Pouch' : $bpouch = $bpouch+1;
								 break;
		case 'Mosquito Repellent Agarbattis' : $agarbatti = $agarbatti+1;
								 break;
		 
	}
	
}
for($i=1;$i<=$count;$i++)
{
	if($pdiary!=0) 
	{
		$ptotal = 200*$pdiary;
		$e->CheckedDiary=$pdiary;
		echo '<tr align="center"><td><img src="assets/img/Patched/Checked Diary/Checked Diary.jpg" height="50px" width="50px"></td><td>Checked Diary</td><td>&#8377;200</td><td>'.$pdiary.'</td><td>&#8377;'.$ptotal.'</td></tr>';
		$total = $total + $ptotal;
		$pdiary=0;
	}
	if ($spens!=0)
	{
		$e->SawdustPen=$spens;
		$sptotal = 10*$spens;
		echo '<tr align="center"><td><img src="assets/img/Parivartan/Sawdust Pen/Sawdust Pen.jpg" height="50px" width="50px"></td><td>Sawdust Pen</td><td>&#8377;10</td><td>'.$spens.'</td><td>&#8377;'.$sptotal.'</td></tr>';
		$total = $total + $sptotal;
		$spens =0;
	}
	if($lsleeve!=0)
	{
		$e->LaptopSleeves=$lsleeve;
		$lstotal = 500*$lsleeve;
		echo '<tr align="center"><td><img src="assets/img/Patched/Laptop Sleeve/Laptop Sleeve.jpg" height="50px" width="50px"></td><td>Laptop Sleeve</td><td>&#8377;500</td><td>'.$lsleeve.'</td><td>&#8377;'.$lstotal.'</td></tr>';
		$total = $total + $lstotal;
		$lsleeve = 0;
	}
	if($bowtie!=0)
	{
		$e->Bowtie=$bowtie;
		$bowtietotal = 150*$bowtie;
		echo '<tr align="center"><td><img src="assets/img/Parivartan/Bowtie/Bowtie.jpg" height="50px" width="50px"></td><td>Bowtie</td><td>&#8377;150</td><td>'.$bowtie.'</td><td>&#8377;'.$bowtietotal.'</td></tr>';
		$total = $total + $bowtietotal;
		$bowtie = 0;
	}
	if($kfolder!=0)
	{
		$e->KhaadiFolder=$kfolder;
		$kftotal = 250*$kfolder;
		echo '<tr align="center"><td><img src="assets/img/Patched/Khaadi Folder/Khaadi Folder.jpg" height="50px" width="50px"></td><td>Khaadi Folder</td><td>&#8377;250</td><td>'.$kfolder.'</td><td>&#8377;'.$kftotal.'</td></tr>';
		$total = $total + $kftotal;
		$kfolder = 0;
	}
	if($bhairband!=0)
	{
		$e->BoweyHairband=$bhairband;
		$bhtotal = 50*$bhairband;
		echo '<tr align="center"><td><img src="assets/img/Parivartan/Bowey - Hairband/Bowey - Hairband.jpg" height="50px" width="50px"></td><td>Bowey - Hairband</td><td>&#8377;50</td><td>'.$bhairband.'</td><td>&#8377;'.$bhtotal.'</td></tr>';
		$total = $total + $bhtotal;
		$bhairband=0;
	}
	if($brubberband!=0)
	{
		$e->BoweyRubberband=$brubberband;
		$brtotal = 50*$brubberband;
		echo '<tr align="center"><td><img src="assets/img/Parivartan/Bowey - Rubberband/Bowey - Rubberband.jpg" height="50px" width="50px"></td><td>Bowey - Rubberband</td><td>&#8377;50</td><td>'.$brubberband.'</td><td>&#8377;'.$brtotal.'</td></tr>';
		$total = $total + $brtotal;
		$brubberband = 0;
	}
	if($btictac!=0)
	{
		$e->BoweyTictac=$btictac;
		$bttotal = 50*$btictac;
		echo '<tr align="center"><td><img src="assets/img/Parivartan/Bowey - Tictac/Bowey - Tictac.jpg" height="50px" width="50px"></td><td>Bowey - Tictac</td><td>&#8377;50</td><td>'.$btictac.'</td><td>&#8377;'.$bttotal.'</td></tr>';
		$total = $total + $bttotal;
		$btictac = 0;
	}	
if($bpouch!=0)
	{
		$e->BigPouch=$bpouch;
		$bptotal = 70*$bpouch;
		echo '<tr align="center"><td><img src="assets/img/Patched/Big Pouch/Big Pouch.jpg" height="50px" width="50px"></td><td>Big Pouch</td><td>&#8377;70</td><td>'.$bpouch.'</td><td>&#8377;'.$bptotal.'</td></tr>';
		$total = $total + $bptotal;
		$bpouch = 0;
	}	
if($spouch!=0)
	{
		$e->SmallPouch=$spouch;
		$sptotal = 50*$spouch;
		echo '<tr align="center"><td><img src="assets/img/Patched/Small Pouch/Small Pouch.jpg" height="50px" width="50px"></td><td>Small Pouch</td><td>&#8377;50</td><td>'.$spouch.'</td><td>&#8377;'.$sptotal.'</td></tr>';
		$total = $total + $sptotal;
		$spouch = 0;
	}
if($agarbatti!=0)
	{
		$e->Agarbatti=$agarbatti;
		$atotal = 40*$agarbatti;
		echo '<tr align="center"><td><img src="assets/img/Parivartan/Mosquito Repellent Agarbattis/Mosquito Repellent Agarbattis.jpg" height="50px" width="50px"></td><td>Mosquito Repellent Agarbatti</td><td>&#8377;40</td><td>'.$agarbatti.'</td><td>&#8377;'.$atotal.'</td></tr>';
		$total = $total + $atotal;
		$agarbatti = 0;
	}		
}
$_SESSION['total']=$total;
if(isset($_POST['customer-submit']))
{
	$name = $_POST['customer-name'];
	$phone = $_POST['customer-phone'];
	$address = $_POST['customer-address'];
	$order = json_encode($e);
	$total = $_SESSION['total'];
	$comments = $_POST['customer-comments'];
	$today = date("Y-m-d H:i:s");
	$query = mysqli_query($connection,"insert into orders (order_date, customer_name, customer_number, customer_address, customer_order, total, comments) values('$today','$name','$phone','$address','$order','$total','$comments')");
	if($query)
	{
		header("location:index.php");
	}
	else echo mysqli_error($connection);
}
?>
	</table>
	<br><br>
	</div>
	<div style="width:50%;float:right;">	
		<div style="float:left;width:50%;background-color:#ffeb3b;color:#000;height:50px;font-size:20px;font-weight:700;line-height:50px;">
			<center><span>Total</span></center>
		</div>	
		<div style="float:left;width:50%;color:#000;height:50px;font-size:20px;font-weight:700;line-height:50px;">
			<center><span id="total-span">&#8377;<?php echo $_SESSION['total'];?></span></center>
		</div>
	</div>
	<br>
	<center>
	<div style="margin-top:100px;right:0px;">
	<a href = "javascript:confirm_order()" class="view" style="font-size:25px;">
		Confirm order
	</a>
	</div>
	</center>
</div>
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
