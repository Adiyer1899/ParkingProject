<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$emailid=$_POST['emailid'];
$password=$_POST['password'];

$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"details");
$select="INSERT INTO users (fname,lname,username,password) VALUES ('".$fname."','".$lname."','".$emailid."','".$password."')";
$sql=mysqli_query($con,$select);
print '<script type=text/javascript>';
print 'alert("Data Inserted")';
print '</script>';
mysqli_close($con);
?>

<!DOCTYPE html>
<head>
<title>Clippr</title>
<link rel="stylesheet" href="layout1.css" type="text/css">

</head>
<body>
<div class="wrapper row1">
  <header id="header" class="clear">
    <div id="hgroup">
      <h1><a href="#">Dashboard</a></h1>
      <h2>Your Parking Solution</h2>
    </div>
    <form action="login.html" method="post">
      <fieldset>
        <input type="submit" value="Back">
      </fieldset>
    </form>

  </header>
</div>
<center>
<div style="margin:250px;">
<form method="POST">
   <font size="8"> <b>Parking Spots Remaining:</b>                                        
 <select style="width:100px; height:40px;" name="spots">
<option value="1">1</option><th>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
</font>
</form>
</div>

<center>
</body>
</html>
