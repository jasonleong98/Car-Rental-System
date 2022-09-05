<?php

session_start();


echo"

<header>
<link rel = \"stylesheet\" href = \"css.css\">
<style>

table
{   
    color:white;
    border:0px;
    width:700px;
    text-align: left;
}


</style>
</header>";


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

<a href=\"indexA.php\">
<img src = \"logo.png\" width=\"70\" height=\"70\"></a>

<div id=\"box\">
		<ul>
			<li><a href=\"indexA.php\" style=\"color:white; text-decoration:none\">HOME</a></li>
			<li><a href=\"Carlist.php\"  style=\"color:white; text-decoration:none\">RENT</a></li>
			<li><a href=\"Gallery.php\"  style=\"color:white; text-decoration:none\">GALLERY</a></li>
			<li><a href=\"About Us.php\" style=\"color:white; text-decoration:none\">ABOUT US</a></li>
			<li><a href=\"Contact.php\"  style=\"color:white; text-decoration:none\">CONTACT US</a></li>
		</ul>
</div>

<a href=\"AdminProfile.php\">
<img src = \"l.png\" width=\"70\" height=\"70\"></h3></a>

<br><br><br><br>

<center>
<table>
  <tr>
    <th>
        <h4><a href=\"AdminProfile.php\" style=\"color:white; font-style:Tw Cen MT;\">EDIT PROFILE</a></h4>
        <h4><a href=\"AdminOrder.php\" style=\"color:white; font-style:Tw Cen MT;\">MY ORDER</a></h4>
        <h4><a href=\"AdminListing.php\" style=\"color:white; font-style:Tw Cen MT;\">EDIT LISTING</a></h4>
        <h4><a href=\"AdminForum.php\" style=\"color:white; font-style:Tw Cen MT;\">FORUM</a></h4>
        <br><br>
        <h4><a href=\"index.php\" style=\"color:white; font-style:Tw Cen MT;\">SIGN OUT</a></h4>
    </th>
    <th>
            <table style= \"border:1px black solid;width:400px;height:250px;text-align:center;\">
                <tr>
                    <th>
                        
                        <form action=\"\" method=\"post\" enctype=\"multipart/form-data\">
                        Car Name: <br><input type=\"text\" name=\"carName\"><br><br>
                        Car Price(per hour):<br> <input type=\"text\" name=\"carPrice\"><br><br>
                        Car Description:<br><input type=\"text\" name=\"carDesc\"><br><br>
                        
                        <h5 style = \"color:black\">Select File to Upload:</h5>
                        <input style=\"font-size: 15px ; font-family:Georgia ; background-color:black; border-radius: 12px;\" type=\"file\" name=\"file\">
                        <input style=\"font-size: 15px ; font-family:Georgia ; background-color:silver; border-radius: 12px;\" type=\"submit\" name=\"submit\" value=\"Add Car\">
                        </form>
                    

                    </th>
                </tr>
                </table>
                <br>
            

    </th>
    </tr>
</table>
</center>

<br><br><br><br><br><br>
<footer style=\"text-align: right; font-style:Tw Cen MT; color:white\">Copyright &copy; 2020, UMSCAR. All Rights Reserved.
</footer>

</body>
";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "group6db";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

   $adminId = $_SESSION['sAdminId'];
   

if (isset($_POST['submit'])){
    //$image = $_FILES['file']['name'];
    $carName = $_POST['carName'];
    $carPrice = $_POST['carPrice'];
    $carDesc = $_POST['carDesc'];
    
    $image = addslashes(file_get_contents($_FILES['file']['tmp_name'])); 
    $imgName = addslashes($_FILES['file']['name']);
    
    $sql = "INSERT INTO car (carName, carPrice, carDesc, carImage, carImageName, ownerId) VALUES ('$carName', '$carPrice', '$carDesc' , '$image','$imgName','$adminId')";
    mysqli_query($conn, $sql);
}
?>