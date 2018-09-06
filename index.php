<!DOCTYPE html>
<html>
<!--made it a php file for it has to run on the server-->
<head>
  <title>Kranti 18</title>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1, fluid" name="viewport"><!--The extra thing that was added was deleted-->
  <!-- css -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,300,700,800" rel="stylesheet" media="screen">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,600" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Autour One' rel='stylesheet'>
  <link rel="icon" href="klogo.ico" />
  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="css/style.css" rel="stylesheet" media="screen">
  <link href="color/default.css" rel="stylesheet" media="screen">
  <link href="css/events.css" rel="stylesheet" media="screen">
  <link href="css/modal.css" rel="stylesheet" media="screen">


</head>

<body>
<div class="wrap">
  <!-- Navigation -->
  <nav id="navb" class="navbar navbar-inverse" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="index.html"><img src="knavmain.ico" alt="logonavbar"  height="80" width="100">
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="top-navbar-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="current" href="#"><a></a></li>
        <li><a href="#particles-js">Home</a></li>
        <li><a href="#about">Description</a></li>
        <li><a href="#all">Events</a></li>
        <li><a href="#register">Register</a></li>
        <li><a href="#sponsors">Sponsors</a></li>
        <li><a href="#bottom-widget">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="particles-js" class="container"></div>
  <!-- About -->
<br><br>
  <section id="about" class="home-section bg-white">
    <div class="container">
      <div class="row wow fadeInDown">
        <div class="col-md-offset-2 col-md-8">
          <div class="section-heading">
          <div class="container-fluid " >
            <h2>Description</h2>
          </div>
            <div class="heading-line"></div>
            <p>
             Meenakshi Sundararajan Engineering College (MSEC) was established by the IIET Society in 2001. This institution is a part of the prestigious KRS Group of Institutions which also includes the renowned IIET (Indian Institute of Engineering Technology) established in 1947 by our Founder Late shri K.R.Sundararajan, the well-known Meenakshi College for Women and the more recently established Meenakshi Sundararajan School of Management. The institutions on the KRS Campus are known for the quality education they impart and their stringent levels of discipline. It has consistently outshone all other peer institutions, not only in academics, but in co-curricular activities as well.  It has been constantly ranked in the Top 10 Engineering colleges in Tamil Nadu under Anna university affiliated colleges for the past several years by renowned rankings.
            </p>
          </div>
        </div>
      </div>
      <div class="row wow fadeInUp">
        <div class="col-md-6 about-img">
          <img src="img/about-img.jpg" alt="">
        </div>

        <div class="col-md-6 content">
          <p>KRANTI 2018 is an National Technical Symposium organized by the department of computer science  - Meenakshi Sundararajan engineering college, Chennai. Symposium offers a one-of-a-kind experience to students by providing an array of opportunities under one umbrella. The idea behind Kranti'18 is to brush up students’ interest in future technologies through workshop and provide rich exposure and esoteric knowledge. Kranti'18 looks forward to promote; ”AUTOMATION ANYWHERE”, envisioning the future with bionic eyes, where artificial intelligence and other associated evolving technologies replacing everything in our day-to-day life.</p>

        </div>
      </div>
</section>
<!--Events-->

<section id="all" class="home-section bg-white">
  <div class="container section-heading " >
    <h2>Events</h2>

  <div class="heading-line"></div>
  </div>
  <div class="event_cont">
  <div class="container">
    <div class="view view-first">
    <img src="img/wof.png" />
    <div class="mask">
      <h2>Wheel of Fortune</h2>
      <p>Do you believe in luck? Well here is a test for you</p>
      <button type="button" class="info btn btn-info btn-lg" data-toggle="modal" data-target="#modal1">Read More</a>
    </div>
  </div>
    <div class="view view-first">
    <img src="img/ppt.png" />
    <div class="mask">
    </div>
    <div class="content">
      <h2>Paper-o-vaza</h2>
      <p>Let your ideas build...articulate and present them in front of the best of academicians</p>
      <button type="button" class="info btn btn-info btn-lg" data-toggle="modal" data-target="#modal2">Read More</a>
    </div>
  </div>

  <div class="view view-first">
    <img src="img/bb.png" />
    <div class="mask">
      <h2>Braille Bonkers</h2>
      <p>Get your hands sharp...as you are not going to use your eyes!</p>
      <button type="button" class="info btn btn-info btn-lg" data-toggle="modal" data-target="#modal3">Read More</a>
    </div>
  </div>
