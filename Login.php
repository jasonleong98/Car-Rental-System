<?php
session_start();

echo"

<header>
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
";

echo "
<center>
<form action = \"\" method = \"POST\">
   <h5> Username
    </h5>
    <input type = \"text\" name = \"userName\">
    <br>

   <h5> Password
    </h5>
    <input type = \"password\" name = \"userPassword\">
    <br><br><br>
        
    <input style=\"font-size: 15px ; font-family:Georgia ; background-color:silver; border-radius: 12px;\" type = \"submit\" name =\"submitUser\" value = \"Login As User\">
    <input style=\"font-size: 15px ; font-family:Georgia ; background-color:silver; border-radius: 12px;\" type = \"submit\" name=\"submitAdmin\" value = \"Login As Admin\">
</form>

<form action=\"Register.php\" method=\"POST\">
    <input style=\"font-size: 15px ; font-family:Georgia ; background-color:silver; border-radius: 12px;\" type = \"submit\" value = \"Sign Up\">
    <br><br>
</form>
</center>

<br><br><br><br>

<br><br><br><br>
<footer style=\"text-align: right; font-style:Tw Cen MT; color:white\">Copyright &copy; 2020, UMSCAR. All Rights Reserved.
</footer>

</body>  
";



if(isset($_POST['submitUser']))
{
    $userName = $_POST['userName'];
    $userPassword = $_POST['userPassword'];
    
    $sql = "SELECT * FROM user WHERE userName = '$userName' AND userPassword = '$userPassword'";
    
    $res = $conn->query($sql);
    $row = mysqli_fetch_assoc($res);
    
    $_SESSION['sUserId'] = $row['userId'];
    
    if ($res->num_rows > 0) 
    {    
        header("Location:MyProfile.php"); 
        exit; 
    }

    else echo " <script> alert('Invalid Login') </script> ";
}

else if(isset($_POST['submitAdmin']))
{
    $adminName = $_POST['userName'];
    $adminPassword = $_POST['userPassword'];
    
    $sql = "SELECT * FROM admin WHERE adminName = '$adminName' AND adminPassword = '$adminPassword'";
    
    $res = $conn->query($sql);
    $row = mysqli_fetch_assoc($res);
    
    $_SESSION['sAdminId'] = $row['adminId'];
    
    if ($res->num_rows > 0) 
    {    
        header("Location:AdminProfile.php"); 
        exit; 
    }
    
    else echo " <script> alert('Invalid Login') </script> ";

}

$conn->close();
    
    
?>