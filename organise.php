<?php
	//session_start();
	$title=$_POST['Name'];
  $ph=$_POST['Phno'];
  $eid=$_POST['Email'];
  $evname=$_POST['Eventname'];
  $date=$_POST['Date'];
  $time=$_POST['Time'];
      if(isset($_POST['stateslist'])){
	$category=$_POST['stateslist'];
}
	$city=$_POST['City'];
	$ven=$_POST['Venue'];
    $logo=$_POST['logo'];
  $motive=$_POST['motive'];

  $det=$_POST['Details'];
       


if(!empty($title) || !empty($ph) || !empty($motive) || !empty($eid) || !empty($evname) || !empty($date) || !empty($time) || !empty($category) || !empty($city) || !empty($ven) || !empty($det)){
	$host="localhost";
	$user="root";
	$password="";
	$db="wmn";

      
      $conn=mysqli_connect($host,$user,$password)or DIE('Connection to host is failed,perhaps the service is down!');
     
      mysqli_select_db($conn,$db) or DIE('Database name is not available!');


       $Insert="Insert into organiser(name,email,phno,eventname,date,time,state,city,venue,logo,motive,details)values(?,?,?,?,?,?,?,?,?,?,?,?)";
       
      
      
            $stmt=$conn->prepare($Insert);
            $stmt->bind_param("ssisssssssss",$title,$eid,$ph,$evname,$date,$time,$category,$city,$ven,$logo,$motive,$det);
            $stmt->execute();
            
           
            $stmt->close();
                 echo '<script type="text/javascript">alert("REGISTRED SUCCESSFULLY ")</script>';
  echo '<script>window.location="http://localhost/hack/home.html"</script>';
      
      $conn->close();


    

}



else{

	   echo '<script type="text/javascript">alert("All fields are required ")</script>';
  echo '<script>window.location="http://localhost/hack/organise.html"</script>';
	die();
}

?>