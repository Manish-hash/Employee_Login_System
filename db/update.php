<!-- Data form ma dakhauna code. -->
<?php
include("conn.php");
$id = $_GET["id"];
$sql = "select * from employee where id = '$id'"; // sql statement
$qry = mysqli_query($conn,$sql); // quary
$r = mysqli_fetch_array($qry);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee</title>
</head>
<body>
    <h2>UPDATE EMPLOYEE</h2>
    <form action="updatepro.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $r["id"]; ?>"><br>
        <label for="">FN</label>
        <input type="text" name="fname" value="<?php echo $r["firstName"]; ?>"><br>
        <label for="">LN</label>
        <input type="text" name="lname" value="<?php echo $r["lastName"]; ?>"><br>
        <label for="">salary</label>
        <input type="text" name="salary" value="<?php echo $r["salary"]; ?>"><br>
        <label for="">age</label>
        <input type="number" name="age" value="<?php echo $r["age"]; ?>"><br>
        <label for="">Email</label>
        <input type="text" name="email" value="<?php echo $r["email"]; ?>"><br>
        <input type="submit" value = submit>
    </form>
</body>
</html>