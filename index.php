<html>
    <head>
         <title>Data Hub</title>
    </head>
    <body>
         <div class="container">
              <div class="row">
                        <div class="col">
                          <h1>Digital Data Hub</h1>
                        </div>
              </div>
              <div id="navi">
                <?php
                    include "sidebar.php";
                ?>
              </div>
         </div>
         <div class="main">
              <div class="content">
                   <h2>Data Hub</h2>                  
                   <p>Digital Data Hub is a comprehensive web solution for India's Government Features.
                      <span>Data Hub</span>,this system contain list of data and can access by remote users 
                      concurrently from any where and this three options help to know this web site more.
                   </p>
                   <ul class="sectionpoint1">
                     <li><a href="#section1">Uses of Data Hub</a></li>
                     <li><a href="#section2">Access to Available</a></li>
                     <li><a href="#section3">About</a></li>
                   </ul>
                   <br>
                   <div id="section1">
                     <h2>Uses of Data Hub</h2>
                     <br>
                     <br>
                        <p><b>Cloud Storage</b>: The cloud storage is a service where data is remotely maintained,managed and backed up.</p>
                        <p><b>Eligibility Criteria</b>: It will help to find the basic criteria for any applications like in Government web sites.</p>
                        <p><b>User Interactions</b>: This site contain user interactions also it make new look for this site and give visual experience for the users.</p>
                        <p><b>Session Locking</b>: It will help to improve our security functions like once you move the page it clear the session you used and also it didn't allow without login to another page once you move another site.</p>
                        <p><b>Information</b>: This information are based on our government offical sites and we make more interesting to give the data to every users.</p>
                     </ul>
                   </div>
                   <div id="section2">
                     <h2>Access to Available</h2>
                     <br>
                     <br>
                     <h3>User Access</h3>
                     <br>
                     <p>User can access this features in the webpage like</p>
                     <ul class="sectionpoint">
                        <li>Store Documents</li>
                        <li>View Documents</li>
                        <li>Basic Laws to known</li>
                        <li>Schemes</li>
                        <li>Suggestion</li>
                        <li>DL Information</li>
                        <li>LLR Information</li>
                        <li>Road Safety</li>
                        <li>Demo Application</li>
                        <li>Eligibility Criteria</li>
                        <li>Online Test</li>
                        <li>Change Password</li>
                     </ul>
                   </div>
                   <div id="section3">
                     <h2>About</h2>
                     <br>
                     <h3>Contact</h3>
                     <br>
                     <ul class="sectionpoint">
                        <li>06/Vivekandar Street,<br>Dubai cross alley,<br>Dubai Main Road,<br>Dubai.</li>
                        <br>
                        <li>+91 000 000 000</li>
                     </ul>
                   </div>
              </div>
              <div class="image">
                   <image src="pdf/ddh.gif"></image>
              </div>
         </div>
         <div class="footer">
                <p>Copyright &copy; digital data hub 2024 </p>
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
     min-height:100vh;
     color:white;
     background:linear-gradient(to right,#8B008B,#DDA0DD);
 }
 .container
 {
     display:flex;
     font-size:25px;
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
     color:yellow;
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
     margin-top:7%;
 }
 .image img
 {
     width:40rem;
     animation:animi3 7s ease-in-out;
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
    bottom:7;
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
</style>