<?php
// Made by Monelite - remake - v0.1

// Configuration
$ip = "193.203.39.36:7777";
$dns = "RUBY.NEPHRITE.RO";
$title = "MoneHood";
$logo = "https://i.imgur.com/fnorWRT.png";
$url = "https://monelite.cf/brotherhood/";
$headertitle = "MoneHood Community";
$headerdesc = "Everybody expects a little competition between brothers";
$forum_url = "http://forum.b-hood.ro/";
$panel_url = "http://panel.b-hood.ro/";

// Server System
$api = file_get_contents("http://api.gametracker.rs/demo/json/server_info/$ip/");
$data = json_decode($api, true);
if($data['apiError'] == 1) die("We don't found your server in gametracker database");

// auto copyright
$since = 2021; 
$currentYear = date('Y');
if ($since != $currentYear) {
    $since =  $since.'-'.$currentYear;
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?= $url ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="<?= $url ?>css/freelancer.min.css?v=0.1" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  </head>

  <body id="page-top">
 
<style>::-webkit-scrollbar{width: 0px;}::-webkit-scrollbar-track{background: #1a1a1a;}::-webkit-scrollbar-thumb{background: #1a1a1a;}::-webkit-scrollbar-thumb:hover {background: #2a2a2a;}</style>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><?= $title ?></a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#servers">SA-MP SERVER</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?= $forum_url ?>">Forum</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?= $panel_url ?>">PANEL</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead bg-primary text-white text-center">
      <div class="container">
        <img class="img-fluid mb-5 d-block mx-auto" src="<?= $logo ?>" alt="">
        <h1 class="text-uppercase mb-0"><?= $headertitle ?></h1>
        <hr class="star-light">
        <h2 class="font-weight-light mb-0"><?= $headerdesc ?></h2>
      </div>
    </header>


    <!-- Portfolio Grid Section -->
    <section class="portfolio" id="servers">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">SA-MP SERVER</h2>
        <hr class="star-light mb-5">
        <div class="row">
          <div class="col-md-3"></div><div class="col-md-6">
            <section class="special box">
                <i class="icon fa fa-user major" style="background:<?php if($data['status'] == 0) { ?>red<?php } else { ?>#248000<?php } ?>"></i>
                <h3><?= $dns ?></h3>
                <hr style="Background-color:#2a2a2a;">
                <h4><?php if($data['status'] == 0) { ?>Offline<?php } else { ?><?= $data['players']?>/<?= $data['playersmax'] ?><?php } ?></h4>
			</section>
		  </div>
          </div>
        </div>
    </section>

    <div class="copyright py-4 text-center text-white">
      <div class="container">
        <small>Copyright &copy; <?= $title ?> <?= $since ?></small>
      </div>
    </div>
	
	<div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>
	

    <!-- JavaScript -->
    <script src="<?= $url ?>js/bootstrap.bundle.min.js?v=0.1"></script>
    <script src="<?= $url ?>js/jquery.easing.min.js?v=0.1"></script>
    <script src="<?= $url ?>js/freelancer.min.js?v=0.1"></script>
    
  </body>

</html>
