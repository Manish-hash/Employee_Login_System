<?php
$id=$_GET["id"];
echo $id;
include("conn.php");
$sql="delete from employee where id='$id'";
$qry=mysqli_query($conn,$sql);
header("Location:list.php" );
?>