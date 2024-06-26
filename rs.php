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
                <h1>Road Safety Rules & Regulations</h1>
            </div>
            <div class="navbar">
                <nav>
                    <ul>
                        <button><a href="commentrs1.php">Send your comments</a></button>
                        <button><a href="rs.php">Refresh</a></button>
                        <button><a href="vehicle.php">Back</a></button>
                    </ul>
                </nav>
            </div>
       </div>
       <div class="main">
           <div class="content">
                <h3>This information based on Indian Governmaent,So We should follow the rules
                    while travelling to avoid the road accident.
                </h3><br>
                <ul class="sectionpoint1">
                    <li><a href="#tw">Two Wheeler</a></li>
                    <li><a href="#tfw">Three & Four Wheeler</a></li>
                    <li><a href="#wd">While Driving</a></li>
                    <li><a href="#rimg">Traffic Violation & Fine Amount in India 2024</a></li>
                    <li><a href="commentrs.php">View user comments</a></li>
                </ul><br><br>
                <div id="tw">
                    <h3>Two Wheeler important rules to follow.</h3><br>
                    <ul class="sectionpoint">
                        <li>Having a driving licence. This is the most fundamental traffic rule.</li><br>
                        <li>Always wear your helmet.</li><br>
                        <li>Avoid riding under the influence of alcohol.</li><br>
                        <li>Avoid overloading your bike.</li><br>
                        <li>Avoid riding without insurance.</li><br>
                        <li>Avoid exceeding the speed limits.</li><br>
                        <li>Avoid jumping signals.</li>
                    </ul>
                </div>
                <div id="tfw">
                    <h3>Three & Four Wheeler important rules to follow.</h3><br>
                    <ul class="sectionpoint">
                        <li>Do not drink and drive.</li><br>
                        <li>Car Insurance is must.</li><br>
                        <li>Always wear your seat belt.</li><br>
                        <li>Don't use a mobile phone while driving.</li><br>
                        <li>Avoid over-speeding.</li><br>
                        <li>Follow traffic signals.</li><br>
                        <li>Make way for emergency vehicles.</li>
                    </ul>
                </div>
                <div id="wd">
                    <h3>We must follow the rules while driving.</h3><br>
                    <ul class="sectionpoint">
                        <li>Before making a turn, you must remain on the left side if you want to turn left.</li><br>
                        <li>If you're on a two-way street or road, keep to the left so that traffic moving the other way can pass easily utilising the right lane.</li><br>
                        <li>You must reduce your speed as you approach a road intersection, a road junction, or a pedestrian crossing.</li><br>
                        <li>You must be in the middle of the road and make a broad, progressive right turn if you want to turn right ahead.</li><br>
                        <li>When being overtaken by a vehicle, you are not allowed to raise your speed or interfere in any other way with the overtaking vehicle.</li><br>
                        <li>The front and back of your car must always bear your car Registration Number (VRN), whether it be temporary or permanent.</li><br>
                        <li>On a one-way road, it is against the law to drive the other way.</li>
                    </ul>
                </div>
                <div id="rimg">
                    <h3>Traffic Violation & Fine Amount in India 2024</h3><br>
                    <img src="pdf/prop.jpg" alt="new rules" style="width:150%; border:5px solid black;">
                </div>        
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
 #tw
 {
     height:350px;
     display:inline-block;
     width:100%;
 }
 #tfw
 {
     height:350px;
     display:inline-block;
     width:100%;
 }
 #wd
 {
     height:450px;
     display:inline-block;
     width:100%;
 }
 #rimg
 {
     height:450px;
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