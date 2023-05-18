<?php
include("conn.php");
$id = $_POST['id'];
$fn = $_POST['fname'];
$ln = $_POST['lname'];
$sd = $_POST['salary'];
$ag = $_POST['age'];
$em = $_POST['email'];

$sql = "update employee set firstName = '$fn',lastName = '$ln',salary = '$sd',
age= '$ag',email = '$em' where id = '$id'";//update code
$qry = mysqli_query($conn,$sql);
header("location:list.php");

?>