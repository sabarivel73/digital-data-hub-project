<!DOCTYPE HTML>
<html>
    <head>
        <title>E-LIBRARY</title>
    </head>
    <body>
        <div class="container">
            <div class="center">
                <?php
                    if(isset($_POST["submit"]))
                    {
                        $sql="SELECT * from admin WHERE APASS='{$_POST["opass"]}' and AID='{$_SESSION["AID"]}'";
                        $res=$db->query($sql);
                        if($res->num_rows>0)
                        {
                            $s="update admin set APASS='{$_POST["npass"]}' WHERE AID=".$_SESSION["AID"];
                            $db->query($s);
                            echo"<p class='success'>Password Changed Successfully</p>";
                        }
                        else
                        {
                            echo"<p class='error'>Invalid Password</p>";
                        }
                    }   
                ?>
                <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
                    <h3>Change Password</h3>
                    <label>Old Password</label>
                    <input type="password" name="opass" required>
                    <label>New Password</label>
                    <input type="password" name="npass" required>
                    <button type="submit" name="submit">Update</button>
                    <a href="ahome.php">Home</a>
                    <a href="achangePass.php">Refresh</a>
                </form>
            </div>        
            <div class="footer">
                <p>Copyright &copy; e-library management system 2023</p>
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
     /*cursor:pointer;*/
 }
 body
 {
     height:100vh;
     width:100vw;
     display:flex;
     justify-content:center;
     align-items:center;
     background:linear-gradient(to right,#3f5efb,#87CEEB);
 }
 form
 {
     width:25rem;
     height:30rem;
     display:flex;
     flex-direction:column;
     background:rgba(255,255,255,0.07);
     box-shadow:0 10px 32px 0 rgba(31,38,135,0.50);
     border-radius:35px;
     border-left:2px solid rgba(255,255,255,0.3);
     border-right:2px solid rgba(255,255,255,0.3);
 }
 h3
 {
     font-size:40px;
     text-align:center;
     color:white;
     text-shadow:2px 2px 4px rgba(0,0,0,1);
     letter-spacing:1px;
     margin-top:5%;
     margin-bottom:5%;
     opacity:0.8;
     border-bottom:1px solid rgba(255,255,255,0.7);
 }
 h3:hover
 {
     color:black;
     text-shadow:2px 2px 4px rgba(255,255,255,1);
 }
 label
 {
     font-size:25px;
     color:white;
     margin-left:10%;
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
     font-size:17px;
     width:75%;
     margin:5% auto;
     margin-bottom:7%;
     border:none;
     outline:none;
     background:transparent;
     color:white;
     border-bottom:1px solid rgba(255,255,255,0.7);
     opacity:0.7;
 }
 button
 {
     width:30%;
     margin:3% auto;
     color:white;
     font-size:20px;
     opacity:0.8;
     background:rgba(255,255,255,0.07);
     padding:10px 30px;
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
     margin-bottom:3%;
     margin-top:3%;
     font-size:20px;
     text-align:center;
     color:white;
     opacity:0.7;
 }
 a:hover,a:focus
 {
    transform:scale(1.5);
    transition:all 0.5s;
 }
 .footer p
 {
    color:black;
    text-align:center;
    text-shadow:2px 2px 2px rgba(255,255,255,1);
    margin-top:5%;
 }
 .container .success
 {
     color:green;
     text-align:center;
     font-size:20px;
     text-shadow:2px 2px 4px rgba(255,255,255,1);
 }
 .container .error
 {
     color:red;
     text-align:center;
     font-size:20px;
     text-shadow:2px 2px 4px rgba(255,255,255,1);
 }
</style>