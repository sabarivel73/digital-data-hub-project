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
       <h1 style="text-align:center;">Your declaration was successfully submitted</h1>
       <button style="margin-left:47%;"><a href="demollr.php">Home</a></button>
       <div class="footer">
             <p style="text-align:center;">Copyright &copy; digital data hub 2024</p>
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
 h1
 {
     display:flex;
     justify-content:space-between;
     margin-top:5%;
     margin-left:27%;
     padding:15px 20px;
     text-shadow:2px 2px 4px rgba(0,0,0,1);
     animation:animi 1s ease-in-out;
 }
 h1:hover
 {
     color:black;
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
     margin-left:40%;
     padding:10px 19px;
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
 a
 {
    text-decoration:none;
    color:white;
 }
</style>