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
          <h1>Self Declaration Form.</h1>
          <div class="navbar">
                <nav>
                    <ul>
                        <button><a href="sdform.php">Refresh</a></button>
                        <button><a href="demollr.php">Back</a></button>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="main">
         <div class="content">
          <form action="sdform1.php" method="post">
              <h3 style="text-align:center;">Application-cum-Declaration as to Physiacl Fitness [See Rules5[2]].</h3>
              <label><b>Declaration</b></label>
              <p>
                <label>(a) Do you suffer from eplipsy or form sudden attacks of loss of consciousness or giddiness from any cause ?</label>
                <input name="a" type="radio" style="margin-left:33%;"><b>YES</b><input type="radio" name="a"><b>NO</b>
              </p>
              <p>
                <label>(b) Are you able to distinguish with each eye ?</label>
                <input name="b" type="radio" style="margin-left:63%;"><b>YES</b><input type="radio" name="b"><b>NO</b>
              </p>
              <p>
                <label>(c) Have you lost either hand or foot or are you suffering from any defects of muscular, control or muscular power of either arm or leg ?</label>
                <input name="c" type="radio" style="margin-left:20.1%;"><b>YES</b><input type="radio" name="c"><b>NO</b>
              </p>
              <p>
                <label>(d) Do you suffer form night blindness ?</label>
                <input name="d" type="radio" style="margin-left:66%;"><b>YES</b><input type="radio" name="d"><b>NO</b>
              </p>
              <p>
                <label>(e) Are you so deaf as to be unable to hear ( and if the application is for driving a light motor vehicle, with or without hearing aid) the ordinary sound signal ?</label>
                <input name="e" type="radio" style="margin-left:9.8%;"><b>YES</b><input type="radio" name="e"><b>NO</b>
              </p>
              <p>
                <label>(f) Do you suffer from any other disease or disability likely to cause your driving of a motor vehicle to be a source of danger to the public, if so, give details?</label>
                <input name="f" type="radio" style="margin-left:10%;"><b>YES</b><input type="radio" name="f"><b>NO</b>
              </p>
              <p>
                 <input type="checkbox" name="true" required><label>I hereby declare that to the best of my knowledge and belief the particulars given above and the declaration made therein are true.</label>
              </p>
            <button type="submit" name="submit">Submit</button>
          </form>
       </div>
       <div class="footer">
            <p>Copyright &copy; digital data hub 2024</p>
       </div>
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
 .main .content
 {
    margin-left:1%;
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
 label
 {
     font-size:15px;
     color:white;
     opacity:0.9;
     text-shadow:2px 2px 4px rgba(0,0,0,1);
 }
 label:hover
 {
     color:black;
     text-shadow:2px 2px 4px rgba(255,255,255,1);
 }
 form button
 {
     width:7%;
     margin:1% auto;
     color:white;
     font-size:15px;
     opacity:0.8;
     background:rgba(255,255,255,0.07);
     margin-left:47%;
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