</div>
<div class="container">

  <div class="view view-first">
    <img src="img/cb.png" />
    <div class="mask"></div>
    <div class="content">
      <h2 id="testimonials">Calbug</h2>
      <p>&ldquo;Add numbers...to subtract the bugs.&rdquo;</p>
      <button type="button" class="info btn btn-info btn-lg" data-toggle="modal" data-target="#modal4">Read More</a>
    </div>
  </div>


  <div class="view view-first">
    <img src="img/eqm.png" />
    <div class="mask">
      <h2>Ex-Quiz Me</h2>
      <p>Unlocking knowledge at the speed of thought</p>
      <button type="button" class="info btn btn-info btn-lg" data-toggle="modal" data-target="#modal5">Read More</a>
    </div>
  </div>
  <div class="view view-first">
    <img src="img/htc.png" />
    <div class="mask">
      <h2>Hunt the code</h2>
      <p>It's not at all important to get it right the first time. It's vitally important to get it right the last time..</p>
      <button type="button" class="info btn btn-info btn-lg" data-toggle="modal" data-target="#modal6">Read More</a>
    </div>
  </div>
</div>

<div class="container">

  <div class="view view-first">
    <img src="img/bt.png" />
    <div class="mask">
      <h2>Beta Testing</h2>
      <p>Test your creativity limits to bring out the best in you</p>
      <button type="button" class="info btn btn-info btn-lg" data-toggle="modal" data-target="#modal7">Read More</a>
    </div>
  </div>

  <div class="view view-first">
    <img src="img/act.png" />
    <div class="mask">
      <h2>Alcatraz</h2>
      <p>Crack the code from your own fortress</p>
      <button type="button" class="info btn btn-info btn-lg" data-toggle="modal" data-target="#modal10">Read More</a>
    </div>
  </div>

  <div class="view view-first">
    <img src="img/gam.png" />
    <div class="mask">
      <h2>Gaming</h2>
      <p>Keep calm and keep away from the storm !!!!</p>
      <button type="button" class="info btn btn-info btn-lg" data-toggle="modal" data-target="#modal9">Read More</a>
    </div>
  </div>


</div>
</div>
</section>

