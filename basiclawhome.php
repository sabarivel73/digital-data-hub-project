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
            <div class="row">
              <h1>Basic Laws to Known</h1>
            </div>
            <div class="navbar">
                <nav>
                    <ul>
                        <button><a href="commentbl1.php">Send Your comments</a></button>
                        <button><a href="basiclaw.php">Back</a></button>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="main">
            <div class="content">
                <?php
                     $law=$_POST['cc'];
                     echo "<h3>This are basic laws based on ($law) and more laws are present in our government.</h3>";
                    if($law=="While Driving / Motor related Laws")
                    {
                        echo "<h3>Some of the important sections in the Motor Vehicles Act 1988</h3>";
                        echo "<ul>
                                <li><b>Section 113</b>: This section enforces the law regarding the weight that’s permitted to be carried by a vehicle.</li>
                                <li><b>Section 112</b>: This section imposes the law regarding the maximum speed at which a motor vehicle can be driven.</li>
                                <li><b>Section 129</b>: The section which imposes the law of motor cyclists having to wear helmet while riding.</li>
                                <li><b>Section 134</b>: This section deals with the duty of a driver of a vehicle to report an accident to the police and aid the injured by getting medical attention.</li>
                                <li><b>Section 185,202</b>: On the time of driving in case your 100ml. blood contains more than 30mg. of alcohol then the police can arrest you with no warrant.</li>
                                <li><b>This are the basic laws and move to offical government site get more details.</b></li>
                            </ul>";
                    }
                    else if($law=="Laws in India against abusive behaviour")
                    {
                        echo"<h3>In India, abusive behavior can be addressd under various laws depending on the abuse.Here are some sections from Indian laws that deal with abusive behavior.</h3>";
                        echo "<ul>
                                <li><h3>Indian Penal Code(IPC)</h3><b>Section 509</b>: This section deals with words,gestures, or acts intended to insult the modesty of a woman,which includes any sexually colored remarks or abusive language directed towards a woman.
                                </li>
                                <li><h3>Protection of Women from Domestic Violence Act, 2005</h3>The Act ensures woman’s right to reside in her matrimonial home. This Act has a special feature with specific provisions under law which provides protection to a woman to „live in violence free home. Though this Act has civil and criminal provisions, a woman victim can get immediate civil remedies within 60 days. Aggrieved women can file cases under this Act against any male adult perpetrator who is in domestic relationship with her. They can also include other relatives of the husband and male partner as respondents to seek remedies in their case.
                                <br><br><b>Section 18</b>:  Protection Order.<br><br><b>Section 19</b>: Residence Order for residing at Matrimonial House.<br><br><b>Section 20</b>:Monetary Orders which includes maintenance for herself and her Children.<br><br> 
                                <b>Section 21</b>: Temporary Custody of Children.<br><br><b>Section 22</b>: Compensation order for the damages caused to her.
                                </li>
                                <li><h3>The Scheduled Caste and Scheduled Tribe (Prevention of Atrocities) Act, 1989</h3>This act provides protection to individuals belonging to scheduled castes and scheduled tribes against various forms of abuse, including verbal abuse and humiliation based on caste.</li>
                                <li><b>This are the basic laws and move to offical government site get more details.</b></li>
                            </ul>";
                    }
                    else if($law=="Laws must followed by Indian Parents")
                    {
                        echo"<h3>Some of the important sections in the Right to Education Act 2009,The Child Labour (Prohibition and Regulation) Act 1986 and The Dowry Prohibition Act 1961.</h3>";
                        echo"<ul>
                                <li><h3>Right to Education Act 2009</h3>
                                    <b>Section 3:</b>
                                    <p>Responsibility of the government to provide free and compulsory education to every child.</p><br>
                                    <b>Section 8:</b>
                                    <p>Obligation of parents and guardians to provide opportunities for education to children.</p>
                                </li>
                                <li><h3>The Child Labour (Prohibition and Regulation) Act 1986</h3>
                                    <b>Section 3:</b>
                                    <p>Prohibition of employment of children in certain occupations and processes.</p><br>
                                    <b>Section 12:</b>
                                    <p>Penalty for parents or guardians permitting child to work in contravention of the provisions.</p>
                                </li>
                                <li><h3>The Dowry Prohibition Act 1961</h3>
                                    <b>Section 3:</b>
                                    <p>Penalty for giving or taking dowry.</p><br>
                                    <b>Section 4:</b>
                                    <p>Penalty for demanding dowry.</p>
                                </li>
                                <li><b>This are the basic laws and move to offical government site get more details.</b></li>
                            </ul>";
                    }
                    else if($law=="Laws must follow by companies in India")
                    {
                            echo"<h3>Some of the important sections in the Companies Act 2013,Income Tax Act 1961,Goods and Services Tax(GST) Act,Labour Laws and Environmental Laws.</h3>";
                            echo"<ul>
                                    <li><h3>Companies Act 2013</h3>
                                        <b>Section 73: Prohibition of Public Deposits</b>
                                        <p>Companies are restricted from soliciting or accepting monetary deposits from the public under Section 73 of the Company Act 2013. Exceptions include entities like financial institutions, NBFCs, or those specified by the Government of India and the RBI.</p>
                                        <br>
                                        <b>Section 135: Corporate Social Responsibility (CSR) Committee</b>
                                        <p>Companies with a net turnover exceeding Rs.500 crore in the previous year must establish a CSR committee under Section 135. This committee, comprising three or more directors, including an independent entity, is mandated for CSR activities.</p>
                                        <br>
                                        <b>Section 197: Director Remuneration Limits</b>
                                        <p>Directors of public companies must not receive remuneration exceeding 11% of the company’s net profits in a financial year, according to Section 197 of the Company Act 2013. </p>
                                    </li>
                                    <li><h3>Income Tax Act 1961</h3>
                                        <b>Section 80C: Tax deduction on investments</b>
                                        <p>Section 80C of the Income Tax Act permits deductions for specific investments like Tax Saving Mutual Funds and Tax Saving Fixed Deposits.</p>
                                        <br>
                                        <b>Section 80CCC: Tax deduction for contribution to pension funds</b>
                                        <p>Section 80CCC promotes pension fund investments by allowing an income tax deduction from the taxpayer’s gross total income for the respective financial year.</p>
                                        <br>
                                        <b>Section 80CCD: Tax deduction for contribution to National Pension Scheme</b>
                                        <p>Section 80CCD offers tax deductions for National Pension Scheme (NPS) contributions. Every sub-section under this section allows for unique deductions, which every taxpayer must know.</p>
                                    </li>
                                    <li><h3>Goods and Services Tax(GST) Act</h3>
                                        <b>Section 71:</b>
                                        <p>Section 71 of the Central Goods and Services Tax (CGST) Act empowers authorized GST officers to visit the business premises of GST-registered individuals and examine their books of account, documents, and electronic records.</p>
                                        <br>
                                        <b>Section 74:</b>
                                        <p>Determination of tax not paid or short paid or erroneously refunded or input tax credit wrongly availed or utilised by reason of fraud or any willful-misstatement or suppression of facts.</p>
                                        <br>
                                        <b>Section 167:</b>
                                        <p>The head tax official (the Commissioner) has the power to announce that, if certain conditions are met, the abilities given to one tax official or department by this law can also be given to another tax official or department that he specifies in the announcement.</p>
                                    </li>
                                    <li><h3>Labour Laws</h3>
                                        <b>Section 86:</b>
                                        <p>Provided that no exemption shall be granted from the provisions relating to hours of work and holidays, unless the persons having the control of the institution submit, for the approval of the State Government, a scheme for the regulation of the hours of employment, intervals for meals, and holidays of the persons employed in or attending the institution or who are inmates of the institution, and the State Government is satisfied that the provisions of the scheme are not less favourable than the corresponding provisions of this Act.</p>
                                        <br>
                                        <b>Section 9:</b>
                                        <p>For the purposes of this section, an employed person shall be deemed to be absent from the place where he is required to work if, although present in such place, he refuses, in pursuance of a stay-in strike or for any other cause which is not reasonable in the circumstances, to carry out his work.</p>
                                        <br>
                                        <b>Section 103:</b>
                                        <p>If a person is found in a factory at any time, except during intervals for meals or rest, when work is going on or the machinery is in motion, he shall until the contrary is proved, be deemed for the purposes of this Act and the rules made thereunder to have been at that time employed in the factory.</p>
                                    </li>
                                    <li><h3>Environmental Laws</h3>
                                        <b>Section 3:</b>
                                        <p>It empowers the Central Government to establish authorities [under section 3(3)] charged with the mandate of preventing environmental pollution in all its forms and to tackle specific environmental problems that are peculiar to different parts of the country. The Act was last amended in 1991.</p>
                                        <br>
                                        <b>Section 6:</b>
                                        <p>The maximum allowable limits of concentration of various environmental pollutants (including noise) for different areas. The procedures and safeguards for the handling of hazardous substances. The prohibition and restrictions on the handling of hazardous substances in different areas.</p>
                                        <br>
                                        <b>Section 11:</b>
                                        <p>Section 11 empowers the State Government or any officer authorised by it to take the samples of air, water, soil, or other substances from the premises of any factory.</p>
                                    </li>
                                    <li><b>This are the basic laws and move to offical government site get more details.</b></li>                  
                                </ul>";
                    }
                    else if($law=="Indian Laws must followed by police officer")
                    {
                            echo"<h3>Some of the important sections in the Police Act 1861,Motor Vehicles Act 1988 and Indian Penal Code 166A.</h3>";
                            echo"<ul>
                                    <li><b>Section 188</b>: Under Motor Vehicles Act 1988, Whoever abets the commission of an offence under section 184, section 185 or section 186 shall be punishable with the punishment provided for the offence.</li>
                                    <li><h3>Police Act 1861</h3>
                                        <b>Section 1</b>: Interpretation clause.<br><br>
                                        <b>Section 2</b>: Constitution of the force.<br><br>
                                        <b>Section 3</b>: Superintendence in the State Government.<br><br>
                                        <b>Section 7</b>: Appointment, dismissal, etc., of inferior officers.<br><br>
                                        <b>Section 37</b>: Recovery of penalties and fines imposed by Magistrates.
                                    </li>
                                    <li><h3>Indian Penal Code 166A</h3>
                                        <b>Section 166A</b>: In general, Section 166A aims to ensure that public servants fulfill their duties in recording information or reporting offenses.
                                    </li>
                                    <li><b>This are the basic laws and move to offical government site get more details.</b></li>
                                </ul>";
                    }
                    else if($law=="Hotel Laws in India")
                    {
                            echo"<h3>Some of the important sections in the Hotels and Restaurant Act 1956,The Food Safety and Standards Act 2006 and The Foreigners Act 1946.</h3>";
                            echo"<ul>
                                    <li><h3>Hotels and Restaurant Act 1956</h3>
                                        <p>This act governs the establishment and regulation of hotels and restaurants,Important sections include:</p><br>
                                        <b>Section 3:</b>
                                        <p>Licensing of hotels and restaurants.</p>
                                        <br>
                                        <b>Section 5:</b>
                                        <p>Conditions for grant of license.</p>
                                        <br>
                                        <b>Section 6:</b>
                                        <p>Power to make rules.</p>
                                    </li>
                                    <li><h3>The Food Safety and Standards Act 2006</h3>
                                        <p>This act regulates the manufacture,storage,distribution,sale and import of food to ensure food safety.Relevant sections include:</p><br>
                                        <b>Section 16:</b>
                                        <p>Licensing and registration of food businesses.</p>
                                        <br>
                                        <b>Section 18:</b>
                                        <p>Provisions related to food safety officers.</p>
                                        <br>
                                        <b>Section 26:</b>
                                        <p>Penalties for contravention of provisions.</p>
                                    </li>
                                    <li><h3>The Foreigners Act 1946</h3>
                                        <p>This act deals with the entry,stay, and departure of foreigners form India.Relevant sections include:</p><br>
                                        <b>Section 3:</b>
                                        <p>Power to make orders.</p><br>
                                        <b>Section 8 </b>
                                        <p>Penalties for contravention of orders.</p>
                                    </li>
                                    <li><b>This are the basic laws and move to offical government site get more details.</b></li>
                                </ul>";
                    }
                    else if($law=="Citizen Constitution Law")
                    {
                            echo"<h3>Some of the important sections in the Part 2:Citizenship(Articles 5-11) and Part 3:Citizenship(Articles 12-35).</h3>";
                            echo"<ul>
                                    <li><h3>Part 2: Citizenship (Articles 5-11)</h3>
                                        <b>Article 9: Persons voluntarily acquiring citizenship of a foreign State not to be citizens</b>
                                        <p>No person shall be a citizen of India by Article 5 or be deemed to be a citizen of India by Article 6 or Article 8 if he has voluntarily acquired the citizenship of any foreign State.</p>
                                        <br>
                                        <b>Article 10: Continuance of the rights of citizenship</b>
                                        <p>Every person who is or is deemed to be a citizen of India under any of the foregoing provisions of this Part shall, subject to the provisions of any law that may be made by Parliament, continue to be such citizen.</p>
                                        <br>
                                        <b>Article 11: Parliament to regulate the right of citizenship by law</b>
                                        <p>Nothing in the foregoing provisions of this Part shall derogate from the power of Parliament to make any provision concerning the acquisition and termination of citizenship and all other matters relating to citizenship.</p> 
                                    </li>
                                    <li><h3>Part 3: Citizenship (Articles 12-35)</h3>
                                        <b>Right to Equality (Articles 14-18):</b>
                                        <p>This includes equality before the law, prohibition of discrimination on grounds of religion, race, caste, sex, or place of birth, and equality of opportunity in matters of public employment.</p>
                                        <br>
                                        <b>Right to Freedom (Articles 19-22):</b>
                                        <p>This encompasses the right to freedom of speech and expression, assembly, association, movement, residence, and the right to practice any profession, occupation, trade, or business.</p>
                                        <br>
                                        <b>Right against Exploitation (Articles 23-24):</b>
                                        <p>This includes the prohibition of forced labor, child labor, and trafficking of human beings.</p>
                                    </li>
                                    <li><b>This are the basic laws and move to offical government site get more details.</b></li>
                                </ul>";
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
     cursor:pointer;
 }
 body
 {
     width:100%;
     min-height:150vh;
     color:white;
     background:linear-gradient(to right,#8B008B,#DDA0DD);
 }
 .container
 {
     display:flex;
     font-size:20px;
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
     margin-top:5%;
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
</style>