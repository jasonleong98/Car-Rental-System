<?php

session_start();

echo"<body> <body background=\"bg22.jpg\" style=\"background-image:url(bg22.jpg); background-repeat:no-repeat; background-size:cover\">";


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
echo"
<center><h1 style = \"font-size: 30px; font-family: arial; color:white;\"><b>Add Topic</b></h1> 

<form action = \"\" method = \"POST\">
<h4 style = \" color:white;\">Title</h4>
<input type = \"text\" name = \"topicTitle\">

<br><br>

<h4 style = \"color:white;\">Comment</h4>
<input type = \"text\" name = \"topicSubject\" style=\"width:300px;height:300px;\">

<br><br>

<input style=\"font-size: 15px ; font-family:Georgia ; background-color:silver; border-radius: 12px;\" type = \"submit\" name = \"cancel\" value = \"Cancel\">

<input style=\"font-size: 15px ; font-family:Georgia ; background-color:silver; border-radius: 12px;\" type = \"submit\" name = \"add\" value = \"Add\">

</form></center></body>

";
$ownerId = $_SESSION['sAdminId'];

if(isset($_POST['add'])){
    $date = date("Y/m/d");

    $sql = "INSERT INTO topic (topicTitle, topicSubject, topicDate, ownerId)
    VALUES ('$_POST[topicTitle]','$_POST[topicSubject]','$date','$ownerId')";
    $result = $conn->query($sql);
    
    
        
        echo " <script> alert('Added Successfully') </script> ";
        
        header("Location:AdminForum.php");
        exit;
        
}



if(isset($_POST['cancel'])){
    header("Location:AdminForum.php"); //go to this page
    exit; //close this current page
}

?>