<?php
session_start();
// require('./php/script/db-param.php');
require('php/class/asset.class.php');
require('php/class/event.class.php');
require('php/class/gallery.class.php');
require('php/class/user.class.php');

?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Matthieu Audemard">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>IPI - Team</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
		<link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
		<link href="assets/css/main.css" rel="stylesheet">
		<link href="assets/css/login.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">IPI<i class="fa fa-trophy"></i>TEAM</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="nav-item<?php if(!isset($_GET['page']) or $_GET['page'] == 'home') echo ' active'; ?>"><a href="?page=home">ACCUEIL</a></li>
            <li class="nav-item<?php if( isset($_GET['page']) and $_GET['page'] == 'events') echo ' active'; ?>"><a href="?page=events">EVENEMENTS</a></li>
            <li class="nav-item<?php if( isset($_GET['page']) and $_GET['page'] == 'galleries') echo ' active'; ?>"><a href="?page=galleries">MEDIA</a></li>
						<li class="nav-item<?php if( isset($_GET['page']) and $_GET['page'] == 'social') echo ' active'; ?>"><a href="?page=social">DISCUSSION</a></li>
						<li class="nav-item<?php if( isset($_GET['page']) and $_GET['page'] == 'login') echo ' active'; ?>"><a href="?page=login"><i class="fa fa-user" aria-hidden="true"></i>
CONNEXION / INSCRIPTION</a></li>
            <li class="nav-item"><a data-toggle="modal" data-target="#myModal" href="#myModal"><i class="fa fa-envelope-o"></i></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
<!-- 
	<div id="headerwrap">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-8 col-lg-offset-2">
				<h1>It Doesn't Take a Rocket <b>Scientist</b></h1>
				<h2>It Takes a Designer</h2>
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- headerwrap -->
 -->

	<div class="container w">
	<?php
	if(isset($_GET['page'])) {
		switch($_GET['page']) {
	
			case 'events':
				require('pages/events.page.php');
			break;
	
			case 'galleries':
				require('pages/galleries.page.php');
			break;
	
			case 'social':
			require('pages/social.page.php');
			break;
	
			case 'admin':
				require('pages/admin.page.php');
			break;
	
			case 'login':
			require('pages/login.page.php');
			break;
			case 'home':
			default:
				require('pages/home.page.php');
			break;
		}
	}
	?>
	</div><!-- container -->

<?php
if(!isset($_GET['page']) or $_GET['page'] == 'home') {
?>
	<!-- PORTFOLIO SECTION -->
	<div id="dg">
		<div class="container">
			<div class="row centered">
				<h4>LATEST WORKS</h4>
				<br>
				<div class="col-lg-4">
					<div class="tilt">
					<a href="#"><img src="assets/img/p01.png" alt=""></a>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="tilt">
					<a href="#"><img src="assets/img/p03.png" alt=""></a>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="tilt">
					<a href="#"><img src="assets/img/p02.png" alt=""></a>
					</div>
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- DG -->

<?php
}
?>


	<div id="lg">
		<div class="container">
			<div class="row centered">
				<h4>NOS GENEREUX SPONSORS</h4>
				<div class="col-lg-2 col-lg-offset-1">
					<img src="assets/img/c01.gif" alt="">
				</div>
				<div class="col-lg-2">
					<img src="assets/img/c02.gif" alt="">
				</div>
				<div class="col-lg-2">
					<img src="assets/img/c03.gif" alt="">
				</div>
				<div class="col-lg-2">
					<img src="assets/img/c04.gif" alt="">
				</div>
				<div class="col-lg-2">
					<img src="assets/img/c05.gif" alt="">
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- dg -->
	
	
	<div id="r">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-8 col-lg-offset-2">
					<h4>WE ARE STORYTELLERS. BRANDS ARE OUR SUBJECTS. DESIGN IS OUR VOICE.</h4>
					<p>We believe ideas come from everyone, everywhere. At BlackTie, everyone within our agency walls is a designer in their own right. And there are a few principles we believe—and we believe everyone should believe—about our design craft. These truths drive us, motivate us, and ultimately help us redefine the power of design.</p>
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</div><! -- r wrap -->
	
	
	<!-- FOOTER -->
	<div id="f">
		<div class="container">
			<div class="row centered">
				<a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-dribbble"></i></a>
		
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- Footer -->


	<!-- MODAL FOR CONTACT -->
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        <h4 class="modal-title" id="myModalLabel">contact us</h4>
	      </div>
	      <div class="modal-body">
		        <div class="row centered">
		        	<p>We are available 24/7, so don't hesitate to contact us.</p>
		        	<p>
		        		Somestreet Ave, 987<br/>
						London, UK.<br/>
						+44 8948-4343<br/>
						hi@blacktie.co
		        	</p>
		        	<div id="mapwrap">
		<iframe height="300" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.es/maps?t=m&amp;ie=UTF8&amp;ll=52.752693,22.791016&amp;spn=67.34552,156.972656&amp;z=2&amp;output=embed"></iframe>
					</div>	
		        </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-danger" data-dismiss="modal">Save & Go</button>
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		
		<script src="assets/js/script.js"></script>
  </body>
</html>
