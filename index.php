<!DOCTYPE html>
<html>
  <head>
    <title>Aden Jop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />  
    <link rel="stylesheet" type="text/css" href="bootcss/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    
   
      <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500&display=swap');
        *{
           margin: 0px;
           padding: 0px;
           box-sizing: border-box;
           font-family: 'Poppins', sans-serif;
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
          color: #E4ECE6;
        }

        nav ul li .active{
          color: #E4ECE6;
        }


        body{
          background-color: #E4ECE6;
        }


        .container{
          width: 99%;
          display: flex;
          flex-wrap: wrap;
          justify-content: space-between; 
        }

        .box{
          position: relative;
          width: 300px;
          height: 400px;
          background: #000;
          box-shadow: 0 30px 30px rgba(0,0,0,0.5);
          margin-top: 150px;
          margin-left: 10px;
        }

        .box .imgBX{
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
        }

        .box .imgBX img{
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          object-fit: cover;
          transition: 0.5s;
        }

        .box:hover .imgBX img{
          opacity: 0;
        }

        .box .content{
          position: absolute;
          bottom: 20px;
          left: 10%;
          width: 80%;
          height: 60px;
          background: #fff;
          transition: 0.5s;
          overflow: hidden;
          padding: 15px;
          box-sizing: border-box;
        }

        .box:hover .content{
          width: 100%;
          height: 100%;
          bottom: 0;
          left: 0;
        }

        .box .content h3{
          margin: 0;
          padding: 0;
          font-size: 20px;
        }

        .box .content p{
          margin: 10px 0 0;
          padding: 0;
          opacity: 0;
          line-height: 1.2em;
          transition: 0.5s;
          text-align: justify;
        }

        .box:hover .content p{
          opacity: 1;
          transition-delay: 0.5s;
          cursor: pointer;
        }

        .box:hover .content .btn{
          background: #003e46;
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

        .box:hover .content .btn:hover{
          background: #fff;
          color: #003e46;
          border: 1px solid #003e46;
          transform: scale(1.05);
        }

        footer{
      background-color: #373636;
       padding: 45px 0 20px;
    font-size: 20px;
    line-height: 20px;
    color: white;
    margin-top: 500px;
    height: 300px;
    margin-bottom: 0px;
    padding-bottom: 30px;
    }

    .social-icons {
    padding-left: 0;
    margin-bottom: 0px;
    list-style: none;
    margin-left: 50px;
    text-align: right;
    margin-right: 30px;

}

.social-icons li {
    display: inline-block;
    margin-bottom: 0px;
    margin-top: -50px;
}



.social-icons a {
    opacity: 0.7;
    -webkit-transition: all .3s ease;
    -o-transition: all .3s ease;
    transition: all .3s ease;
}


.social-icons a:hover {
    opacity: 1;

}
.our{
  margin-left: 0px;
  margin-top: -20px;
}

      </style>



  </head>
  <body>
    <!--stat nav bar -->

    <nav>
      <div class="logo">
        <p>Aden Jobs</p>
        <p style="font-size: 20px; padding-left: 50px; padding-top: 2px;">Your career is in good hands</p>
      </div>
      <ul>
        <li><a href="#" class="active">Home</a></li>        
        <li><a href="search2.php">Search</a></li>
        <li><a href="#about">About us</a></li>
        <li><a href="admin_form.php">Login</a></li>
      </ul>
    </nav>


    <div class="container">
      <div class="box">
        <div class="imgBX">
          <img src="images/s1.jpg">
        </div>
        <div class="content">
          <h3>ACLF</h3>
          <p>Action Contre la Faim is an International Humanitarian Organization which is private, non-political, non-denomination and non-profit making. Action Contre la Faim vocation is to save lives by combating hunger, disease and those crises threatening the lives of vulnerable men, women and children. Action Contre la Faim currently operates in 46 countries including Yemen globally and conduct programs in nutrition, food security, health, water and sanitation.</p>
        <a href="a_jobs.php"><button class="btn">All jobs from</button></a>
        </div>
      </div>



      <div class="box">
        <div class="imgBX">
          <img src="images/s5.jpg">
        </div>
        <div class="content">
          <h3>Muslim Hands</h3>
          <p>Muslim Hands is an international relief and development non-government organization established in 1993. The organization is currently working in 52 countries. Muslim Hands works both directly and with partners to carry out short- and long-term projects in education, health livelihoods, WASH and emergency relief.</p>
          <a href="#"><button class="btn">All jobs from</button></a>
        </div>
      </div>



      <div class="box">
        <div class="imgBX">
          <img src="images/s3.png">
        </div>
        <div class="content">
          <h3>ADRA</h3>
          <p>The Adventist Development and Relief Agency is an independent, humanitarian agency established for the specific purpose of providing individual and community development and disaster relief.  ADRA Yemen pursue a mission of changing the world by uplifting one life at a time.</p>
          <a href="#"><button class="btn">All jobs from</button></a>
        </div>
      </div>




      <div class="box">
        <div class="imgBX">
          <img src="images/s7.png">
        </div>
        <div class="content">
          <h3>WFP</h3>
          <p>The United Nations World Food Programme is Aiming to feed 13 million of the most vulnerable people with food assistance, WFP’s emergency response in Yemen is the agency’s largest anywhere in the world. WFP also provides nutrition support to 1.7 million children and mothers, and delivers school meals to 850,000 children each day.</p>
          <a href="w_jobs.php"><button class="btn">All jobs from</button></a>
        </div>
      </div>



      <div class="box">
        <div class="imgBX">
          <img src="images/s2.png">
        </div>
        <div class="content">
          <h3>MSF</h3>
          <p>Médecins Sans Frontières (MSF) is an international, independent, medical humanitarian organisation that delivers emergency aid to people affected by armed conflict, epidemics, natural disasters and exclusion from healthcare. MSF offers assistance to people based on need, irrespective of race, religion, gender or political affiliation.</p>
          <a href="#"><button class="btn">All jobs from</button></a>
        </div>
      </div>



      <div class="box">
        <div class="imgBX">
          <img src="images/s4.jpg">
        </div>
        <div class="content">
          <h3>SHS</h3>
          <p>The Society for Humanitarian Solidarity (SHS) is a nonprofit humanitarian NGO based in the in Aden, Yemen. It was founded in 1995.The SHS provides assistance to refugees and migrants who arrive in Yemen every year. The organization also assists the local community in Yemen. The NGO won the Nansen Refugee Award, dedicated by the UNCHR. SHS has partnerships with UNCHR, OCHA, and WFP.</p>
          <a href="#"><button class="btn">All jobs from</button></a>
        </div>
      </div>



      <div class="box">
        <div class="imgBX">
          <img src="images/s6.png">
        </div>
        <div class="content">
          <h3>CARE International</h3>
          <p>CARE International is currently seeking an Inclusion Officer – Reproductive Health/Inclusion. The Inclusion Officer reports to the RH/Inclusion Team Leader and will lead on the implementation of all CARE Protection interventions/Gender based violence in close collaboration with the Gender Specialist and local partner organizations and in coordination with consortium partners and other stakeholders.</p>
          <a href="#"><button class="btn">All jobs from</button></a>
        </div>
      </div>



      <div class="box">
        <div class="imgBX">
          <img src="images/s9.png">
        </div>
        <div class="content">
          <h3>ICRC</h3>
          <p>The International Committee of the Red Cross (ICRC) is an independent, neutral organization ensuring humanitarian protection and assistance for victims of war and armed violence.</p>
           <a href="#"><button class="btn">All jobs from</button></a>
        </div>
      </div>

    </div>








    <!-- start footer -->
    <footer class="footer">
     <div class="container">
           <div id="about"></div>
            <div class="row">
                <h2>About As</h2>
                <p> This website aims to help people who are looking for work. We have noticed that it is difficult to find a suitable job for a person’s field of study that matches his experience and skill, and the difficulty of going and checking institutions and companies to search for vacancies; So we created this website to solve the problem so that our website will help them to find a job, making it easier for them.     </p>
            
               
                <div class="">  
                <ul class="social-icons">
                    <li><a href=" #"> <img src="social-media-icons/twitter.png" alt="facebook">
                        </a></li>
                    <li><a href="#"> <img src="social-media-icons/Facebook.png" alt="facebook">
                       
                    <li><a href="#"> <img src="social-media-icons/whatsapp.png" alt="facebook">
                        </a></li>
                </ul>
            </div>
            <div class="our">
             <p class="copyright-text" style="color:#eaec1f">Copyright &copy; 2022 All Rights Reserved by
                    <a style="font-weight: bold;color: red;
                " href="">B4CS</a>


           </p>
</div>

        </div>
    
</footer> 

    <!-- end footer -->
    
  </body>
</html>