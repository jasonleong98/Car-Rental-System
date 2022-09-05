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
    <img src = \"Instagram.png\" width=\"70\" height=\"70\" align=right> </a> 

    <a href=\"https://www.facebook.com\">
    <img src = \"Facebook.png\" width=\"70\" height=\"70\" align=right> </a>

    <br>

    <a href=\"Homepage.php\">
    <img src = \"Icon.jpg\" width=\"70\" height=\"70\"></a>

    <div id=\"box\">
		<ul>
			<li><a href=\"Homepage.php\" style=\"color:black; text-decoration:none\">HOME</a></li>
			<li><a href=\"Carlist.php\"  style=\"color:black; text-decoration:none\">RENT</a></li>
			<li><a href=\"Gallery.php\"  style=\"color:black; text-decoration:none\">GALLERY</a></li>
			<li><a href=\"About Us.php\" style=\"color:black; text-decoration:none\">ABOUT US</a></li>
			<li><a href=\"Contact.php\"  style=\"color:black; text-decoration:none\">CONTACT US</a></li>
		</ul>
	</div>

    <a href=\"MyProfile.php\">
    <img src = \"user.jpg\" width=\"70\" height=\"70\"></h3></a>

    <br><br><br><br><br><br>

    
<center>
<table>
  <tr>
    <th>
        <h4><a href=\"MyProfile.php\">EDIT PROFILE</a></h4>
        <h4><a href=\"MyBooking.php\">MY BOOKING</a></h4>
        <h4><a href=\"Notifications.php\">NOTIFICATIONS</a></h4>
        <br><br>
        <h4><a href=\"Homepage.php\">SIGN OUT</a></h4>
    </th>
    <th>
    
        <form action = \"Notifications.php\" method = \"POST\">

        <fieldset>
        <center>NOTIFICATIONS</center>
        <br><br>
    
        <center>
    
       
    
        <table color=\"black\" border=\"1\">
        <tr>
            <th>Topic</th>
            <th>Date</th>
            <th>Reply</th>
        </tr>
        <tr>
            <td>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</td>
            <td>xx/xx/xxxx</td>
            <td><input type = \"button\" onclick = \"MyWindow=window.open('Reply.php','MyWindow',width=100,height=250); return false;\" value = \"Reply\"></td>
        
        </tr>
        <tr>
            <td>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</td>
            <td>xx/xx/xxxx</td>
            <td><input type = \"button\" name = \"Reply\" value = \"Reply\"></td>
        </tr>
        <tr>
            <td>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</td>
            <td>xx/xx/xxxx</td>
            <td><input type = \"button\" name = \"Reply\" value = \"Reply\"></td>
        </tr>
        <tr>
            <td>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</td>
            <td>xx/xx/xxxx</td>
            <td><input type = \"button\" name = \"Reply\" value = \"Reply\"></td>
        </tr>
        <tr>
            <td>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</td>
            <td>xx/xx/xxxx</td>
            <td><input type = \"button\" name = \"Reply\" value = \"Reply\"></td>
        </tr>
        </table>
        </center>
        <br><br><br>
    
    
    <input name=\"DELETE\" type=\"submit\" value=\"Delete\" onclick=\"return confirm('Are you sure you want to delete?')\">
    
  
    
    </fieldset>
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