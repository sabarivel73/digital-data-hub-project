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
            <h1>Required Documents for DL</h1>
            <div class="navbar">
                <nav>
                    <ul>
                        <button><a href="comment.php">Send your comments</a></button>
                        <button><a href="dlhome.php">Home</a></button>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="main">
            <div class="content">
            <div id="section1">
            <h3>Important documents for DL</h3><br>
            <ul class="sectionpoint">
                <li>2 passport size photographs.</li><br>
                <li>Address Proof like ration card, voter's id, copy of passport, or LIC policy that may be older than 6 months at least.</li><br>
                <li>Payment Recepit.</li><br>
                <li>Age Proof, like educational certificate, birth certificate, or 10th class mark sheet.</li><br>
                <li>A valid learner's license.</li><br>
                <li>All the documents related to the vehicle which you propose to drive for the test.</li><br>
                <li>Registration Certificate for vehicle.</li><br>
                <li>Certificate of Insurance.</li><br>
                <li>Tax Card.</li><br>
                <li>Pollution under Control (PUC) Certificate.</li>
            </ul>
            </div>
            <div id="section2">
           <h3>Important forms you must take printout and filled it at the time of DL test.</h3><br>
           <ul class="sectionpoint">
             <li>FORM-2 : Form of Application for Learner’s License /Driving License / Addition of a New Class of Vehicle/Renewal of Driving License/Change of Address Or Name. <br><br><a href="pdf/FORM-2" class="one">Click Here for FORM-2</a></li><br>
             <li>FORM-4 : Application for Licence to Drive. <br><br><a href="pdf/FORM-4" class="one">Click Here to FORM-4<a></li>
           </ul>
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
     min-height:130vh;
     color:white;
     background:linear-gradient(to right,#8B008B,#DDA0DD);
 }
 .container
 {
     display:flex;
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
 .one
{
    text-shadow:2px 2px 4px rgba(255,255,255,1);
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
     width:70%;
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
 .one:hover
 {
    color:blue;
    text-shadow:2px 2px 4px rgba(255,255,255,1);
 }
 #section1
 {
     height:450px;
     display:inline-block;
     width:100%;
 }
 #section2
 {
     height:300px;
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