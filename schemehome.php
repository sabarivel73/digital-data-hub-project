<?php
    session_start();
    include"database.php";
    function countRecord($sql,$db)
    {
        $res=$db->query($sql);
        return $res->num_rows;
    }
    if(!isset($_SESSION["ID"]))
    {
	    header("location:ulogin.php");
    }
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Data Hub</title>
    </head>
    <body>
       <div class="container">
            <div class="row">
              <h1>Know your scheme details related to your business</h1>
            </div>
            <div class="navbar">
                <nav>
                    <ul>
                        <button><a href="commentsd1.php">Send Your comments</a></button>
                        <button><a href="scheme.php">Back</a></button>
                    </ul>
                </nav>
            </div>
        </div>
            <div class="main">
               <div class="content">
                    <?php
                      if(isset($_POST['submit']))
                      {
                          $tob=$_POST['state'];
                          $bt=$_POST['bt'];
                          $bc=$_POST['bc'];
                          $ayb=$_POST['ayb'];
                          if($tob=="Tamil Nadu" && $bc=="Agriculture")
                          {
                              echo"<h3>Your business category is Agriculture above this scheme details will be display</h3>";
                              echo"<h3>Schemes for Agriculture : </h3>";
                              echo"<h3>Pradhan Mantri Kisan Samman Nidhi (PM-KISAN)</h3>
                                  <ul>
                                   <li>PM-KISAN is a central sector scheme launched on 24th February 2019 to supplement financial needs of land holding farmers, subject to exclusions. Under the scheme, financial benefit of Rs 6000/- per year is transferred in three equal four-monthly installments into the bank accounts of farmers’ families across the country, through Direct Benefit Transfer (DBT) mode.</li>
                                  </ul>";
                              echo"<h3>Pradhan Mantri Kisan MaanDhanYojana (PM-KMY)</h3>
                                  <ul>
                                    <li>In order to provide financial support and security to the most vulnerable farmer families, Government launched Pradhan Mantri Kisan Maandhan Yojana w.e.f. 12.09.2019 to provide pension benefits to small and marginal farmers. PM KMY is meant for Small and Marginal Farmers falling in the entry age between 18 to 40 years having cultivable land up to 2 hectares The scheme seeks to provide Rs 3,000/- monthly pension to the Small and Marginal Farmers once they attain 60 years of age.</li>
                                  </ul>";
                              echo"<h3>Pradhan Mantri Fasal Bima Yojana (PMFBY)</h3>
                                  <ul>
                                   <li>PMFBY was launched in 2016 in order to provide a simple and affordable crop insurance product to ensure comprehensive risk cover for crops to farmers against all non-preventable natural risks from pre-sowing to post-harvest and to provide adequate claim amount. The scheme is demand driven and available for all farmers.</li>
                                  </ul>";
                              echo"<h3>Kisan Credit Card (KCC)</h3>
                                  <ul>
                                   <li>The KCC Scheme was introduced with the objective of providing adequate and timely credit to the farmers for their agricultural operations. The Government of India provides interest subvention of 2% and Prompt Repayment Incentive of 3% to the farmers, thus making the credit available at a very subsidized rate of 4% per annum.</li>
                                  </ul>";
                              echo"<h3>Pradhan Mantri Krishi Sinchayee Yojana (PMKSY)</h3>
                                  <ul>
                                   <li>Pradhan Mantri Krishi Sinchayee Yojana (PMKSY) was launched during the year 2015-16 to enhance physical access of water on farm and expand cultivable area under assured irrigation, improve on-farm water use efficiency, introduce sustainable water conservation practices, etc.</li>
                                  </ul>";
                              echo"<h3>National Food Security Mission (NFSM)</h3>
                                  <ul>
                                   <li>The Mission aims at increasing production of rice, wheat, pulses coarse cereals (maize & barley), nutri-cereals (jowar, bajra, ragi& other small millets) and commercial crops (jute, cotton & sugarcane) and oilseeds through area expansion and productivity enhancement in a sustainable manner in the identified districts of the country.</li>
                                  </ul>";
                              echo"<h3>Rastriya Krishi Vikas Yojana (RKVY)</h3>
                                  <ul>
                                   <li>The scheme focuses on creation of pre & post-harvest infrastructure in agriculture and allied sectors that help in supply of quality inputs, market facilities, etc to farmers. It provides flexibility and autonomy to states to implement projects as per the local farmers’ needs and priorities from a bouquet of activities in agriculture and allied sectors. The scheme aims to fill the resources gap of agriculture and allied sectors by providing financial support to states for undertaking various activities to increase in overall growth of agriculture and allied sectors and farmers’ income. Allocation for the scheme during 2022-23 is Rs 3031.08 crore.</li>
                                  </ul>";
                              echo"<ul>
                                     <li><h3>This are few schemes related to Agriculture and more schemes are present in our government.</h3></li>
                                   </ul>";
                          }
                      }
                    ?>
               </div>
            </div>
            <div class="footer">
                <p>Copyright &copy; digital data hub 2024</p>
            </div>
    </body>
