<!DOCTYPE html>
<html>
<head>
<style>

div{
    margin: 50px 160px;
    background-color: gray;
    border: 30px ridge;
    box-shadow:20px 15px;
    border-color: white;
    opacity:1;

}

body, html {
 background-color: black;
}
table
{
 height: 100%;
  font-family: "Times New Roman", sans-serif;
background-position: center;
  background-size: cover;
   min-height: 75%;
}
h1{ color:red;
  }
  h2{

  color:black;
  }

  h3
  {

font-weight: bold;
color:purple;


  }
input[type=text],input[type=password],input[type=Date] {
  width: 20%;
  padding: 8px 14px;
  margin: 8px 0;
  box-sizing: border-box;
 border: 2px solid black;
  border-radius: 4px;
  text-align:center;
}
input[type=submit],input[type=Reset] {
  width: 10%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
 border: 2px solid black;
  border-radius: 4px;
  text-align:center;
}

</style>
	<title>Registration</title>
</head>


<body>
	<center>
<div>
<h2 align="center">Parking Spots</h2>
			<form action="index.php" method="POST" class="class" name="form1">
				<fieldset>
					<legend align="center">Enter Details</legend>
					<b>First Name:</b>      <input type="Text" name="fname" placeholder="Aditya"><br><br>
<b>Last Name:</b>         <input type="Text" placeholder="Iyer" name="lname"><br><br>
					
					<b>Student Id:</b><input type="text" name="emailid" placeholder="7047345154"><br><br>
					                                   <b>Parking Spot Number:</b>                                        
 <select name="password">
                                                                                                        <option value="1">1</option><th>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 <br><br>
					

                                        
					
					<br><br><br>

					<input type="Submit" value="Submit"><br>
				</fieldset>
			</form>
		</div>
</body>
</center>
</html>
