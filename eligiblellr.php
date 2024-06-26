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
    $ageError="";
    $ccError="";
    $ttdyError="";
    $lapError="";
    $wmError="";
    $allSuccess="";
    if(isset($_POST['submit']))
    {
        $age=$_POST['age'];
        $cc=$_POST['cc'];
        $ttdy=$_POST['ttdy'];
        $lap=$_POST['lap'];
        $wm=$_POST['wm'];
        if($age<18)
        {
            $ageError=$age." (Age must be 18+)";
        }
        else
        {
            $ageError=$age." (Your Age is Eligible)";
        }
        if($cc=="Yes")
        {
            $ccError=$cc." (According to Indian Government Law if you have any criminal case not allowed for LLR)";
        }
        else
        {
            $ccError=$cc." (You are Eligible)";
        }
        if($ttdy=="")
        {
            $ttdyError="Select any one of this)";
        }
        else
        {
            $ttdyError=$ttdy." (You are Eligible)";
        }
        if($lap=="No")

        {
            $lapError=$lap." (Aadhaar must be linked with Phone number for Online LLR)";
        }
        else
        {
            $lapError=$lap." (You are Eligible for Online LLR)";
        }
        if($wm=="Offline")
        {
            $wmError=$wm." (Offline mode you should visit RTO office for apply LLR)";
        }
        else
        {
            $wmError=$wm." (You are Eligible)";
        }
        if($age>=18 && $cc=="No" && $lap=="Yes" && $wm=="Online")
        {
            $allSuccess="Your are eligible for LLR";
        }
        else
        {
            $allSuccess="Your are not eligible for it";
        }
    }
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Data Hub</title>
    </head>
    <body>
       <div class="container">
            <h1>Eligiblity Check</h1>
            <div class="navbar">
                <nav>
                    <ul>
                        <button><a href="commentllr2.php">Send your comments</a></button>
                        <button><a href="eligiblellr.php">Refresh</a></button>
                        <button><a href="llrhome.php">Back</a></button>
                    </ul>
                </nav>
            </div>
       </div>
        <div class="main">
        <div class="content">
          <form action="" method="post">
                <label>Age :</label>
                <input name="age" type="number" required>
                <br>
                <span><?php echo $ageError ?></span>
                <br>
                <label>do you have any criminal case :</label>
                <select name="cc" required>
                    <option vaalue="">Select</option>
                    <option vaalue="y1">Yes</option>
                    <option vaalue="n1">No</option>
                 </select>
                 <br>
                 <span><?php echo $ccError ?></span>
                 <br>
                 <label>how many times did you try :</label>
                <select name="ttdy" required>
                    <option vaalue="">Select</option>
                    <option vaalue="1st">1st Time</option>
                    <option vaalue="2nd">(2-5)Times</option>
                    <option vaalue="a3">Many Times</option>
                </select>
                <br>
                <span><?php echo $ttdyError ?></span>
                <br>
                <label>did you linked your aadhaar with your phone :</label>
                <select name="lap" required>
                    <option vaalue="">Select</option>
                    <option vaalue="yes">Yes</option>
                    <option vaalue="no">No</option>
                </select>
                <br>
                <span><?php echo $lapError ?></span>
                <br>
                <label>will you apply llr in which medium :</label>
                <select name="wm" required>
                    <option vaalue="">Select</option>
                    <option vaalue="on">Online</option>
                    <option vaalue="off">Offline</option>
                </select>
                <br>
                <span><?php echo $wmError ?></span><br>
                <br>
            <button type="submit" name="submit">Check</button>
          </form>
            <p>
                <h1><span class="final"><?php echo $allSuccess ?></span></h1>
            </p>
       </div>
       <div class="footer">
            <p>Copyright &copy; digital data hub 2024</p>
       </div>
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
     min-height:135vh;
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
     width:100%;
     margin-top:1%;
     margin-left:0%;
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
     margin-left:5%;
 }
 .final
 {
    color:white;
    margin-left:36%;
    text-shadow:2px 2px 4px rgba(0,0,0,1);
 }
 .final:hover
 {
    color:black;
    text-shadow:2px 2px 4px rgba(255,255,255,1);
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
 label
 {
     font-size:25px;
     color:white;
     margin-left:5%;
     opacity:0.9;
     text-shadow:2px 2px 4px rgba(0,0,0,1);
 }
 label:hover
 {
     color:black;
     text-shadow:2px 2px 4px rgba(255,255,255,1);
 }
 input
 {
     font-size:25px;
     width:5%;
     margin:5% auto;
     margin-bottom:2%;
     border:none;
     outline:none;
     background:transparent;
     color:white;
     border-bottom:3px solid rgba(255,255,255,0.7);
     text-shadow:2px 2px 4px rgba(0,0,0,1);
     opacity:0.9;
 }
 select
 {
     width:10%;
     margin:1% auto;
     margin-left:0%;
     border:none;
     outline:none;
     background:transparent;
     color:white;
     font-size:25px;
     border-bottom:3px solid rgba(255,255,255,0.7);
     text-shadow:2px 2px 4px rgba(0,0,0,1);
     opacity:0.9;
 }
 select:hover
 {
     color:black;
     font-size:15px;
 }
 form button
 {
     width:10%;
     margin:3% auto;
     color:white;
     font-size:20px;
     opacity:0.8;
     background:rgba(255,255,255,0.07);
     margin-left:45%;
     padding:10px 23px;
     border:none;
     outline:none;
     border-radius:20px;
     text-shadow:2px 2px 4px rgba(255,255,255,0.5);
     box-shadow:3px 3px 5px rgba(31,38,135,0.35);
     border-left:2px solid rgba(255,255,255,0.3);
     border-top:2px solid rgba(255,255,255,0.3);
 }
 form button:hover
 {
    background:black;
    border-radius:20px;
    color:white;
    border:2px solid rgba(255,255,255,1);
 }
</style>