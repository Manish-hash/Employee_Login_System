<?php
include("conn1.php");
$n=$_POST["name"];
$p=$_POST["phone"];
$e=$_POST["email"];
$a=$_POST["add"];

$sql="insert into detail(Name,Phone,Email,Address) values('$n','$p','$e','$a')";
$qry=mysqli_query($conn,$sql);
echo "data saved successfully";
header("Location:contact.php" );
