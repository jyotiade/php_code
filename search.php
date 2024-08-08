<?php
if (isset($_POST["submit"])) {
    $empno = $_POST["eno"];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-color:rgb(15, 117, 135);">

    <hr size="3" color="black">
    <center>
        <a href="index.php" style="color:white;margin-left:0px;font-size:25px;text-decoration:none">Home</a>
        <a href="insert.php" style="color:white;margin-left:90px;font-size:25px;text-decoration:none">Insert</a>
        <a href="display.php" style="color:white;margin-left:90px;font-size:25px;text-decoration:none">Display</a>
        <a href="search.php" style="color:white;margin-left:90px;font-size:25px;text-decoration:none">Search</a>
        <a href="update.php" style="color:white;margin-left:90px;font-size:25px;text-decoration:none">Update</a>
        <a href="contact.php" style="color:white;margin-left:90px;font-size:25px;text-decoration:none">Contact</a>

    </center>
    <hr size="3" color="black">
    <center>
        <h1 style="color: white;">Search Records</h1>
    </center>

    <center>
        <div style="background-color: rgb(97, 160, 171);width:400px;height:200px;margin-top:80px;margin-bottom:30px;">
            <form method="post" action="search.php">
                <br><br>
                Enter empno:<input type="text" name="eno" style="width:230px;height:30px;">
                <br><br><br><br>
                <input type="submit" value="save" name="submit" style="width:100px;height:40px;">

            </form>
        </div>
    </center>

    <table border="1" align="center" width="700" style="background-color: rgb(90, 150, 151);">
        <thead>
            <tr style="background-color:rgb(217, 71, 127);">
                <th scope="col">Emp no</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Salary</th>
            </tr>
        </thead>
        <tbody>
            <?php

            if (isset($_POST["submit"])) {

                $con = new mysqli("localhost", "root", "", "employeesdetail");
                $qry = "select * from employee where empno=$empno";
                $result = $con->query($qry);

                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["empno"] . "</td>";
                    echo "<td>" . $row["name"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>" . $row["salary"] . "</td>";
                    echo "</tr>";
                }
                $con->close();
            }

            ?>
        </tbody>
    </table>
</body>

</html>