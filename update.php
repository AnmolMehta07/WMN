<?php

//processing form

if($_SERVER['REQUEST_METHOD'] == 'POST'){

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$email=$_POST['Email'];
$cust_ph=$_POST['Cust_phno'];

	if(!empty($fname) && !empty($lname) && !empty($gender) &&  !empty($email) && !empty($cust_ph)){
    $con=mysqli_connect('localhost','root','','wmn');
    mysqli_select_db($con,'wmn');
    global $id;
    $id=$_GET['id'];
    $sql="SELECT * FROM organiser where id='".$id."'";
    $result=mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
    $evm=$row['eventname'];

    $Insert="Insert into volunteer(eventname,eventid,fname,lname,gender,email,phno)values(?,?,?,?,?,?,?)";
    $stmt=$con->prepare($Insert);
    $stmt->bind_param("sissssi",$evm,$id,$fname,$lname,$gender,$email,$cust_ph);
            $stmt->execute();
            
           
            $stmt->close();
            echo '<script type="text/javascript">alert("REGISTRED SUCCESSFULLY AND A CONFIRMATION MAIL HAS BEEN SENT! ")</script>';
	echo '<script>window.location="http://localhost/hack/explore.php"</script>';
	


//the subject
$sub = "CleanIndia Confirmation Mail";
//the message
$msg = "Dear User,You have successfully registererd.";
//recipient email here
$rec = $email;
//send email
mail($rec,$sub,$msg);

      
      $con->close();

     // header("refresh:1;url=explore.php");

    }

	else{
		//echo "<p style='color:red;'>ERROR: please fill all values of form</p>";
		echo "<script>location.href='register.html'</script>";
	}


}else{

	echo"NO form has been submitted. Please complete the form.";
}

?>