<!-- Modal -->
<div class="modal fade" id="modal1" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <center> <h4 class="modal-title">WHEEL OF FORTUNE</h4></center>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="leftcolumn">

            <div class="card">
              <h3>"Do you believe in luck? Well here is a test for you".</h3>
              <div class="fakeimg" >
                <img src="img/wofi.jpg">

              </div>
              <p>Spin the wonder wheel to choose one out of five topics. Test your knowledge on the subject your fate has favoured.
                Questions of diverse formats (Crosswords, anagrams, mcqs etc.) will be given for you to answer.<br></p>

                <h4>  GUIDELINES </h4>
                <p><ul>
                <li>	Maximum of 2 members per team is allowed</li>
                <li>	Duration for each round – 20mins.</li>
              <li>	20 questions per round</li>
              <li>	The wonder wheel can be spun only once per round </li>
              <li>	Internet usage and external help is not permitted </li>
            </ul>
                </p>





            </div>
          </div>
          <div class="rightcolumn">

            <div class="card">
              <div class="sidebar-widget well">
                                <h4>TEAM EVENT</h4>
                                <h4>TIMINGS</h4>
                                <p>
                                  <h6>
                                    <ul>
                                   <li>9:30 AM (P)<br>1:45 PM (F)</li>
                                    </ul>
                               </h6>
                               </p>

                            </div>
            </div>

          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal2" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <center> <h4 class="modal-title">PAPER-O-VANZA</h4></center>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="leftcolumn">

            <div class="card">
              <div class="fakeimg"><img src="img/ppti.jpg"></img></div>
              <p>The Paper Presentation Event at KRANTI'18 aims to provide the best platform to showcase your research ideas in front of an esteemed panel of judges. If you have carried out research works in the computer-science & electronics  fields, we would be more than happy to hear your ideas out! Prepare a presentation and unleash the speaker in you to grab exciting prizes! </p>
              <p>This year we are accepting CSE/IT/ECE related abstracts.  </p>
              <ul>
                <li>Participants are requested to mail their abstracts to pptkranti2k18@gmail.com </li>
                <li>Abstracts sent by e-mail must have the subject of the e-mail as:[PP] [Branch][College] </li>
                <li>The last date for sending your abstract is  10th of sep 2018. </li>
                <li>DATE OF INTIMATION:  10-9-2018 </li>
                <li>DATE OF SUBMISSION: 10-9-2018</li>
        </ul>
        <p>You will be informed about the selection of abstract through  e-mail.
         Any other important detail regarding the venue or the timings of the competition will be conveyed through e-mails. </p>
         <h5>CERTIFICATION </h4>
         <ul>
        <li>Participation certificates  will be provided to the all the participants .</li>
        <li>Cash prices are awarded for the first three winner.</li>
        <li>Total prices worth 6k.</li>
         </ul>
         <h5>THEME:</h5>
         <center><h5>AUTOMATION ANYHWHERE</h5></center>
         <p>Automation based on any topics can be taken. Some relevant domains are mentioned here:</p>
         <ul>
        <li>IOT</li>
        <li>ROBOTICS</li>
        <li>ARTIFICIAL INTELLIGENCE</li>
        <li>BLOCK CHAIN</li>
         <p>ALL THE CANDITATESS CAN  INNOVATE YOUR IDEAS ON THE PLATFORM AUTOMATION  ANYWHEREs</p>
         <h5>PROCEDURE:  </h5>
         <ol>
           <li>Students have to present their abstract a few weeks prior to the final presentation.  </li>
        <li>The selected abstracts will be presented before the judges in the final presentation. </li>
        <li>We will shortlist papers which will be mailed to your respected emails.</li>
        <li>Maximum 3 in a group. Individual performance is also encouraged.</li>
        <li>To participate in the event,college id card is a must. </li>
        <li>The participants must bring the power point presentation in pendrive or cd. </li>
        <li>The presentation can contain upto 15-20 slides.</li>
        <li>The team will get 8 minutes to present their papers and 2 minutes for question & answers.</li>
        <li>The submitted papers will be shortlisted within 2-3 days by the judges.</li>
            </div>
          </div>
          <div class="rightcolumn">

            <div class="card">
              <div class="sidebar-widget well">
                                <h4>Team Event</h4>
                                <h6></h6>
                                <h4>Date</h4>
                                <h6>14 Sep, 2018</h6>
                                <h4>Time</h4>
                                <h6>9:00 AM </h6>

                            </div>
            </div>
            <a class="btn btn-info" href="https://docs.google.com/forms/d/e/1FAIpQLScEhwwhbNLxwvUIT_5S_lLk0DA3hQg-IeAAQXVFTfOnCAVB3A/viewform?usp=sf_link">Register here</a>

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal3" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <center> <h4 class="modal-title">BRAILLE BONKERS</h4></center>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="leftcolumn">

            <div class="card">
              <div class="fakeimg"><img src="img/bbi.jpg"></img></div>
              <h4>RULES</h4>
              <li>2 PARTICIPANTS IN A TEAM</li>
              <li>The compiler provided will be DEV  C</li>
              <li>Consists of two rounds</li>
              <li>The Judges decision is final</li>
         <h5>LEVEL-1:ERROR CORRECTION</h5>
         <ol>
        <li>A code with syntax error will be given on paper.</li>
        <li>Participants have to correct the errors on paper and type the code with
