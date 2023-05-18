<?php
session_start();
?>
<body>
<table border=2>
    <tr>
    <td colspan="3" align="center"><?php include("header.php") ?> </td>
</tr>
    <tr>
        <td>
        <a href="emp.php">Add EMP</a>
    </td>
    <td>
        <a href="list.php">List EMP</a>
    </td>
    <td>
        <a href="contact.php">Contact</a>
    </td>
    <td>
        Logged in User:(<?php echo $_SESSION["sun"];?>)
    </td>

    <td>
        <a href="logout.php">Log Out</a>
    </td>
</tr>
</table>

</body>