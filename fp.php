<?php
    session_start();
    include"database.php";
   use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\SMTP;
   use PHPMailer\PHPMailer\Exception;

   require 'phpmailer/vendor/autoload.php';

   if(isset($_POST["submit"]))
   {
    $email=$_POST["email"];
    $mail=new PHPMailer(true);
    try
    {
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'gskgsk3773@gmail.com';
        $mail->Password = 'fcgq sojw hmyl tzhv';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;
        $mail->setFrom('digitaldatahub@gmail.com','DD Hub');
        $mail->addAddress($email);
        $mail->isHTML(true);
        $verification_code = substr(number_format(time() * rand(),0,'',''),0,6);
        $mail->Subject = 'DDH OTP Verification';
        $mail->Body = '<p><h3>Your OTP is : </h3> <b style="font-size:35px;">'.$verification_code.'</b><br><br><b>Thanks for spending your golden time in our Digital Data Hub Web Page.</b></p>';
        $mail->send();
        $encryption_password = password_hash($password, PASSWORD_DEFAULT);
        $sql="INSERT INTO otp(verification_code) values ('".$verification_code."')";
        mysqli_query($db,$sql);
        header("Location: otp_verification.php?email=".$email);
        exit();
    }
    catch(Exception $e)
    {
        echo"OTP could not send.Mailer Error: {$mail->ErrorInfo}";
    }
   }
?>
<html>
    <head>
        <title>Data Hub</title>
    </head>
    <body>
     <div class="container">
        <div class="center"> 
            <form action="fp.php" method="post">
                <h3>OTP Verification</h3>
                <label>Email :</label>
                <input type="email" name="email" required>
                <button type="submit" name="submit">Submit</button>
                <a href="fp.php">Refresh</a>
                <a href="ulogin.php">Back</a>
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
     height:100vh;
     width:100vw;
     display:flex;
     justify-content:center;
     align-items:center;
     background:linear-gradient(to right,#8B008B,#DDA0DD);
 }
 form
 {
     width:25rem;
     height:23rem;
     display:flex;
     flex-direction:column;
     background:rgba(255,255,255,0.07);
     box-shadow:0 10px 32px 0 rgba(31,38,135,0.50);
     border-radius:35px;
     border-left:2px solid rgba(255,255,255,0.3);
     border-right:2px solid rgba(255,255,255,0.3);
 }
 form:before
 {
     content:'';
     position:absolute;
     bottom:7%;
     right:30%;
     width:120px;
     height:120px;
     background:#4B0082;
     border-radius:50%;
     z-index:-1;
     opacity:0.7;
 }
 form:after
 {
     content:'';
     position:absolute;
     top:3%;
     left:30%;
     width:120px;
     height:120px;
     background:#4B0082;
     border-radius:50%;
     z-index:-1;
     opacity:0.7;
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
     font-size:25px;
     width:75%;
     margin:5% auto;
     margin-bottom:7%;
     border:none;
     outline:none;
     background:transparent;
     color:white;
     border-bottom:3px solid rgba(255,255,255,0.7);
     text-shadow:2px 2px 4px rgba(0,0,0,1);
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
 .container .error
 {
     color:red;
     text-align:center;
     font-size:20px;
     text-shadow:2px 2px 4px rgba(255,255,255,1);
 }
</style>