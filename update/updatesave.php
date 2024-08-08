<?php
$empno=$_POST["eno"];
$name=$_POST["nm"];
$email=$_POST["email"];
$salary=$_POST["sal"];


$con=new mysqli("localhost","root","","employeesdetail");

$sql="update employee set name='$name',email='$email',salary='$salary' where empno='$empno'";

$con->query($sql);

$con->close();

header("location :update.php?update=yes");
?>