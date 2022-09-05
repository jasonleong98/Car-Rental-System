<?php

function generateRandomString($length = 10) {
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

session_start();

$paymentId = generateRandomString(7);

$invoiceId = generateRandomString(6);

echo"

<header>
<link rel = \"stylesheet\" href = \"styles.css\">
<style>



table
{
    border:0px;
    width:1000px;
    text-align: left;
}



</style>
</header>";


echo "
<body> 

<body background=\"bg40.jpg\" style=\"background-image:url(bg40.jpg); background-repeat:no-repeat; background-size:cover\">

<a href=\"https://globfone.com/\" style=\"color:white; font-style:Tw Cen MT; \">012-3456789</a> &nbsp

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

<br><br><br><br><br><br>
 <center>
        <div id = \"border\">
        <table>
        <form action = \"\" method = \"POST\">
        
        
        <img src = \"p.png\" alt = \"P\"  width = \"250\" height = \"150\">
        <br>
        
        <table><tr>
        <th><h1 style = \"color:white\" >Payment Gateway</h1></th>  
        </tr>
        <tr>
        <td>
        <h5>Card Holder: </h5>
        <input type = \"text\" name = \"cardHolder\" size = \"50\"> 
        </td>
        <tr><td>
        <br><h5>Card Number: </h5>
        <input type = \"text\" name = \"cardNumber\" size = \"50\"> 
        </td></tr>
        <tr>
        <br><td><h5>Expiry date: </h5>
        <input type = \"text\" name = \"expiryDate\" size = \"50\"> </td>
        
        <td>
        <br><h5>CVC: <h5>
        <input type = \"password\" name = \"cvc\"> 
        </td></tr>
        <tr><td>
        <h5>Amount (RM) : </h5>
        <input type = \"text\" name = \"amount\"> <br>
        </td><tr>
        
        
        <tr><td><br><br>
        <input style=\"font-size: 35px ; font-family:Georgia ; background-color:silver; border-radius: 12px;\" type=\"submit\" name =\"paymentconfirm\" value=\"CONFIRM\" style=\"font-size: 34px\">
        </td></tr>
        
        <br><br>
        <tr><td>
        <h5><input type=\"checkbox\" value=\"tnc\">Agree with the T&C
        </h5></td></tr>
    </center>
    </table>
    </div>
    



<br><br><br><br><br><br>
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

if(isset($_POST['paymentconfirm']))
{   
    $userId = $_SESSION['sUserId'];
    $bookingId = generateRandomString(8);
    $_SESSION['sBookingId'] = $bookingId;
    
    
    $duration = $_SESSION['sBookingDuration'];
    $time = $_SESSION['sBookingTime'];
    $date = $_SESSION['sDate'];
    $carId = $_SESSION['sCarId'];
    $totalprice = $_SESSION['sTotalPrice'];
    $_SESSION['$sPaymentId'] = $paymentId;
    $_SESSION['$sInvoiceId'] = $invoiceId;
    
    
    $sql = "INSERT INTO booking 
    VALUES ('$bookingId', '$date', '$time', '$duration', '$totalprice','0','$carId', '$userId')";
     $result = $conn->query($sql);
    
    $sql = "INSERT INTO payment 
    VALUES ('$paymentId', '$totalprice', 'Credit Card', 'Successfully')";
    $result = $conn->query($sql);
    
    $sql = "INSERT INTO invoice 
    VALUES ('$invoiceId', '$date', '$bookingId','$paymentId')";
    
    if ($conn->query($sql) == TRUE) 
    {
        //echo "New record created successfully";
        
        echo " <script> alert('Booking Successfully') </script> ";
        
        header("Location:Review.php");
        exit;
        
    }
    
    else 
    {
        echo " <script> alert('Error') </script> ";
    }   
}

$conn->close();



?>