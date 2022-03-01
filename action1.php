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
        </div>
      </div>



      <div class="course" style="margin-top: 120px;">
        <div class="preview">
        </div>
        <div class="info">
          <h2 style="margin-top: 30px;">Job Description</h2>
          <p class="p-trunc">Job Title: Information and Knowledge Management (IKM) Officer<br>
Location: Aden<br>
Duration: 6 months, with possibility of extension<br>
Basic monthly salary: 1014 $ TO 1243 based on experience salary calculation<br>
Medical and Life insurance: Including the employee, spouse, children and parents<br>
Reports to: Line Manager: Technical/Support Manager : MEAL Head of Département</p>
        </div>
      </div>



      <div class="course" style="margin-top: 365px;">
        <div class="preview">
        </div>
        <div class="info">
          <h2 style="margin-top: 30px;">External Representation:</h2>
          <p class="p-trunc">Upon request, represent Action Contre la Faim in cluster meetings or authority meetings related to MEAL;<br>
Upon request, represent the organization towards communities, communicating about its mandate, eligibility criteria for projects, and humanitarian principles;<br>
Information sharing, experience sharing with other NGOs working in the area on MEAL aspects of programming<br>
The tasks and responsibilities defined in this job description are non-exhaustive and can evolve depending on the project’s need</p>
        </div>
      </div>



      <div class="course" style="margin-top: 640px;">
        <div class="preview">
        </div>
        <div class="info">
          <h2 style="margin-top: 30px;">Requirements & Skills:</h2>
          <p class="p-trunc">University degree in computer science, information management, statistics, mathematics, or technical diploma in computer science<br>
At least five years’ work experience, of which three years in emergency response information and knowledge management.<br>
Good understanding of the program cycle, humanitarian charters, laws, standards principals, and crosscutting issues.<br>
Demonstrated analytical skills and knowledge of research, information management and analysis processes.<br>
Fluent in English (speaking, reading, and writing).<br>
Experience in managing electronic data collection tools such as KoboToolBox and ODK, and coding form.<br>
Experience with advanced statistical software such as SPSS, InVivo, Stata etc<br>
Proficient in graphic design software and geographic information system.<br>
Good knowledge of Power BI and SharePoint.<br>
Excellent knowledge of Excel and Access (data manipulation and report generation) or any other database platform<br>
Strong commitment to Action Contre la Faim’s charter and core values.</p>
        </div>
      </div>



      <div class="course" style="margin-top: 950px;">
        <div class="preview">
        </div>
        <div class="info">
          <h2 style="margin-top: 30px;">Transversal Skills:</h2>
          <p class="p-trunc">Integrity and loyal to humanitarian principles.<br>
A team-player demonstrating the ability to multi-task and work in cross functional, fast-paced environment with the pressure of multiple deadlines.<br>
Maturity and professional ability to handle sensitive information and ability to respect the confidentiality of such information.<br>
Strong ability to facilitate appropriate information flow and coordination amongst a wide range of internal and external stakeholders.<br>
Resourceful through technology, research skills, and relationship building among diversified teams and units and peer organizations to promote organizational learning<br>
ACF offers equal opportunities, to qualified female and/or persons with a disability.</p>
        </div>
      </div>

      <div class="course" style="margin-top: 1220px;">
        <div class="preview">
        </div>
        <div class="info">
          <h2 style="margin-top: 30px;">How to Apply</h2>
          <p class="p-trunc">Application Process: Qualified candidates meeting the above requirements are requested to send an application comprising a detailed CV and Cover Letter in English,<br> Clearly mention the position you have applied + the location of the position in the email’s subject,<br> to recruitment-ad@ye-actioncontrelafaim.org<br> latest by 28th of Feb 2022. <br>

Only short-listed candidates will be contacted.</p>
        </div>
      </div>


    </div>








    <!-- start footer -->
    

    <!-- end footer -->
    
  </body>
</html>