<!DOCTYPE html>
<html>
<head>
<title>eBid upload item</title>
</head>
<body>
<style>
*{
margin: 0;
padding: 0;
font-family: cursive;
    text-decoration: none;

}
h1
{
    
    color: #932e19;
    font-size: 50px;
    /* font-family: cursive; */
    font-family: serif;
    /* text-transform: capitalize; */
    -webkit-text-emphasis-color: open;
    -webkit-text-emphasis-color: darkorange;
    /* -webkit-text-fill-color: #f9faf6; */
    margin-left: 80px;
    margin-top: 0px;
}
ul{
float: right;
list-style-type: none;
background-color: transparent;
margin-top: 70px;
margin-right: 50px;
}

ul li{
display: inline-flex;
font-size: 20px;
}
ul li a{
text-decoration: none;
color: #fff;
padding: 5px 20px;
border: 0.5px solid transparent;
transition: 0.3s ease;
}
ul li a:hover{
background-color: #fff;
color: #000;
border-radius:5px;
}
ul li.active a{
background-color: #FFEC00;
color: #000;
}
#container ul{
    list-style:none;
    padding:1px 1px;
     margin-right: 0px;

    margin-top: 10px;
    
}
#container ul li
{
    background-color:transparent;
    width:153px;
    display:inline-block;
    border: 1px solid transparent;
    border-radius:50px;
    height:45px;
    line-height:53px;
    text-align:center;
    float:right;
    margin-top: -45px;
    margin-right: 30px;
    font-size:20px;
    position:relative;
    
}

#container ul ul
{
    display:none;
}
    
#container ul li:hover >ul{
    color:#000;
    background-color:white;
display:block;}



#container ul ul ul{
    margin-left:150px;
    top:0px;
    position:absolute;
}

#container ul li a{
    text-decoration: none;
    color: black;
    font-family:cursive;
    font-size:21px;
    padding:5px 20px;
    border: 1px solid transparent;
    border-radius:20px;
    transition: 0.6s ease;
}

#container ul li a 
{
    background-color:white;
    color:#000;
}

#container ul li.active a
{
    background-color:white;
    color:#000;
}

.logo img{
    float:left;
    width:150px;
    /*height:auto;*/
    /*border-radius:70px;*/
    position: absolute;
        left: 20px;
    top: 3px;
}
.main{
max-width: 1300px;
margin: auto;
}

body{
    background-image: linear-gradient(rgb(135, 137, 176),rgba(16, 15, 15, -0.2)),url(green.png);
height: 200vh;

background-repeat: repeat-x;
background-position: center;
}

.EventUpload{

width: 436px;
padding: 8% 0 0;
margin: auto;
}

.form{	
z-index: 1;
    background: rgb(71, 72, 72,0);
    /* max-width: 455px; */
    /* margin: 79px 11px 103px; */
    margin-top: -50px;
    padding: 28px;
    margin-left: -260px;
    text-align: center;
    height: 456px;
    width: 868px;
}
.form input{
    font-family: cursive;
    outline: 1;
    background: #f2f2f2;
    width: 36%;
    border-radius: 31px;
    /* margin: 0 12px 10px; */
    padding: 15px;
    margin-top: 12px;
    box-sizing: 14px;
    font-size: 14px;
}
.form button{
font-family: "Roboto",sans-serif;
text-transform: uppercase;
outline: 0;
background: #4CAF50;
width: 100%;
border: 0;
padding: 15px;
color: #ffffff;
font-size: 14px;
cursor: pointer;
border-radius:10px;
}
.form button:hover,.form button:active{
background: #43A047; 
border-radius: 1%;
}

.select{
width:20%;
}

.states
{
        width: 346px;
    height: 50px;

}
.col
{
    color: white;
}
p
{
    font-family: cursive;
    color: black;
    font-size: 30px;
    text-decoration: none;
}
</style>
<header>
    <h1> CLEAN INDIA ICON</h1>
<div class="main">
<div class="logo">
<img src="11.png">
</div>

 </div>
<div id="container">
        <ul>
            
            <li ><a href="about.html">About us</a></li>

            <li><a href="alert.html">Alert</a></li>
            <li><a href="home.html">Home</a></li>
        </ul>
        </div>


</div>

</header>


<div class="EventUpload">
<div class="form">
<?php
    //session_start();
    $host="localhost";
    $user="root";
    $password="";
    $db="wmn";
    $conn=mysqli_connect($host,$user,$password)or DIE('Connection to host is failed,perhaps the service is down!');
    mysqli_select_db($conn,$db) or DIE('Database name is not available!');
    
   
    $Select="Select*from organiser";
    $result=mysqli_query($conn,$Select); 

    echo "<div id='al'>";
        while ($row = mysqli_fetch_array($result)) {
          
            echo '<form method="post" action="read.php?id='.$row['id'].'">';
      echo "<div id='img_div'>";
      echo "<div class='parent' onclick=''>
        <div class='child'>";?><img src="<?php echo $row["logo"];?>" height="400px" width="750px">
            <?php
          echo "<span></span>
        </div>
        </div>";
        
        echo "<p>Title : ".$row['eventname']."</p>";
        echo "<p>Motive : ".$row['motive']."</p>";

         echo "<div id='button'>";
        echo '<a><center><input type="submit" id="butt" value="READ MORE" /></center></a>';
        echo "</div>";
    echo "</div>";
    echo "</form><br><br><br><br>";
  }
    

    ?>
    
  
        
 
    
</div>
</div>
</div>
</body>
</html>
