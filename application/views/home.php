<?php
	$prefix = $this->config->item('URI_Prefix');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Process Designer</title>
	<link href="/<?php echo $prefix; ?>/assets/css/jquery-ui.css" rel="stylesheet"/>
	<link href="/<?php echo $prefix; ?>/assets/css/elements.css" rel="stylesheet"/>
    <!-- Bootstrap -->
    <link href="/<?php echo $prefix; ?>/assets/css/bootstrap.css" rel="stylesheet">
	<!--<link href="/<?php echo $prefix; ?>/assets/css/bootstrap-theme.css" rel="stylesheet">-->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<link href="/<?php echo $prefix; ?>/assets/css/style.css" rel="stylesheet">
	<link href="/<?php echo $prefix; ?>/assets/css/flat-ui.css" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
  </head>
  <body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-main">
					<div class="panel-heading">
						<!--Site brand & logo-->
						<h3 class="panel-title" style="color:black;display:inline;font-size:25px; font-weight: 900;">KSM.com</h3>
						<!--Main menu section-->
						<div class="dropdown pull-right" style="display:inline-block;">
							<!--Home Link-->
							<a class="btn btn-link btn-xs dropdown-toggle" href="#">Home </a>
							<!--Products Drop Down List-->
							<div class="dropdown" style="display:inline-block;">
								<button class="btn btn-link btn-xs dropdown-toggle" type="button" data-toggle="dropdown">Products <span class="caret"></span></button>
								<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
									<li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="/<?php echo $prefix; ?>/assets/img/ducati.jpg" class="mnu-logo"/> DUCATI</a></li>
									<li role="presentation" class="divider"></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="/<?php echo $prefix; ?>/assets/img/honda.jpg" class="mnu-logo"/> HONDA</a></li>
									<li role="presentation" class="divider"></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="/<?php echo $prefix; ?>/assets/img/ktm.jpg" class="mnu-logo"/> KTM</a></li>
									<li role="presentation" class="divider"></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="/<?php echo $prefix; ?>/assets/img/yamaha.jpg" class="mnu-logo yamaha_logo"/> YAMAHA</a></li>
								</ul>
							</div>
							<!--Service Link-->
							<a class="btn btn-link btn-xs dropdown-toggle" href="service">Service </a>
							<!--Spare Parts Drop Down List-->
							<div class="dropdown" style="display:inline-block;">
								<button class="btn btn-link btn-xs dropdown-toggle" type="button" data-toggle="dropdown">Spare-parts <span class="caret"></span></button>
								<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
									<li role="presentation"><a role="menuitem" tabindex="-1" href="#">REGULAR</a></li>
									<li role="presentation" class="divider"></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="#">PERFORMANCE BOOSTER</a></li>
									<li role="presentation" class="divider"></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="#">RIDING GEARS</a></li>
								</ul>
							</div>
							<!--Sign In Drop Down Form-->
							<div class="dropdown" style="display:inline-block;">
								<button class="btn btn-link btn-xs dropdown-toggle" type="button" data-toggle="dropdown">Sign In <span class="caret"></span></button>
								<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
									<li role="presentation"><a role="menuitem" tabindex="-1" ><input type="text" placeholder="Email" class="form-control input-sm" /></a></li>
									<li role="presentation" class="divider"></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" ><input type="password" placeholder="Password" class="form-control input-sm" /></a></li>
									<li role="presentation" class="divider"></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" ><input type="submit" class="btn btn-embossed btn-primary btn-submit"></input></a></li>
								</ul>
							</div>
						</div>
					</div>
					<!--Site body-->
					<div class="panel-body">
						<!--Toolbar-->
						<!--<div class="row" style="margin-top: -15px; padding: 3px;background: #dde2e8;">
							<div class="col-lg-12" style="">
								<div class="btn-toolbar" role="toolbar">
									<div class="btn-group">
										<button type="button" class="btn btn-default btn-sm fa-lg"><span class="glyphicon glyphicon-floppy-save"></span></button>
										<button type="button" class="btn btn-default btn-sm fa-lg"><i class="fa fa-folder-open"></i></button>
										<button type="button" class="btn btn-default btn-sm fa-lg"><i class="glyphicon glyphicon-check"></i></button>
									</div>
									<button type="button" class="btn btn-default btn-sm fa-lg"><i class="fa fa-plus-circle" id="addShape"></i></button>
								</div>
							</div>
						</div>-->
						<!--Site Main Pic And Tag Lines-->
						<div class="row">
							<div class="col-lg-9">
								<div class="hero-display">
									<img src="/<?php echo $prefix; ?>/assets/img/hero_sketch.jpg" class="hero-sketch"/>
									<p class="tag-line1">SALES. SERVICE. SPARE-PARTS.</p>
									<p class="tag-line2">One Stop Solution For All Your BIKE'S Need.</p>
								</div>
							</div>
							<!--Sign Up Form-->
							<div class="col-lg-3">
								<p style="font-weight:bold;font-size:20px;">Sign Up!!!</p>
								<label>NAME<input type="text" placeholder="Name" class="form-control" /></label>
								<label>EMAIL<input type="text" placeholder="Email" class="form-control" /></label>
								<label>PASSWORD<input type="password" placeholder="Password" class="form-control" /></label>
								<label>CONFIRM<input type="password" placeholder="Confirm password" class="form-control" /></label>
								<input type="submit" class="btn btn-embossed btn-primary" value="REGISTER!"></input>
								<input type="reset" class="btn btn-embossed btn-inverse" value="CANCEL"></input>
							</div>
						</div>
					</div>
					<div class="panel-footer">Panel footer</div>
				</div>
				
			</div>
		</div>
	</div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/<?php echo $prefix; ?>/assets/js/bootstrap.min.js"></script>
	<script src="/<?php echo $prefix; ?>/assets/js/jquery-ui.js"></script>
	<script src="/<?php echo $prefix; ?>/assets/js/jquery.jsPlumb-1.5.5-min.js"></script>
	<script src="/<?php echo $prefix; ?>/assets/js/app/app.js"></script>
	<script>
		$(function(){
		  // Fix input element click problem
		  $('.dropdown input, .dropdown label').click(function(e) {
			e.stopPropagation();
		  });
		});
	</script>
  </body>
</html>