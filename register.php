<!DOCTYPE html>
<html>
<head>
<title>Event Detail</title>
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
    margin-left: 90px;
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
height: 100vh;

background-image: : cover;

}

.EventUpload{

width: 436px;
padding: 8% 0 0;
margin: auto;
}

.form{  
    z-index: 1;
        background: rgba(142, 189, 189, 0.42);
    /* max-width: 455px; */
    /* margin: 79px 11px 103px; */
    margin-top: -50px;
    padding: 33px;
    /* border: black; */
    margin-left: -36px;
    text-align: center;
    height: 543px;
    width: 368px;
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
    font-size: 27px;
    text-decoration: none;
}
.vol{
    margin-left: -6px;
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
            
            
                     <li><a href="explore.php">Back</a></li>

           
            <li><a href="alert.html">Alert</a></li>
               <li><a href="home.html">Home</a></li>
        </ul>
        </div>


</div>

</header>


<div class="EventUpload">
<div class="form">
     <div class="signup-form">
                <?php
                /*echo '<form method="post" action="update.php">';*/
    $con=mysqli_connect('localhost','root','','wmn');
    mysqli_select_db($con,'wmn');
    global $id;
    $id=$_GET['id'];
    $sql="SELECT * FROM organiser where id='".$id."'";
    $result=mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
    
                 echo '<form method="post" action="update.php?id='.$id.'">';
                 ?>
                <h1 class="vol"> Volunteer </h1>
                <?php
                echo "<p>Event Name : ".$row['eventname']."</p>";
                ?>
                <p>What do we call you?</p>
                <input type="text" name="fname" id="button" placeholder="First Name" />
                <input type="text" name="lname" id="button" placeholder="Last Name" /><br>
                <p>Him or Her?</p>
                <input type="radio" name="gender" value="F" id="rd"><span id="but" />Female</span>
                <input type="radio" name="gender" value="M" id="rd"><span id="but" />Male</span><br>
                <p>And we contact you at?</p>
                <input type="text" name="Email" id="button" placeholder="Email" /><br>
                <input type="phone" name="Cust_phno" id="button" placeholder="Phone No." /><br>
                <p>Almost Done</p>
                <a href="explore.php"><input type="submit" name="submit" value="Submit"  id="butt" /></a>
            </form>
        </div>
        
          
    
  
        
 
    
</div>
</div>
</div>
</body>
</html>
