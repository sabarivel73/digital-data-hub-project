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
              <h1>Vehicle</h1>
            </div>
            <div class="navi">
             <?php
               include "vsidebar.php";
             ?>
            </div>
       </div>
       <div class="main">
           <div class="content">
                <h2>Hi <?php echo $_SESSION["NAME"]; ?></h2>
                <p>In this page you can access multiple things like DL,LLR and Road Safety this things are help to improve your knowledge about driving and how to take DL and LLR in Online Field.</p><br><br>
                <div id="section1">
                    <h3>LLR Online</h3><br>
                    <ul class="sectionpoint">
                        <li>Go to Offical site of Government like Parivahan.com.</li><br>
                        <li>Select your state and move on online application form of LLR present in the page.</li><br>
                        <li>Then give your aadhaar details and enter OTP you received linked number,if you not linked aadhaar with your number use offline method for LLR.</li><br>
                        <li>After submit your aadhaar it automatically fetch yuor data like in your aadhaar card.</li><br>
                        <li>Then give some informtion about you like birthplace,bloodgroup,email etc...</li><br>
                        <li><span>NOTE</span>:Select what are vehicle you like to apply.</li><br>
                        <li>Complete this all steps and submit the application form.</li><br>
                        <li>for more information click : <a href="llr.php" class="one">LLR Information</a></li>
                    </ul>
                </div>
                <div id="section2">
                    <h3>DL Online</h3><br>
                    <ul class="sectionpoint">
                        <li>Go to Offical site of Government like Parivahan.com.</li><br>
                        <li>Select your state and move on online application form of DL present in the page.</li><br>
                        <li>Then give your LLR details and <span>After one month at the date of applying LLR you can apply DL.</span></li><br>
                        <li>Submit your LLR it automatically fetch yuor data like in your LLR application form.</li><br>
                        <li>After this you can conform details like which vehicle are you apply for DL and some other details.</li><br>
                        <li>Complete this all steps and submit the application form.</li><br>
                        <li>for more information click : <a href="dl.php" class="one">DL Information</a></li>
                    </ul>
                </div>
           </div>
           <div class="image">
                   <image src="pdf/ddh.gif"></image>
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
     min-height:100vh;
     color:white;
     background:linear-gradient(to right,#8B008B,#DDA0DD);
 }
 .container
 {
     display:flex;
     justify-content:space-between;
     font-size:25px;
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
     margin-top:7%;
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
 .image
 {
     width:50%;
     z-index:-1;
     margin-top:5%;
 }
 .image img
 {
     width:40rem;
     animation:animi3 7s ease-in-out;
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
         transform:translateX(-200%);
     }
 }
 .content h2
 {
     margin-bottom:2%;
 }
 .content h2:hover
 {
     color:black;
     text-shadow:2px 2px 4px rgba(255,255,255,1);
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
 .content p
 {
     margin-left:3%;
     font-family:verdana,Geneva,Tahoma,sans-serif;
     margin-bottom:3%;
 }
 .one:hover
 {
    color:blue;
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
     height:430px;
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