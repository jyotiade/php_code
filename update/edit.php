<?php
$empno=$_GET["eno"];
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
<center >
  <a href="index.php" style="color:white;margin-left:0px;font-size:25px;text-decoration:none">Home</a>
  <a href="insert.php"  style="color:white;margin-left:90px;font-size:25px;text-decoration:none">Insert</a>
  <a href="display.php"  style="color:white;margin-left:90px;font-size:25px;text-decoration:none">Display</a>
  <a href="search.php"  style="color:white;margin-left:90px;font-size:25px;text-decoration:none">Search</a>
  <a href="update.php"  style="color:white;margin-left:90px;font-size:25px;text-decoration:none">Update</a>
  <a href="contact.php"  style="color:white;margin-left:90px;font-size:25px;text-decoration:none">Contact</a>
  
  </center>
  <hr size="3" color="black">
  <center><h1 style="color: white;">update Records</h1></center>

  
// ==============================================================================
<?php
$con=new mysqli("localhost","root","","employeesdetail");

$sql="select * from employee where empno=$empno";

$result=$con->query($sql);
while($row=$result->fetch_assoc())
{

echo "<form method='post' action='updatesave.php'>";
echo "<table>";

echo "<tr>";
echo "<td> Empno </td>";
echo "<td><input type='text' value='".$row["empno"]."' name='eno'></td>";
echo "</tr>";
echo "<tr>";
echo "<td> Name </td>";
echo "<td><input type='text' value='".$row["name"]."' name='nm'></td>";
echo "</tr>";
echo "<tr>";
echo "<td> Email </td>";
echo "<td><input type='text' value='".$row["email"]."' name='email'></td>";
echo "</tr>";
echo "<tr>";
echo "<td> salary </td>";
echo "<td><input type='text' value='".$row["salary"]."' name='sal'></td>";
echo "</tr>";
echo"<tr>";
echo "<td> </td>";
echo "<td><input type='submit' value='update'></td>";
echo "</tr>";
echo "</table>";
echo "</form>";

}


?>






</body>
</html>







 