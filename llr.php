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
        <script>
            function llrstate()
            {
                var selecttext=document.getElementById("state").value;
                localStorage.setItem("optvalue",selecttext);
                return true;
            }
        </script>
    </head>
    <body>
       <div class="container">
          <div class="wrapper">
              <h1 class="heading">Welcome to LLR Information based on Indian Government</h1>
          </div>
       </div>
       <div class="main">
           <div class="content">
                    <h2>Hi <?php echo $_SESSION["NAME"]; ?> would you select your state</h2>
                    <form action="llrhome.php" method="post" >
                        <select id="state" required>
                            <option>Select</option>
                            <option>Tamil Nadu</option>
                            <option>Mumbai</option>
                            <option>Kerala</option>
                            <option>Karnataka</option>
                            <option>Andhra Pradesh</option>
                            <option>Other</option>
                        </select>
                        <button type="submit" name="submit" onclick="llrstate()"><a href="llrhome.php">Go</a></button><br>
                        <a href="llr.php" id="aone">Refresh</a><br><br>
                        <a href="vehicle.php">Back</a>
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
button
 {
     display:inline-block;
     margin:10px 20px;
     font-weight:bold;
     font-size:20px;
 }
 a
 {
    text-decoration:none;
    color:black;
    font-size:20px;
    padding:7px 7px;
    transition:all .5s ease;
    text-shadow:2px 2px 4px rgba(255,255,255,1);
 }
 a:hover
 {
    color:blue;
    text-shadow:2px 2px 4px rgba(255,255,255,1);
 }
 select
 {
     width:25%;
     margin:3% auto;
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
 .main
 {
     width:100%;
     display:flex;
     overflow:hidden;
 }
 .main .content
 {
     width:100%;
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
 .content h2
 {
    margin-bottom:2%;
 }
 .content h2:hover
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
     color:purple;
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
    margin-top:20%;
 }
 html
 {
    scroll-behavior:smooth;
 }
</style>