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
          background: #505d61;
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
        }
     
      </style>



  </head>
  <body>
    <!--stat nav bar -->

    <nav>
      <div class="logo">
        <p>Action Contre la Faim</p>
      </div>
      <ul>
        <li><a href="index.php" class="active">Home</a></li>
        <li><a href="search2.php">Search</a></li>
      </ul>
    </nav>


    <div class="container">
      <div class="course" style="margin-top: -100px;">
        <div class="preview">
        </div>
        <div class="info">
          <div class="progress-wrapper">
            <div class="progress"></div>
            <span class="progress-text">
              <?php
                if($conn_link= mysqli_connect('localhost' , 'root')){
                mysqli_select_db($conn_link ,'job');               
                if($result = mysqli_query($conn_link ,"SELECT Deadline FROM jobs WHERE Id =3")){
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
                if($result = mysqli_query($conn_link ,"SELECT Posted FROM jobs WHERE Id =3")){
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
                if($result = mysqli_query($conn_link ,"SELECT Title FROM jobs WHERE Id =3")){
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
                if($result = mysqli_query($conn_link ,"SELECT Category FROM jobs WHERE Id =3")){
                 while($rows=mysqli_fetch_assoc($result)){
                echo '' .$rows['Category'];
                 }
                 }else{
                 echo mysqli_error($conn_link);
                }
                }   
                ?>
          </p>
        </div>
      </div>

<!--\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

      <div class="course" style="margin-top: 120px;">
        <div class="preview">
        </div>
        <div class="info">
          <h2 style="margin-top: 30px;">Job Description</h2>
          <p class="p-trunc">Job Title: Nutrition and Health Programme Manager<br>
Location: Aden AND Al-Khokah (Two vacancies)<br>
Duration: Till December 2022 with possibility of extension<br>
Basic monthly salary: 2303 $ TO 2753 based on experience salary calculation<br>
Medical and Life insurance: Including the employee, spouse, children and parents</p>
        </div>
      </div>

<!--\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

      <div class="course" style="margin-top: 480px;">
        <div class="preview">
        </div>
        <div class="info">
          <h2 style="margin-top: 30px;">MAIN RESPONSIBILITIES: </h2>
          <p class="p-trunc">Establish and supervise activities in the framework of nutritional projects <br>

The Nutrition and Health Programme Manager is responsible for :<br>

Management of the project cycle in nutrition and health<br>
Meeting the objectives of ACF in the health centres dealing with primary health care and malnutrition and within the community <br>
The quality of the programme for which he/she is responsible <br>
Sharing his/her analyse of the needs in the area with the Field Coordinator and the Head of Health and Nutrition Department<br>
Providing relevant inputs to Field Coordinator for the design of proposals with a view to developing shared and integrated approaches<br>
Insuring the deployment of basic medical and nutritional packages, including those related to primary health cares, RH, CMAM and IYCF practice <br>
Promoting and supervising activities related to care practice and organise mother-child play sessions and discussion group
Promoting and supervising high quality care for clients of the health centre <br>
Putting in place and monitoring the system of data collection concerning the treatment of malnutrition, as well as PHC as a basis for the evaluation and furtherance of the programme <br>
Preparing requisitions, monitoring and controlling consumption <br>
Participating in the preparation and execution of nutrition surveys (provide information to those conducting the survey : local geographical, economic, social and anthropological data) <br>
Creating and developing a network for the detection and recording of clients, notably by the use of community mobilisation techniques <br>
In keeping with the policy of ACF as a learning organisation, contributing to building on good practice, experience, and assessments </p>
        </div>
      </div>

<!--\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

      <div class="course" style="margin-top: 920px;">
        <div class="preview">
        </div>
        <div class="info">
          <h2 style="margin-top: 30px;">Required Qualification:</h2>
          <p class="p-trunc">ESSENTIAL:<br>

At least 2 years of experience in primary health care (IMCI, reproductive health).<br>
Extensive experience in capacity building and training on health workers (nurses, doctors, midwives) is essential.<br>
Organization skills are necessary.<br>
Ability to observe and to provide feedback on the activities.<br>
Ability to understand and to interpret the nature of human behavior.<br>
Ability to analyze, interpret and propose solutions based on changing context.<br>
Ability to work under pressure and react according to evolving context / situation.<br>
Ability to show activeness and creativity in working environment.<br>
Ability to use fluently Word, Excel, Power Point a plus.<br>
Fluent in speaking and writing English.<br><br>
PREFERRED:<br>

At least 1 year proven experience in the field of management of nutrition project (CMAM, SFP / OTP / SC preferred or care & feeding practices). </p>
        </div>
      </div>
<!--\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
      <div class="course" style="margin-top: 1230px;">
        <div class="preview">
        </div>
        <div class="info">
          <h2 style="margin-top: 30px;">How to Apply</h2>
          <p class="p-trunc">Application Process: Qualified candidates meeting the above requirements are requested to send an application comprising a detailed CV and Cover Letter in English, Clearly mention the position you have applied + the location of the position in the email’s subject, to recruitment-ho@ye-actioncontrelafaim.org  latest by 6th of March 2022. 
Only short-listed candidates will be contacted.</p>
        </div>
      </div>


    </div>



<!--\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->




    <!-- start footer -->
    

    <!-- end footer -->
    
  </body>
</html>