MONITOR SWITCHED OFF.</li>
        <li>12 minutes will be given to type the code.</li>
        <li>Based on the results of first round the participants will be selected for
second round.</li>
        </ol>
         <h5>LEVEL-2:CRACKING CODES</h5>
         <ol>
        <li>Only problem statement will be provided.</li>
        <li>Participants need to type the code in DEV C with MONITORS SWITCHED
OFF.</li>
        <li>Ten minutes will be given to each participant.</li>
        <li>Based on the results of compilation and execution winners will be
announced.</li>
        </ol>

            </div>
          </div>
          <div class="rightcolumn">

            <div class="card">
              <div class="sidebar-widget well">
                                <h4>Team Event</h4>
                                <h6></h6>
                                <h4>Date</h4>
                                <h6>14 Sep, 2018</h6>
                                <h4>Time</h4>
                                <h6>9:00 AM (P)<br>1:00 PM (F)</h6>
             </div>
            </div>

          </div>
        </div>

        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal4" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <center> <h4 class="modal-title">CALBUG</h4></center>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="leftcolumn">

            <div class="card">
              <h3>"Add numbers...to subtract bugs"</h3>
              <div class="fakeimg" >
                <img src="img/cbi.jpg">

              </div>
              <p>Get your hands dirty to un-ruin your observation skills and computing power in a jiffy .
                This game consists of two rounds. Round one is a test for your mathematical and reasoning ability.
                Excel this round to exhibit your keen capability to detect  exceptions which creates havoc in programming.</p>


                <h4>  GUIDELINES </h4>
                <p><ul>
                <li>Round 1- duration- 25mins</li>
                <li>Round 2-duration-25mins</li>
              <li>Maximum of 2 participants</li>
              <li>No Internet facility will be provided.</li>
              </ul>
                </p>



            </div>
          </div>
          <div class="rightcolumn">

            <div class="card">
              <div class="sidebar-widget well">
                                <h4>TEAM EVENT</h4>
                                <h4>TIMINGS</h4>
                                <p>
                                  <h6><ul>
                                   <li>	9:00 AM (P)<br>01:30 PM (F)</li>
                                 </ul>
                               </h6>
                               </p>
                            </div>
            </div>

          </div>
        </div>

</div>
  <div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
<div class="modal fade" id="modal5" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <center> <h4 class="modal-title">EX-QUIZ-ME</h4></center>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="leftcolumn">

            <div class="card">
              <h3>"Unlocking knowledge at the speed of thought"</h3>
              <div class="fakeimg" >
                <img src="img/timeup.jpg">

              </div>
              <p>Experience an adrenaline rush... Feel your neurons firing<br>
                  Test your insight in a wide range of topics.<br>
                  Race with pace to answer the question you face.<br></p>

                <h4>  GUIDELINES </h4>
                <p><ul>
                <li>A team can consist of maximum 3 members.</li>
                <li>Use of internet is not allowed.</li></ul>
                </p>

                  <h3>DURATION</h3>
                  <p>
                    <ul><li>9:00 AM (R1)<br>11:30 PM (R2)<br>02:00</li>
                    </ul>
                  </p>



            </div>
          </div>
          <div class="rightcolumn">

            <div class="card">
              <div class="sidebar-widget well">
                                <h4>TEAM EVENT</h4>
                                <h4>TIMINGS</h4>
                                <p>
                                  <h6><ul>
                                   <li>	Round 1: 9:45 A.M. - 11:00 A.M.</li>
                               		<li>Round 2: 11:30 A.M. - 12:30 P.M.</li>
                               		<li>Round 3: Buzzer round 2:00 P.M. - 2:30 P.M.</li>
                                 </ul>
                               </h6>
                               </p>
                            </div>
            </div>

          </div>
        </div>


