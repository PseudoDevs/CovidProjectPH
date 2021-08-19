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
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
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
                                                    <li class="list-group-item list-group-item-warning" id="region-new-confirmed"></li>
                                                    <li class="list-group-item list-group-item-danger" id="region-new-deaths"></li>
                                                    <li class="list-group-item list-group-item-success" id="region-new-recovered"></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <ul class="list-group">
                                                    <li class="list-group-item">
                                                        <h6>Total</h6>
                                                    </li>
                                                    <li class="list-group-item list-group-item-warning" id="region-total-confirmed"></li>
                                                    <li class="list-group-item list-group-item-danger" id="region-total-deaths"></li>
                                                    <li class="list-group-item list-group-item-success" id="region-total-recovered"></li>
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
                        <p>© Copyright <?php echo date("Y"); ?> <a href="<?php echo $actual_link; ?>">Covid Project PH</a> I All Rights Reserved</p>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
<script src="vendorx/bootstrap-select/countrypicker.js"></script>
<script src="vendorx/vmap/jquery.vmap.js"></script>
<script src="vendorx/vmap/jquery.vmap.world.js"></script>
<script src="vendorx/vmap/axios.min.js"></script>
<script src="vendorx/vmap/chart.js"></script>
<script src="vendorx/vmap/utils.js"></script>
<script src="vendorx/vmap/vmap_main.js"></script>
<script src="vendorx/datatables/datatables.min.js"></script>
<script src="js/scripts.js"></script>
<script>
    
		// var config = {
		// 	type: 'doughnut',
		// 	data: {
		// 		datasets: [{
		// 			data: [
		// 				1194875,
		// 				69011,
		// 				178934,
		// 				946930,
		// 			],
		// 			backgroundColor: [
		// 				window.chartColors.red,
		// 				window.chartColors.orange,
		// 				window.chartColors.yellow,
		// 				window.chartColors.green,
		// 			],
		// 			label: 'Dataset 1'
		// 		}],
		// 		labels: [
		// 			'Total Cases',
		// 			'Total Deaths',
		// 			'Total Recovered',
		// 			'Total Active',
		// 		]
		// 	},
		// 	options: {
		// 		responsive: true
		// 	}
		// };

		// window.onload = function() {
		// 	var ctx = document.getElementById('chart-area').getContext('2d');
		// 	window.myPie = new Chart(ctx, config);
		// };
		
</script>
</body>

</html>