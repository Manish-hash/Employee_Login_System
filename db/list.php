
<table border=2 ceilspacing=2 width=100%>
<tr>
<th  colspan=7 align="center"><?php include("header.php");?> </th>
</tr>
<tr>
    <th>S.N</th>
    <th>firstName</th>
    <th>lastName</th>
    <th>salary</th>
    <th>age</th>
    <th>email</th>
    <th>Action</th>
    <th>Entry By</th>
</tr>


<?php

$c=1;
$totsal=0;
include("conn.php");
$sql="select * from employee";
$qry=mysqli_query($conn,$sql);
while($r=mysqli_fetch_array($qry)){
?>
<tr>

    <td><?php echo $c; ?></td>
    <td><?php echo $r["firstName"];?></td>
    <td><?php echo $r["lastName"]; ?></td>
    <td><?php echo $r["salary"]; ?></td>
    <td><?php echo $r["age"]; ?></td>
    <td><?php echo $r["email"]; ?></td>
<td>
    <a href="del.php?id=<?php echo $r["id"];?>">Delete</a>
<a href="update.php?id=<?php echo $r["id"];?>">update</a>
</td>
<td><?php echo $r["loginBy"]; ?></td>

</tr>

<?php
$totsal=$totsal+$r["salary"];
$c++;

}
?>

<tr>
<td colspan="7" align="center">total=<?php echo $totsal; ?> </td>
</tr>
<tr>
    <td colspan="7" align="center"><?php include("footer.php");?> </td>
</tr>


</table>

