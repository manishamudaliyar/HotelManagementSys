<?php

$con = mysqli_connect("localhost","root","","form");

if($con){
	echo "Connection successful";
}else{
	echo "No connection ";
}
if(isset($_POST["submit"]))
{

$Email_id=$_POST['email'];
$Password=$_POST['pass'];
$Repeat_Password=$_POST['repeatpass'];


$query="INSERT INTO registration_info(email,password,repeatpass)VALUES('$Email_id','$Password','$Repeat_Password')";
$submit=mysqli_query($con,$query);
if($submit)
{
	echo "inserted";
}
}
?>
