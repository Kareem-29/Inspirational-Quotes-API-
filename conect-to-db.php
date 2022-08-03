<?php
session_start();

// step1:
$host="localhost";
$user = "root";
$pwd = "";
$db = "signup";

//step2: Create connection with DB + Create connection handler 
$con = mysqli_connect("localhost","root",$pwd,"signup");

//Step 3: Check for success + failure (optional)
if(mysqli_connect_errno()) { 
   echo mysqli_connect_error(); //show  number of errors
	exit(); //stop excution
}

?>