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
                <h1><span id="result"></span> State LLR Information</h1>
            </div>
            <script>
                document.getElementById("result").innerHTML=localStorage.getItem("optvalue");
            </script>
            <div class="navi">
             <?php
                include "llrsidebar.php";
             ?>
            </div>
       </div>
       <div class="main">
            <div class="content">
                <h3>LLR information may be differ from one state to another,
                    so select your state according to your wish. 
                </h3><br>
                <h3>Proper Steps to follow for Applying DL</h3>
                <ul class="sectionpoint1">
                     <li><a href="#section1">Step-1</a></li>
                     <li><a href="#section2">Step-2</a></li>
                     <li><a href="#section3">Step-3</a></li>
                </ul><br><br>
                <div id="section1">
                    <h3>Step-1 to follow</h3><br>
                    <ul class="sectionpoint">
                        <li>Go to Offical site of Government like Parivahan.com.</li><br>
                        <li>Select your state and move on online application form of LLR present in the page.</li><br>
                        <li>Then give your aadhaar details and enter OTP you received linked number,if you not linked aadhaar with your number use offline method for LLR.</li><br>
                        <li>After submit your aadhaar it automatically fetch yuor data like in your aadhaar card.</li><br>
                        <li>Then give some informtion about you like birthplace,bloodgroup,email etc..., for more information using demo application in our page link : <a href="demollr.php" class="one">Demo Application</a></li><br>
                        <li><span class="m">NOTE</span> : Select what are vehicle you like to apply.</li><br>
                        <li>Complete this all steps and submit the application form.</li>
                    </ul>
                </div>
                <div id="section2">
                    <h3>Step-2 to follow</h3><br>
                    <ul class="sectionpoint">
                        <li>After submit the application form it will redirect to payment page.</li><br>
                        <li>Amount based on selected vehicle in application form.</li><br>
                        <li>You can use many payment methods like[UPI,Debit Card,Credit Card and Net Banking].</li><br>
                        <li>Complete your payment and download the payment recept for future use.</li><br>
                        <li>Download all pdf forms given after the payment.</li>
                    </ul>
                </div>
                <div id="section3">
                    <h3>Step-3 to follow</h3><br>
                    <ul class="sectionpoint">
                        <li>Online test is the final process in LLR online apply.</li><br>
                        <li>Once you complete above two steps and click LLR online test.</li><br>
                        <li>Then enter the LLR number it was send to your phone number and enter date of birth and watch the full traffic instruction video without skip given by the page.</li><br>
                        <li>After watch the video link will be provid for online test.</li><br>
                        <li>Move to online test it was based on the instruction video and it present 10 questions and you must score 6 or more then 6 marks in the test to take LLR.</li><br>
                        <li><a href="otllr.php" class="one">Online Test</a> : You can use this link to get sample LLR questions.</li><br>
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
     font-size:20px;
     justify-content:space-between;
     padding:5px 10px;
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
 .m
 {
    color:yellow;
 }
 .one:hover
 {
    color:blue;
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
 .content p
 {
     margin-left:3%;
     font-family:verdana,Geneva,Tahoma,sans-serif;
     margin-bottom:3%;
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
     height:400px;
     display:inline-block;
     width:100%;
 }
 #section2
 {
     height:290px;
     display:inline-block;
     width:100%;
 }
 #section3
 {
     height:400px;
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