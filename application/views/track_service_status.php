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
						<h3 class="panel-title" style="color:black;display:inline;font-size:25px; font-weight: 900;"><a href="/<?php echo $prefix; ?>/home">KSM.com</a></h3>
						<!--Main menu section-->
						<div class="dropdown pull-right" style="display:inline-block;">
							<!--Home Link-->
							<a class="btn btn-link btn-xs dropdown-toggle" href="/<?php echo $prefix; ?>/home">Home </a>
							<!--Products Drop Down List-->
							<div class="dropdown" style="display:inline-block;">
								<button class="btn btn-link btn-xs dropdown-toggle" type="button" data-toggle="dropdown">Products <span class="caret"></span></button>
								<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
									<li role="presentation"><a role="menuitem" tabindex="-1" href="/<?php echo $prefix; ?>/products/show/1"><img src="/<?php echo $prefix; ?>/assets/img/ducati.jpg" class="mnu-logo"/> DUCATI</a></li>
									<li role="presentation" class="divider"></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="/<?php echo $prefix; ?>/products/show/2"><img src="/<?php echo $prefix; ?>/assets/img/honda.jpg" class="mnu-logo"/> HONDA</a></li>
									<li role="presentation" class="divider"></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="/<?php echo $prefix; ?>/products/show/3"><img src="/<?php echo $prefix; ?>/assets/img/ktm.jpg" class="mnu-logo"/> KTM</a></li>
									<li role="presentation" class="divider"></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="/<?php echo $prefix; ?>/products/show/4"><img src="/<?php echo $prefix; ?>/assets/img/yamaha.jpg" class="mnu-logo yamaha_logo"/> YAMAHA</a></li>
								</ul>
							</div>
							<!--Service Link-->
							<a class="btn btn-link btn-xs dropdown-toggle" href="/<?php echo $prefix; ?>/service">Service </a>
							<!--Spare Parts Drop Down List-->
							<div class="dropdown" style="display:inline-block;">
								<button class="btn btn-link btn-xs dropdown-toggle" type="button" data-toggle="dropdown">Spare-parts <span class="caret"></span></button>
								<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
									<li role="presentation"><a role="menuitem" tabindex="-1" href="/<?php echo $prefix; ?>/spare_parts/show/1">REGULAR/<br>PERFORMANCE BOOSTER</a></li>
									<li role="presentation" class="divider"></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="/<?php echo $prefix; ?>/spare_parts/show/2">RIDING GEARS</a></li>
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
										<li role="presentation"><a role="menuitem" tabindex="-1" ><input type="text" name="identity" placeholder="Registered Email" class="form-control input-sm" /></a></li>
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
									<li role="presentation"><a href="http://localhost/ecom/auth/logout" role="menuitem" tabindex="-1" >LOGOUT</a></li>
									<li role="presentation" class="divider"></li>
									<form action="/<?php echo $prefix; ?>/service/get_service_status" method="post">
										<li role="presentation"><a role="menuitem" tabindex="-1" ><input type="text" name="id" placeholder="Order ID" class="form-control input-sm" /></a></li>
										<li role="presentation"><a role="menuitem" tabindex="-1" ><input type="submit"  class="btn btn-embossed btn-primary btn-submit" value="Track Your Service"></input></a></li>
									</form>								</ul>
							</div>
							<?php } ?>
							<!--Cart option if elements are there in cart-->
							<?php
								if($this->cart->total_items() > 0)
								{?>
								<a href="/<?php echo $prefix; ?>/cart_details" class="btn btn-link btn-xs"><?php echo 'Cart ('.$this->cart->total_items().')';?></a>
								<a class="btn btn-embossed btn-primary" href="/<?php echo $prefix; ?>/cart_details/update_stock">CHECKOUT</a>
							<?php
								}?>
						</div>
					</div>
					<!--Body Panel-->
					<div class="panel-body">
						<h4>Dear <?php echo $track_service_status[0]['first_name']?>,<br/>the service request of your vehicle: <?php echo $track_service_status[0]['model']?><br/> received at <?php echo $track_service_status[0]['t_date']?><br/> bearing registration no.:<?php echo $track_service_status[0]['reg_no']?> is</h4><h3> <?php echo $track_service_status[0]['service_status']?></h3> 
					</div>
					<!--Footer Panel-->
					<div class="panel-footer">
						<div class="dropdown" style="display:inline-block;">
							<!--Home Link-->
							<a class="btn btn-link btn-xs dropdown-toggle" href="home">Home </a>
							<!--Products Drop Down List-->
							<div class="dropdown dropup" style="display:inline-block;">
								<button class="btn btn-link btn-xs dropdown-toggle" type="button" data-toggle="dropdown">Products <span class="caret"></span></button>
								<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
									<li role="presentation"><a role="menuitem" tabindex="-1" href="/<?php echo $prefix; ?>/products/show/1"><img src="/<?php echo $prefix; ?>/assets/img/ducati.jpg" class="mnu-logo"/> DUCATI</a></li>
									<li role="presentation" class="divider"></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="/<?php echo $prefix; ?>/products/show/2"><img src="/<?php echo $prefix; ?>/assets/img/honda.jpg" class="mnu-logo"/> HONDA</a></li>
									<li role="presentation" class="divider"></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="/<?php echo $prefix; ?>/products/show/3"><img src="/<?php echo $prefix; ?>/assets/img/ktm.jpg" class="mnu-logo"/> KTM</a></li>
									<li role="presentation" class="divider"></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="/<?php echo $prefix; ?>/products/show/4"><img src="/<?php echo $prefix; ?>/assets/img/yamaha.jpg" class="mnu-logo yamaha_logo"/> YAMAHA</a></li>
								</ul>
							</div>
							<!--Service Link-->
							<a class="btn btn-link btn-xs dropdown-toggle" href="/<?php echo $prefix; ?>/service">Service </a>
							<!--Spare Parts Drop Down List-->
							<div class="dropdown" style="display:inline-block;">
								<button class="btn btn-link btn-xs dropdown-toggle" type="button" data-toggle="dropdown">Spare-parts <span class="caret"></span></button>
								<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
									<li role="presentation"><a role="menuitem" tabindex="-1" href="/<?php echo $prefix; ?>/spare_parts/show/1">REGULAR/<br>PERFORMANCE BOOSTER</a></li>
									<li role="presentation" class="divider"></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="/<?php echo $prefix; ?>/spare_parts/show/2">RIDING GEARS</a></li>
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
										<li role="presentation"><a role="menuitem" tabindex="-1" ><input type="text" placeholder="Registered Email" class="form-control input-sm" /></a></li>
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
									<li role="presentation"><a href="http://localhost/ecom/auth/logout" role="menuitem" tabindex="-1" >LOGOUT</a></li>
									<li role="presentation" class="divider"></li>
									<form action="/<?php echo $prefix; ?>/service/get_service_status" method="post">
										<li role="presentation"><a role="menuitem" tabindex="-1" ><input type="text" name="id" placeholder="Order ID" class="form-control input-sm" /></a></li>
										<li role="presentation"><a role="menuitem" tabindex="-1" ><input type="submit"  class="btn btn-embossed btn-primary btn-submit" value="Track Your Service"></input></a></li>
									</form>
								</ul>
							</div>
							<?php } ?>
							<!--Cart option if elements are there in cart-->
							<?php
								if($this->cart->total_items() > 0)
								{?>
								<a href="/<?php echo $prefix; ?>/cart_details" class="btn btn-link btn-xs"><?php echo 'Cart ('.$this->cart->total_items().')';?></a>
								<a class="btn btn-embossed btn-primary" href="/<?php echo $prefix; ?>/cart_details/update_stock">CHECKOUT</a>
							<?php
								}?>
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