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
    $allSuccess="";
    if(isset($_POST['submit']))
    {
        $allSuccess="Your are successfully submit the form and click the link to move original LLR Form.";
    }
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Data Hub</title>
    </head>
    <body>
       <div class="container">
          <h1>Demo Form for LLR</h1>
          <div class="navbar">
                <nav>
                    <ul>
                        <button><a href="commentllr2.php">Send your comments</a></button>
                        <button><a href="demollr.php">Refresh</a></button>
                        <button><a href="llrhome.php">Back</a></button>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="main">
         <div class="content">
          <form action="" method="post">
              <h3>Basic details are automatically fetch from your aadhaar like Name,Father Name,State,Date of Birth etc...,</h3>
              <span>In this demo from we give some field not all and you have to practice before move to original form.</span>
              <br><br>
                <label><b>Place of Birth</b> :</label>
                <input name="pob" type="text" required>
                <br><br>
                <label><b>Qualification</b> :</label>
                <select name="quali" required>
                    <option vaalue="">Select</option>
                    <option vaalue="11">8th Passed</option>
                    <option vaalue="12">10+2 or Equivalent</option>
                    <option vaalue="13">10th Standard or Equivalent</option>
                    <option vaalue="14">1st>8th</option>
                    <option vaalue="15">Diploma in any Discipline</option>
                    <option vaalue="16">Doctrate in any Discipline</option>
                    <option vaalue="17">Graduate in Non Medical Sciences</option>
                    <option vaalue="18">Graduate in any Medical Sciences</option>
                    <option vaalue="19">ITI/Certificate Course</option>
                    <option vaalue="20">M.Phil in any Discipline</option>
                    <option vaalue="21">Not Specified / NA</option>
                 </select>
                 <br><br>
                <label><b>Mobile Number registered with Aadhaar</b> : <b>+91</b></label>
                <input type="text" name="mra" required>
                <br><br>
                <label><b>Country of Birth</b> :</label>
                <select name="cob" required>
                    <option vaalue="">Select</option>
                    <option vaalue="ind">INDIA</option>
                    <option vaalue="aoc">OTHER COUNTRY</option>
                </select>
                <br><br>
                <label><b>Blood Group</b> :</label>
                <input type="text" name="bg" required>
                <br><br>
                <label><b>Email</b> :</label>
                <input type="email" name="mail" required>
                <br><br>
              <h3>After you give address details in your aadhaar with <span>door number is important.</span></h3>
                <label><b>Select single or multiple class of vehicles</b> :</label><br><br>
                <input type="checkbox" name="smv" class="inp">[MCWOG] Two wheeler without gear like Bike.<br>
                <input type="checkbox" name="smv1" class="inp">[MCWG] Two wheeler with gear like Bike.<br>
                <input type="checkbox" name="smv2" class="inp">[LMV] Four wheeler like Car.<br><br>
                <span>NOTE : if you select [MCWG] you need not to select [MCWOG].</span>
                <br><br>
              <h3>Declaration</h3>
                <ul>
                    <label><b>Fill-Up Form-1 details befor submitting the application</label><span>Form-1 : </span><a href="sdform.php" class="one">Self Declaration (Form-1)</a></b><br><br>
                    <label><b>I here by declare that to the best of my knowledge and belief the particulars given above are true</b></label>
                    <input type="checkbox" name="true" class="inp" required>
                </ul>
            <button type="submit" name="submit">Submit</button>
          </form>
          <br>
          <h3><b>After practice the demo form you can move to original LLR Form : <a href="https://sarathi.parivahan.gov.in/sarathiservice/stateSelection.do" class="one">Original LLR Form.</a></b></h3>
           <br>
            <p>
                <h3 style="color:green;"><span class="final"><?php echo $allSuccess ?></span></h3>
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
     min-height:170vh;
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
     width:80%;
     margin-top:3%;
     margin-left:3%;
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
 span
 {
     color:yellow;
 }
 .final
 {
    color:white;
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
 .one
 {
    font-size:17px;
    color:black;
    text-decoration:none;
 }
 .one:hover
 {
    color:blue;
    text-shadow:2px 2px 4px rgba(255,255,255,1);
 }
 label
 {
     font-size:20px;
     color:white;
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
     font-size:20px;
     width:20%;
     margin:1% auto;
     border:none;
     outline:none;
     background:transparent;
     color:white;
     border-bottom:3px solid rgba(255,255,255,0.7);
     text-shadow:2px 2px 4px rgba(0,0,0,1);
     opacity:0.9;
 }
 .inp
 {
    width:3%;
 }
 select
 {
     width:20%;
     margin:1% auto;
     margin-left:0%;
     border:none;
     outline:none;
     background:transparent;
     color:white;
     font-size:20px;
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
     margin:1% auto;
     color:white;
     font-size:20px;
     opacity:0.8;
     background:rgba(255,255,255,0.07);
     padding:10px 19px;
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