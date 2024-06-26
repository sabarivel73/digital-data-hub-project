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
    $q1s="";
    $q1e="";
    $q2s="";
    $q2e="";
    $q3s="";
    $q3e="";
    $q4s="";
    $q4e="";
    $q5s="";
    $q5e="";
    $q6s="";
    $q6e="";
    $q7s="";
    $q7e="";
    $q8s="";
    $q8e="";
    $q9s="";
    $q9e="";
    $q10s="";
    $q10e="";
    $q11s="";
    $q11e="";
    $q12s="";
    $q12e="";
    $q13s="";
    $q13e="";
    $q14s="";
    $q14e="";
    $q15s="";
    $q15e="";
    if(isset($_POST['submit']))
    {
      if(isset($_POST['q1']))
      {
        $q1=$_POST['q1'];
        if($q1=="c. Stop the vehicle, wait until pedestrians cross and then move forward")
        {
          $q1s="You are correct - ".$q1;
        }
        else
        {
          $q1e="<h4>You are wrong</h4><h5>Correct Answer is (c. Stop the vehicle, wait until pedestrians cross and then move forward)</h5>";
        }
      }
      if(isset($_POST['q2']))
      {
        $q2=$_POST['q2'];
        if($q2=="a. Wait until the other vehicle crosses the bridge before proceeding")
        {
          $q2s="You are correct - ".$q2;
        }
        else
        {
          $q2e="<h4>You are wrong</h4><h5>Correct Answer is (a. Wait until the other vehicle crosses the bridge before proceeding)</h5>";
        }
      }
      if(isset($_POST['q3']))
      {
        $q3=$_POST['q3'];
        if($q3=="c. Take measures to secure medical attention to those injured and report the accident to the closest police station within a period of 24 hours")
        {
          $q3s="You are correct - ".$q3;
        }
        else
        {
          $q3e="<h4>You are wrong</h4><h5>Correct Answer is (c. Take measures to secure medical attention to those injured and report the accident to the closest police station within a period of 24 hours)</h5>";
        }
      }
      if(isset($_POST['q4']))
      {
        $q4=$_POST['q4'];
        if($q4=="a. You should not drive in reverse gear")
        {
          $q4s="You are correct - ".$q4;
        }
        else
        {
          $q4e="<h4>You are wrong</h4><h5>Correct Answer is (a. You should not drive in reverse gear)</h5>";
        }
      }
      if(isset($_POST['q5']))
      {
        $q5=$_POST['q5'];
        if($q5=="a. Not correct")
        {
          $q5s="You are correct - ".$q5;
        }
        else
        {
          $q5e="<h4>You are wrong</h4><h5>Correct Answer is (a. Not correct)</h5>";
        }
      }
      if(isset($_POST['q6']))
      {
        $q6=$_POST['q6'];
        if($q6=="c. Stop the vehicle on left hand side of the road, approach the track and ensure that there is no train or trolley coming from any side prior to crossing")
        {
          $q6s="You are correct - ".$q6;
        }
        else
        {
          $q6e="<h4>You are wrong</h4><h5>Correct Answer is (c. Stop the vehicle on left hand side of the road, approach the track and ensure that there is no train or trolley coming from any side prior to crossing)</h5>";
        }
      }
      if(isset($_POST['q7']))
      {
        $q7=$_POST['q7'];
        if($q7=="b. Number plate of the vehicle")
        {
          $q7s="You are correct - ".$q7;
        }
        else
        {
          $q7e="<h4>You are wrong</h4><h5>Correct Answer is (b. Number plate of the vehicle)</h5>";
        }
      }
      if(isset($_POST['q8']))
      {
        $q8=$_POST['q8'];
        if($q8=="b. 6 months")
        {
          $q8s="You are correct - ".$q8;
        }
        else
        {
          $q8e="<h4>You are wrong</h4><h5>Correct Answer is (b. 6 months)</h5>";
        }
      }
      if(isset($_POST['q9']))
      {
        $q9=$_POST['q9'];
        if($q9=="a. Walk on the right side of the road")
        {
          $q9s="You are correct - ".$q9;
        }
        else
        {
          $q9e="<h4>You are wrong</h4><h5>Correct Answer is (a. Walk on the right side of the road)</h5>";
        }
      }
      if(isset($_POST['q10']))
      {
        $q10=$_POST['q10'];
        if($q10=="c. Fire service vehicles and ambulances")
        {
          $q10s="You are correct - ".$q10;
        }
        else
        {
          $q10e="<h4>You are wrong</h4><h5>Correct Answer is (c. Fire service vehicles and ambulances)</h5>";
        }
      }
      if(isset($_POST['q11']))
      {
        $q11=$_POST['q11'];
        if($q11=="b. Right side")
        {
          $q11s="You are correct - ".$q11;
        }
        else
        {
          $q11e="<h4>You are wrong</h4><h5>Correct Answer is (b. Right side)</h5>";
        }
      }
      if(isset($_POST['q12']))
      {
        $q12=$_POST['q12'];
        if($q12=="a. The driver of the vehicle ahead gives the signal to overtake")
        {
          $q12s="You are correct - ".$q12;
        }
        else
        {
          $q12e="<h4>You are wrong</h4><h5>Correct Answer is (a. The driver of the vehicle ahead gives the signal to overtake)</h5>";
        }
      }
      if(isset($_POST['q13']))
      {
        $q13=$_POST['q13'];
        if($q13=="a. Left side of the road")
        {
          $q13s="You are correct - ".$q13;
        }
        else
        {
          $q13e="<h4>You are wrong</h4><h5>Correct Answer is (a. Left side of the road)</h5>";
        }
      }
      if(isset($_POST['q14']))
      {
        $q14=$_POST['q14'];
        if($q14=="c. All of the above")
        {
          $q14s="You are correct - ".$q14;
        }
        else
        {
          $q14e="<h4>You are wrong</h4><h5>Correct Answer is (c. All of the above)</h5>";
        }
      }
      if(isset($_POST['q15']))
      {
        $q15=$_POST['q15'];
        if($q15=="b. Wear helmet")
        {
          $q15s="You are correct - ".$q15;
        }
        else
        {
          $q15e="<h4>You are wrong</h4><h5>Correct Answer is (b. Wear helmet)</h5>";
        }
      } 
    }
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Data Hub</title>
    </head>
    <style>
      h5
      {
        color:green;
        text-shadow:2px 2px 4px rgba(255,255,255,1);
        font-size:23px;
      }
      h4
      {
        color:red;
        text-shadow:2px 2px 4px rgba(255,255,255,1);
        font-size:23px;
      }
      span
      {
        color:green;
        text-shadow:2px 2px 4px rgba(255,255,255,1);
        font-size:23px;
      }
    </style>
    <body>
       <div class="container">
          <h1>Online Test for LLR</h1>
          <div class="navbar">
                <nav>
                    <ul>
                        <button><a href="commentllr2.php">Send your comments</a></button>
                        <button><a href="otllr.php">Refresh</a></button>
                        <button><a href="llrhome.php">Back</a></button>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="main">
          <div class="content">
          <form action="" method="post">
              <h3>Basic LLR questions are given in the test it will helpfull for original LLR online test.</h3>
              <h3>Questions:</h3>
              <br>
              <p>
                <lable><b>1. If you are near a pedestrian crossing and there are people waiting to cross the road, you should</b></lable><br><br>
                <input name="q1" type="radio" value="a. Slow down, press horn and proceed">a. Slow down, press horn and proceed<br>
                <input name="q1" type="radio" value="b. Press horn and proceed">b. Press horn and proceed<br>
                <input name="q1" type="radio" value="c. Stop the vehicle, wait until pedestrians cross and then move forward">c. Stop the vehicle, wait until pedestrians cross and then move forward<br>
                <span><b><?php echo $q1s ?></b></span><br>
                <span><?php echo $q1e ?></span><br>
              </p>
              <p>
                <lable><b>2. You are coming towards a narrow bridge and another vehicle is about to enter the bridge from the other side. What should you do?</b></lable><br><br>
                <input name="q2" type="radio" value="a. Wait until the other vehicle crosses the bridge before proceeding">a. Wait until the other vehicle crosses the bridge before proceeding<br>
                <input name="q2" type="radio" value="b. Switch on headlight and cross the bridge">b. Switch on headlight and cross the bridge<br>
                <input name="q2" type="radio" value="c. Increase speed of the vehicle and try to cross the bridge quickly">c. Increase speed of the vehicle and try to cross the bridge quickly<br>
                <span><b><?php echo $q2s ?></b></span><br>
                <span><?php echo $q2e ?></span><br>
              </p>
              <p>
                <lable><b>3. In case you see a vehicle that has met with an accident with injured passengers inside, you should -</b></lable><br><br>
                <input name="q3" type="radio" value="a. Stop your vehicle and report the matter to the nearest police station">a. Stop your vehicle and report the matter to the nearest police station<br>
                <input name="q3" type="radio" value="b. Take the vehicle to the closest police station and report the accident">b. Take the vehicle to the closest police station and report the accident<br>
                <input name="q3" type="radio" value="c. Take measures to secure medical attention to those injured and report the accident to the closest police station within a period of 24 hours">c. Take measures to secure medical attention to those injured and report the accident to the closest police station within a period of 24 hours<br>
                <span><b><?php echo $q3s ?></b></span><br>
                <span><?php echo $q3e ?></span><br>
              </p>
              <p>
                <lable><b>4. On a road that has been designated as one way</b></lable><br><br>
                <input name="q4" type="radio" value="a. You should not drive in reverse gear">a. You should not drive in reverse gear<br>
                <input name="q4" type="radio" value="b. You should not overtake">b. You should not overtake<br>
                <input name="q4" type="radio" value="c. You should not park">c. You should not park<br>
                <span><b><?php echo $q4s ?></b></span><br>
                <span><?php echo $q4e ?></span><br>
              </p>
              <p>
                <lable><b>5. Parking in front of a hospital is</b></lable><br><br>
                <input name="q5" type="radio" value="a. Not correct">a. Not correct<br>
                <input name="q5" type="radio" value="b. Correct">b. Correct<br>
                <input name="q5" type="radio" value="c. Depends on the situation">c. Depends on the situation<br>
                <span><b><?php echo $q5s ?></b></span><br>
                <span><?php echo $q5e ?></span><br>
              </p>
              <p>
                <lable><b>6. If a vehicle approaches a railway crossing that is not guarded and the vehicle wants to proceed, the driver should</b></lable><br><br>
                <input name="q6" type="radio" value="a. Wait until the train passes">a. Wait until the train passes<br> 
                <input name="q6" type="radio" value="b. Press horn and cross the track at the earliest">b. Press horn and cross the track at the earliest<br>
                <input name="q6" type="radio" value="c. Stop the vehicle on left hand side of the road, approach the track and ensure that there is no train or trolley coming from any side prior to crossing">c. Stop the vehicle on left hand side of the road, approach the track and ensure that there is no train or trolley coming from any side prior to crossing<br>
                <span><b><?php echo $q6s ?></b></span><br>
                <span><?php echo $q6e ?></span><br>
              </p>
              <p>
                <lable><b>7. Transport vehicles can be distinguished by</b></lable><br><br>
                <input name="q7" type="radio" value="a. The colour of the vehicle">a. The colour of the vehicle<br>
                <input name="q7" type="radio" value="b. Number plate of the vehicle">b. Number plate of the vehicle<br>
                <input name="q7" type="radio" value="c. Tyre size of the vehicle">c. Tyre size of the vehicle<br>
                <span><b><?php echo $q7s ?></b></span><br>
                <span><?php echo $q7e ?></span><br>
              </p>
              <p>
                <lable><b>8. A learner's license is valid for a period of</b></lable><br><br>
                <input name="q8" type="radio" value="a. 30 days">a. 30 days<br>
                <input name="q8" type="radio" value="b. 6 months">b. 6 months<br>
                <input name="q8" type="radio" value="c. Until a driving licence is availed">c. Until a driving licence is availed<br>
                <span><b><?php echo $q8s ?></b></span><br>
                <span><?php echo $q8e ?></span><br>
              </p>
              <p>
                <lable><b>9. In case a road does not have a footpath, pedestrians will have to</b></lable><br><br>
                <input name="q9" type="radio" value="a. Walk on the right side of the road">a. Walk on the right side of the road<br>
                <input name="q9" type="radio" value="b. Walk on the left side of the road">b. Walk on the left side of the road<br>
                <input name="q9" type="radio" value="c. Walk on any side of the road">c. Walk on any side of the road<br>
                <span><b><?php echo $q9s ?></b></span><br>
                <span><?php echo $q9e ?></span><br>
              </p>
              <p>
                <lable><b>10. Free passage should be provided to the following vehicles</b></lable><br><br>
                <input name="q10" type="radio" value="a. Express buses">a. Express buses<br>
                <input name="q10" type="radio" value="b. Police vehicles">b. Police vehicles<br>
                <input name="q10" type="radio" value="c. Fire service vehicles and ambulances">c. Fire service vehicles and ambulances<br>
                <span><b><?php echo $q10s ?></b></span><br>
                <span><?php echo $q10e ?></span><br>
              </p>
              <p>
                <lable><b>11. Vehicles that come from the opposite side should be allowed to proceed through the</b></lable><br><br>
                <input name="q11" type="radio" value="a. Left side">a. Left side<br>
                <input name="q11" type="radio" value="b. Right side">b. Right side<br>
                <input name="q11" type="radio" value="c. Any convenient side">c. Any convenient side<br>
                <span><b><?php echo $q11s ?></b></span><br>
                <span><?php echo $q11e ?></span><br>
              </p>
              <p>
                <lable><b>12. Driver of a vehicle can overtake when</b></lable><br><br>
                <input name="q12" type="radio" value="a. The driver of the vehicle ahead gives the signal to overtake">a. The driver of the vehicle ahead gives the signal to overtake<br>
                <input name="q12" type="radio" value="b. Road is wide enough">b. Road is wide enough<br>
                <input name="q12" type="radio" value="c. Driving down a hill">c. Driving down a hill<br>
                <span><b><?php echo $q12s ?></b></span><br>
                <span><?php echo $q12e ?></span><br>
              </p>
              <p>
                <lable><b>13. Driver of a vehicle shall drive through the</b></lable><br><br>
                <input name="q13" type="radio" value="a. Left side of the road">a. Left side of the road<br>
                <input name="q13" type="radio" value="b. Right side of the road">b. Right side of the road<br>
                <input name="q13" type="radio" value="c. Center of the road">c. Center of the road<br>
                <span><b><?php echo $q13s ?></b></span><br>
                <span><?php echo $q13e ?></span><br>
              </p>
              <p>
                <lable><b>14. If a vehicle is parked on the side of a road at night</b></lable><br><br>
                <input name="q14" type="radio" value="a. The vehicle should be locked">a. The vehicle should be locked<br>
                <input name="q14" type="radio" value="b. Park light should remain on">b. Park light should remain on<br>
                <input name="q14" type="radio" value="c. All of the above">c. All of the above<br>
                <span><b><?php echo $q14s ?></b></span><br>
                <span><?php echo $q14e ?></span><br>
              </p>
              <p>
                <lable><b>15. According to section 129 of the Motor Vehicle Act 1988 a person driving a motor cycle shall</b></lable><br><br>
                <input name="q15" type="radio" value="a. Wear jerkins">a. Wear jerkins<br>
                <input name="q15" type="radio" value="b. Wear helmet">b. Wear helmet<br>
                <input name="q15" type="radio" value="c. Wear shoes">c. Wear shoes<br>
                <span><b><?php echo $q15s ?></b></span><br>
                <span><?php echo $q15e ?></span><br>
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
     min-height:160vh;
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
     width:100%;
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
 .content li
 {
     margin-left:3%;
     font-family:verdana,Geneva,Tahoma,sans-serif;
     margin-bottom:3%;
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
 #section1
 {
     height:450px;
     display:inline-block;
     width:100%;
 }
 #section2
 {
     height:450px;
     display:inline-block;
     width:100%;
 }
 #section3
 {
     height:270px;
     display:inline-block;
     width:100%;
 }
 .sectionpoint li
 {
     margin-left:50px;
 }
 .sectionpoint1 li
 {
     margin-left:30px;
 }
 label
 {
     font-size:25px;
     color:white;
     margin-left:5%;
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
     width:5%;
     margin:1% auto;
     margin-bottom:2%;
     border:none;
     outline:none;
     background:transparent;
     color:white;
     border-bottom:3px solid rgba(255,255,255,0.7);
     text-shadow:2px 2px 4px rgba(0,0,0,1);
     opacity:0.9;
 }
 select
 {
     width:10%;
     margin:1% auto;
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
 form button
 {
     width:10%;
     margin:3% auto;
     color:white;
     font-size:20px;
     opacity:0.8;
     background:rgba(255,255,255,0.07);
     margin-left:43%;
     padding:10px 23px;
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