</html>
<style>
 *
 {
     margin:0;
     padding:0;
     box-sizing:border-box;
     font-family:'poppins',sans-serif;
     cursor:pointer;
 }
 body
 {
     width:100%;
     min-height:150vh;
     color:white;
     background:linear-gradient(to right,#8B008B,#DDA0DD);
 }
 .container
 {
     display:flex;
     justify-content:space-between;
     padding:15px 20px;
     text-shadow:2px 2px 4px rgba(0,0,0,1);
     animation:animi 1s ease-in-out;
 }
 .container h1:hover
 {
     color:black;
     text-shadow:2px 2px 4px rgba(255,255,255,1);
 }
 @keyframes animi
 {
     0%
     {
         transform:translatey(-100%);
     }
 }
 nav ul button
 {
     display:inline-block;
     margin:10px 20px;
     font-weight:bold;
     font-size:20px;
 }
 nav ul button a
 {
    text-decoration:none;
    color:black;
    font-size:20px;
    padding:7px 7px;
    transition:all .5s ease;
 }
 .main
 {
     width:100%;
     display:flex;
     overflow:hidden;
 }
 .main .content
 {
     width:50%;
     margin-top:5%;
     margin-left:5%;
     animation:animi2 1s ease-in-out;
 }
 @keyframes animi2
 {
     0%
     {
         opacity:0;
         transform:translateX(-50%);
     }
 }
 .content h3
 {
     margin-bottom:2%;
 }
 .content h3:hover
 {
     color:black;
     text-shadow:2px 2px 4px rgba(255,255,255,1);
 }
 .content li
 {
     margin-left:3%;
     font-family:verdana,Geneva,Tahoma,sans-serif;
     margin-bottom:3%;
 }
 span
 {
     color:yellow;
 }
 button
 {
     opacity:0.8;
     background:rgba(255,255,255,0.07);
     border:none;
     outline:none;
     border-radius:20px;
     text-shadow:2px 2px 4px rgba(255,255,255,0.5);
     box-shadow:3px 3px 5px rgba(31,38,135,0.35);
     border-left:5px solid rgba(255,255,255,0.3);
     border-top:5px solid rgba(255,255,255,0.3);
 }
 button a:hover
 {
    background:black;
    border-radius:20px;
    color:white;
 }
 .image
 {
     width:50%;
     z-index:-1;
 }
 .image img
 {
     width:40rem;
     animation:animi3 1s ease-in-out;
     animation-iteration-count:1;
 }
 @keyframes animi3
 {
     0%
     {
         transform:translateX(100%);
     }
     100%
     {
         transform:translateX(0%);
     }
 }
 .footer p
 {
    color:black;
    text-shadow:2px 2px 2px rgba(255,255,255,1);
    position:fixed;
    left:0;
    bottom:1%;
    width:100%;
    text-align:center;
 }
 html
 {
    scroll-behavior:smooth;
 }
 ul a
 {
     font-size:17px;
     color:black;
     text-decoration:none;
 }
 ul a:hover
 {
     color:white;
 }
 #section1
 {
     height:450px;
     display:inline-block;
     width:100%;
 }
 #section2
 {
     height:450px;
     display:inline-block;
     width:100%;
 }
 #section3
 {
     height:270px;
     display:inline-block;
     width:100%;
 }
 .sectionpoint li
 {
     margin-left:50px;
 }
 .sectionpoint1 li
 {
     margin-left:30px;
 }
</style>