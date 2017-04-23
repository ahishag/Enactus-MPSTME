<meta charset="utf-8" />

<meta name="description" content="" />
<title>Enactus MPSTME</title>
    
	
	<link rel="shortcut icon" type="image/x-icon" href="img/en-icon.ico">
<!-- css -->
<link rel="stylesheet" href="css/style.css" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" href="css/menu-button.css" />
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<!-- js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/classie.js"></script>
<script>
function init() {
	var oncehide=false;
	var once = false;
    window.addEventListener('scroll', function(e){
		if(window.innerWidth>=1000)
		{
			document.getElementById("list-content-social").style.display="block";
			document.getElementById("list-content-contact").style.display="block";
        }
		else if(!oncehide){
			document.getElementById("list-content-social").style.display="none";
			document.getElementById("list-content-contact").style.display="none";
			oncehide = true;
		}
		var distanceY = window.pageYOffset || document.documentElement.scrollTop,
        shrinkOn = 25,
        header = document.querySelector("header");
        if (distanceY > shrinkOn) {
            classie.add(header,"smaller");
			if(once==false){
				$('#bird').fadeOut(300, function(){
					$(this).attr('src','assets/img/bird.png').bind('onreadystatechange load', function(){
						if (this.complete) $(this).fadeIn(300);
						$('#bird').css("height","35px");
						$('#bird').css("margin-top","7.5px");
					});
				});
				once = true;
			}	
        } 
		else {
            if (classie.has(header,"smaller")) {
                classie.remove(header,"smaller");
				$('#bird').fadeOut(300, function(){
					$(this).attr('src','assets/img/logo.png').bind('onreadystatechange load', function(){
						if (this.complete) $(this).fadeIn(300);
						$('#bird').css("height","");
						$('#bird').css("margin-top","");
					});
				});
				once= false;
            }
        }
});
}
    window.onload = init();
	
</script>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}



</script>
</head>



<body >
<header>
    <div class="container clearfix">
		<img style="margin-right:20px;" id="bird" src = "assets/img/logo.png"></img>
		
        <nav id="navbar">
            <a href="#top">Home </a>
            <a href="#about-us" class="submenu-icon">About Us</a>
            <a href="#our-projects" class="submenu-icon">Projects </a>
			<a href="products.php">Store</a>			
			<a href="#partners">Partners</a>
			<!--<a href="#gallery">Gallery</a> -->
			<a href="#footer">Contact us </a>
        </nav>
		
		<div class="dropdown">
		<img src = "img/menu-icon.png" onclick="myFunction()" class="dropbtn"></img>
		<div id="myDropdown" class="dropdown-content">
			<a href="#top">Home </a>
            <a href="#about-us" class="submenu-icon">About Us</a>
            <a href="#our-projects" class="submenu-icon">Projects </a>
			<a href="products.php">Store</a>			
			<a href="#partners">Partners</a>
			<!--<a href="#gallery">Gallery</a> -->
			<a href="#footer">Contact us </a>
		</div>
</div>
    </div>
</header>
