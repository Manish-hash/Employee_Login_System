<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Employee Login System</h1>
    <form action="emp.php" method="POST">
        <table border="2" width=100%>

<tr>
                <td>
                    <label>FirstName:</label>
                </td>
                <td><input type="text" name="fname" value=" "></td>
            </tr>
            <br>
            <tr>
                <td>
                    <label>Lastname:</label>
                </td>
                <td>
                    <input type="text" name="lname" value=" ">
                </td>
            </tr>
            <br>
            <tr>
                <td>
                    <label>Salary:</label>
                </td>
                <td><input type="number" name="salary" value=" "></td>
            </tr>
            <br>
            <tr>
                <td>
                    <label>Age:</label>
                </td>
                <td><input type="number" name="age" value=" "></td>
            </tr>
            <br>
            <tr>
                <td>
                    <label>Email:</label>
                </td>
                <td><input type="text" name="email" value=" "></td>
            </tr>
        </table>
        <input type="submit" name="submit" value="Submit">
    </form>


</body>

</html>