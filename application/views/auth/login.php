<?php
	$prefix = $this->config->item('URI_Prefix');
?>
<html>
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
		<!--Sign in-->
		<div>
			<h4 style="color:white;">Please Sign In to Enroll for Service</h4>
			<form action="http://localhost/ecom/auth/login" method="post" accept-charset="utf-8">
				<label><span style="color:white;">Email ID:</span><input type="text" name="identity" placeholder="Registered Email" class="form-control input-sm" /></label>
				<label><span style="color:white;">Password:</span><input type="password" name="password" placeholder="Password" class="form-control input-sm" /></label>
				<input type="submit"  class="btn btn-embossed btn-primary btn-submit"/>
			</form>
		</div>
	<p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
	</body>
</html>