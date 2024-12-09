<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="subha";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>

login.php
<?php
include 'conn.php';
if(isset($_POST['submit']))
{
	
	$uname=$_POST['username'];
	$psswrd=$_POST['password'];
	$sql = "SELECT * FROM user_registration where username='$uname' and password='$psswrd'";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0)
	 {
  			header("location:welcome.php")	;
	 } 
	else
	{
			header("location:error.php")	;
	}
 	 

	mysqli_close($conn);
}
else
{
?>
<html>
	<body>
	<center>
		<form action="" method="post">
		Username:
		<input type="textbox" name="username"><br>
		Password:
		<input type="textbox" name="password"><br>
		<a href="registration.php">New User?Sign Up</a><br>
		<input type="submit" name="submit" value="Submit"><br>
	</form>
	</center>
	</body>
</html>
<?php
}
?>

registration.php
<?php
include 'conn.php';
if(isset($_POST['submit']))
{
	$fname=$_POST['firstname'];
	$lname=$_POST['lastname'];
	$cno=$_POST['contactnumber'];
	$email=$_POST['mail'];
	$uname=$_POST['username'];
	$psswrd=$_POST['password'];
	$sql = "INSERT INTO user_registration(firstname,lastname,contactno,email,username,password)VALUES ('$fname','$lname','$cno','$email','$uname','$psswrd')";

	if (mysqli_query($conn, $sql)) {
  		echo "New record created successfully";
		} else {
  		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

	mysqli_close($conn);
}
else
{
?>
<html>
	<body>
	<center>
		<form action="" method="post">
		Firstname:
		<input type="textbox" name="firstname"><br>
		Lastname:
		<input type="textbox" name="lastname"><br>
		Contact Number:
		<input type="textbox" name="contactnumber"><br>
		Email:
		<input type="textbox" name="mail"><br>
		Username:
		<input type="textbox" name="username"><br>
		Password:
		<input type="textbox" name="password"><br>
		<input type="submit" name="submit" value="Submit"><br>
	</form>
	</center>
	</body>
</html>
<?php
}
?>
welcome.php
<html>
	<body>
	<br><br>
	<center><b>
	WELCOME</b>
	</center>
	</body>
</html>
error.php
<html>
	<body>
	<br><br>
	<center>
	ERROR
	<br><br>
	<a href="login.php"><b>< Back</b></a><br>
	</center>
	</body>
</html>