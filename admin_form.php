<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="log.css">
		<style >
			body{
				background-color: #D6D8D8;
			}
			.box{
				background-color: #b8b0b3;

			}
			
			.box input[type="submit"]:hover {

				background:   #7e7579 ; }

			.box button[type="submit"]{
                     font-weight:140px ;
                  
                    border:0;
                    background:none ;
                    display: block;
                   font-family: monospace;
                    font-size:25px;
                    margin:20px auto;
                    text-align:center ;
                    border:2px solid #580514 ;
                   top:120px;
                    width:150px;
                    outline:none;
                    color:white  ;
                    border-radius: 24px;
                    transition: 0.25s;
                    cursor:pointer ;
                    }
                    .box button[type="submit"]:hover{
                        background:  #7e7579 ; 
                    }
                    a{
                        color: black}
                    


		</style>
               
	</head>
	<body>
		 
		<form class="box" action="admin.php" method="POST" style="margin-top:30px">
			<h1 style="color: black">Login</h1>
			<input type="text"  name="user" placeholder="username" style="border: 3px solid  #580514">
			<input type="password" name="pass" placeholder="password" style="border: 3px solid  #580514">
			<?php
			if(isset($_GET['wrong'])){
				echo "<p style ='color:red;'>user or password ar not correct </p>";
			}

			 ?>
			<input type="submit" name="log" value="Sign In" style="color: black; border: 3px solid  #580514;font-size: 25px;width: 150px">
            
            <button type="submit" style="color: black; border: 3px solid  #580514;"><a href="index.php" > Home Page</a></button>
			
			
		</form>

	</body>
</html>