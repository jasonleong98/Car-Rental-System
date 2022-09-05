<?php

session_start();

echo"<body> <body background=\"bg22.jpg\" style=\"background-image:url(bg22.jpg); background-repeat:no-repeat; background-size:cover\">";

$topicId = $_SESSION['sTopicId'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "group6db"; 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";

 $sql = "SELECT * FROM Topic
        WHERE topicId = '$topicId'";
            
$result = $conn->query($sql);
                       
                
            if($result->num_rows > 0)
            {    
                 while($row = $result->fetch_assoc())
                 {
                     $topicTitle = $row["topicTitle"];
                     $topicSubject = $row["topicSubject"];
                    
                     echo"
                        <center><h1 style = \"font-size: 30px; font-family: arial; color:white\"><b>Reply</b></h1> 

                        <form action = \"\" method = \"POST\">

                        <h4 style = \"color:white;\">Topic Title<br></h4>
                        <input type = \"text\" name = \"topicTitle\" value = \"$topicTitle\">
                        <br><br>

                        <h4 style = \"color:white;\">Topic Subject<br></h4>
                        <input type = \"text\" name = \"topicSubject\" value = \"$topicSubject\" style=\"width:300px;height:100px;\">
                        <br><br>";
                 }
                 
            }

            else
            {
                echo " <script> alert('Data Error') </script> ";
            }



            $sql = "SELECT * FROM reply
                    WHERE topicId = '$topicId'";
            
            $result = $conn->query($sql);



         if($result->num_rows > 0)
            {    
             
             echo "<h4 style = \"color:white;\">Reply Content</h4>";
             
                 while($row = $result->fetch_assoc())
                 {
                         $replyContent = $row["replyContent"];
                         echo"
                         <input type = \"text\" name = \"reply\" value = \"$replyContent\" style=\"width:300px;height:50px;\">
                         <br><br>";
                 }
                 
            }

            else
            {
                echo " <script> alert('0 Replied') </script> ";
            }




echo"
<h4 style = \"color:white;\">Comment</h4>
<input type = \"text\" name = \"replyContent\" style=\"width:300px;height:300px;\" ><br><br>

<input style=\"font-size: 15px ; font-family:Georgia ; background-color:silver; border-radius: 12px;\"  type = \"submit\" name = \"cancel\" value = \"Cancel\">

<input style=\"font-size: 15px ; font-family:Georgia ; background-color:silver; border-radius: 12px;\"  type = \"submit\" name = \"add\" value = \"Add\">

</form></center></body>

";

if(isset($_POST['add'])){
    $date = date("Y/m/d");
    $ownerId = $_SESSION['sAdminId'];

    $sql = "INSERT INTO reply (replyContent, replyDate, topicId, ownerId)
    VALUES ('$_POST[replyContent]','$date','$topicId','$ownerId')";
    $result = $conn->query($sql);
    
    
        
        echo " <script> alert('Replied Successfully') </script> ";
        
        header("Location:AdminForum.php");
        exit;
        
}



if(isset($_POST['cancel'])){
    header("Location:AdminForum.php"); //go to this page
    exit; //close this current page
}


?>