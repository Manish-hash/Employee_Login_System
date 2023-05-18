<?php
$un=$_POST["uname"];
$pw=$_POST["pword"];

session_start();

if($un=="Coding" && $pw=="Tech"){
    $_SESSION["sun"]="$un";
    //echo $un;
    header("Location:menu.php");
}
else{

}
?>