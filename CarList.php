<?php

session_start();

echo "
<body> 

<link rel=\"stylesheet\" type=\"text/css\" href=\"styles.css\">

<body background=\"bg22.jpg\" style=\"background-image:url(bg22.jpg); background-repeat:no-repeat; background-size:cover\">

<a href=\"https://globfone.com/\" style=\"color:white; font-style:Tw Cen MT;\">012-3456789</a> &nbsp

<a href=\"mailto:email@email.com\" style=\"color:white; font-style:Tw Cen MT; \">email@email.com</a>

<a href=\"https://www.instagram.com\">
<img src = \"instagram.png\" width=\"70\" height=\"70\" align=right> </a> 

<a href=\"https://www.facebook.com\">
<img src = \"facebook.png\" width=\"70\" height=\"70\" align=right> </a>

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

<a href=\"MyProfile.php\">
<img src = \"l.png\" width=\"70\" height=\"70\"></h3></a>


<br>";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "group6db";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}


$result = mysqli_query($conn, "SELECT * FROM car");
$number=31;

while($row = mysqli_fetch_array($result))
{
    echo '<img height="350" width="411" src="data:image/jpeg;base64, ' .base64_encode($row['carImage']). ' "/>';
    
    echo"<form style =\" display:inline; \" action = \"Booking.php\" method = \"POST\">
    
    <input type = \"text\" name = \"car\" value = \"$number\" hidden>
    <input type = \"submit\" name=\"click\" value = \"View Detail\">
    </form>";
    $_SESSION['sNumber'] = $number;
    $number++;
}



echo"
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer style=\"text-align: right; font-style:Tw Cen MT; color:white\">Copyright &copy; 2020, UMSCAR. All Rights Reserved.
</footer>
";
?>