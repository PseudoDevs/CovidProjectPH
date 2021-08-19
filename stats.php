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

    <div id="main-wrapper" class="stats-area">

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

        <div class="page-title section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page_title-content">
                            <p>COVID-19</p>
                            <h3>Covid-19 World Wide Stats</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="prevention section-padding bg-white" id="CoronaWorldMapStat">
            <div class="container">
                <div class="d-flex justify-content-between country-stat align-items-center">
					<div class="country-select-box">
						<!--<select class="country-picker">
							<option value="US">USA</option>
							<option value="ES">Spain</option>
							<option value="IT">Italy</option>
						</select>-->
					</div>
					<div class="updateOn" id="CoronaWorldMapStatUpdateOn"></div>
				</div>
				<div class="row">	
					<div class="col-lg-6 col-md-12">
						<div class="row">
							<!--<select class="selectpicker countrypicker" data-live-search="true" data-default="United States" data-flag="true"></select>
							<img src="https://corona.lmao.ninja/assets/img/flags/us.png" width="20">
							-->
							<div class="col-lg-12" id="CoronaUpdateByCountryBox"></div>
						</div>
					</div>
					<div class="col-lg-6 col-md-12" id="VMAP_CoronaUpdates">
						<div id="loader" style="display: flex; justify-content: center;">
							  <div class="spinner-grow text-muted mt-3"></div>
							  <div class="spinner-grow text-primary mt-3"></div>
							  <div class="spinner-grow text-success mt-3"></div>
							  <div class="spinner-grow text-info mt-3"></div>
							  <div class="spinner-grow text-warning mt-3"></div>
							  <div class="spinner-grow text-danger mt-3"></div>
							  <div class="spinner-grow text-secondary mt-3"></div>
							  <div class="spinner-grow text-dark mt-3"></div>
							  <div class="spinner-grow text-light mt-3"></div>
						</div>
						<!-- Modal -->
						<div class="modal fade stats-modal" id="alert-modal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
						  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
							<div class="modal-content">
							  <div class="modal-header">
								<h5 class="modal-title" id="modal-title"></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								  <span aria-hidden="true" id="modal-body">&times;</span>
								</button>
							  </div>
							  <div class="modal-body">
								<div class="container-fluid">
								  <div class="row">
									<div class="col-md-12">
									  <div id="region-stat-chart-container">
										<canvas id="region-stat-chart"></canvas>
									  </div>
									</div>
								  </div>
								</div>
								<div class="container-fluid stats-box">
								  <div class="row">
									<div class="col-md-6">
									  <ul class="list-group">
										<li class="list-group-item">
										  <h6>New</h6>
										</li>
										<li
										  class="list-group-item list-group-item-warning"
										  id="region-new-confirmed"
										></li>
										<li
										  class="list-group-item list-group-item-danger"
										  id="region-new-deaths"
										></li>
										<li
										  class="list-group-item list-group-item-success"
										  id="region-new-recovered"
										></li>
									  </ul>
									</div>
									<div class="col-md-6">
									  <ul class="list-group">
										<li class="list-group-item">
										  <h6>Total</h6>
										</li>
										<li
										  class="list-group-item list-group-item-warning"
										  id="region-total-confirmed"
										></li>
										<li
										  class="list-group-item list-group-item-danger"
										  id="region-total-deaths"
										></li>
										<li
										  class="list-group-item list-group-item-success"
										  id="region-total-recovered"
										></li>
									  </ul>
									</div>
								  </div>
								</div>
							  </div>
							</div>
						  </div>
						</div>
					</div>
                </div>
				<div id="globalStateRow" class="all-country-stat d-flex">
					
				</div>
            </div>
        </div>

		<div class="cta section-padding bg-light">
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
                                        <a href="#">
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
                                <li><a href="#">Prevention</a></li>
                                <li><a href="#">Qurantine</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Help</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4">
                        <div class="bottom-widget">
                            <h4 class="widget-title">Important LINK</h4>
                            <ul>
                                <li><a href="#">Hand Wash</a></li>
                                <li><a href="#">Social Distance</a></li>
                                <li><a href="#">Isolate</a></li>
                                <li><a href="#">Difference</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-8">
                        <div class="bottom-widget">
                            <h4 class="widget-title">Helpful LINK</h4>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <ul>
                                        <li><a href="#">Preparation</a></li>
                                        <li><a href="#">Clean</a></li>
                                        <li><a href="#">WHO Website</a></li>
                                        <li><a href="#">CDC Website</a></li>
                                    </ul>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <ul>
                                        <li><a href="#">Harvard Health</a></li>
                                        <li><a href="#">NHS Website</a></li>
                                        <li><a href="#">XMR to BTC</a></li>
                                        <li><a href="#">ETC to DASH</a></li>
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
                            <p>© Copyright 2020 <a href="#">Corella</a> I All Rights Reserved</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="footer-social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>



    <script src="js/global.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
    <script src="vendor/bootstrap-select/countrypicker.js"></script>-->
	<script src="vendor/vmap/jquery.vmap.js"></script>
    <script src="vendor/vmap/jquery.vmap.world.js"></script>
    <script src="vendor/vmap/axios.min.js"></script>
    <script src="vendor/vmap/chart.js"></script>
    <script src="vendor/vmap/utils.js"></script>
    <script src="vendor/vmap/vmap_main.js"></script>
    <script src="vendor/datatables/datatables.min.js"></script>
	<script src="js/scripts.js"></script>
	<script>
		/*
		var config = {
			type: 'doughnut',
			data: {
				datasets: [{
					data: [
						1194875,
						69011,
						178934,
						946930,
					],
					backgroundColor: [
						window.chartColors.red,
						window.chartColors.orange,
						window.chartColors.yellow,
						window.chartColors.green,
					],
					label: 'Dataset 1'
				}],
				labels: [
					'Total Cases',
					'Total Deaths',
					'Total Recovered',
					'Total Active',
				]
			},
			options: {
				responsive: true
			}
		};

		window.onload = function() {
			var ctx = document.getElementById('chart-area').getContext('2d');
			window.myPie = new Chart(ctx, config);
		};
		*/
	</script>
</body>

</html>