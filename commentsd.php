<?php
    session_start();
    include"database.php";
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
            <h1>View user comments about Scheme Details</h1>
            <nav>
                <ul>
                    <button><a href="scheme.php">Back</a></button>
                </ul>
            </nav>
        </div>
          <div class="main">
           <div class="content">
            <?php
                $sql="SELECT user.UNAME,comment5.COMM,comment5.LOGS FROM comment5 INNER JOIN user on comment5.UID=user.UID ORDER BY comment5.CID DESC";
                $res=$db->query($sql);
                if($res->num_rows>0)
                {
                    while($row=$res->fetch_assoc())
                    {
                        echo"<p>
                              <strong>{$row["UNAME"]} :</strong>
                              <ui>{$row["COMM"]}</ui>
                              <i>{$row["LOGS"]}</i>
                        </p>";
                    }
                }
                else
                {
                    echo"<p class='error'>No Comment Yet...</p>";
                }
            ?>
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
     margin-top:3%;
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
 p
 {
     margin-top:1%;
     text-align:left;
 }
 strong
 {
    color:white;
    font-size:22px;
    margin-left:0%;
 }
 p strong:hover
 {
     color:black;
     text-shadow:2px 2px 4px rgba(255,255,255,1);
 }
 ui
 {
     color:white;
     font-size:20px;
 }
 i
 {
    color:blue;
    padding:5px;
    text-shadow:2px 2px 4px rgba(255,255,255,1);
 }
 .container .error
 {
     color:white;
     text-align:center;
     font-size:20px;
 }
</style>