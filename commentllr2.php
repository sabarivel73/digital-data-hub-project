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
          <div class="center">
            <?php
                if(isset($_POST["submit"]))
                {
                    $sql="INSERT INTO comment2(UID, COMM, LOGS) VALUES ({$_SESSION["ID"]},'{$_POST["mes"]}',now())";
                    $db->query($sql);
                    echo "<p class='success'>Comment Sent Successfully</p>";
                }  
            ?>
            <form action="<?php echo $_SERVER["REQUEST_URI"];?>"method="post">
                <h3 class="heading">Send Comments</h3>
                <label>Your Comments : </label>
                <input name="mes" requried></input>
                <button type="submit" name="submit">Post</button>
                <a href="commentllr2.php">Refresh</a>
                <a href="llrhome.php">Home</a>
            </form>
            <p><span>NOTE</span> : Mention the topics before send your comments like Eligiblity Check,Demo Form for LLR and Online Test for LLR.</p>
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
     margin-left:26%;
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
 table
 {
     font-size:20px;
     color:white;
     padding:5px 5px;
     margin-top:5%;
     width:50%;
     border-collapse:collapse;
     text-align:center;
     margin-left:25%;
 }
 table td,table th
 {
    border:1px solid rgba(0,0,0,0);
    padding:5px;
 }
 table th:hover
 {
     color:black;
     text-shadow:2px 2px 4px rgba(255,255,255,1);
 }
 p
 {
     margin-top:5%;
     text-align:center;
 }
 strong
 {
    color:white;
    padding:5px;
    font-size:22px;
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
 span
 {
     color:yellow;
 }
 .container .success
 {
     color:green;
     text-align:center;
     font-size:20px;
     text-shadow:2px 2px 4px rgba(255,255,255,1);
 }
</style>