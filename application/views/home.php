<?php
	$prefix = $this->config->item('URI_Prefix');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KSM.com</title>
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
						<h3 class="panel-title" style="color:black;display:inline;font-size:25px; font-weight:900;"><a href="home">KSM.com</a></h3>
						<!--Main menu section-->
						<div class="dropdown pull-right" style="display:inline-block;">
							<!--Home Link-->
							<a class="btn btn-link btn-xs dropdown-toggle" href="home">Home </a>
							<!--Products Drop Down List-->
							<div class="dropdown" style="display:inline-block;">
								<button class="btn btn-link btn-xs dropdown-toggle" type="button" data-toggle="dropdown">Products <span class="caret"></span></button>
								<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
									<?php
										foreach($products as $product){
											echo '<li role="presentation"><a role="menuitem" tabindex="-1" href="products/show/'.$product['id'].'"><img src="/'.$prefix.$product['brand_logo'].'" class="mnu-logo"/> '.$product['brand_name'].'</a></li>';
										}
									?>
								</ul>
							</div>
							<!--Service Link-->
							<a class="btn btn-link btn-xs dropdown-toggle" href="service">Service </a>
							<!--Spare Parts Drop Down List-->
							<div class="dropdown" style="display:inline-block;">
								<button class="btn btn-link btn-xs dropdown-toggle" type="button" data-toggle="dropdown">Spare-parts <span class="caret"></span></button>
								<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
									<?php
										foreach($spare_parts as $sp){
											echo '<li role="presentation"><a role="menuitem" tabindex="-1" href="spare_parts/show/'.$sp['id'].'">'.$sp['spare_part_type'].'</a></li>';
										}
									?>
								</ul>
							</div>
							<!--Sign In Drop Down Form-->
							<?php
								if($session_status == 'GUEST_SESSION')
								{
							?>
							<div class="dropdown" style="display:inline-block;">
								<button class="btn btn-link btn-xs dropdown-toggle" type="button" data-toggle="dropdown">Sign In <span class="caret"></span></button>
								<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
									<form action="http://localhost/ecom/auth/login" method="post" accept-charset="utf-8">
										<li role="presentation"><a role="menuitem" tabindex="-1" ><input type="text" name="identity" placeholder="Email" class="form-control input-sm" /></a></li>
										<li role="presentation" class="divider"></li>
										<li role="presentation"><a role="menuitem" tabindex="-1" ><input type="password" name="password" placeholder="Password" class="form-control input-sm" /></a></li>
										<li role="presentation" class="divider"></li>
										<li role="presentation"><a role="menuitem" tabindex="-1" ><input type="submit"  class="btn btn-embossed btn-primary btn-submit"></input></a></li>
									</form>
								</ul>
							</div>
							<?php
								}
								else
								{
							?>
							<div class="dropdown" style="display:inline-block;">
								<button class="btn btn-link btn-xs dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $this->session->userdata('user_first_name'); ?> <span class="caret"></span></button>
								<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
									<form action="http://localhost/ecom/auth/logout" method="post" accept-charset="utf-8">
										<li role="presentation"><a role="menuitem" tabindex="-1" ><input type="submit" class="btn btn-embossed btn-primary btn-submit" value="LogOut"></input></a></li>
									</form>
								</ul>
							</div>
							<?php } ?>
							<!--Cart option if elements are there in cart-->
							<?php
								if($this->cart->total_items() > 0)
								{
							?>
							<a href="" class="btn btn-link btn-xs " type="button" data-toggle="dropdown"><?php echo cart($this->cart->total_items())?> <span class="caret"></span></a>
							<?php
								}?>
								
						</div>
					</div>
					<!--Site body-->
					<div class="panel-body">
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
								<form action="http://localhost/ecom/auth/create_user" method="post" accept-charset="utf-8">
									<label>FIRST NAME<input type="text" placeholder="First Name" class="form-control" name="first_name" value="" id="first_name"/></label>
									<label>LAST NAME<input type="text" placeholder="Last Name" class="form-control" name="last_name" value="" id="last_name"/></label>
									<input type="hidden" name="company" value="ksm.com" id="company"  />
									<label>EMAIL<input type="text" placeholder="Email" class="form-control" name="email" value="" id="email"/></label>
									<label>CONTACT NO.<input type="text" placeholder="Contact No." class="form-control" name="phone" value="" id="phone"/></label>
									<label>PASSWORD<input type="password" placeholder="Password" class="form-control" name="password" value="" id="password"/></label>
									<label>CONFIRM<input type="password" placeholder="Confirm password" class="form-control" name="password_confirm" value="" id="password_confirm"/></label>
									<input type="submit" class="btn btn-embossed btn-primary" value="REGISTER!"></input>
									<input type="reset" class="btn btn-embossed btn-inverse" value="CANCEL"></input>
								</form>
							</div>
						</div>
					</div
					<!--Footer Panel-->
					<div class="panel-footer">
						<div class="dropdown" style="display:inline-block;">
							<!--Home Link-->
							<a class="btn btn-link btn-xs dropdown-toggle" href="home">Home </a>
							<!--Products Drop Down List-->
							<div class="dropdown dropup" style="display:inline-block;">
								<button class="btn btn-link btn-xs dropdown-toggle" type="button" data-toggle="dropdown">Products <span class="caret"></span></button>
								<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
									<?php
										foreach($products as $product){
											echo '<li role="presentation"><a role="menuitem" tabindex="-1" href="products/show/'.$product['id'].'"><img src="/'.$prefix.$product['brand_logo'].'" class="mnu-logo"/> '.$product['brand_name'].'</a></li>';
										}
									?>
								</ul>
							</div>
							<!--Service Link-->
							<a class="btn btn-link btn-xs dropdown-toggle" href="service">Service </a>
							<!--Spare Parts Drop Down List-->
							<div class="dropdown dropup" style="display:inline-block;">
								<button class="btn btn-link btn-xs dropdown-toggle" type="button" data-toggle="dropdown">Spare-parts <span class="caret"></span></button>
								<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
									<?php
										foreach($spare_parts as $sp){
											echo '<li role="presentation"><a role="menuitem" tabindex="-1" href="spare_parts/show/'.$sp['id'].'">'.$sp['spare_part_type'].'</a></li>';
										}
									?>
								</ul>
							</div>
							<!--Sign In Drop Down Form-->
							<?php
								if($session_status == 'GUEST_SESSION')
								{
							?>
							<div class="dropdown dropup" style="display:inline-block;">
								<button class="btn btn-link btn-xs dropdown-toggle" type="button" data-toggle="dropdown">Sign In <span class="caret"></span></button>
								<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
									<form action="" method="post">
										<li role="presentation"><a role="menuitem" tabindex="-1" ><input type="text" placeholder="Email" class="form-control input-sm" /></a></li>
										<li role="presentation" class="divider"></li>
										<li role="presentation"><a role="menuitem" tabindex="-1" ><input type="password" placeholder="Password" class="form-control input-sm" /></a></li>
										<li role="presentation" class="divider"></li>
										<li role="presentation"><a role="menuitem" tabindex="-1" ><input type="submit" class="btn btn-embossed btn-primary btn-submit"></input></a></li>
									</form>
								</ul>
							</div>
							<?php
								}
								else
								{
							?>
							<div class="dropdown dropup" style="display:inline-block;">
								<button class="btn btn-link btn-xs dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $this->session->userdata('user_first_name'); ?> <span class="caret"></span></button>
								<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
									<form action="http://localhost/ecom/auth/logout" method="post" accept-charset="utf-8">
										<li role="presentation"><a role="menuitem" tabindex="-1" ><input type="submit" class="btn btn-embossed btn-primary btn-submit" value="LogOut"></input></a></li>
									</form>
								</ul>
							</div>
							<?php } ?>
					</div>
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