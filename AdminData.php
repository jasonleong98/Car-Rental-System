<?php

echo"

<header>
<link rel = \"stylesheet\" href = \"css.css\">
<style>

fieldset
{
    border:0px;
    background-color:white;
}

table
{
    border:0px;
    width:700px;
    text-align: left;
}

footer
{
   left: 0;
   bottom: 0;
   background-color: black;
   color: white;
   text-align:center;
   height:100px
}

</style>
</header>";


echo "
<body> 

<a href=\"https://globfone.com/\">012-3456789</a> &nbsp

<a href=\"mailto:email@email.com\">email@email.com</a>

<a href=\"https://www.instagram.com\">
<img src = \"instagram.png\" width=\"70\" height=\"70\" align=right> </a> 

<a href=\"https://www.facebook.com\">
<img src = \"facebook.png\" width=\"70\" height=\"70\" align=right> </a>

<br>

<a href=\"Homepage.php\">
<img src = \"icon.jpg\" width=\"70\" height=\"70\"></a>

<div id=\"box\">
		<ul>
			<li><a href=\"Homepage.php\" style=\"color:black; text-decoration:none\">HOME</a></li>
			<li><a href=\"Carlist.php\"  style=\"color:black; text-decoration:none\">RENT</a></li>
			<li><a href=\"Gallery.php\"  style=\"color:black; text-decoration:none\">GALLERY</a></li>
			<li><a href=\"About Us.php\" style=\"color:black; text-decoration:none\">ABOUT US</a></li>
			<li><a href=\"Contact.php\"  style=\"color:black; text-decoration:none\">CONTACT US</a></li>
		</ul>
	</div>
    
<a href=\"AdminProfile.php\">
<img src = \"AdminIcon.png\" width=\"70\" height=\"70\"></h3></a>

<br><br><br><br><br><br>

<center>
<table>
  <tr>
    <th>
        <h4><a href=\"AdminProfile.php\">EDIT PROFILE</a></h4>
        <h4><a href=\"AdminOrder.php\">MY ORDER</a></h4>
        <h4><a href=\"AdminListing.php\">EDIT LISTING</a></h4>
        <h4><a href=\"AdminForum.php\">FORUM</a></h4>
        <h4><a href=\"AdminData.php\">MY DATA</a></h4>
        <br><br>
        <h4><a href=\"Homepage.php\">SIGN OUT</a></h4>
    </th>
    <th>
    
            <h3 style =\"font-family:Times New Roman; font-size:15px;\"> Total Gain : 
            <input type=\"text\" value=\"RM128\" name=\"TotalGain\"></h3>

            <h3 style =\"font-family:Times New Roman; font-size:15px;\"> First Order : 
            <input type=\"text\" value=\"RM18\" name=\"TotalGain\"> </h3>
            
            <h3 style =\"font-family:Times New Roman; font-size:15px;\"> Second Order : 
            <input type=\"text\" value=\"RM24\" name=\"TotalGain\"> </h3>
            
            <h3 style =\"font-family:Times New Roman; font-size:15px;\"> Third Order : 
            <input type=\"text\" value=\"RM12\" name=\"TotalGain\"> </h3>
            
            <h3 style =\"font-family:Times New Roman; font-size:15px;\"> Fourth Order : 
            <input type=\"text\" value=\"RM30\" name=\"TotalGain\"> </h3>
            
            <h3 style =\"font-family:Times New Roman; font-size:15px;\"> Fifth Order : 
            <input type=\"text\" value=\"RM24\" name=\"TotalGain\"> </h3>
            
            <h3 style =\"font-family:Times New Roman; font-size:15px;\"> Sixth Order : 
            <input type=\"text\" value=\"RM18\" name=\"TotalGain\"> </h3>
            
   
            <form action = \"AdminData.php\" method = \"POST\">

            <center><input type = \"date\"></center>

            </form>
    </th>
    </tr>
</table>
</center>

<footer>
        <p></p>
</footer>

</body>
";





?>