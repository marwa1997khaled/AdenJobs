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
        <p>World Food Programme</p>
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
                if($result = mysqli_query($conn_link ,"SELECT Deadline FROM jobs WHERE Id =6")){
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
                if($result = mysqli_query($conn_link ,"SELECT Posted FROM jobs WHERE Id =6")){
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
                if($result = mysqli_query($conn_link ,"SELECT Title FROM jobs WHERE Id =6")){
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
                if($result = mysqli_query($conn_link ,"SELECT Category FROM jobs WHERE Id =6")){
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



      <div class="course" style="margin-top: 240px;">
        <div class="preview">
        </div>
        <div class="info">
          <h2 style="margin-top: 30px;">KEY ACCOUNTABILITIES (not all-inclusive)</h2>
          <p class="p-trunc">Carry out system and hardware maintenance tasks, such as running specialised network monitoring and system protection, to ensure technology is running effectively. <br>
Monitor technology reliability, identify user needs, analyse data and produce accurate reports in order to recommend IT solutions to support informative decision-making. <br>
Resolve queries independently, escalating if required, to ensure that standard IT questions are answered and accurate information is provided to staff.<br>
Provide standard technical training to end users of commonly used technology and systems, in order to assist WFP staff in conducting their work. <br>
Provide guidance and training to junior colleagues in the delivery of IT support services to support the capability building of staff. <br>
Support the co-ordination of new application implementation in order to provide WFP staff with the tools they need to perform effectively. <br>
Draft standard material such as end-user and technical documentation to ensure staff have access to required information about IT services and products. <br>
Implement improvements to methods and processes within the IT division in order to support the continuous improvement of IT services provided. <br>
Coordinate installation and maintenance of telecommunications systems and equipment, to ensure optimal services in compliance with standard operations procedures.<br>
Coordinate a team of IT staff to ensure individual and team objectives are met in compliance with all relevant regulations and policies.<br>
Follow set emergency response processes and procedures as required to provide support in enabling emergency food assistance needs to be met. </p>
        </div>
      </div>



      <div class="course" style="margin-top: 600px;">
        <div class="preview">
        </div>
        <div class="info">
          <h2 style="margin-top: 30px;">STANDARD MINIMUM QUALIFICATIONS</h2>
          <p class="p-trunc">Education: Completion of secondary school education. A post-secondary certificate in the related functional area.<br><br>

Experience: Minimum 5 years of relevant experience.<br>

Language: Fluency in both oral and written communication in English and Arabic.</p>
        </div>
      </div>



      <div class="course" style="margin-top: 970px;">
        <div class="preview">
        </div>
        <div class="info">
          <h2 style="margin-top: 30px;">OTHER SPECIFIC JOB REQUIREMENTS</h2>
          <p class="p-trunc">Responsible for the overall performance of the helpdesk ticketing system (EasyVista) by following up with the team the status of the tickets and review the daily, weekly and monthly tickets reports to make sure that the IT requests are responded on time.<br>
Technically guide the junior IT helpdesk team by providing the required technical guidance to ensure that all the IT requests are solved effectively.<br>
Ensure that all the workstations and servers are updated to the latest operating system version to maintain the KPI of the office to 100% according to WFP standards.<br>
Monitor the connectivity status and bandwidth for all connections in the Aden office buildings and remote sites. Prepare a full bandwidth report every week and formulate key data indicators to be present for IT management decision.<br>
Assist in planning and initiating network infrastructure upgrades by proposing new technologies to meet the need of expanding the network in different sites.<br>
Install, configure and maintain telephone PBX system to support IP, digital and analogue telephone systems. This includes programming the phone extensions for all the staff members. Integrate VSAT voice services with PBX systems and make sure that the service is available.<br>
Manage and troubleshoot WAN/LAN devices including routers, WLC, access points, switches, load balancer and other devices to make sure that they are always available.<br>
Support the development of standard material such as training documentation and web content on behalf of senior officers, to ensure staff have access to required information about IT services and products.<br>
Assist in conducting technical assessment for the IT projects by preparing the required diagrams, BoQ, follow up the procurement process, follow up the implementation process to make sure that the IT projects are implemented within the timeline.<br>
Assist in performing routine deployments of servers hardware and software, including assisting in testing and the identification of problems, to contribute to the effective functioning of technology.<br>
Perform any other duties assigned by the direct supervisor.</p>
        </div>
      </div>



      <div class="course" style="margin-top: 1400px;">
        <div class="preview">
        </div>
        <div class="info">
          <h2 style="margin-top: 30px;">TERMS AND CONDITIONS</h2>
          <p class="p-trunc">The applicant should be a Yemeni national or having work/residency permit.<br>
WFP staff who are still under probation period are not eligible to apply for another FT position.<br>
WFP staff on FT contracts must have completed one year in the current position to be eligible to apply for another FT position.<br>
WFP is an equal opportunity employer.<br>
WFP does not charge a fee at any stage of the recruitment process.<br>
By submitting your application, you have read the Terms of Reference for this position and agree that any false, wrong or incomplete information might lead to your disqualification in this recruitment process<br>
Applications must be submitted online:<br>
Using English language only.<br>
Indicating all your job TOR.<br>
Indicating clear years of experience with each job (month/year)</p>
        </div>
      </div>

      <div class="course" style="margin-top: 1680px;">
        <div class="preview">
        </div>
        <div class="info">
          <h2 style="margin-top: 30px;">How to Apply</h2>
          <p class="p-trunc">To apply:

Link For Non-WFP candidates: <a href="https://career5.successfactors.eu/sfcareer/jobreqcareer?jobId=158886&company=C0000168410P">Click here</a> <br>  

Link for WFP Staff: <a href="https://login.microsoftonline.com/462ad9ae-d7d9-4206-b874-71b1e079776f/saml2?SAMLRequest=fZLLbtswEEV%2FReCeEsnKehCWAzdGUAN9CInaRTcFRQ0TAhLpcqi6%2Ffsqsluki4ZL8s7cO2e4vfk5jckPCGi9awhPGUnAaT9Y99iQz90drcjNbotqGsVJ7uf45O7h%2BwwYk6XQoby8NGQOTnqFFqVTE6CMWj7sP7yXImXyFHz02o8kOSyF1qm4mj3FeEKZZaN%2FtC6drA4evYnejdZBqv2U5YVQQ62ADuVQ01ywgvZVmdOS9xxYWZdlYbI1AUnufNCwBmyIUSMCSY6Hhnzjfd5zU%2BS0MsVA87LiVNVVQQtR12UOplLFsxRxhqPDqFxsiGBCUCaoeNMJJnklxSbNN5uvJGmvo7y17oLotbn7iwjlu65rafvpoSPJlz%2BoFwG5gpWre3hJ9PXGChHCM0SyO5%2FPKc5aA6JROvqAK7lbthxeVDln7TZ76fJ3mR%2BXtsdD60erfyX7cfTn2wAqQkNimGEFOqn4%2FyA85euNHahZpXJ2eAJtjYWBZLur7b%2B%2FZvcb&RelayState=%2Fsf%2Fjobreq%3FjobId%3D158886&SigAlg=http%3A%2F%2Fwww.w3.org%2F2000%2F09%2Fxmldsig%23rsa-sha1&Signature=eDyb1Gdq93WuZKRwujY2jKkNgD8uNixUpI7oqhtmp2X6GnRsDFRMZmLaKC4leO41XDREufECPuIgQCckWDhFKLDlwV77yuRJ9qj4LxaZyVadB%2FvRzrddVUu%2FZ2S60rxLHJ%2BJqxgbQBYcVEAdgzDm7RpARRYYojh2NB%2F7OytliYU%3D&sso_reload=true">Click here</a>    <br>

Only short-listed candidates will be contacted.</p>
        </div>
      </div>


    </div>








    <!-- start footer -->
    

    <!-- end footer -->
    
  </body>
</html>