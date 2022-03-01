<!DOCTYPE html>
<html>
  <head>
    <title>Aden Jobs</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />  
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    
   
      <style>
        @import url('https://fonts.googleapis.com/css2?family=Muli&display=swap');
        *{
           margin: 0px;
           padding: 0px;
           box-sizing: border-box;
        }

        body{
          background-color: #E4ECE6;
          font-family: 'Muli', sans-serif;
        }

        nav{
          width: 100%;
          height: 75px;
          background-color: #505d61;
          line-height: 75px;
          padding: 0px 100px;
          position: fixed;
          z-index: 1;
        }

        nav ul{
          float: right;
        }

        nav ul li{
          display: inline-block;
          list-style: none;
        }

        nav ul li a{
          color: #fff;
          text-decoration: none;
          font-size: 18px;
          text-transform: uppercase;
          padding: 0px 32px;
        }

        nav ul li a:hover{
          color: #68BA98;
        }

        nav ul li .active{
          color: #68BA98;
        }

        .course{
          background: #fff;
          border-radius: 10px;
          box-shadow: 0 10px 10px rgba(0,0,0,.2);
          display: flex;
          max-width: 100%;
          overflow: hidden;
          width: 1000px;
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%,-50%);
        }

        .course h6{
          opacity: .6;
          letter-spacing: 1px;
          text-transform: uppercase;
        }

        .course h2{
          letter-spacing: 1px;
          margin: 10px 0;
        }

        .preview{
          background: #68BA98;
          color: #fff;
          padding: 30px;
          width: 250px;
          position: relative;
        }

        .preview a{
          color: #fff;
          font-size: 12px;
          opacity: .6;
          margin-top: 30px;
          text-decoration: none;
        }

        .info{
          padding: 30px;
          position: relative;
          width: 100%;
        }

        .progress-wrapper{
          position: absolute;
          top: 30px;
          right: 30px;
          text-align: right;
          width: 150px;
        }

        .progress{
          background: #ddd;
          border-radius: 3px;
          height: 5px;
          width: 100%;
        }

        .progress::after{
          content: '';
          border-radius: 3px;
          background: #68BA98;
          position: absolute;
          top: 0;
          left: 0;
          height: 5px;
          width: 36%;
        }

        .progress-text{
          font-size: 10px;
          opacity: .6;
          letter-spacing: 1px;
        }

        .info p{
          font-size: 12px;
          font-weight: bold;
        }

        .btn{
          background: #68BA98;
          border: 1px solid transparent;
          box-shadow: 0px 5px 10px rgba(0,0,0,.2);
          color: #fff;
          font-size: 16px;
          padding: 10px 20px;
          position: absolute;
          bottom: 15px;
          right: 30px;
          letter-spacing: 1px;
          cursor: pointer;
          transition: all .4s ease-in-out;
          font-weight: bold;
          border-radius: 20px;
        }

        .btn:hover{
          background: #fff;
          color: #68BA98;
          border: 1px solid #68BA98;
          transform: scale(1.05);
        }

        nav .logo{
          font-size: 30px;
          font-weight: bold;
          letter-spacing: 1.5;
        }

        nav .logo p{
          float: left;
          color: #fff;
          text-transform: uppercase;
        }
     
      </style>



  </head>
  <body>
    <!--stat nav bar -->

    <nav>
      <div class="logo">
        <p>Aden Jobs</p>
      </div>
      <ul>
        <li><a href="index.php" class="active">Home</a></li>
        <li><a href="search2.php">Search</a></li>
      </ul>
    </nav>


    <div class="container">


      <!--\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
      <div class="course" style="margin-top: -50px;">
        <div class="preview">
          <h6></h6>
          <h2>
          <?php
                if($conn_link= mysqli_connect('localhost' , 'root')){
                mysqli_select_db($conn_link ,'job');               
                if($result = mysqli_query($conn_link ,"SELECT Organization FROM jobs WHERE Id =1")){
                 while($rows=mysqli_fetch_assoc($result)){
                echo '' .$rows['Organization'];
                 }
                 }else{
                 echo mysqli_error($conn_link);
                }
                }   
                ?>
              </h2>
          <a href="#"></a>
        </div>
        <div class="info">
          <div class="progress-wrapper">
            <div class="progress"></div>
            <span class="progress-text">
              <?php
                if($conn_link= mysqli_connect('localhost' , 'root')){
                mysqli_select_db($conn_link ,'job');               
                if($result = mysqli_query($conn_link ,"SELECT Deadline FROM jobs WHERE Id =1")){
                 while($rows=mysqli_fetch_assoc($result)){
                echo 'Closing on :' .$rows['Deadline'];
                 }
                 }else{
                 echo mysqli_error($conn_link);
                }
                }   
                ?>
             </span>
          </div>
          <h6>
            <?php
                if($conn_link= mysqli_connect('localhost' , 'root')){
                mysqli_select_db($conn_link ,'job');               
                if($result = mysqli_query($conn_link ,"SELECT Posted FROM jobs WHERE Id =1")){
                 while($rows=mysqli_fetch_assoc($result)){
                echo 'Posted on :' .$rows['Posted'];
                 }
                 }else{
                 echo mysqli_error($conn_link);
                }
                }   
                ?>
                </h6>
          <h2 style="margin-top: 30px;">
            <?php
                if($conn_link= mysqli_connect('localhost' , 'root')){
                mysqli_select_db($conn_link ,'job');               
                if($result = mysqli_query($conn_link ,"SELECT Title FROM jobs WHERE Id =1")){
                 while($rows=mysqli_fetch_assoc($result)){
                echo '' .$rows['Title'];
                 }
                 }else{
                 echo mysqli_error($conn_link);
                }
                }   
                ?>
          </h2>
          <p class="p-trunc">
            <?php
                if($conn_link= mysqli_connect('localhost' , 'root')){
                mysqli_select_db($conn_link ,'job');               
                if($result = mysqli_query($conn_link ,"SELECT Category FROM jobs WHERE Id =1")){
                 while($rows=mysqli_fetch_assoc($result)){
                echo '' .$rows['Category'];
                 }
                 }else{
                 echo mysqli_error($conn_link);
                }
                }   
                ?>
          </p>
          <a href="information.php"><button class="btn">more information</button></a>
        </div>
      </div>

