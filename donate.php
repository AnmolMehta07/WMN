<?php
	//session_start();
	$name=$_POST['Name'];
  $ph=$_POST['Phno'];
  $eid=$_POST['Email'];
  $amt=$_POST['Amount'];
  if(isset($_POST['branch'])){
  $branch=$_POST['branch'];
}

 if(isset($_POST['mode'])){
  $mode=$_POST['mode'];
}

  $ncard=$_POST['ncard'];
  $cno=$_POST['cno'];
  $date=$_POST['date'];
  $cvc=$_POST['cvc'];
      


if(!empty($name) || !empty($ph) || !empty($eid) || !empty($amt) || !empty($branch) || !empty($mode) || !empty($ncard) || !empty($cno) || !empty($date) || !empty($cvc)){
	$host="localhost";
	$user="root";
	$password="";
	$db="wmn";

      
      $conn=mysqli_connect($host,$user,$password)or DIE('Connection to host is failed,perhaps the service is down!');
     
      mysqli_select_db($conn,$db) or DIE('Database name is not available!');


       $Insert="Insert into Donate(fname,contactno,email,amount,branch,mode,ncard,cardno,date,cvc)values(?,?,?,?,?,?,?,?,?,?)";
       
      
      
            $stmt=$conn->prepare($Insert);
            $stmt->bind_param("sisisssssi",$name,$ph,$eid,$amt,$branch,$mode,$ncard,$cno,$date,$cvc);
            $stmt->execute();
            
           
            $stmt->close();
            echo "Donation Successful!";
      
      $conn->close();


     header("refresh:1;url=home.html");

}



else{

	echo "All fields are required";
  header("refresh:1;url=donate.html");

    
	die();
}

?>