<?php
$connection=mysqli_connect('192.186.210.163','enactusmpstme','PariPatchi123','i1119281_wp2');
session_start();
if(empty($_SESSION['count']))
{
	$_SESSION['count'] = 0;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>

<!-- title and meta -->
<meta charset="utf-8" />
<meta name="description" content="" />
<title>Enactus MPSTME</title>
    
	<link rel="shortcut icon" type="image/x-icon" href="img/en-icon.ico">
<!-- css -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link rel="stylesheet" href="css/style.css" />

<script src="js/classie.js"></script>
<script>
    function init() {
        window.addEventListener('scroll', function(e){
			var shrinkcart=20;
            var distanceY = window.pageYOffset || document.documentElement.scrollTop,
                shrinkOn = 40,
                header = document.querySelector("header");
            if (distanceY > shrinkOn) {
                classie.add(header,"smaller");
			}
			else {
                if (classie.has(header,"smaller")) {
                    classie.remove(header,"smaller");
				}
			}
			if(distanceY>shrinkcart)
			{			
				document.getElementById("viewcart-button").style.display="none";
				document.getElementById("viewcart-icon").style.display="block";
			}
            else
			{ 
				document.getElementById("viewcart-button").style.display="block";
				document.getElementById("viewcart-icon").style.display="none";
            } 
            
        });
    }
    window.onload = init();
</script>

</head>
<body style="background-color:#fff">

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
<div class="card" id="product-added">
	<center><P>Added product in cart</P></centeR>
</div>
<div class="card" id="product-removed">
	<center><P>Removed product from cart</P></centeR>
</div>
<div  style="padding-top:10px;float:left;background-color:#fff;width:100%">
<div onmouseover="viewCart()" onmouseout="vanish()" style="left:200px;background-color:#fff;width:20%">
<div id="viewcart-button" class="card" style="right:0px;position:fixed;top:160px;background-color:#262626;color:#fff;height:68px;width:20%;">
<center><P id = "viewcart-p" style="line-height:68px;">View Cart (0 items)</p></center>
</div>
<div id="viewcart-icon" class="card" style="right:0px;display:none;position:fixed;top:160px;">
<img src="img/cart.png" height="68px;"></img>
</div>
<div id="cartitems" class="dropdown-cart card">
<?php
$count = $_SESSION['count'];
if($_SESSION['pcount']==0)
{
	echo '<p>Cart is Empty</p>';
}
else 
{
	echo '<table width="100%"><col width="70%"><col width="30%"><tr align="left"><th>Name</th><th>Price</th></tr>';
$total=0;
$pcount=0;
$ifinsert = false;
for($i=1;$i<=$count;$i++)
{
	switch($_SESSION['pname'][$i])
	{
		case 'Checked Diary' : echo '<tr><td>Checked Diary</td><td>&#8377;200</td><td><img  src = "img/cross.png" height= "10px" width= "10px" onclick= "javascript:removeProduct(\'Checked Diary\',\'10\');"></td></tr>';
								$total = $total + 200;
								$pcount++; $ifinsert = true;
								 break;
		case 'Sawdust Pen' : echo '<tr><td>Sawdust Pen</td><td>&#8377;10</td><td><img src = "img/cross.png" height= "10px" width= "10px" onclick= "javascript:removeProduct(\'Sawdust Pen\',\'10\');"></td></tr>';
								$total = $total + 10;
								$pcount++; $ifinsert = true;
								break;
		case 'Laptop Sleeve' : echo '<tr><td>Laptop Sleeve</td><td>&#8377;500</td><td><img src = "img/cross.png" height= "10px" width= "10px" onclick= "javascript:removeProduct(\'Laptop Sleeve\',\'500\');"></td></tr>';
								$total = $total + 500;
								$pcount++; $ifinsert = true;
								 break;
		case 'Bowtie' : echo '<tr><td>Bowtie</td><td>&#8377;150</td><td><img src = "img/cross.png" height= "10px" width= "10px" onclick= "javascript:removeProduct(\'Bowtie\',\'150\');"></td></tr>';
								$total = $total + 150;
								$pcount++; $ifinsert = true;
								 break;
		case 'Khaadi Folder' : echo '<tr><td>Khaadi Folder</td><td>&#8377;250</td><td><img src = "img/cross.png" height= "10px" width= "10px" onclick= "javascript:removeProduct(\'Khaadi Folder\',\'250\');"></td></tr>';
								$total = $total + 250;
								$pcount++; $ifinsert = true;
								 break;
		case 'Bowey - Hairband' : echo '<tr><td>Bowey - Hairband</td><td>&#8377;50</td><td><img src = "img/cross.png" height= "10px" width= "10px" onclick= "javascript:removeProduct(\'Bowey - Hairband\',\'50\');"></td></tr>';
								$total = $total + 50;
								$pcount++; $ifinsert = true;
								 break;
		case 'Bowey - Rubberband' : echo '<tr><td>Bowey - Rubberband</td><td>&#8377;50</td><td><img src = "img/cross.png" height= "10px" width= "10px" onclick= "javascript:removeProduct(\'Bowey - Rubberband\',\'50\');"></td></tr>';
								$total = $total + 50;
								$pcount++; $ifinsert = true;
								 break;
		case 'Bowey - Tictac' : echo '<tr><td>Bowey - Tictac</td><td>&#8377;50</td><td><img src = "img/cross.png" height= "10px" width= "10px" onclick= "javascript:removeProduct(\'Bowey - Tictac\',\'50\');"></td></tr>';
								$total = $total + 50;
								$pcount++; $ifinsert = true;
								 break;
		case 'Small Pouch' : echo '<tr><td>Small Pouch</td><td>&#8377;50</td><td><img src = "img/cross.png" height= "10px" width= "10px" onclick= "javascript:removeProduct(\'Small Pouch\',\'50\');"></td></tr>';
								$total = $total + 50;
								$pcount++; $ifinsert = true;
								 break;
		case 'Big Pouch' : echo '<tr><td>Big Pouch</td><td>&#8377;70</td><td><img src = "img/cross.png" height= "10px" width= "10px" onclick= "javascript:removeProduct(\'Big Pouch\',\'70\');"></td></tr>';
								$total = $total + 70;
								$pcount++; $ifinsert = true;
								 break;
		case 'Mosquito Repellent Agarbattis' : echo '<tr><td>Mosquito Repellent Agarbattis</td><td>&#8377;40</td><td><img src = "img/cross.png" height= "10px" width= "10px" onclick= "javascript:removeProduct(\'Mosquito Repellent Agarbattis\',\'40\');"></td></tr>';
								$total = $total + 40;
								$pcount++; $ifinsert = true;
								 break;
		 
	}
	
}
$_SESSION['total']=$total;
	echo '<script>document.getElementById("viewcart-p").innerHTML = "View Cart ('.$pcount.')";</script>';
	echo '<tr><td><b>Total</b></td><td><b>&#8377;'.$_SESSION['total'].'</b></td></tr></table><br><center><button id = "addtocart" onClick="javascript:viewcartpage();" style="width:80%;height:40px">Go To Cart</button></center>';

}
?>
</div>

</div>

	<div>
	

		
		<div style="margin-bottom:13px;background-color:#fff;padding:10px ;width:100%">
		<p style="font-size:30px">Our Products</p>
		<br>
		<p style="color:#fff;">Sort By:</p>
<hr>
	<div width="100%;" style="background-color:#fff;">
	<?php
		$query = mysqli_query($connection,"select name, price, project, sellable from products where stock!='none' ");
		while($row = mysqli_fetch_assoc($query))
		{
			if($row['sellable']!="no")
				echo '<div class="products-items"><center><img onclick="javascript:productclick(this)" alt="'.$row['name'].'" src = "assets/img/'.$row['project'].'/'.$row['name'].'/'.$row['name'].'.jpg" height = "250px" width = "250px"></img><P style="font-size:25px;color: #484c51;">'.$row['name'].'</P><p>&#8377; '.$row['price'].'</p><button id = "addtocart" onClick="submit(\''.$row['name'].'\', \'&#8377; '.$row['price'].'\',\'assets/img/'.$row['name'].'/'.$row['name'].'.jpg\')" style="width:100%;height:50px">Add To Cart</button></center></div>';
		}
	?>
		
	</div>
			
		</div>
	

</div>
</div>
<!-- /Content ends -->

<footer id="footer" style="margin-top:20px;">
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
		
	<script type="text/javascript">

	function viewcartpage()
	{
		location.replace('viewcart.php');
	}

	//----------Product onclick to product description page
	function productclick(e)
	{
		var form = document.createElement("form");
    form.setAttribute("method", "post");
    form.setAttribute("action", "individual.php");

            var hiddenField = document.createElement("input");
            hiddenField.setAttribute("type", "hidden");
            hiddenField.setAttribute("name", "product");
            hiddenField.setAttribute("value", e.alt);

            form.appendChild(hiddenField);
			

    document.body.appendChild(form);
    form.submit();
	}
	//----------/Product onclick to product description page

function viewCart() {
<!--making the div visible-->
var divi=document.getElementById('cartitems');
divi.style.display='block';	
}

function removeProduct(takename, takeprice){

$(document).ready(function(){
    $("#product-removed").show("fast", function(){
            $("#product-removed").hide("slow");
        });
});
		if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var res2 = xmlhttp.responseText.split(',');
				editcart(res2);
				
            }
        };
        xmlhttp.open("GET","removeProductFromSession.php?pname="+takename+"&price="+takeprice,true);
        xmlhttp.send();
		
}

