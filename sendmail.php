<?php
$sub = "CleanIndiaIcon Confirmation Mail";
//the message
$msg = "Dear User,You have successfully registererd.";
//recipient email here
$rec = "m123kr@gmail.com";
//send email
mail($rec,$sub,$msg);
?>