</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>

<div class="modal fade" id="modal6" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <center> <h4 class="modal-title">CODE HUNT</h4></center>
      </div>
      <div class="modal-body">
        <div class="row">
  <div class="leftcolumn">

    <div class="card">
      <h3> "It's not at all important to get it right the first time. It's vitally important to get it right the last time."</h3>
      <div class="fakeimg" >
        <img src="img/htci.jpg">

      </div>
      <p>Computers are good at following instructions but not at reading your mind. Let us see if you can. Identify the input for which the given output is possible , code it , and show the output in round one. Then, race your way to level two for scenario based coding. <br></p>

        <h4>  GUIDELINES </h4>
        <p><ul>
        <li>	Maximum of 2 members per team is allowed</li>
        <li>	Internet usage and external help is not permitted </li>
      <li>	Based on the first round participants will be short listed for the second round</li>
      <li>	For the second level, each team will be given 5 questions and 2 hours time . </li>
      <li>	The team who shows the maximum possible output within the stipulated time will be considered as the winner.  </li>
    </ul>
        </p>





    </div>
  </div>
  <div class="rightcolumn">

    <div class="card">
      <div class="sidebar-widget well">
                        <h4>TEAM EVENT</h4>
                        <h4>TIMINGS</h4>
                        <p>
                          <h6>
                            <ul>
                           <li>09:00 AM (P)<br>01:30 PM (F)</li>
                         </ul>
                       </h6>
                       </p>
                       
                    </div>
    </div>

  </div>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>

<div class="modal fade" id="modal7" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <center> <h4 class="modal-title">Beta Testing</h4></center>
      </div>
      <div class="modal-body">

<div class="row">
  <div class="leftcolumn">

    <div class="card">
      <div class="fakeimg"><img src="img/bti.jpg"></img></div>
      <h4>RULES</h4>
<li>The topics will be given on the spot.</li>
<li>The participants will suppose to design practical models with the given materials.</li>
<li>Materials will be provided.</li>
<li>Internet access is strictly prohibited.</li>
<li>Top 7 teams will be selected for the final round.</li>
      <h4>PRELIMINARY ROUND</h4>
      <ol>
      <li>In the first round , you are suppose to create a poster .</li>
<li>The poster should be within 600x800 pixel size.</li>
<li>The poster should be attention grabbing.</li>
<li>Draw relevant pictures and sketch.</li>
<li>10mins will be given to download related images from net .</li>
<li>Maximum duration for this round is 30 minutes.</li>
<li>Timing : From 9.00 to 12.30.</li>
</ol>
 <h4>FINAL ROUND</h4>
 <ol>
<li>In the second round, you are suppose to create a pratical model for the topic given on spot .</li>
<li>Maximum duration for this round is 45 minutes.</li>
<li>Explanation of the model is necessary.</li>
<li>Atleast 2 actions should  be performed in the prototype(pratical model).</li>
<li>Necessary materials will be provided by the coordinators .</li>
<li>Explanation of the model is necessary.</li>
<li>Timing : From 2.00 to 3.30 .</li>
</ol>
    </div>
  </div>
  <div class="rightcolumn">

    <div class="card">
      <div class="sidebar-widget well">
                        <h4>Team Event</h4>
                        <h6></h6>
                        <h4>Date</h4>
                        <h6>14 Sep, 2018</h6>
                        <h4>Time</h4>
                        <h6>9.30 AM (P)<br>02:15 PM (F)</h6>
                    </div>
    </div>

  </div>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>

<div class="modal fade" id="modal9" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <center> <h4 class="modal-title">Gaming</h4></center>
      </div>
      <div class="modal-body">

<div class="row">
  <div class="leftcolumn">

    <div class="card">
      <div class="fakeimg"><img src="img/gami.jpg"></img></div>
      <h4>RULES</h4>
