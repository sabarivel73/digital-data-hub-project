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
          <h1 style="color:green;">Your are successfully submit slot date.</h1>
          <ul>
          <h2><b>After this in original site you move on to payment page and once payment was done your DL test will confirm.</b></h2>
          <h2><b>You successfully done demo form and Now you can move to original DL Form : <a href="https://sarathi.parivahan.gov.in/sarathiservice/stateSelection.do" class="one">Original DL Form.</a></b></h2>
          </ul>
       </div>
       <button><a href="dlhome.php">Home</a></button>
       <div class="footer">
            <p>Copyright &copy; digital data hub 2024</p>
       </div>
    </body>
</html>
<style>
 body
 {
     width:100%;
     min-height:100vh;
     color:white;
     background:linear-gradient(to right,#8B008B,#DDA0DD);
 }
 h2
 {
     display:flex;
     justify-content:space-between;
     padding:15px 20px;
     text-shadow:2px 2px 4px rgba(0,0,0,1);
     animation:animi 1s ease-in-out;
 }
 .container h2:hover
 {
     color:black;
     text-shadow:2px 2px 4px rgba(255,255,255,1);
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
 h1
 {
    text-align:center;
    margin-top:5%;
    text-shadow:2px 2px 4px rgba(255,255,255,1);
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
 button
 {
     width:7%;
     margin:1% auto;
     color:white;
     font-size:15px;
     opacity:0.8;
     background:rgba(255,255,255,0.07);
     padding:10px 19px;
     margin-left:45%;
     border:none;
     outline:none;
     border-radius:20px;
     text-shadow:2px 2px 4px rgba(255,255,255,0.5);
     box-shadow:3px 3px 5px rgba(31,38,135,0.35);
     border-left:2px solid rgba(255,255,255,0.3);
     border-top:2px solid rgba(255,255,255,0.3);
 }
 button:hover
 {
    background:black;
    border-radius:20px;
    color:white;
    border:2px solid rgba(255,255,255,1);
 }
 button a 
 {
    color:white;
    text-decoration:none;
 }
 .one 
 {
    text-decoration:none;
    color:black;
    text-shadow:2px 2px 4px rgba(255,255,255,0.5);
 }
 .one:hover
 {
    color:white;
 }
</style>