<!--\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

<!--\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
      <div class="course" style="margin-top: 150px;">
        <div class="preview">
          <h6></h6>
          <h2>
          <?php
                if($conn_link= mysqli_connect('localhost' , 'root')){
                mysqli_select_db($conn_link ,'job');               
                if($result = mysqli_query($conn_link ,"SELECT Organization FROM jobs WHERE Id =1")){
                 while($rows=mysqli_fetch_assoc($result)){
                echo '' .$rows['Organization'];
                 }
                 }else{
                 echo mysqli_error($conn_link);
                }
                }   
                ?>
              </h2>
          <a href="#"></a>
        </div>
        <div class="info">
          <div class="progress-wrapper">
            <div class="progress"></div>
            <span class="progress-text">
              <?php
                if($conn_link= mysqli_connect('localhost' , 'root')){
                mysqli_select_db($conn_link ,'job');               
                if($result = mysqli_query($conn_link ,"SELECT Deadline FROM jobs WHERE Id =1")){
                 while($rows=mysqli_fetch_assoc($result)){
                echo 'Closing on :' .$rows['Deadline'];
                 }
                 }else{
                 echo mysqli_error($conn_link);
                }
                }   
                ?>
             </span>
          </div>
          <h6>
            <?php
                if($conn_link= mysqli_connect('localhost' , 'root')){
                mysqli_select_db($conn_link ,'job');               
                if($result = mysqli_query($conn_link ,"SELECT Posted FROM jobs WHERE Id =1")){
                 while($rows=mysqli_fetch_assoc($result)){
                echo 'Posted on :' .$rows['Posted'];
                 }
                 }else{
                 echo mysqli_error($conn_link);
                }
                }   
                ?>
                </h6>
          <h2 style="margin-top: 30px;">
            <?php
                if($conn_link= mysqli_connect('localhost' , 'root')){
                mysqli_select_db($conn_link ,'job');               
                if($result = mysqli_query($conn_link ,"SELECT Title FROM jobs WHERE Id =1")){
                 while($rows=mysqli_fetch_assoc($result)){
                echo '' .$rows['Title'];
                 }
                 }else{
                 echo mysqli_error($conn_link);
                }
                }   
                ?>
          </h2>
          <p class="p-trunc">
            <?php
                if($conn_link= mysqli_connect('localhost' , 'root')){
                mysqli_select_db($conn_link ,'job');               
                if($result = mysqli_query($conn_link ,"SELECT Category FROM jobs WHERE Id =1")){
                 while($rows=mysqli_fetch_assoc($result)){
                echo '' .$rows['Category'];
                 }
                 }else{
                 echo mysqli_error($conn_link);
                }
                }   
                ?>
          </p>
          <a href="information.php"><button class="btn">more information</button></a>
        </div>
      </div>

