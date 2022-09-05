<?php

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
<form action= \"\" method = \"POST\">
    
    <h5>Username
    </h5>
    <input type = \"text\" name = \"userName\">
    
    
    <h5>First Name
    </h5>
    <input type = \"text\" name = \"userFirstName\">
    
    
    <h5 style = \"color:grey\">Mobile Number
    </h5>
    <input type = \"text\" name = \"userMobile\">
    

    <h5>Password
    </h5>
    <input type = \"password\" name = \"userPassword\">
    
    
    <h5>Retype Password
    </h5>
    <input type = \"password\" name = \"userPassword2\">
    <br><br><br>
        
    <input style=\"font-size: 15px ; font-family:Georgia ; background-color:silver; border-radius: 12px;\" type = \"submit\" name = \"userSubmit\" value = \"Sign Up as User\">
    <input style=\"font-size: 15px ; font-family:Georgia ; background-color:silver; border-radius: 12px;\" type = \"submit\" name = \"adminSubmit\" value = \"Sign Up as Admin\">
</form>
</center>

<br><br><br><br>

<br><br><br><br>
<footer style=\"text-align: right; font-style:Tw Cen MT; color:white\">Copyright &copy; 2020, UMSCAR. All Rights Reserved.
</footer>

</body>  
";

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

if(isset($_POST['userSubmit']))
{
    $userName = $_POST['userName'];
    $userFirstName = $_POST['userFirstName'];
    $userMobile = $_POST['userMobile'];
    $userPassword = $_POST['userPassword'];    

    $sql = "INSERT INTO user (userName, userFirstName, userMobile, userPassword)
    VALUES ('$userName', '$userFirstName', '$userMobile', '$userPassword')";
    
    if ($conn->query($sql) == TRUE) 
    {
        
        header("Location:Login.php");
            exit;
        
    }

    else 
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }   
}

else if(isset($_POST['adminSubmit']))
{
    $adminName = $_POST['userName'];
    $adminFirstName = $_POST['userFirstName'];
    $adminMobile = $_POST['userMobile'];
    $adminPassword = $_POST['userPassword'];    

    $sql = "INSERT INTO admin (adminName, adminFirstName, adminMobile, adminPassword)
    VALUES ('$adminName', '$adminFirstName', '$adminMobile', '$adminPassword')";
    
    if ($conn->query($sql) == TRUE) 
    {
        //echo "New record created successfully";
        
        header("Location:Login.php");
        exit;
        
    }

    else 
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }   
}

$conn->close();
?>

