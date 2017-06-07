<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <link rel="shortcut icon" type="image/png" href="http://i.imgur.com/ip1ocDM.png" />
    
	<link rel="stylesheet" type="text/css" href="./style.css">
    
    <script src="./javascrypt.js"></script>
    <title>Application Open Cloud Day</title>

</head>
<body>
<!-- Main container -->
<div class="page-container">
    
<!-- bloc-0 -->
<div class="bloc bloc-fill-screen bg-header-listing-tech-all-products-2000x730 bgc-white l-bloc" id="bloc-0">
	<div class="container fill-bloc-top-edge">
		<nav class="navbar row">
			<div class="navbar-header">
				<img class="img-responsive" src="https://www.redhat.com/profiles/rh/themes/redhatdotcom/img/logo.png" />
				<button id="nav-toggle" type="button" class="ui-navbar-toggle navbar-toggle" data-toggle="collapse" data-target=".navbar-1">
					<span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse navbar-1">
				<div class="row">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-12">
								<div class="row">
									<div class="col-sm-12">
										<div class="row">
											<div class="col-sm-12">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1 class="text-center hero-bloc-text">
					Red Hat Open Cloud Day<br /><br />
				</h1>
				<div class="text-center">
					<a onclick="scrollToTarget('#bloc-1')" class="btn-wire btn btn-xl fadeInUp animDelay02 wire-btn-c-2 v animated btn_color_m"><span class="et-icon-refresh icon-spacer btn_color_m"></span>Analyser le service web</a>
				</div>
			</div>
		</div>
	</div>
	<div class="container fill-bloc-bottom-edge">
		<div class="row">
			<div class="col-sm-12">
			</div>
		</div>
	</div>
</div>
<!-- bloc-0 END -->

<!-- bloc-1 -->
<div class="bloc bgc-white l-bloc" id="bloc-1">
	<div class="container bloc-lg">
		<div class="row fadeIn animDelay06 animated">
			<div class="col-sm-12">
				<span class="li_world pull-left icon-lg"></span>
				<h3 class="mg-md text-center ">
					Le service apache fonctionne sur:<br />{{ inventory_hostname }}<br /><br />
				</h3>
			</div>
		</div>
		<div class="row voffset fadeIn animDelay1 animated">
			<div class="col-sm-12">
				<span class="li_data pull-left icon-lg"></span>
				<h3 class="mg-md  text-center">
					Le service mySQL fonctione sur:<br />
						<?php{% for host in groups['db'] %}
              				'{{ hostvars[host]['inventory_hostname'] }}'?>
              				<br>
        				<?php{% endfor %}?>
				</h3>
			</div>
		</div>
		<div class="row voffset fadeIn animDelay1 animated">
			<div class="col-sm-12">
				<h3 class="mg-md  text-center">
					La liste des bases de données découvertes:<br />
				</h3>
			</div>
			<?php
				{% for host in groups['db'] %}
                	$link = mysqli_connect('{{ hostvars[host]['inventory_hostname'] }}', '{{ hostvars[host].dbuser }}', '{{ hostvars[host].dbpass }}') or die(mysqli_connect_error($link));
		        {% endfor %}
		        $res = mysqli_query($link, "SHOW DATABASES;");
		        while ($row = mysqli_fetch_assoc($res)) {?>
	                <div class="col-sm-12">
	                    <h4 class="mg-md  text-center"><?php
	                        echo $row['Database'] . "<br />\n";?>
	                    </h4>
	            	</div>
                <?php}
		    ?>
		</div>
	</div>
</div>
<!-- bloc-1 END -->

<!-- ScrollToTop Button -->
<a class="bloc-button btn btn-d scrollToTop" onclick="scrollToTarget('1')"><span class="fa fa-chevron-up"></span></a>
<!-- ScrollToTop Button END-->

</div>
<!-- Main container END -->
    

</body>
    
<!-- Google Analytics -->
 
<!-- Google Analytics END -->

</html>