<!--\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

<!--\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
      <div class="course" style="margin-top: 350px;">
        <div class="preview">
          <h6></h6>
          <h2>
          <?php
                if($conn_link= mysqli_connect('localhost' , 'root')){
                mysqli_select_db($conn_link ,'job');               
                if($result = mysqli_query($conn_link ,"SELECT Organization FROM jobs WHERE Id =1")){
                 while($rows=mysqli_fetch_assoc($result)){
                echo '' .$rows['Organization'];
                 }
                 }else{
                 echo mysqli_error($conn_link);
                }
                }   
                ?>
              </h2>
          <a href="#"></a>
        </div>
        <div class="info">
          <div class="progress-wrapper">
            <div class="progress"></div>
            <span class="progress-text">
              <?php
                if($conn_link= mysqli_connect('localhost' , 'root')){
                mysqli_select_db($conn_link ,'job');               
                if($result = mysqli_query($conn_link ,"SELECT Deadline FROM jobs WHERE Id =1")){
                 while($rows=mysqli_fetch_assoc($result)){
                echo 'Closing on :' .$rows['Deadline'];
                 }
                 }else{
                 echo mysqli_error($conn_link);
                }
                }   
                ?>
             </span>
          </div>
          <h6>
            <?php
                if($conn_link= mysqli_connect('localhost' , 'root')){
                mysqli_select_db($conn_link ,'job');               
                if($result = mysqli_query($conn_link ,"SELECT Posted FROM jobs WHERE Id =1")){
                 while($rows=mysqli_fetch_assoc($result)){
                echo 'Posted on :' .$rows['Posted'];
                 }
                 }else{
                 echo mysqli_error($conn_link);
                }
                }   
                ?>
                </h6>
          <h2 style="margin-top: 30px;">
            <?php
                if($conn_link= mysqli_connect('localhost' , 'root')){
                mysqli_select_db($conn_link ,'job');               
                if($result = mysqli_query($conn_link ,"SELECT Title FROM jobs WHERE Id =1")){
                 while($rows=mysqli_fetch_assoc($result)){
                echo '' .$rows['Title'];
                 }
                 }else{
                 echo mysqli_error($conn_link);
                }
                }   
                ?>
          </h2>
          <p class="p-trunc">
            <?php
                if($conn_link= mysqli_connect('localhost' , 'root')){
                mysqli_select_db($conn_link ,'job');               
                if($result = mysqli_query($conn_link ,"SELECT Category FROM jobs WHERE Id =1")){
                 while($rows=mysqli_fetch_assoc($result)){
                echo '' .$rows['Category'];
                 }
                 }else{
                 echo mysqli_error($conn_link);
                }
                }   
                ?>
          </p>
          <a href="information.php"><button class="btn">more information</button></a>
        </div>
      </div>

<!--\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

