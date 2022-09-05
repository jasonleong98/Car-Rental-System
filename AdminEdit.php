<?php

session_start();

echo"

<header>
<style>

fieldset
{
    border:0px;
}

table
{
    border:0px;
    width:700px;
    text-align: left;
}

</style>
</header>";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "group6db";

//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}

    $adminId = $_SESSION['sAdminId'];  

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
    
        <form action = \"\" method = \"POST\">
        <fieldset><h5>
        <center><h4>Profile Details</h4></center>
        <br><br>
        
        Name : 
        <input type = \"text\" name = \"AdminName\">

        Age : 
        <input type = \"text\" name = \"Age\"><br><br>

        IC No : 
        <input type = \"text\" name = \"Ic\">
        <br><br>
    
        Phone No : 
        <input type = \"text\" name = \"Mobile\">
        <br><br><br>
    
        <input style=\"font-size: 15px ; font-family:Georgia ; background-color:silver; border-radius: 12px;\" type = \"submit\" name =\"save\" \" value = \"Save\">";




if(isset($_POST['save']))
{
    $adminFIrstName = $_POST['AdminName'];
    $adminAge = $_POST['Age'];
    $adminIc = $_POST['Ic'];
    $adminMobile = $_POST['Mobile'];
 
    
   $sql = "UPDATE admin SET adminFirstName = '$adminFIrstName', adminMobile = '$adminMobile', adminAge = '$adminAge', adminIc = '$adminIc'
   WHERE adminId = '$adminId'";

if($conn -> query($sql) == TRUE)
{
    echo " <script> alert('Saved Successfully') </script> ";
    header("Location:AdminProfile.php"); 
    exit;
}

else
{
     echo " <script> alert('Error') </script> ";
}

}
echo"    
        </h5></fieldset>
        </form>
    </th>
    </tr>
</table>
</center>
<br><br><br><br><br><br>
<footer style=\"text-align: right; font-style:Tw Cen MT; color:white\">Copyright &copy; 2020, UMSCAR. All Rights Reserved.
</footer>

</body>  
";

$conn->close();
?>