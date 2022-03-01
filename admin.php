



<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="log.css">
		<style >
			body{
				background-color: #524d4f;
			}

			

		</style>
	</head>
	<body>
		<form class="box"  method="POST" style="font-size: 35px; color: white;">
			<center>
			<?php
				require 'config.php';
					if(isset($_POST['log'])){
				$username=$_POST['user'];
				$password=$_POST['pass'];
				
				$query="SELECT * FROM admin where name = '$username' and password ='$password'";
				$result= mysqli_query($conn,$query);
				if (mysqli_num_rows($result) == 1) {
				echo "<h2>Welcom </h2> " .  $username;
				echo "<br/><br/><a href='edit.php'>Login</a>"; 
			}else {
				header("location:admin_form.php?wrong");
		
				}

			} ?>
			</center>




		</form>	

	</body>
</html>

	