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
          <h1>Slot Booking</h1>
          <nav>
                <ul>
                    <button><a href="sbdl.php">Refresh</a></button>
                    <button><a href="demodl.php">Back</a></button>
                </ul>
            </nav>
        </div>
        <div class="main">
            <div class="content">
                <form action="fddl.php" method="post">
                    <label><b>Enter your near by RTO office</b> :</label>
                    <input name="rto" type="text" required><br><br>
                    <span>NOTE</span> : In the original site you can select one in the list of RTO office based on your district.
                    <br><br>
                    <label><b>Select your slot date</b> :</label>
                    <input type="date" name="sd" required><br><br>
                    <span>NOTE</span> : In the original site give which dates are available in the particular RTO office and you can select that and your DL test present on that date.
                    <br><br>
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
     min-height:200vh;
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
