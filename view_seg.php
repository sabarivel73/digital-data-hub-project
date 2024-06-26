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
            <h1>View Your Suggestion</h1>
            <a href='suggestion.php'>Back</a>
        </div>
        <div class="main">
            <div class="content">
                <?php
                    $sql="SELECT user.UNAME,suggestion.MES,suggestion.LOGS FROM user INNER JOIN suggestion ON user.UID=suggestion.UID";
                    $res=$db->query($sql);
                    if($res->num_rows>0)
                    {
                        echo"<table>
                            <tr>
                            <th>SNO</th>
                            <th>USER NAME</th>
                            <th>MESSAGE</th>
                            <th>LOGS</th>
                            </tr>
                        ";
                        $i=0;
                        while($row=$res->fetch_assoc())
                        {
                            $i++;
                            echo"<tr>";
                            echo"<td>{$i}</td>";
                            echo"<td>{$row["UNAME"]}</td>";
                            echo"<td>{$row["MES"]}</td>";
                            echo"<td>{$row["LOGS"]}</td>";
                            echo"</tr>";
                        }
                        echo"</table>";
                    }
                    else
                    {
                        echo"<p class='error'>No Suggestion Found</p>";
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
 html
 {
    scroll-behavior:smooth;
 }
 .container h1
 {
     text-align:center;
     display:flex;
     padding:15px 20px;
     text-shadow:2px 2px 4px rgba(0,0,0,1);
     margin-left:35%;
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
 a
 {
     margin-left:10%;
     text-decoration:none;
     color:white;
     opacity:0.7;
     font-size:20px;
     border:2px solid black;
     padding:5px 5px;
     background-color:black;
     border-radius:30%;
 }
 a:hover
 {
     color:black;
     border:2px solid white;
     padding:5px 5px;
     background-color:white;
     border-radius:30%;
 }
 table,th,td
 {
     border:3px solid black;
     border-collapse:collapse;
 }
 table th:hover
 {
     color:black;
     text-shadow:2px 2px 4px rgba(255,255,255,1);
 }
 table
 {
     text-align:center;
     margin-top:3%;
     margin-left:10%;
     font-size:20px;
     width:80%;
 }
 table th
 {
     height:30px;
 }
 .footer p
 {
    color:black;
    text-shadow:2px 2px 2px rgba(255,255,255,1);
    position:fixed;
    left:0;
    bottom:7;
    width:100%;
    text-align:center;
    margin-top:20%;
 }
 .content .error
 {
     color:red;
     text-align:center;
     margin-top:5%;
     font-size:20px;
     text-shadow:2px 2px 4px rgba(255,255,255,1);
 }
</style>