function vanish(){
var divi=document.getElementById('cartitems');
divi.style.display='none';
}
function submit(takename,takeprice,imgsrc){

$(document).ready(function(){
    $("#product-added").show("fast", function(){
            $("#product-added").hide("slow");
        });
});
if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
				var res2 = xmlhttp.responseText.split(',');
				editcart(res2);
            }
        };
        xmlhttp.open("GET","addProductToSession.php?pname="+takename+"&price="+takeprice,true);
        xmlhttp.send();
}
function editcart(res2)
{
	var cart = document.getElementById('cartitems');
	cart.innerHTML = '<table id = "carttable" width="20%"><col width="70%"><col width="30%"><tr align="left"><th>Name</th><th>Price</th><th></th></tr>';	var total=0;
	var table = document.getElementById('carttable');
	var row, cell1, cell2,cell3;
	var ifinsert = false;
	var count=0;
	for(var i=0;i<res2.length-1;i++)
	{
	switch(res2[i])
	{
		case 'Checked Diary' : row = table.insertRow(table.rows.length);
								cell1 = row.insertCell(0);
								cell1.innerHTML = 'Checked Diary';
								cell2 = row.insertCell(1);
								cell2.innerHTML = '&#8377;200'
								cell3 = row.insertCell(2);
								cell3.innerHTML = '<img src = "img/cross.png" height= "10px" width= "10px" onclick= "javascript:removeProduct(\'Checked Diary\',\'10\');">'
								total = total + 200;
								count++;
								ifinsert = true;
								 break;
		case 'Sawdust Pen' : row = table.insertRow(table.rows.length);
								cell1 = row.insertCell(0);
								cell1.innerHTML = 'Sawdust Pen';
								cell2 = row.insertCell(1);
								cell2.innerHTML = '&#8377;10'
								cell3 = row.insertCell(2);
								cell3.innerHTML = '<img src = "img/cross.png" height= "10px" width= "10px" onclick= "javascript:removeProduct(\'Sawdust Pen\',\'10\');">'
								total = total + 10;
								count++;
								ifinsert = true;
								break;
		case 'Laptop Sleeve' : row = table.insertRow(table.rows.length);
								cell1 = row.insertCell(0);
								cell1.innerHTML = 'Laptop Sleeve';
								cell2 = row.insertCell(1);
								cell2.innerHTML = '&#8377;500'
								cell3 = row.insertCell(2);
								cell3.innerHTML = '<img src = "img/cross.png" height= "10px" width= "10px" onclick= "javascript:removeProduct(\'Laptop Sleeve\',\'500\');">'
								total = total + 500;
								ifinsert = true;
								count++;
								break;
		case 'Bowtie' : row = table.insertRow(table.rows.length);
								cell1 = row.insertCell(0);
								cell1.innerHTML = 'Bowtie';
								cell2 = row.insertCell(1);
								cell2.innerHTML = '&#8377;150'
								cell3 = row.insertCell(2);
								cell3.innerHTML = '<img src = "img/cross.png" height= "10px" width= "10px" onclick= "javascript:removeProduct(\'Bowtie\',\'150\');">'
								total = total + 150;
								ifinsert = true;
								count++;
								 break;
		case 'Khaadi Folder' : row = table.insertRow(table.rows.length);
								cell1 = row.insertCell(0);
								cell1.innerHTML = 'Khaddi Folder';
								cell2 = row.insertCell(1);
								cell2.innerHTML = '&#8377;250'
								cell3 = row.insertCell(2);
								cell3.innerHTML = '<img src = "img/cross.png" height= "10px" width= "10px" onclick= "javascript:removeProduct(\'Khaadi Folder\',\'250\');">'
								total = total + 250;
								ifinsert = true;
								count++;
								 break;
		case 'Bowey - Hairband' : row = table.insertRow(table.rows.length);
								cell1 = row.insertCell(0);
								cell1.innerHTML = 'Bowey - Hairband';
								cell2 = row.insertCell(1);
								cell2.innerHTML = '&#8377;50'
								cell3 = row.insertCell(2);
								cell3.innerHTML = '<img src = "img/cross.png" height= "10px" width= "10px" onclick= "javascript:removeProduct(\'Bowey - Hairband\',\'50\');">'
								total = total + 50;
								ifinsert = true;
								count++;
								 break;
		case 'Bowey - Rubberband' : row = table.insertRow(table.rows.length);
								cell1 = row.insertCell(0);
								cell1.innerHTML = 'Bowey - Rubberband';
								cell2 = row.insertCell(1);
								cell2.innerHTML = '&#8377;50'
								cell3 = row.insertCell(2);
								cell3.innerHTML = '<img src = "img/cross.png" height= "10px" width= "10px" onclick= "javascript:removeProduct(\'Bowey - Rubberband\',\'50\');">'
								total = total + 50;
								ifinsert = true;
								count++;
								 break;
		case 'Bowey - Tictac' : row = table.insertRow(table.rows.length);
								cell1 = row.insertCell(0);
								cell1.innerHTML = 'Bowey - Tictac';
								cell2 = row.insertCell(1);
								cell2.innerHTML = '&#8377;50'
								cell3 = row.insertCell(2);
								cell3.innerHTML = '<img onclick= "javascript:removeProduct(\'Bowey - Tictac\',\'50\');" src = "img/cross.png" height= "10px" width= "10px">'
								total = total + 50;
								ifinsert = true;
								count++;
								 break;
		case 'Small Pouch' : row = table.insertRow(table.rows.length);
								cell1 = row.insertCell(0);
								cell1.innerHTML = 'Small Pouch';
								cell2 = row.insertCell(1);
								cell2.innerHTML = '&#8377;50'
								cell3 = row.insertCell(2);
								cell3.innerHTML = '<img onclick= "javascript:removeProduct(\'Small Pouch\',\'50\');" src = "img/cross.png" height= "10px" width= "10px">'
								total = total + 50;
								ifinsert = true;
								count++;
								 break;
		case 'Big Pouch' : row = table.insertRow(table.rows.length);
								cell1 = row.insertCell(0);
								cell1.innerHTML = 'Big Pouch';
								cell2 = row.insertCell(1);
								cell2.innerHTML = '&#8377;70'
								cell3 = row.insertCell(2);
								cell3.innerHTML = '<img onclick= "javascript:removeProduct(\'Big Pouch\',\'70\');" src = "img/cross.png" height= "10px" width= "10px">'
								total = total + 70;
								ifinsert = true;
								count++;
								 break;
		case 'Mosquito Repellent Agarbattis' : row = table.insertRow(table.rows.length);
								cell1 = row.insertCell(0);
								cell1.innerHTML = 'Mosquito Repellent Agarbattis';
								cell2 = row.insertCell(1);
								cell2.innerHTML = '&#8377;40'
								cell3 = row.insertCell(2);
								cell3.innerHTML = '<img onclick= "javascript:removeProduct(\'Mosquito Repellent Agarbattis\',\'40\');" src = "img/cross.png" height= "10px" width= "10px">'
								total = total + 40;
								ifinsert = true;
								count++;
								 break;
		 
	}
	
}
if(ifinsert == true)
{
	document.getElementById("viewcart-p").innerHTML = "View Cart ("+count+")";
cart.innerHTML+= '</table>';
cart.innerHTML = cart.innerHTML + '<bR><tr><td><b>Total: </b></td><td><b>&#8377;'+ total+'</b></td></tr></table><br><center><button id = "addtocart" onClick="javascript:viewcartpage();" style="width:80%;height:40px">Go To Cart</button></center>';
}
else 
{
	document.getElementById("viewcart-p").innerHTML = "View Cart (0 items)";
	cart.innerHTML = "Cart is Empty";
}
}
</script>
</html>