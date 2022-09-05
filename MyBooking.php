<?php

session_start();

echo"

<header>
<link rel = \"stylesheet\" href = \"css.css\">
<style>



#border
{
    box-sizing: border-box;
    width: 600px;
    height: 520px;
    padding: 30px;
    border: 10px solid black;

}

p.solid
{
    border-style: solid;
    background-color: DarkBlue;
    width: 250px;
    color: white;
    
}

table
{
    border: 1px solid gold;
    color:white;
    
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

<a href=\"indexU.php\">
<img src = \"logo.png\" width=\"70\" height=\"70\"></a>

<div id=\"box\">
		<ul>
			<li><a href=\"indexU.php\" style=\"color:white; text-decoration:none\">HOME</a></li>
			<li><a href=\"Carlist.php\"  style=\"color:white; text-decoration:none\">RENT</a></li>
			<li><a href=\"Gallery.php\"  style=\"color:white; text-decoration:none\">GALLERY</a></li>
			<li><a href=\"About Us.php\" style=\"color:white; text-decoration:none\">ABOUT US</a></li>
			<li><a href=\"Contact.php\"  style=\"color:white; text-decoration:none\">CONTACT US</a></li>
		</ul>
</div>

<a href=\"MyProfile.php\">
<img src = \"l.png\" width=\"70\" height=\"70\"></h3></a>

<br><br><br><br>

<center>
<table style =\" border: 0px; \">
  <tr>
    <th>
        <h4><a href=\"MyProfile.php\"  style=\"color:white; font-style:Tw Cen MT; \">EDIT PROFILE</a></h4>
        <h4><a href=\"MyBooking.php\"  style=\"color:white; font-style:Tw Cen MT; \">MY BOOKING</a></h4>
        <br><br>
        <h4><a href=\"index.php\"  style=\"color:white; font-style:Tw Cen MT; \">SIGN OUT</a></h4>
    </th>
    <th>";




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
            

        $userId = $_SESSION['sUserId'];

        $sql = "SELECT * FROM booking
        WHERE userId = '$userId'";
        $result = $conn->query($sql);    




        if($result->num_rows > 0)
        {  
        while($row = $result->fetch_assoc()) {     
        echo "

        <table><tr ><th style=\"border:1px solid gold\"><h5>Booking ID</h5></th><th style=\"border:1px solid gold\"><h5>Booking Date<h5></th><th style=\"border:1px solid gold\"><h5>Booking Time<h5></th><th style=\"border:1px solid gold\"><h5>Hours<h5></th><th style=\"border:1px solid gold\"><h5>Price<h5></th></tr>";
        echo" <tr style = \" border:2px solid gold \"><h5><td>".$row["bookingId"]."</td><td>".$row["bookingDate"]."</td><td>".$row["bookingTime"]."</td><td>".$row["bookingDuration"]."</td><td>".$row["bookingPrice"]."</td></h5></tr></table><br><br>";
        }
        }
        else echo " <script> alert('Data Error') </script> ";












        echo "
    </th>
    </tr>
</table>
</center>

<br><br><br><br><br><br>
<footer style=\"text-align: right; font-style:Tw Cen MT; color:white\">Copyright &copy; 2020, UMSCAR. All Rights Reserved.
</footer>

   
</body>    
";

?>