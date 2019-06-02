<?php

$name=$_POST['name'];
$email=$_POST['email'];
$msg=$_POST['message'];

if(!empty($name)|| !empty($email)|| !empty($msg))
{
	$host = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname="wmn";
	//create connection
	$conn=new mysqli($host,$dbusername,$dbpassword,$dbname);

  if(mysqli_connect_error()) 
	{
		die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
	}else{
		mysqli_query($conn,"INSERT into contact (username,email,message) values ('$name','$email','$msg')");
		echo '<script>alert("Your Details Recorded.Visit Our store")</script>';
	 					echo '<script>window.location="http://localhost/hack/contact.html"</script>';
		
	}
}else{
	
	echo '<script>alert("all feilds are required")</script>';
	 					echo '<script>window.location="http://localhost/hack/contact.html"</script>';
	die();
}

?> 

