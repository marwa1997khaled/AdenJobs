<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="utf-8">
		<style >
			textarea{
				height: 300px;
			}
			input[type=text],input[type=password],select,textarea{
				width: 100%;
				padding: 12px 20px;
				margin: 8px 0;
				display: inline-block;
				border: 1px solid #ccc;
				border-radius: 4px;
				box-sizing: border-box;
			}
			button[type=submit]{
				width: 50%;
				background-color: #4b4748;
				color: white;
				padding-right: 10px;
				padding-left: 15px;

				padding: 14px  20px;
				margin: 8px 0;
				border: 2px solid #700419;
				border-radius: 10px;
				cursor: pointer;
				padding-left: 2px;
				font-family: monospace;
				font-size: 20px;


			}
			button[type=submit]:hover{
				background-color: #474546;
			}

			a{
				color: white;
			}
			
			div{
				margin: auto;
				width: 50%;
				border-radius: 5px;
				background-color: #a09d9e;
				padding: 20px;
				font-family: italy;
				}
			body{
				background-color: #E4ECE6;
			}
			table{
				border-collapse: collapse;
				width: 100%;

			}
			th{
				height: 35px;
				text-align: left;
				vertical-align: top;
				background-color: #4b4748;
				color: #fff;
				font-family: calibri;
				font-size: 22px;
			}
			th,td{
				padding: 10px;
				border-bottom: 1px solid #ddd;
			}
			tr:nth-child(even){
				background-color: #f2f2f2;
			}
			tr:hover{
				background-color: #9b9396;
			}
			table tr:not(:first-child){
				cursor: pointer;
				transition: all .25s ease-in out;
			}
			.logo{
        	text-align: center;
            padding-top: 40px;
        }
        .logo h2{
        	font-size: 30px;}

			
		</style>
		
		
	<script src="js/jquery-3.4.1.min.js"></script>
		
	</head>
	<body>
		
			<div class="logo" style="">
				<h2>Aden Jobs</h2>
			</div>
			 
				<form method="POST">
					<div >
						<label> Id </label>
						<input type="text" id="no" name="no">
						<label> Organization </label>
						<input type="text" id="name" name="name">
						<label> Title </label>
						<input type="text" id="job" name="job">
						<label> Category </label>
						<input type="text" id="cat" name="cat">
						<label> Posted </label>
						<input type="text" id="post" name="post">
						<label> Deadline </label>
						<input type="text" id="dead" name="dead">
						<div style="margin: :auto;padding: 0">
							<button type="submit" name="btnedit" style="width: 100px">Edit</button>
							<button type="submit"><a href="admin_form.php">Sign Out</a></button>
							
							
						</div>
					</div>

					<br/><br/>
					<input type="text" id="textsearch" placeholder="Search For">

		

			<?php
			$host="localhost";
			$user="root";
			$password="";
			$db="job";
			$conn= mysqli_connect($host, $user ,$password, $db);
			
			$query ="SELECT * FROM jobs";
			$r = mysqli_query($conn ,$query );

			$no="";
			$name="";
			$job="";
			$cat="";
			$post="";
			$dead="";


			if(isset($_POST['no'])){
				$no=$_POST['no'];
			}
			if(isset($_POST['name'])){
				$name=$_POST['name'];
			}
			if(isset($_POST['job'])){
				$job=$_POST['job'];
			}
			if(isset($_POST['cat'])){
				$cat=$_POST['cat'];
			}
			if(isset($_POST['post'])){
				$post=$_POST['post'];
			}
			if(isset($_POST['dead'])){
				$dead=$_POST['dead'];
			}
	
			$sql="";
			if(isset($_POST['btnedit'])){
				$sqls="UPDATE  jobs SET Organization='$name',Title='$job',Category='$cat'
				,Posted ='$post',Deadline='$dead' WHERE Id=$no";
				mysqli_query($conn ,$sqls );
				header("Location:edit.php");
			}
			?>
			
			 </form>
       		
				<table id="info">
					<tr>
						<th>  Id  </th>
						<th> Organization</th>
						<th> Title </th>
						<th> Category</th>
						<th> Posted</th>
						<th> Deadline</th>
					</tr>
					

			<?php
            //connect
            $host = "localhost";
            $user = "root";
            $password = "";
            $db = "job";
            $conn = mysqli_connect($host,$user,$password,$db);

            //query
            $query = "SELECT * FROM jobs";
            $result = mysqli_query($conn,$query);
            if($result)
            {
                while ($row = mysqli_fetch_assoc($result))
                {
                    echo "<tr><td>".$row['Id']."</td><td>".$row['Organization']."</td><td>".$row['Title']."</td><td>".$row['Category']."</td><td>".$row['Posted']."</td><td>".$row['Deadline']."</td></tr>";
                }
                echo "</table>";
            }
            else
            {
                echo "error";
            }
            ?>
           
				</table>				
			
			<script >
				$(document).ready(function(){
					$("#textsearch").on("keyup",function(){
						var value=$(this).val().toLowerCase();
						$("#info tr").filter(function(){
							$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
						});
						$("#info tr:first").show();
					});
				});
					var tbl= document.getElementById("info");
					for ( var x=1;x<tbl.rows.length;x++) {
						tbl.rows[x].onclick=function(){
						document.getElementById("no").value=this.cells[0].innerHTML;
	 					document.getElementById("name").value=this.cells[1].innerHTML;
	 					document.getElementById("job").value=this.cells[2].innerHTML;
	 					document.getElementById("cat").value=this.cells[3].innerHTML;
	 					document.getElementById("post").value=this.cells[4].innerHTML;
	 					document.getElementById("dead").value=this.cells[5].innerHTML;
						}
						
					}
				
			</script>

		

			
 		


	</body>
</html>


