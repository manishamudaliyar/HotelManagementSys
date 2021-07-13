<?php

$con = mysqli_connect("localhost","root","","youtubeuserdata");

if($con){
	echo "Connection successful";
}else{
	echo "No connection ";
}
if(isset($_POST["submit"]))
{
$Username=$_POST['un'];
$Email_id=$_POST['email'];
$Contact=$_POST['mobil'];
$Comments=$_POST['comment'];
$query="INSERT INTO userinfodata(user,email,mobile,comments)VALUES('$Username','$Email_id','$Contact','$Comments')";
$submit=mysqli_query($con,$query);
if($submit)
{
	echo "inserted";
}
}
?>
