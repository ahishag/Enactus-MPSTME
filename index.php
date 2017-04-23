
<?php
$connection=mysqli_connect('192.186.210.163','enactusmpstme','PariPatchi123','i1119281_wp2');
session_start();
if(isset($_SESSION['count']))
{
	session_destroy();
}

if($_SESSION['orderplaced']==1)
{
	echo '<script>alert("Order Placed Successfull");</script>';
	unset($_SESSION['orderplaced']);
}
?>
<!--Roboto, fira sans -->
<!DOCTYPE html>
<html lang="en">

<head>
<?php include("include/header.php"); ?>
<div id="feedback">
<br><br><br><br>
<p>Feedback</p>	
</div>
<?php
	if(isset($_POST['feedback-submit']))
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		$query = mysqli_query($connection,"insert into feedback (name, email, subject, message) values ('$name','$email','$subject','$message')");
		if($query)
			echo '<script>alert("Thank you for your feedback");</script>';
		else echo '<script>alert("Some error occured, please try again later");</script>';
	}
?>
<div id="feedback-form" >
<div id="feedback-content-div" style="width:40%;margin-left:30%;height:332px;background-color:#f8f8f8;">
<form action="#" method="post">
          <div class="box">
            <center><h1>Feedback</h1></center>
            <label>
               <span>Full name *</span>
               <input style="color:#fff;" type="text" class="input_text" name="name" id="name"/>
            </label>
             <label>
               <span>Email *</span>
               <input style="color:#fff;" type="text" class="input_text" name="email" id="email"/>
            </label>
             <label>
                <span>Subject *</span>
                <input style="color:#fff;" type="text" class="input_text" name="subject" id="subject"/>
            </label>
            <label>
                <span>Message *</span>
                <input style="color:#fff;" type="text" class="input_text" name="message" id="message"/>
            </label>
			<label>
			<input type="submit" name = "feedback-submit" class="button" value="Submit Form"/>
            </label>
        </div>
        
    </form></div>
</div>
<div class="content-main">

<div class="slider">
<figure>
<div class="slide">
	<div class="banner-button">
		<a href="parivartan.html" id="banner-button-a">Project Parivartan</a>
	</div>
	<div class="info-banner">
		<p id="info-banner-p">Causing a green impact in the community of trash pickers</p>
	</div>
	<img src="img/slide-banner1.jpg">
</div>
<div class="slide">
<div style="left:36%;" class="banner-button">
		<a href="patched.html" id="banner-button-a">Project Patched</a>
	</div>
	<div style="left:36%;background-color:rgba(50,50,50,.9);" class="info-banner">
		<p id="info-banner-p">Bringing a change in the lives of trafficked women</p>
	</div>
	<img src="img/slide-banner3.jpg">
</div>
<div class="slide">
	<div style="left:69.5%;" class="banner-button">
		<a href="products.php" id="banner-button-a-store">Store</a>
	</div>
	<div style="left:69.5%;" class="info-banner">
		<p id="info-banner-p">Check out our beautiful products</p>
	</div>
	<img src="img/slide-banner2.jpg">
</div>
</figure>
</div>
<section>
<div id="about-us">
<h1><strong>Who We Are</strong></h1>
<p><b>Enactus</b> is a community of students, academic and business leaders. We believe that a dedicated <b>entrepreneurial</b> action can transform and shape lives in a sustainable manner.
An <b>international non-profit organization</b>, changing the society and the world around us by keeping in close contact with the <b>17 UN Sustainable Development Goals</b>. Enactus believes in teaching the socially backward classes, skills and create entrepreneurs out of them.
Along with giving a new life to sectors of the society who face social stigmas at unimaginable levels, Enactus creates value-driven social business leaders of tomorrow.
</p>
<p><b>Enactus MPSTME</b>, currently in its fifth academic year, revolves around what people in general see today and choose to ignore. Our first project was an attempt at starting an ecommerce portal for NGO handicrafts. It was built in a record time of 4 months. From this project, we founded two other projects- Patched and Parivartan, which today are in their scaling stages and together cover 7 UN Sustainable Development Goals alone.</p>
<br><br>
</section>
<section>
<div id="our-projects" class="section-inside">
<h1><strong>Our Current Social Entrepreneurial Projects</strong></h1>
	<div id="project-div1" class="project-div">
		<img src="img/patched-logo.png" height="90%" ></img>
		<div id="patch-div" style="float:left;display:none">
			<center>
			<p style="text-align:justify;padding:5px;margin-bottom:30px;">
			<br>
			Patched is a woman empowerment project striving to make a difference in the lives of trafficked women through its Triple E model of Education, Entrepreneurship and Empowerment. Patched is an honest effort to bring change and hope into the lives of these women who never had the chance to do what they dreamed of. They were never given the opportunity to rise to their full potential. It is up to us to help them escape this flesh trade and attain a new lease of life. <br>
			</p>
			<a class="view" href="patched.html" class="" role="button">READ MORE</a>
			</center>
		</div>
		<br>
	</div>
	<div id="project-div2" class="project-div" >
		<center><img src="img/parivartan-logo.jpg" height="415px" ></img></center>
		<div id="pari-div" style="display:none">
			<center>
				<p style="text-align:justify;padding:5px;margin-bottom:30px">
				<br>
				Project Parivartan is an implementation of the need of the hour - environmental conservation. We work with the diverse, economically weaker sections of the society who are in desperate need  of an opportunity to realize their potential for better standards of living. Our dual aim is to build a social and a business model that will create a business for, of and by the beneficiaries, to increase their rate of average income along with better facilities in the aspect of health, sanitation and hygiene.
				</p>
				<a class="view" href="parivartan.html" class="" role="button">READ MORE</a>
			</center>
		</div>
		<br>
	</div>
