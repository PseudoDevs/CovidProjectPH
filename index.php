<?php

$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";


?>

<?php

    include 'includes/header.php';

?>

    <div id="main-wrapper">

        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="navigation">
                            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                                <a class="navbar-brand" href="index.php">Covid-19 Project</a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link" href="prevention.php">Prevention</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="qurantine.php">Qurantine</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="help.php">Help</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="signin-btn">
                                    <a class="btn btn-primary" href="stats.php">COVID-19 Tracker</a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hero" id="app-banner">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-xl-7 col-lg-7">
                        <div class="hero-content">
                            <h1><span class="text-danger">[Covid-19]</span> Disease <br/>Advice for the Public.</h1>
                            <h3>COVID-19 is an illness caused by
                                a coronavirus. </h3>
                            <p>Human coronaviruses are common and are
                                typically associated with mild illnesses,
                                similar to the common cold.</p>
                        </div>
						<div class="row count-miter">
							<div class="col-4">
								<span class="count-title">America CASES</span>
								<h3 class="count-box worldwide" id="US_Positive">Loading..</h3>
							</div>
							<div class="col-4">
								<span class="count-title">DEATHS</span>
								<h3 class="count-box deaths" id="US_Death">Loading..</h3>
							</div>
							<div class="col-4">
								<span class="count-title">RECOVERED</span>
								<h3 class="count-box recovered" id="US_Recovered">Loading..</h3>
							</div>
						</div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <div class="hero-img"> 
                            <img src="./images/hero/1.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hero-symptom section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="section-title text-center">
                            <h5>What are the Symptoms of COVID-19</h5>
                            <h2>SYMPTOMS of Corellavirus</h2>
                            <p>Symptoms may take up to 14 days to appear after exposure to COVID-19. This is the longest
                                known incubation period for this disease. </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="symptom-content">
                            <span><img src="./images/icons/fever.svg" alt=""></span>
                            <h4>Fever</h4>
                            <p>Fever is a key symptom, experts say. Don't fixate on a number, but know it's really not a
                                fever until temperature reaches at least 100 degrees</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="symptom-content">
                            <span><img src="./images/icons/cough.svg" alt=""></span>
                            <h4>Cough</h4>
                            <p>Coughing is another key symptom, but it's not just any cough, said Schaffner. It should
                                be a dry cough that you feel in your chest.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="symptom-content">
                            <span><img src="./images/icons/breathing.svg" alt=""></span>
                            <h4>Difficulty Breathing</h4>
                            <p>Shortness of breath can be a third -- and very serious -- manifestation of Covid-19, and
                                it can occur on its own, without a cough. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="how-spread section-padding">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-5 col-lg-5 col-md-6">
                        <div class="spread-img">
                            <img src="./images/home/1.png" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="section-title">
                            <h2>HOW IT IS SPREAD</h2>
                            <p>Coronaviruses are most commonly spread from
                                an infected person through:</p>
                        </div>
                        <div class="spread-content">

                            <ul>
                                <li>
                                    <i class="mdi mdi-check"></i>
                                    Respiratory droplets when you cough or sneeze
                                </li>
                                <li>
                                    <i class="mdi mdi-check"></i>
                                    Close personal contact, such as touching or shaking hands
                                </li>
                                <li>
                                    <i class="mdi mdi-check"></i>
                                    Touching something with the virus on it, then touching your eyes, nose or mouth
                                    before washing your hands
                                </li>
                            </ul>

                            <p>These viruses are not known to spread through
                                ventilation systems or through water.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="prevention section-padding bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="section-title text-center">
                            <h5>How do we prevent Covid-19?</h5>
                            <h2>PREVENTION OF CORONAVIRUS</h2>
                            <p>The best way to prevent the spread
                                of infections is to:</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="have-symptom-content">
                            <span><img src="./images/icons/wash-hand.png" alt=""></span>
                            <h4>Wash your hands</h4>
                            <p>Wash your hands often with soap and water for at least 20 seconds</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="have-symptom-content">
                            <span><img src="./images/icons/face.png" alt=""></span>
                            <h4>Avoid Touching</h4>
                            <p> Avoid touching your eyes, nose or mouth,especially with unwashed hands</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="have-symptom-content">
                            <span><img src="./images/icons/avoid.png" alt=""></span>
                            <h4>avoid close </h4>
                            <p> Avoid close contact with people who are sick</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="have-symptom-content">
                            <span><img src="./images/icons/mouth-tissue.png" alt=""></span>
                            <h4>cover your mouth</h4>
                            <p> Cover your mouth and nose with your arm or tissues to reduce the spread of germs</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="have-symptom-content">
                            <span><img src="./images/icons/trash.png" alt=""></span>
                            <h4>Use Dustbin</h4>
                            <p> Immediately dispose of any tissues you have used into the garbage as soon as possible
                                and wash your hands afterward</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="have-symptom-content">
                            <span><img src="./images/icons/soap.png" alt=""></span>
                            <h4>clean and disinfect</h4>
                            <p> Clean and disinfect frequently touched
                                objects and surfaces, such as toys,
                                electronic devices and doorknobs</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="have-symptom-content">
                            <span><img src="./images/icons/home2.png" alt=""></span>
                            <h4>stay home</h4>
                            <p> Stay home if you are sick to avoid
                                spreading illness to others</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="hand-wash section-padding">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-xl-6">
                        <div class="section-title">
                            <h5>Follow the washing steps</h5>
                            <h2>WASH YOUR HANDS MIN 20 Second</h2>
                            <p>The best way to prevent the spread
                                of infections is to:</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="hands-wash-text">

                            <span><img src="./images/wash-hand/11.png" alt=""></span>
                            <div class="circle">1</div>

                            <h4>Wet hands with warm water</h4>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="hands-wash-text">

                            <span><img src="./images/wash-hand/12.png" alt=""></span>
                            <div class="circle">2</div>

                            <h4>Apply soap</h4>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="hands-wash-text">

                            <span><img src="./images/wash-hand/13.png" alt=""></span>
                            <div class="circle">3</div>

                            <h4>20
                                seconds, make
                                sure to wash:
                            </h4>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="hands-wash-text">

                            <span><img src="./images/wash-hand/11.png" alt=""></span>
                            <div class="circle">4</div>

                            <h4>Rinse well </h4>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="hands-wash-text">

                            <span><img src="./images/wash-hand/14.png" alt=""></span>
                            <div class="circle">5</div>

                            <h4>Dry hands well
                                with paper towel </h4>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="hands-wash-text">

                            <span><img src="./images/wash-hand/15.png" alt=""></span>
                            <div class="circle">6</div>

                            <h4>Turn off tap using
                                paper towel </h4>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="hands-wash-text">
                            <span><img src="./images/wash-hand/16.png" alt=""></span>
                            <div class="circle">7</div>
                            <h4>palm and back
                                of each hand</h4>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="hands-wash-text">
                            <span><img src="./images/wash-hand/17.png" alt=""></span>
                            <div class="circle">8</div>
                            <h4>between fingers</h4>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="hands-wash-text">
                            <span><img src="./images/wash-hand/18.png" alt=""></span>
                            <div class="circle">9</div>
                            <h4>under nails</h4>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="hands-wash-text">
                            <span><img src="./images/wash-hand/10.png" alt=""></span>
                            <div class="circle">10</div>
                            <h4>thumbs</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        

        <div class="have-symptom section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="section-title text-center">
                            <h5>If you feel</h5>
                            <h2>HAVE SYMPTOMS of Covid-19</h2>
                            <p>If you have SYMPTOMS of COVID-19
                                — fever, cough, or difficulty breathing:</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="have-symptom-content">
                            <img src="./images/icons/home.png" alt="" width="100">
                            <h4>Stay home</h4>
                            <p>stay home to avoid spreading it to others
                                — if you live with others, stay in a
                                separate room or keep a 2-metre
                                distance</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="have-symptom-content">
                            <img src="./images/icons/call.png" alt="" width="100">
                            <h4>Call ahead</h4>
                            <p> call ahead before you visit a health care
                                professional or call your local public
                                health authority
                                — tell them your symptoms and follow
                                their instructions</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="have-symptom-content">
                            <img src="./images/icons/ambulance.png" alt="" width="100">
                            <h4>Emergency Call</h4>
                            <p> if you need immediate medical attention,
                                call 911 — tell them your symptoms and follow
                                their instructions</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<div class="cta section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="cta-content">
                            <h2>FOR MORE INFORMATION ON CORONAVIRUS</h2>
                            <div class="row justify-content-center">
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="cta-call">
                                        <span><i class="mdi mdi-phone"></i></span>
                                        +1234567890
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="cta-call">
                                        <span><i class="mdi mdi-web"></i></span>
                                        <a href="javascript:void(0)">
                                            www.example.com
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bottom section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-3 col-sm-8">
                        <div class="bottom-logo">
                            <img class="pb-3" src="./images/logo-white.png" alt="">

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-4">
                        <div class="bottom-widget">
                            <h4 class="widget-title">QUICK LINK</h4>
                            <ul>
                                <li><a href="javascript:void(0)">Prevention</a></li>
                                <li><a href="javascript:void(0)">Qurantine</a></li>
                                <li><a href="javascript:void(0)">About</a></li>
                                <li><a href="javascript:void(0)">Help</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4">
                        <div class="bottom-widget">
                            <h4 class="widget-title">Important LINK</h4>
                            <ul>
                                <li><a href="javascript:void(0)">Hand Wash</a></li>
                                <li><a href="javascript:void(0)">Social Distance</a></li>
                                <li><a href="javascript:void(0)">Isolate</a></li>
                                <li><a href="javascript:void(0)">Difference</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-8">
                        <div class="bottom-widget">
                            <h4 class="widget-title">Helpful LINK</h4>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <ul>
                                        <li><a href="javascript:void(0)">Preparation</a></li>
                                        <li><a href="javascript:void(0)">Clean</a></li>
                                        <li><a href="javascript:void(0)">WHO Website</a></li>
                                        <li><a href="javascript:void(0)">CDC Website</a></li>
                                    </ul>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <ul>
                                        <li><a href="javascript:void(0)">Harvard Health</a></li>
                                        <li><a href="javascript:void(0)">NHS Website</a></li>
                                        <li><a href="javascript:void(0)">XMR to BTC</a></li>
                                        <li><a href="javascript:void(0)">ETC to DASH</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="copyright">
                            <p>© Copyright  <?php echo date("Y"); ?> <a href="<?php echo $actual_link; ?>">Covid Project PH</a> I All Rights Reserved</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="footer-social">
                            <ul>
                                <li><a href="https://facebook.com/IamPseudoX"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/jllegaspi/"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UCW-erjgWL_2iBtHaexOVaBg"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <script src="js/global.js"></script>
    <script src="vendorx/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendorx/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="js/plugins/owl-carousel-init.js"></script>
	<script src="vendorx/magnific-popup/magnific-popup.js"></script>
    <script src="js/scripts.js"></script>
    <script src="vendorx/particles/particles.js"></script>
    <script src="vendorx/particles/particles-app.js"></script>
</body>

</html>