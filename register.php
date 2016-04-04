
<html>


<body>
<form name='login' action='login.php' method='POST'>
	<div style=" width: 600px; padding: 5px; margin-left: 0px; float: left;"><font size="5"><br>
	<div style="height:2px; width:540px; "></U></div>
	<?php 
		echo"<table  border='0' align='center'><tr>
		<td><h2>Enter username and Password Below:</h2></td>
		</tr>
		<table  border='0' align='center'>

		<tr>
		<td>Username:</td>
		<td><input type='text' name='username'></td><br>
		</tr>
		<tr>
		<td>Password:</td>
		<td><input type='password' name='password'></td><br>
		</tr>
		<tr>
		<td></td><td><input type='submit' name='login' value='login'></td><br>
		</tr>
		<tr><td></td><td> <a  style='color:red;' href='register.php'>Don't Have an account <br> Signup</a></td></tr>
		</table></font></div>";
	?>
</form>
			</div>
</body>
</html>
