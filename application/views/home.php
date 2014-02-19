<?php
	$prefix = $this->config->item('prefix');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sample 3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="../../flat-ui/images/favicon.ico">

    <link rel="stylesheet" href="/<?php echo $prefix; ?>/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/<?php echo $prefix; ?>/assets/css/bootstrap-responsive.css">
    <link rel="stylesheet" href="/<?php echo $prefix; ?>/assets/css/flat-ui.css">
    
    <!-- Using only with Flat-UI (free)-->
            <link rel="stylesheet" href="/<?php echo $prefix; ?>/assets/common-files/css/icon-font.css">
        <!-- end -->  
    
    <link rel="stylesheet" href="/<?php echo $prefix; ?>/assets/css/style.css">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../../flat-ui/js/html5shiv.js"></script>
    <![endif]-->
  </head>

  <body>

<!-- header-11 -->
        <header class="header-11">
            <div class="container">
                <div class="navbar span12">
                    <div class="navbar-inner">
                        <button type="button" class="btn btn-navbar"> </button>
                        <a class="brand" href="#"><img src="img/logo@2x.png" width="50" height="50" alt=""> Startup</a>
                        <div class="nav-collapse collapse pull-right">
                            <ul class="nav">
                                <li class="active"><a href="#">HOME</a></li>
                                <li><a href="company">COMPANY</a></li>
                                <li><a href="#">PORTFOLIO</a></li>
                                <li><a href="#">BLOG</a></li>
                                <li><a href="#">CONTACT</a></li>
                            </ul>
                            <form class="navbar-form pull-left">
                                <a class="btn btn-inverse" href="#">SIGN IN</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section class="header-11-sub bg-midnight-blue">
            <div class="background">&nbsp;</div>
            <div class="container">
                <div class="row">
                    <div class="span4">
                        <h3>Features of Startup Framework</h3>
                        <p>
                            You have the design, you have the code. We�ve created the product that will help your startup to look even better.
                        </p>
                        <div class="signup-form">
                            <form>
                                <div class="controls controls-row">
                                    <input class="span4" type="text" placeholder="Your E-mail">
                                </div>
                                <div class="controls controls-row">
                                    <div>
                                        <input type="password" placeholder="Password">
                                    </div>
                                    <div>
                                        <input type="password" placeholder="Confirmation">
                                    </div>
                                </div>
                                <div class="controls controls-row">
                                    <button type="submit" class="btn btn-block btn-info">Sign Up</button>
                                </div>
                            </form>
                        </div>
                        <div class="additional-links">
                            By signin up you agree to <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>
                        </div>
                    </div>
                    <div class="span7 offset1 player-wrapper">
                        <div class="player">
                            <iframe src="http://player.vimeo.com/video/29568236?color=3498db" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                            <!--<iframe src="http://www.youtube.com/embed/BCC7rFxo6QA" allowfullscreen></iframe>-->
                        </div>
                    </div>
                </div>
            </div>
        </section>

<!-- logos -->
    <section class="logos">
      <div class="container">
        <div><img src="img/logos/mashable.png" alt=""></div>
        <div><img src="img/logos/guardian.png" alt=""></div>
        <div><img src="img/logos/forbes.png" alt=""></div>
        <div><img src="img/logos/red-bull.png" alt=""></div>
        <div><img src="img/logos/ny-times.png" alt=""></div>
      </div>
    </section>
    
<!-- price-1 -->
    <section class="price-1">
      <div class="container">
        <h3>Take a look to our Plans</h3>
        <p class="lead">This is a probably the best plans ever born</p>
        <div class="row plans">
          <div class="span4 plan">
          <div class="title">Starter</div>
          <div class="price">19$/month</div>
          <div class="description">
            10,000 messages<br>
            <b>unlimited</b> data<br>
            <b>unlimited</b> users<br>
            first 10 day free
          </div>
          <a class="btn disabled" href="#">Your Current Plan</a>
          </div>
          <div class="span4 plan">
          <div class="title">Professional</div>
          <div class="price">39$/month</div>
          <div class="description">
            10,000 messages<br>
            <b>unlimited</b> data<br>
            <b>unlimited</b> users<br>
            first 30 day free
          </div>
          <a class="btn btn-primary" href="#">Change to this Plan</a>
          <div class="ribbon">NEW</div>
          </div>
          <div class="span4 plan">
          <div class="title">Business</div>
          <div class="price">59$/month</div>
          <div class="description">
            10,000 messages<br>
            <b>unlimited</b> data<br>
            <b>unlimited</b> users<br>
            first 100 day free
          </div>
          <a class="btn btn-primary" href="#">Change to this Plan</a>
          </div>
        </div>
      </div>
    </section>

<!-- content-13  -->
        <section class="content-13 subscribe-form bg-turquoise">
            <div class="container">
                <div class="row">
                    <form>
                        <div class="span8">
                            <input type="text" placeholder="Enter your e-mail" spellcheck="false">
                        </div>
                        <div class="span4">
                            <button class="btn btn-large btn-primary" type="submit">
                                Subscribe now
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

<!-- footer-2 -->
        <footer class="footer-2 bg-midnight-blue">
            <div class="container">
                <nav class="pull-left">
                    <ul>
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="<?php echo $prefix; ?>/company">Showcase</a></li>
                        <li><a href="#">Portfolio</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </nav>
                <div class="social-btns pull-right">
                    <a href="#"><div class="fui-vimeo"> </div><div class="fui-vimeo"> </div></a>
                    <a href="#"><div class="fui-facebook"> </div><div class="fui-facebook"> </div></a>
                    <a href="#"><div class="fui-twitter"> </div><div class="fui-twitter"> </div></a>
                </div>
                <div class="additional-links">
                    Be sure to take a look to our <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>
                </div>
            </div>
        </footer>




    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/<?php echo $prefix; ?>/assets/js/jquery-1.8.3.min.js"></script>
    <script src="/<?php echo $prefix; ?>/assets/js/bootstrap.min.js"></script>
    <!--[if lt IE 8]>
      <script src="/<?php echo $prefix; ?>/assets/js/icon-font-ie7.js"></script>
    <![endif]-->
    <script src="/<?php echo $prefix; ?>/assets/common-files/js/startup-kit.js"></script>
  </body>
</html>
