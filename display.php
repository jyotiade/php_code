<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:rgb(210, 117, 117);">
<hr size="3" color="black">
<center><h1>Welcome to PHP CRUD Operation</h1></center>
<hr size="3" color="black">

<center>
  <a href="index.php" style="color:black;margin-left:0px;font-size:25px;text-decoration:none">Home</a>
  <a href="insert.php"  style="color:black;margin-left:90px;font-size:25px;text-decoration:none">Insert</a>
  <a href="display.php"  style="color:black;margin-left:90px;font-size:25px;text-decoration:none">Display</a>
  <a href="search.php"  style="color:black;margin-left:90px;font-size:25px;text-decoration:none">Search</a>
  <a href="update.php"  style="color:black;margin-left:90px;font-size:25px;text-decoration:none">Update</a>
  <a href="contact.php"  style="color:black;margin-left:90px;font-size:25px;text-decoration:none">Contact</a>
  
  </center>
  <hr size="3" color="black">
  <center><h1>Display employee records</h1></center>

  <table border="1" align="center" width="700" style="background-color: rgb(90, 150, 151);" >
  <tr style="background-color:rgb(15, 117, 135);">
    <th>Emp no</th>
    <th>Name</th>
    <th>Email</th>
    <th>Salary</th>
  </tr>

  <?php
$con=new mysqli("localhost","root","","employeesdetail");
$qry="select * from employee";
$result=$con->query($qry);

while($row=$result->fetch_assoc())
{
    echo "<tr>";
      echo "<td>".$row["empno"]."</td>";
      echo "<td>".$row["name"]."</td>";
      echo "<td>".$row["email"]."</td>";
      echo "<td>".$row["salary"]."</td>";
    echo "</tr>";
}

$con->close();

?>
 </table>
</body>
</html>