<!--\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
      <div class="course" style="margin-top: 550px;">
        <div class="preview">
          <h6></h6>
          <h2>
          <?php
                if($conn_link= mysqli_connect('localhost' , 'root')){
                mysqli_select_db($conn_link ,'job');               
                if($result = mysqli_query($conn_link ,"SELECT Organization FROM jobs WHERE Id =1")){
                 while($rows=mysqli_fetch_assoc($result)){
                echo '' .$rows['Organization'];
                 }
                 }else{
                 echo mysqli_error($conn_link);
                }
                }   
                ?>
              </h2>
          <a href="#"></a>
        </div>
        <div class="info">
          <div class="progress-wrapper">
            <div class="progress"></div>
            <span class="progress-text">
              <?php
                if($conn_link= mysqli_connect('localhost' , 'root')){
                mysqli_select_db($conn_link ,'job');               
                if($result = mysqli_query($conn_link ,"SELECT Deadline FROM jobs WHERE Id =1")){
                 while($rows=mysqli_fetch_assoc($result)){
                echo 'Closing on :' .$rows['Deadline'];
                 }
                 }else{
                 echo mysqli_error($conn_link);
                }
                }   
                ?>
             </span>
          </div>
          <h6>
            <?php
                if($conn_link= mysqli_connect('localhost' , 'root')){
                mysqli_select_db($conn_link ,'job');               
                if($result = mysqli_query($conn_link ,"SELECT Posted FROM jobs WHERE Id =1")){
                 while($rows=mysqli_fetch_assoc($result)){
                echo 'Posted on :' .$rows['Posted'];
                 }
                 }else{
                 echo mysqli_error($conn_link);
                }
                }   
                ?>
                </h6>
          <h2 style="margin-top: 30px;">
            <?php
                if($conn_link= mysqli_connect('localhost' , 'root')){
                mysqli_select_db($conn_link ,'job');               
                if($result = mysqli_query($conn_link ,"SELECT Title FROM jobs WHERE Id =1")){
                 while($rows=mysqli_fetch_assoc($result)){
                echo '' .$rows['Title'];
                 }
                 }else{
                 echo mysqli_error($conn_link);
                }
                }   
                ?>
          </h2>
          <p class="p-trunc">
            <?php
                if($conn_link= mysqli_connect('localhost' , 'root')){
                mysqli_select_db($conn_link ,'job');               
                if($result = mysqli_query($conn_link ,"SELECT Category FROM jobs WHERE Id =1")){
                 while($rows=mysqli_fetch_assoc($result)){
                echo '' .$rows['Category'];
                 }
                 }else{
                 echo mysqli_error($conn_link);
                }
                }   
                ?>
          </p>
          <a href="information.php"><button class="btn">more information</button></a>
        </div>
      </div>

<!--\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->


<!--\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
      <div class="course" style="margin-top: 750px;">
        <div class="preview">
          <h6></h6>
          <h2>
          <?php
                if($conn_link= mysqli_connect('localhost' , 'root')){
                mysqli_select_db($conn_link ,'job');               
                if($result = mysqli_query($conn_link ,"SELECT Organization FROM jobs WHERE Id =1")){
                 while($rows=mysqli_fetch_assoc($result)){
                echo '' .$rows['Organization'];
                 }
                 }else{
                 echo mysqli_error($conn_link);
                }
                }   
                ?>
              </h2>
          <a href="#"></a>
        </div>
        <div class="info">
          <div class="progress-wrapper">
            <div class="progress"></div>
            <span class="progress-text">
              <?php
                if($conn_link= mysqli_connect('localhost' , 'root')){
                mysqli_select_db($conn_link ,'job');               
                if($result = mysqli_query($conn_link ,"SELECT Deadline FROM jobs WHERE Id =1")){
                 while($rows=mysqli_fetch_assoc($result)){
                echo 'Closing on :' .$rows['Deadline'];
                 }
                 }else{
                 echo mysqli_error($conn_link);
                }
                }   
                ?>
             </span>
          </div>
          <h6>
            <?php
                if($conn_link= mysqli_connect('localhost' , 'root')){
                mysqli_select_db($conn_link ,'job');               
                if($result = mysqli_query($conn_link ,"SELECT Posted FROM jobs WHERE Id =1")){
                 while($rows=mysqli_fetch_assoc($result)){
                echo 'Posted on :' .$rows['Posted'];
                 }
                 }else{
                 echo mysqli_error($conn_link);
                }
                }   
                ?>
                </h6>
          <h2 style="margin-top: 30px;">
            <?php
                if($conn_link= mysqli_connect('localhost' , 'root')){
                mysqli_select_db($conn_link ,'job');               
                if($result = mysqli_query($conn_link ,"SELECT Title FROM jobs WHERE Id =1")){
                 while($rows=mysqli_fetch_assoc($result)){
                echo '' .$rows['Title'];
                 }
                 }else{
                 echo mysqli_error($conn_link);
                }
                }   
                ?>
          </h2>
          <p class="p-trunc">
            <?php
                if($conn_link= mysqli_connect('localhost' , 'root')){
                mysqli_select_db($conn_link ,'job');               
                if($result = mysqli_query($conn_link ,"SELECT Category FROM jobs WHERE Id =1")){
                 while($rows=mysqli_fetch_assoc($result)){
                echo '' .$rows['Category'];
                 }
                 }else{
                 echo mysqli_error($conn_link);
                }
                }   
                ?>
          </p>
          <a href="information.php"><button class="btn">more information</button></a>
        </div>
      </div>

<!--\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->




    <!-- start footer -->
    

    <!-- end footer -->
    
  </body>
</html>