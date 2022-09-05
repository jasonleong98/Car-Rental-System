<?php

session_start();

echo"

<header>
<link rel = \"stylesheet\" href = \"css.css\">
<style>

table
{
    border:0px;
    width:700px;
    text-align: left;
    color:white;
}

tr
{
    border:1px black solid;
}

td
{
    border:1px black solid;
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
    
"; 

     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "group6db";

     $ownerId=$_SESSION['sAdminId'];
     $_SESSION['sAdminId'] = $ownerId;

        //Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        //Check connection
        if ($conn->connect_error)
        {   
            die("Connection failed: " . $conn->connect_error);
        }

            $sql = "SELECT * FROM Topic";
            
            $result = $conn->query($sql);
            

echo"
    <th>
            <table style= \"border:1px black solid;width:400px;height:250px\">
                <tr>
                    <th style= \"border:1px black solid;\">Topic</th>
                    <th style= \"border:1px black solid;\">Date</th>
                    <th style= \"border:1px black solid;\">Reply</th>
                </tr>
                
";                
                
            if($result->num_rows > 0)
            {    
                 while($row = $result->fetch_assoc())
                 {
                      
                     echo "<tr>
                                <td>" . $row["topicTitle"] . "</td><td>" . $row["topicDate"] . "</td>
                                <td><form action = \"Reply.php\" method = \"POST\"><input style=\"font-size: 15px ; font-family:Georgia ; background-color:silver; border-radius: 12px;\" type = \"submit\" name=\"reply\" value=\"Reply\"></form></td>
                           </tr>";  
                     $_SESSION['sTopicId'] = $row['topicId'];
                     $_SESSION['sTopicTitle'] = $row['topicTitle'];
                     $_SESSION['sTopicSubject'] = $row['topicSubject'];
                     
                 }
                 
            }

            else
            {
                echo " <script> alert('Data Error') </script> ";
            }

    
                
                
echo"             
        
                </table>
                <br>
            
                <center><form action = \"AdminForumAddTopic.php\" method = \"POST\"><input style=\"font-size: 15px ; font-family:Georgia ; background-color:silver; border-radius: 12px;\" type = \"submit\" value=\"Add Topic\"></form></center>

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