<?php

$empno=$_POST["eno"];
$name=$_POST["nm"];
$email=$_POST["email"];
$salary=$_POST["sal"];


$con=new mysqli("localhost","root","","employeesdetail");

$qry="insert into employee(empno,name,email,salary) values('$empno','$name','$email','$salary')";

$con->query($qry);

$con->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor="lightgreen">
<<hr size="3" color="black">

<center>
  <a href="index.php" style="color:black;margin-left:0px;font-size:25px;text-decoration:none">Home</a>
  <a href="insert.php"  style="color:black;margin-left:90px;font-size:25px;text-decoration:none">Insert</a>
  <a href="display.php"  style="color:black;margin-left:90px;font-size:25px;text-decoration:none">Display</a>
  <a href="search.php"  style="color:black;margin-left:90px;font-size:25px;text-decoration:none">Search</a>
  <a href="update.php"  style="color:black;margin-left:90px;font-size:25px;text-decoration:none">Update</a>
  <a href="contact.php"  style="color:black;margin-left:90px;font-size:25px;text-decoration:none">Contact</a>
  
  </center>
  <hr size="3" color="black">
 
<h1>save data!!!!</h1> 
<hr size="2" color="black">
</body>
</html>