</div>

<div id="our-projects-mobile" style="height:auto;"class="section-inside">
<h1><strong>Our Projects</strong></h1><br>
	<div style="background-color:#fff;"class="card">
	<center><img src="img/patched-logo.png" width="80%" ></img><br>
	<a class="view" href="patched.html" class="" role="button">READ MORE</a></center>
	<br><br>
	</div>
	<br>
	<div style="background-color:#fff;"class="card">
	<br>
	<center><img src="img/parivartan-logo.jpg" width="60%" ></img><br><br><br>	
	<a class="view" href="parivartan.html" class="" role="button">READ MORE</a></center>
	<br><br>
	</div>
</section>

<section >
<div id="partners" class = "section-inside" style="height:492px;background-color:#fff;">
<h1><strong>Partners</strong></h1>
<div style="width:50%;float:left;margin-top:50px;">
<center>
<img src="img/Partners.png" height="300dp" width="350dp">
</center>
</div>
<div id = "partner-content" style="width:50%;float:left;margin-top:65px;</div>">
<h2 style="font-size:25px;"><b>Media Partner</b></h2>
<p style="font-size:18px;">Help be our voice in the world! Be it on newspaper, blog or radio; partner with us in our campaigns and events to share our mission and unite the nation to make a difference.
</p>
<br><Br>
<h2 style="font-size:25px;"><b>Store Partner</b></h2>
<p style="font-size:18px;">
There are 2 ways you can help us. You can be our resource partner for us to purchase material for our events and production of products or you can display our product samples or sell them at your store! <br><br>If you are interested – leave us a message.
</p>
</div>

</div>
</section>


</div>
</div>
<?php include("include/footer.php");?>
</body>
<script>

window.addEventListener('scroll', function(e){
            var distanceY2 = window.pageYOffset || document.documentElement.scrollTop;
			
                
			if(distanceY2>600)
			{
				document.getElementById("feedback").style.display="block";
			}
			else{
				document.getElementById("feedback").style.display="none";
			}
        });

document.getElementById("project-div1").addEventListener("mouseover",function(){
		document.getElementById("patch-div").style.display="block";
	});
	document.getElementById("project-div1").addEventListener("mouseout",function(){
		document.getElementById("patch-div").style.display="none";
	});
	document.getElementById("project-div2").addEventListener("mouseover",function(){
		document.getElementById("pari-div").style.display="block";
	});
	document.getElementById("project-div2").addEventListener("mouseout",function(){
		document.getElementById("pari-div").style.display="none";
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
	function imagehover(e)
{
	e.style.height = "80%";
	e.style.width = "100%";
	var a = document.getElementsByClassName("image");
	for(var i=0;i<a.length;i++)
	{
		if(a[i]==e)
		{
			continue;
		}
		else {
			a[i].style.height = "0px";
			a[i].style.width = "0px";
		}
	}
	
}

function imagehoverout()
{
	var a = document.getElementsByClassName("image");
	for(var i=0;i<a.length;i++)
	{
		a[i].style.height = "200px";
		a[i].style.width = "200px";
		
	}
	
}

function addSocial()
{
	var x = document.getElementById("list-content-social");
	if(x.style.display=="none")
		x.style.display="block";
	else x.style.display="none";
}

function addContact()
{
	var x = document.getElementById("list-content-contact");
	if(x.style.display=="none")
		x.style.display="block";
	else x.style.display="none";
}
</script>
</html>