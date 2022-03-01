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
                if($result = mysqli_query($conn_link ,"SELECT Deadline FROM jobs WHERE Id =2")){
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
                if($result = mysqli_query($conn_link ,"SELECT Posted FROM jobs WHERE Id =2")){
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
                if($result = mysqli_query($conn_link ,"SELECT Title FROM jobs WHERE Id =2")){
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
                if($result = mysqli_query($conn_link ,"SELECT Category FROM jobs WHERE Id =2")){
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

<!--\\\\\\ \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

      <div class="course" style="margin-top: 130px;">
        <div class="preview">
        </div>
        <div class="info">
          <h2 style="margin-top: 30px;">Job Description</h2>
          <p class="p-trunc">Job Title: Data entry Assistant<br>
Location: Aden<br>
Duration: Till December 2022 with possibility of extension<br>
Basic monthly salary: 897 $ TO 1072 based on experience salary calculation<br>
Medical and Life insurance: Including the employee, spouse, children and parents<br>
Reports to:        <br>
•    Line Manager /Technical/Support Manager : Senior Nutrition Information Management Officer</p>
        </div>
      </div>



      <div class="course" style="margin-top: 560px;">
        <div class="preview">
        </div>
        <div class="info">
          <h2 style="margin-top: 30px;">MAIN RESPONSIBILITIES: </h2>
          <p class="p-trunc">Objective  1 : Data entry and checking:<br>

Activities :<br>

Develop and maintain an schedule of data entry for monthly/weekly reporting in close collaboration with DPM<br>
Follow up with the DPMs/PM regarding the submission of reports by field teams<br>
Assist DPM/PM in developing CMAM data bases, reporting data bases and/or excel data base for additional reporting as/if required<br>
Enter the reporting data into specific and validated reporting database, CMAM database<br>
Check the quality of the data to be entered and inform your immediate supervisor of any problems; report any problems that can affect data quality (accuracy, completeness, relevance, punctuality (timeliness)  and clarity)<br>
Calculate the time needed for data entry and keep your immediate supervisor informed of its progress;<br>
Check any inconsistencies in the entered data;<br>
Closely coordinate and communicate with DPMs/PM in case of any inconsistent figures/data coming in the report.<br>
Summarize the entered data in the form of a reporting template defined by the PM.<br><br>
Objective  2 : Analyse the data:<br>

Activities:<br>

Elaborate statistics tables, graphs and trends in admissions/discharges and flag DPM/PM for technical reasoning;<br>
Sort and cross check the data; <br>
Write a summary report highlighting high/low trends, lower/higher performances reported, inconsistencies identified in the report and results;<br>
Detect missing or redundant data and propose improvements.  <br><br>  
Objective 3 : File the data:<br>

File all checked and received hard copies of  reporting format in to archive<br>
Save the data entries regularly as well as the statistical results.<br>
Keep files by month/year stored into the computer with clear segregation (draft version, final versions)<br>
Regularly store/archive the final versions of reports validated by PM into the online server;<br><br>
Objective 4: Engage on other activities as required, assigned by the Supervisor<br>

Ability to understand and to interpret the nature of human behavior</p>
        </div>
      </div>



      <div class="course" style="margin-top: 1000px;">
        <div class="preview">
        </div>
        <div class="info">
          <h2 style="margin-top: 30px;">Required Qualification:</h2>
          <p class="p-trunc">professional computer experience<br>
Knowledge of spread sheets (Excel)<br>
Capacity to take on board new software <br>
working under pressure<br>
Organizing and prioritizing capacity <br>
Rigour and autonomy <br>
Knowledge of English and local languages<br>
ACF offers equal opportunities, to qualified female and/or persons with a disability.</p>
        </div>
      </div>

      <div class="course" style="margin-top: 1240px;">
        <div class="preview">
        </div>
        <div class="info">
          <h2 style="margin-top: 30px;">How to Apply</h2>
          <p class="p-trunc">Application Process: Qualified candidates meeting the above requirements are requested to send an application comprising a detailed CV and Cover Letter in English, Clearly mention the position you have applied + the location of the position in the email’s subject, to recruitment-ho@ye-actioncontrelafaim.org  latest by 6th of March 2022. 
Only short-listed candidates will be contacted.</p>
        </div>
      </div>


    </div>








    <!-- start footer -->
    

    <!-- end footer -->
    
  </body>
</html>