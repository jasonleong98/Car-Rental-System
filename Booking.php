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

        $number =$_POST['car'];
        $_SESSION['sCarId'] = $number;

        if(isset($_POST['car']))
        {
            
    
            $sql = "SELECT * FROM car
            WHERE carId = '$number'";
    
            $result = $conn->query($sql);
    
            if($result->num_rows > 0)
            {    
                 while($row = $result->fetch_assoc())
            {
                echo "
                <center>
                <table>
                <tr>
                <th>
                    <img src=\"data:image/jpeg;base64," . base64_encode( $row['carImage'] ). "\" width=\"400\" height=\"400\">
                </th>
    
                <th>
                <form action = \"OrderSummary.php\" method = \"POST\"><h5 style = \"color:white\">
                <fieldset>"
                . $row["carName"] 
                . "<br><br>" 
                . $row["carDesc"] 
                . "<br><br>" 
                ."RM". $row["carPrice"] ."/hour"
                . "<br><br>"     
                ."Starting Time (Eg. 1.00pm):<br>"
                ."<input type = \"text\" name = \"bookingTime\">"  
                . "<br><br>"      
                ."How many hour(s):<br>"    
                ."<input type = \"text\" name = \"bookingDuration\">"
                . "</fieldset> <br><br>
            
                <fieldset>
                Words From Admin: Drive Safe. Enjoy.
                </fieldset>
                </th>    
                <th>
                <br><br>
                <center>
                <input style=\"font-size: 45px ; font-family:Georgia ; background-color:silver; border-radius: 12px;\" type=\"submit\" name=\"booknow1\" value=\"BOOK NOW\" style=\"font-size: 40px\" >
                <br><br><br><br>
                </center>
        
                <fieldset><h5 style = \"color:white\">
                T&C
                <br><br><br><br>
                The purpose of these Terms is to set out the rights, obligations and other necessary matters between the Member and the Company, and the procedures for the use of the Services, the Application and Website.
                </h5></fieldset>
                </h5></form>
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
    
        
$conn->close();
echo"
<br><br><br><br><br><br>
<footer style=\"text-align: right; font-style:Tw Cen MT; color:white\">Copyright &copy; 2020, UMSCAR. All Rights Reserved.
</footer>

</body>
";





?>