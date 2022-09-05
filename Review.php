<?php

session_start();

echo"

<header>
<style>





#border
{
    box-sizing: border-box;
    width: 600px;
    height: 520px;
    padding: 30px;
    border: 10px solid gold;

}

p.solid
{
    border-style: solid;
    background-color: gold;
    width: 250px;
    color: black;
    
}

p
{
    color:white;
}

table, th, td, tr
{
    border: 1px solid silver;
    color:white;
    
}


</style>
</header>";


echo "

    <body> 
    
<link rel = \"stylesheet\" href = \"styles.css\">

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
    <div align=right>
    <a href=\"MyBooking.php\"><input name =\"Exit\" type = \"button\" value =\"X\"></a>
    </div>
<b><pre><p style = \"font-size: 18px;\">UMSKAL CAR RENTAL SYSTEM                      INVOICE</p></pre></b> 
<pre><p style = \"font-size: 12px; text-align = left;\">University Malaysia Sabah                                        Date: ";

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
            $bookingDuration = $_SESSION['sBookingDuration'];
            $bookingId =$_SESSION['sBookingId']; 
            
            $sql = "SELECT * FROM invoice
            WHERE bookingId = '$bookingId' ";
            
            $result = $conn->query($sql);
            
            if($result->num_rows > 0)
            {    
                 while($row = $result->fetch_assoc())
                 {
                     echo $row["invoiceDate"];
                     echo" </p></pre>
                     
                <pre><p style = \"font-size: 12px;\">Labuan International Campus,                                    Invoice ID: ". $row["invoiceId"]."</p></pre>";
                 }
                
            }

            else
            {
                echo " <script> alert('Data Error') </script> ";
            }

            $sql = "SELECT * FROM booking
            WHERE bookingId = '$bookingId' ";
            
            $result = $conn->query($sql);
            
            if($result->num_rows > 0)
            {
                while($row = $result->fetch_assoc())
                {
                      echo"    
                      <pre><p style = \"font-size: 12px; text-align: left;\">Jalan Sungai Pagar,                                          Booking ID: ".$row["bookingId"]."</p></pre>
                      <p style = \"font-size:12px; text-align: left;\">87000 Labuan Federal Territory,</p>
                      <p style = \"font-size:12px; text-align: left;\">Malaysia.</p>
                      <p style = \"font-size: 12px; text-align: left;\">Phone: 012-3456789</p>
                      <p style = \"font-size: 12px; text-align: left;\">Website: email@email.com</p>
                     
                     <div align = left>
                     <p class = \"solid\">BILL TO</p>
                     
                     <p>Name: " .$_SESSION['sUserFirstName']." <br>
                     Contact: ".$_SESSION['sUserMobile']."<br>
                     Booking Date: ".$row["bookingDate"]." <br>
                     Booking Time: ".$row["bookingTime"]." <br></p>

                    </div>
                    <br>
                    <table>
   <tr>
   <th>No.</th>
   <th>Description &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
   <th>Duration (Hours)&nbsp&nbsp&nbsp&nbsp</th>
   <th>Price(RM)&nbsp&nbsp&nbsp</th>
   </tr>";
                }
            }

            else
            {
                echo " <script> alert('Data Error') </script> ";
            }

            $sql = "SELECT * FROM car
            WHERE carId = '$carId' ";
            
            $result = $conn->query($sql);
            
            if($result->num_rows > 0)
            {
                while($row = $result->fetch_assoc())
                {
                    echo"
                    
                    <tr>
                    <td>1.</td>
                    <td>".$row["carName"]."</td>
                    <td>".$bookingDuration."</td>
                    
                    
                    
                    
                    
                    
                    ";
                }
            }

            else
            {
                echo " <script> alert('Error') </script> ";
            }


            $sql = "SELECT * FROM booking
            WHERE bookingId = '$bookingId' ";
            
            $result = $conn->query($sql);
            
            if($result->num_rows > 0)
            {
                while($row = $result->fetch_assoc())
                {
   
                    echo"
                    <td>".$row["bookingPrice"]."</td>
                    </tr>
   
                    </table>
   
   
                    </div>
                    </center> 
                         
                     
                     
                     ";
                 }
            }
                     
            else
            {
                echo " <script> alert('Data Error') </script> ";
            }
         
    
echo"   
<br><br><br><br><br><br>
<footer style=\"text-align: right; font-style:Tw Cen MT; color:white\">Copyright &copy; 2020, UMSCAR. All Rights Reserved.
</footer>

   
</body>   
    <br><br><br>
   
";


?>