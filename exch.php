<?php
	//session_start();
	$title=$_POST['Name'];
  $ph=$_POST['Phno'];
  $eid=$_POST['Email'];
  
  $date=$_POST['Date'];
  $time=$_POST['Time'];
      
	$city=$_POST['City'];
	$address=$_POST['address'];
   if(isset($_POST['wastelist'])){
  $category=$_POST['wastelist'];
} 

  
       


if(!empty($title) || !empty($ph) || !empty($eid)  || !empty($date) || !empty($time) || !empty($category) || !empty($city) || !empty($address)){
	$host="localhost";
	$user="root";
	$password="";
	$db="wmn";

      
      $conn=mysqli_connect($host,$user,$password)or DIE('Connection to host is failed,perhaps the service is down!');
     
      mysqli_select_db($conn,$db) or DIE('Database name is not available!');


       $Insert="Insert into waste(name,phno,email,date,time,city,address,type)values(?,?,?,?,?,?,?,?)";
       
      
      
            $stmt=$conn->prepare($Insert);
            $stmt->bind_param("sissssss",$title,$ph,$eid,$date,$time,$city,$address,$category);
            $stmt->execute();
            
           
            $stmt->close();
                 echo '<script type="text/javascript">alert("THANK YOU for helping the Environment!! ")</script>';
  echo '<script>window.location="http://localhost/hack/home.html"</script>';
      
      $conn->close();

}



else{

	   echo '<script type="text/javascript">alert(" ")</script>';
  echo '<script>window.location="http://localhost/hack/exchange.html"</script>';
	die();
}

?>