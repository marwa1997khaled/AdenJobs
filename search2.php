<!DOCTYPE html>
<html>
	<head>
		<title>Aden Jobs</title>
		<meta charset="utf-8">
		<script src="js/jquery-3.4.1.min.js"></script>
		<style >
			
			.nav ul{
                font-family: cursive;
                font-size: 30px;
                list-style: none;
                width: 100%;
                height: 70px;
                background: rgb(0,0,0,0.595);
               top:-9px;
               left: 0px;
              text-align: left;
                font-family: calibri;
                padding-top: 3%;

                margin-top: 0px;
                position: fixed;
                z-index: 100;
                max-width: 100%;
              
            }
            .nav ul li{
            color: white;
	        }
	        .nav ul li :hover{
	            color: #bdc3c7;
	        }
	        li{
                display: inline-block;
                padding-left: 3%;
            }

            ul{
                float: left;

            }
            a{
                text-decoration: none;
                color: inherit;
            }

            a:hover{
                 color: black;
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
			input[type=submit]{
				width: 50%;
				background-color: #2a2a2a;
				color: white;
				padding: 14px  20px;
				margin: 8px 0;
				border: none;
				border-radius: 4px;
				cursor: pointer;
				padding-left: 2px;
				font-family: monospace;
				font-size: 20px;


			}
			input[type=submit]:hover{
				background-color: #474546;
			}
			button{
				width: 100%;
				background-color: #2a2a2a;
				color: white;
				padding: 14px 20px;
				margin: 8px 0;
				border: none;
				border-radius: 4px;
				cursor: pointer;
				font-family: monospace;
				font-size: 20px;

			}
			button:hover{
				background-color: #474546;
			}
		/*	div{
				margin: auto;
				width: 50%;
				border-radius: 5px;
				background-color: #a09d9e;
				padding: 20px;
				font-family: italy;
				margin-top: 200px;
				}*/
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
				background-color: #2a2a2a;
				color: #fff;
				font-family: monospace;
				font-size: 20px;
			}
			th,td{
				padding: 10px;
				border-bottom: 1px solid #ddd;
			}
			tr:nth-child(even){
				background-color: #f2f2f2;
			}
			tr:hover{
				background-color: #9c9c9c;
			}
			table tr:not(:first-child){
				cursor: pointer;
				transition: all .25s ease-in out;
			}
			.img{
				background-color: #6c696a;
				text-align: center;
				margin: auto;
				width: 50%;
				border-radius: 5px;
				background-color: #a09d9e;
				padding: 20px;
				font-family: italy;
				margin-top: 120px;

			}
			form{
				margin-top: -20px;
			}

		</style>
		

	</head>
	<body>
		 <div class="nav">
                <ul>
                    <li style="margin-left: -50px"><a href="index.php" style="margin-left: 200px">Home</a></li>
                </ul>
              </div>
              <div class="img" >
				<img src="images/search.jpg" width="50%" >
			</div>
			 
				<form method="POST">
					
					

					<br/><br/>
					<input type="text" id="textsearch" placeholder="Search For">


			<?php
            //connect
            $host = "localhost";
            $user = "root";
            $password = "";
            $db = "job";
            $conn = mysqli_connect($host,$user,$password,$db);
            
            //insert
            if(isset($_POST['no']))
               {$no = $_POST['no'];}
            if(isset($_POST['name']))
               {$name = $_POST['name'];}
            if(isset($_POST['job']))
               {$loc = $_POST['job'];}
            if(isset($_POST['cat']))
               {$add = $_POST['cat'];}
            if(isset($_POST['post']))
               {$phone = $_POST['post'];}
            if(isset($_POST['dead']))
               {$price = $_POST['dead'];}

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