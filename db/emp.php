<?php
session_start();

include("menu.php");
include("conn.php");
$sun=$_SESSION["sun"];
$fn=$_POST["fname"];
$ln=$_POST["lname"];
$s=$_POST["salary"];
$a=$_POST["age"];
$e=$_POST["email"];

$sql="insert into employee(firstName,lastName,salary,age,email,loginBy) values('$fn','$ln','$s','$a','$e','$sun')";
$qry=mysqli_query($conn,$sql);
echo "data saved successfully";
header("Location:employeelogin.php" );



?>