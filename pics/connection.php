<?php
$db_host='localhost:3307';
$db_user='root';
$db_password='';
$db_name='studentdb';

$conn = new mysqli($db_host,$db_user,$db_password,$db_name);
if($conn->connect_error){
	die("connection failed");
}
else{
	echo"connected";
}
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$email=$_POST['email'];


$sql = "INSERT INTO stinform VALUES ('$uname','$pass','$email');";
if($conn->query($sql) == TRUE)
{
	echo "new record added";
}
else
{
	echo"Error";
}
$conn->close();
?>