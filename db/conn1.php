<?php
//syntax
//$conn=mysqli_connect("localhost","username","password","db name");
$conn = mysqli_connect("localhost","root","","contact");
if($conn){
   // echo "EMPLOYEE MANAGEMENT SYSTEM";
}
else{
    echo "connection unsuccessful";
}

?>