<li>Rules and registration for the event will be updated shortly.</li>
    </div>
  </div>
  <div class="rightcolumn">

    <div class="card">
      <div class="sidebar-widget well">
                        <h4>Team Event</h4>
                        <h6></h6>
                        <h4>Date</h4>
                        <h6>14 Sep, 2018</h6>
                        <h4>Time</h4>
                        <h6>9.00 AM </h6>
                    </div>
    </div>

  </div>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>


<div class="modal fade" id="modal10" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <center> <h4 class="modal-title">Alcatraz</h4></center>
      </div>
      <div class="modal-body">

<div class="row">
  <div class="leftcolumn">

    <div class="card">
      <div class="fakeimg"><img src="img/acti.jpg"></img></div>
      <h4>RULES</h4>
<li>Rules for the event will be updated shortly.</li>
    </div>
  </div>
  <div class="rightcolumn">

    <div class="card">
      <div class="sidebar-widget well">
                        <h4>Team Event</h4>
                        <h6></h6>
                        <h4>Date</h4>
                        <h6>14 Sep, 2018</h6>
                        <h4>Time</h4>
                        <h6>9.00 AM (P)<br>01:15 PM (F)</h6>
                    </div>
    </div>

  </div>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>


<div class="modal fade" id="modal8" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <center> <h4 class="modal-title">Regisration</h4></center>
      </div>
            <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSegrd17g8lxZGLiqCCWTOe3jdOPTIE1urdyVt7j_gch9507kg/viewform?embedded=true" width="640" height="968" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>

      <!--
      <div class="modal-body">
        <?php
            if(isset($_GET['registration']))
            {
                $message = $_GET['registration'];
                echo $message;
            }
        ?>
        <div class="form_center">
        <form  action="registration.php" method="post">
          <div class="form-group">
            <label for="name">Name :
            <input type="text" name="name" class="form-control" placeholder="Enter name"></label>
            </div>
          <div class="form-group">
            <label for="email">Email :
            <input type="text" name="email" class="form-control" placeholder="Enter email"></label>
          </div>
          <div class="form-group">
            <label for="contact">Contact Number :
            <input type="text" name="contact" class="form-control" placeholder="Enter contact number"></label>
          </div>
          <div class="form-group">
            <label for="college">College Name :
            <input type="text" name="col_name" class="form-control" placeholder="Enter college name"></label>
          </div>
          <div class="form-group">
            <label for="gender">Gender :</label>
          </div>
          <div class="radio">
            <label class="radio-inline">
            <input type="radio" name="gender"  value='male' checked>Male</label>
            <label class="radio-inline"></label>
            <input type="radio" name="gender" value='female'>Female</label>
          </div>
        <button type="submit" class="btn btn-default" name="submit">Submit</button>
        </form>
      </div>
    </div>
  -->
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  </div>
  </div>
</div>

<br><br><br>
<!--Countdown-->
<div class="container">
  <h2>Until we rumble</h2>
<br>
  </div>
      <div id="clockdiv">
        <div>
          <span class="days"></span>
          <div class="smalltext">Days</div>
        </div>
        <div>
          <span class="hours"></span>
          <div class="smalltext">Hours</div>
        </div>
        <div>
          <span class="minutes"></span>
          <div class="smalltext">Minutes</div>
        </div>
        <div>
          <span class="seconds"></span>
          <div class="smalltext">Seconds</div>
        </div>
      </div>
    </div>

  </section>
<br><br><br>

<!--Register-->
<section id="register" class="home-section bg-white">
    <div class="container section-heading">
      <h2>Register</h2>
    <div class="heading-line"></div>
    <br><br>
    <a data-toggle="modal" data-target="#modal8" class="btn btn-info" role="button">Register</a>
    </div>
