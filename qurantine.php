<?php

include 'includes/header.php';

?>
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>

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

        <div class="page-title section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page_title-content">
                            <p>COVID-19</p>
                            <h3>What is Qurantine?</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="qurantine section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="section-title text-center">
                            <h2>For the next 14 days:</h2>
                            <p>While outside of canada, you may have come in contact with the virus that causes covid-19
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="qurantine-content">
                            <img src="./images/qurantine/stay-at-home.svg" alt="" width="100">
                            <h4>Self Isolate</h4>
                            <p>Go to the place where you
                                will self-isolate without
                                delay, and self-isolate
                                for 14 days from the date
                                you arrive in Canada. </p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="qurantine-content">
                            <img src="./images/qurantine/distance.svg" alt="" width="100">
                            <h4>Social Distancing</h4>
                            <p>Maintain a 2 metre
                                distance from others
                                (social distancing)
                                at all times.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="qurantine-content">
                            <img src="./images/qurantine/visitor.svg" alt="" width="100">
                            <h4>Do not allow visitors</h4>
                            <p>do not have visitors,
                                especially older
                                adults or those with
                                medical conditions,
                                who are at a higher
                                risk of developing
                                serious illness</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="qurantine-content">
                            <img src="./images/qurantine/soap.svg" alt="" width="100">
                            <h4>wash your hands</h4>
                            <p>wash your hands
                                often with soap and
                                warm water for
                                20 seconds, or use
                                an alcohol-based
                                hand sanitizer if
                                soap and water are
                                not available </p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="qurantine-content">
                            <img src="./images/qurantine/face.svg" alt="" width="100">
                            <h4>Avoid touching</h4>
                            <p>Avoid touching
                                your face. </p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="qurantine-content">
                            <img src="./images/qurantine/fever.svg" alt="" width="100">
                            <h4>Monitor your health</h4>
                            <p>monitor your health
                                for <strong>fever (greater
                                    or equal to 38°C),
                                    cough and difficulty
                                    breathing</strong></p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="qurantine-content">
                            <img src="./images/qurantine/boy.svg" alt="" width="100">
                            <h4>Cover your mouth</h4>
                            <p>cover your mouth
                                and nose with your
                                arm when coughing
                                or sneezing</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="qurantine-content">
                            <img src="./images/qurantine/sprayer.svg" alt="" width="100">
                            <h4>Clean and disinfect</h4>
                            <p>Clean and disinfect
                                surfaces regularly.</p>
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
                                fever until your temperature reaches at least 100 degrees</p>
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

        <div class="if-symptom section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="section-title text-center">
                            <h3>IF YOU START HAVING SYMPTOMS OF COVID-19</h3>
                            <p>persistent cough, shortness of breath, or fever equal to or greater than 38ºC,
                                or signs of fever e.g. shivering, flushed skin, excessive sweating</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="if-symptom-content">
                            <img src="./images/qurantine/distance.svg" alt="" width="100">
                            <h4>Immediately isolate yourself from
                                others in your house</h4>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="if-symptom-content">
                            <img src="./images/qurantine/phone.svg" alt="" width="100">
                            <h4>Contact your public health authority as soon</h4>
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

        <div class="bottom section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-3 col-sm-8">
                        <div class="bottom-logo">
                        <h2 class="text-white"> COVID-19 PROJECT </h2>

<p>Human coronaviruses are common and are
    typically associated with mild illnesses,
    similar to the common cold.</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-4">
                        <div class="bottom-widget">
                            <h4 class="widget-title">QUICK LINK</h4>
                            <ul>
                                <li><a href="prevention.php">Prevention</a></li>
                                <li><a href="about.php">About</a></li>
                            </ul>
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
                        <p>© Copyright  <?php echo date("Y"); ?> <a href="<?php echo $actual_link; ?>">Covid Project PH</a> | John Lester Legaspi</p>
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

    <?php

include 'includes/footer.php';

?>
</body>

</html>