<?php

echo "
<body>

<link rel=\"stylesheet\" type=\"text/css\" href=\"styles.css\">

<body background=\"bg22.jpg\" style=\"background-image:url(bg22.jpg); background-repeat:no-repeat; background-size:cover\">

<a href=\"https://globfone.com/\" style=\"color:white; font-style:Tw Cen MT; \">012-3456789</a> &nbsp

<a href=\"mailto:email@email.com\" style=\"color:white; font-style:Tw Cen MT; \">email@email.com</a>

<a href=\"https://www.instagram.com\">
<img src = \"Instagram.png\" width=\"70\" height=\"70\" align=right> </a> 

<a href=\"https://www.facebook.com\">
<img src = \"Facebook.png\" width=\"70\" height=\"70\" align=right> </a>

<br>

<a href=\"index.php\">
<img src = \"logo.png\" width=\"70\" height=\"70\"></a>

<div id=\"box\">
		<ul>
			<li><a href=\"index.php\" style=\"color:white; text-decoration:none\">HOME</a></li>
			<li><a href=\"Carlist.php\"  style=\"color:white; text-decoration:none\">RENT</a></li>
			<li><a href=\"Gallery.php\"  style=\"color:white; text-decoration:none\">GALLERY</a></li>
			<li><a href=\"About Us.php\" style=\"color:white; text-decoration:none\">ABOUT US</a></li>
			<li><a href=\"Contact.php\"  style=\"color:white; text-decoration:none\">CONTACT US</a></li>
		</ul>
</div>

<a href=\"Login.php\">
<img src = \"Login.jpg\" width=\"70\" height=\"70\"></h3></a>

<br><br><br><br>

<center>
	<div class=\"slideshow-container\">
	<div class=\"mySlides fade\">
    <img src=\"bg26.jpg\" style=\"width:75%;height:75%\">
	</a>  
	</div> 
	</center>

	<center>
	<div class=\"mySlides fade\">
    <img src=\"bg24.jpg\" style=\"width:75%;height:75%\">
	</a>
	</div>
	</center>
	
	<center>
	<div class=\"mySlides fade\">
	<img src=\"bg28.jpg\" style=\"width:75%;height:75%\">
	</a>
	</div>
	</center>
	</div>
	<br>
    
    <div style=\"text-align:center\">
  <span class=\"dot\" onclick=\"currentSlide(1)\"></span> 
  <span class=\"dot\" onclick=\"currentSlide(2)\"></span> 
  <span class=\"dot\" onclick=\"currentSlide(3)\"></span> 
  </div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName(\"mySlides\");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = \"none\"; 
    }
  slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1} 
    slides[slideIndex-1].style.display = \"block\"; 
    setTimeout(showSlides, 2000); 
}
</script>
    
<center>    
<br>
<a href=\"CarList.php\"><input name =\"Rent\" type = \"button\" value =\"RENT\" style=\"font-size: 70px ; font-family:Georgia ; background-color:silver; border-radius: 12px;\"></a>
</center>

<br><br><br><br>

<footer style=\"text-align: right; font-style:Tw Cen MT; color:white\">Copyright &copy; 2020, UMSCAR. All Rights Reserved.
</footer>

</body>  
";


?>