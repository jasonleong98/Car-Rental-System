<?php

session_start();

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


        $carId = $_SESSION['sCarId'];



        if(isset($_POST['booknow1']))
        {
    
            $bookingDuration = $_POST['bookingDuration'];
            $_SESSION['sBookingDuration'] = $bookingDuration;
            $bookingTime = $_POST['bookingTime'];
            $_SESSION['sBookingTime'] = $bookingTime;
            $date = date("Y/m/d");
            $_SESSION['sDate'] = $date;
            
            $sql = "SELECT * FROM car
            WHERE carId = '$carId' ";
        
            $result = $conn->query($sql);
    
            if($result->num_rows > 0)
            {    
                 while($row = $result->fetch_assoc())
            {
                $price = $row["carPrice"];
                $totalprice = $price*$bookingDuration;
                $_SESSION['sTotalPrice'] = $totalprice;
                     
                echo "
                <center>
                <table>
                <tr>
                <th>
                    <img src=\"data:image/jpeg;base64," . base64_encode( $row['carImage'] ). "\" width=\"400\" height=\"400\">
                    
                </th>
    
                <th>
                <form action = \"Payment.php\" method = \"POST\"><h5 style = \"color:white\">
                <fieldset>"
                . $row["carName"] 
                . "<br><br>" 
                . date("Y/m/d")
                . "<br><br>" 
                ."Starting Time:<br>"
                .$bookingTime
                . "<br><br>" 
                ."Time Duration:<br>"
                .$bookingDuration."hour(s)"
                . "<br><br>" 
                ."Total Price:<br>"
                ."RM "
                . $totalprice
                . "</h5></fieldset> <br><br>
                
                <center>
                <input style=\"font-size: 45px ; font-family:Georgia ; background-color:silver; border-radius: 12px;\" type=\"submit\" name=\"confirm1\" value=\"CONFIRM\" style=\"font-size: 40px\">
                </center>
                
                </form>
                </th>
    
    
                </tr>
                </table>
                </center>";
            }
            }
        
            
            
            else
            {
                echo " <script> alert('Data Error') </script> ";
            }
        }

echo"
<br><br><br><br><br><br>
<footer style=\"text-align: right; font-style:Tw Cen MT; color:white\">Copyright &copy; 2020, UMSCAR. All Rights Reserved.
</footer>

</body>
";





?>