</section>
<!--Sponsors-->
<section id="sponsors" class="home-section parallax" data-stellar-background-ratio="0.5">
   <div class="container">
     <div class="container section-heading">
       <h2>Sponsors</h2>
       <div class="heading-line"></div>
     </div>
     <div class="row">
       <div class="col-md-12">
         <ul class="clients">
           <li class="wow fadeInDown" data-wow-delay="0.3s"><a><img src="img/sponsors/1.png" alt="" /></a></li>
           &nbsp
           &nbsp
           &nbsp
           <li class="wow fadeInDown" data-wow-delay="0.9s"><a><img src="img/sponsors/2.jpg" height=300 width =420 alt="" /></a></li>
           &nbsp
           &nbsp
           &nbsp
           <li class="wow fadeInDown" data-wow-delay="1.2s"><a><img src="img/sponsors/3.jpg" height=300 width =420 alt="" /></a></li>
           &nbsp
           &nbsp
           &nbsp
           <li class="wow fadeInDown" data-wow-delay="1.5s"><a><img src="img/sponsors/4.jpg" alt="" /></a></li>
         </ul>
       </div>
     </div>
   </div>
 </section>
  <!-- Bottom widget -->
  <section id="bottom-widget" class="home-section bg-white">
    <div class="container">
      <div class="container section-heading">
      <h2>Contact Us</h2>
      <div class="heading-line"></div>
    </div>

    <br><br>
      <div class="row">
        <div class="col-md-4">
          <div class="contact-widget wow bounceInLeft">
            <i class="fa fa-map-marker fa-4x"></i>
            <h5>Campus</h5>
            <p>
              363, Arcot Road, Kodambakkam,<br /> Chennai, Tamil Nadu 600024
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-widget wow bounceInUp">
            <i class="fa fa-phone fa-4x"></i>
            <h5>Call</h5>
            <p>
              +91 9677057792<br> +91 7010323925

            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-widget wow bounceInRight">
            <i class="fa fa-envelope fa-4x"></i>
            <h5>Email us</h5>
            <p>
              mseckranti2018@gmail.com
            </p>
          </div>
        </div>
      </div>
      <br><br>
      <section id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15546.730168658516!2d80.2265366!3d13.0558678!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4d3f7e677496e707!2sMeenakshi+Sundararajan+Engineering+College!5e0!3m2!1sen!2sin!4v1535042015452" style="border:0" allowfullscreen="" width="100%" height="350" frameborder="0"></iframe>
      </section>


     <!--
      <div class="row mar-top30">
        <div class="col-md-12">
          <h5>We're on social networks</h5>
          <ul class="social-network">
            <li><a href="https://www.facebook.com/Kranti2k18-223941261658272/">
						<span class="fa-stack fa-2x">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
						</span></a>
            </li>
            <li><a href="https://www.instagram.com/kranti2k18/">
						<span class="fa-stack fa-2x">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
						</span></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  -->
  </section>

  <!-- Footer -->
  <footer class="page-footer font-small blue">


    <div class="footer-copyright text-center py-3">Created by Team <a href="index.html">KRANTI</a>
    </div>
    <ul class="social-network">
      <li><a href="https://www.facebook.com/Kranti2k18-223941261658272/">
      <span class="fa-stack fa-2x">
        <i class="fa fa-circle fa-stack-2x"></i>
        <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
      </span></a>
      </li>
      <li><a href="https://www.instagram.com/kranti2k18/">
      <span class="fa-stack fa-2x">
        <i class="fa fa-circle fa-stack-2x"></i>
        <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
      </span></a>
      </li>
    </ul>


  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- js -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/mb.bgndGallery.js"></script>
  <script src="js/mb.bgndGallery.effects.js"></script>
  <script src="js/jquery.simple-text-rotator.min.js"></script>
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nav.js"></script>
  <script src="js/modernizr.custom.js"></script>
  <script src="js/grid.js"></script>
  <script src="js/stellar.js"></script>
  <script src="js/particles.js"></script>
  <script src="js/app.js"></script>
  <script src="js/timer.js"></script><!--closed the script tag-->
  <!--Contact Form JavaScript File -->
 <!-- Template Custom Javascript File -->
  <script src="js/custom.js"></script>
  </div>
</div>
</div>
</body>
</html>
