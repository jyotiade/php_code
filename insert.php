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
  <center><h1 style="color: white;">Insert Student Records</h1></center>
 
  <center>
  <div style="background-color: rgb(97, 160, 171);width:400px;height:450px;margin-top:80px">
<form method="post" action="save.php" >
<br><br>
Enter empno:<input type="text" name="eno" style="width:230px;height:30px;">
<br><br><br><br>
Enter name:<input type="text" name="nm" style="width:230px;height:30px;">
<br><br><br><br>
Enter email:<input type="text" name="email" style="width:230px;height:30px;">
<br><br><br><br>
Enter salary:<input type="text" name="sal" style="width:230px;height:30px;">
<br><br><br><br>
<input type="submit" value="save" style="width:100px;height:40px;"> 

</form>
</div>
</center>

</body>
</html>