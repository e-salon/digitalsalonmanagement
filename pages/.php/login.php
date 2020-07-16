<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>login</title>

<style type="text/css">
		p{
			font-size: 30px;
		}
		.ab{
			font-size: 30px;
			font-family: sans-serif;
			border-radius:20px;
		}
		.error1{
			color: red;
			position: absolute;
			top: 450px;
			left: 500px;
			font-size: 40px;
		}
		.h{
			
				position: absolute;
				top: 150px; 
			  font-size: 35px;
			}
			li{
				list-style-type: none;
			}			
	</style>

</head>
<body bgcolor="#F2D7D5">

<?php
	include('connection.php');
	if(isset($_POST["submit"])){
		$email = $_POST['email'];
		$password = $_POST['password'];

		$query = "SELECT email, pass from students WHERE email = '$email' AND pass = '$password'";
		$result = mysqli_query($conn, $query);

		$row = mysqli_num_rows($result);
		if($row ==  1){
			header("location:about.html");
		}
		else{
			echo "<p class='error1'>Password or email not correct</p>";
			// echo "Password or email not correct";
		}
	}
	?>

<div class="h">
 <ul>
  <li><a href="x.php">Home</a></li>
        <li><a href="student.php">Register</a></li>
 </ul>
</div>
<center>
		
<h1><i>COLLEGE MANAGEMENT</i></h1>
<h2><i><u>LOGIN FORM</u></i></h2>


	<div class="login">
	<form action="login.php" method="post">

<center>
<p><em> Please login using email and password registered </em></p>
<table>
		
<tr>
	<td>email</td>
	<td><input type="email" name="email" placeholder="email" required></td></tr>




<tr>
	<td>Password</td>
	<td><input type="password" name ="password" placeholder="password" required></td></tr>

</table>

<br><br>
<div class="ab">

	<input type="Submit" name="submit" value="Enter" style="color:blue;" >
</div>

</form>
 <br> <br> 
	
	 <ins>
	&copyJuly 2020
	</ins>
</center>
	</div>
</div>
	
</body>
</html> 