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
            <h1>View Documents</h1>
            <a href="search_books.php">Search Documents</a>
            <a class="a1" href='uhome.php'>Home</a>
        </div>
        <div class="main">
            <div class="content">
                <?php
                    $sql="SELECT * FROM documents WHERE UID={$_SESSION["ID"]}";
                    $res=$db->query($sql);
                    if($res->num_rows>0)
                    {
                       echo"<table>
                       <tr>
                       <th>SNO</th>
                       <th>TITLE</th>
                       <th>KEYWORDS</th>
                       <th>VIEW</th>
                       <th>DELETE</th>
                       </tr>
                    ";
                    $i=0;
                    while($row=$res->fetch_assoc())
                    {
                       $i++;
                       echo"<tr>";
                       echo"<td>{$i}</td>";
                       echo"<td>{$row["BTITLE"]}</td>";
                       echo"<td>{$row["KEYWORD"]}</td>";
                       echo"<td><button><a href='{$row["FILE"]}' target='_blank'>View</a></button></td>";
                       echo"<td><a href='delete.php?id={$row["BID"]}'>Delete</a></td>";
                       echo"</tr>";
                    }
                    echo"</table>";
                    }
                    else
                    {
                        echo"<p class='error'>No Documents Found</p>";
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
     margin-left:38.5%;
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
 .container a
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
 .container a:hover
 {
     color:black;
     border:2px solid white;
     padding:5px 5px;
     background-color:white;
     border-radius:30%;
 }
 .container .a1
 {
    margin-left:1%;
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
 td button
 {
     border:none;
     outline:none;
     background:rgba(255,255,255,0.07);
     font-size:20px;
 }
 td button a:hover
 {
     color:blue;
 }
 td a
 {
     text-decoration:none;
     color:black;
 }
 td a:hover
 {
    color:red;
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