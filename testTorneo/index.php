<!--
Autor: FR
Licencia URL: http://ferrocarriloeste.org.ar
-->
<!DOCTYPE html>
<html>
<?php 
include ("includes/conexion.php");

$fotos = mysql_query("SELECT * FROM `fotos` ORDER BY `id` DESC limit 6") or die (mysql_error()); 
?>
	<head>
		<title>Torneo Ferro 11</title>
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
		<!-- web-font -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,300,700,800,400,600' rel='stylesheet' type='text/css'>
		<!-- web-font -->
		<!-- js -->
		<script src="js/jquery.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!-- js -->
		<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
<!-- start-smoth-scrolling -->
<!-- animated-css -->
		<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
		<script src="js/wow.min.js"></script>
		<script>
		 new WOW().init();
		</script>
<!-- animated-css -->
	</head>
	<body>
		<!-- MENU -->
		<div class="heder navbar-fixed-top">
			<!-- container -->
			<div class="container">
				<div class="header-top ">
					<div class="heder-logo">
						<h1><a href="#">Ferro</a></h1>
					</div>
					<div class="top-nav">
					<span class="menu"><img src="images/menu.png" alt=""></span>
						<ul class="nav1">
							<li><a class="scroll" href="#home">Inicio</a></li>
							<li><a class="scroll" href="#portfolio">Fotos</a></li>
							<li><a class="scroll" href="#posiciones">Posiciones</a></li>
							<li><a class="scroll" href="#fixture">Fixture</a></li>
							<li><a class="scroll" href="#goleadores">Goleadores</a></li>
							<li><a class="scroll" href="#sanciones">Sanciones</a></li>
							<li style="font-weight: bold;"><a class="scroll" href="#contact">Inscribite</a></li>
							
							<!--<li><a class="Signup play-icon popup-with-zoom-anim" href="#small-dialog2">Iniciar</a></li>-->
						</ul>
						<!-- script-for-menu -->
							 <script>
							   $( "span.menu" ).click(function() {
								 $( "ul.nav1" ).slideToggle( 300, function() {
								 // Animation complete.
								  });
								 });
							</script>
						<!-- /script-for-menu -->
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<!-- container -->
		</div>
		<!-- MENU -->
		
		<!-- PORTADA -->
		<div  id="home" class="banner">
			<!-- container -->
			<div class="container">
				<div class="banner-info wow fadeInLeft" data-wow-delay="0.4s">
					<a class="play-icon popup-with-zoom-anim" href="#small-dialog">
						<span> </span>
					</a>
					<div class="banner-text">
						<h2>Bienvenidos al Torneo Ferro 11.</h2>
						<p><a class="play-icon popup-with-zoom-anim" href="#small-dialog">Click to play video</a></p>
					</div>
					<!-- pop-up-box -->
					<script type="text/javascript" src="js/modernizr.custom.min.js"></script>    
					<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
					<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
					<!--//pop-up-box -->
				<div id="small-dialog" class="mfp-hide">
					<iframe src="//player.vimeo.com/video/38584262"  frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen> </iframe>
				</div>
				<div id="small-dialog2" class="mfp-hide">
					<div class="signup">
						<h3>Iniciar Sesión</h3>
						<h4>Ingrese sus datos</h4>
						<input type="text" value="First Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'First Name';}" />
						<input type="text" value="Second Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Second Name';}" />
						<input type="text" class="email"value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}"  />
						<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}"/>
						<input type="submit"  value="Sign Up"/>
					</div>
				</div>	
				 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>				
				</div>
			</div>
			<!-- container -->
		</div>
		<!-- PORTADA -->
		
	
		<!-- BANNER1 -->
		<div class="icons">
			<!-- container -->
			<div class="container">
				<ul class="wow fadeInLeft" data-wow-delay="0.4s">
					<li>
						<span class="light"> </span>
					</li>
					<li>
						<span class="glob"> </span>
					</li>
					<li>
						<span class="camra"> </span>
					</li>
					<li>
						<span class="setting"> </span>
					</li>
					<li>
						<span class="mike"> </span>
					</li>
					<li>
						<span class="money"> </span>
					</li>
				</ul>
			</div>
			<!-- container -->
		</div>
		<!-- BANNER1 -->
		
		<!-- works -->
		<div id="portfolio" class="works">
			<!-- container -->
			<div class="container">
				<div class="works-hedding wow fadeInLeft" data-wow-delay="0.4s">
					<h3>Fotos de la fecha</h3>
				</div>
				<ul id="filters">
					<li><span class="filter active wow fadeInLeft" data-wow-delay="0.4s"" data-filter="all">Todas</span></li>
					<li><span class="filter wow fadeInLeft" data-wow-delay="0.4s"" data-filter="equipos">Equipos</span></li>
					<li><span class="filter wow fadeInLeft" data-wow-delay="0.4s"" data-filter="mvp">Jugadores de la Fecha</span></li>
				</ul>
				
				
				<div id="portfoliolist">
					
					<?php
						while($fotos1 = mysql_fetch_assoc($fotos)) 
						{ 
						$categoria = $fotos1['categoria'];
						$link = $fotos1['link'];
						$titulo = $fotos1['titulo'];
						$subtitulo = $fotos1['subtitulo'];
						$fecha = $fotos1['fecha'];
						
					?>
					<div class="portfolio <?php echo $categoria?> mix_all" data-cat="<?php echo $categoria?>" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow fadeInLeft" data-wow-delay="0.4s">		
							<a href="<?php echo $link?>" class="b-link-stripe b-animate-go imagen">
							 <img src="<?php echo $link?>" width="370" height="370" alt="" />
								 <div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">
									 <?php echo $titulo?>
									 </h2>
									 <p class="b-animate b-from-left    b-delay03 ">
									<?php echo $subtitulo?> | <?php echo $fecha?>
									 </p>
								</div>
							</a>
						</div>
					</div>	
						  
					<?php
					}
					?> 
					
					
					<!--PORTFOLIO ORIGINAL
					
					
					
					
					
					
					
					<div class="portfolio mvp mix_all" data-cat="mvp" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow fadeInLeft" data-wow-delay="0.4s">		
							<a href="images/ball.png" class="b-link-stripe b-animate-go imagen">
							 <img src="images/ball.png" width="150" height="150" alt="" />
							 <div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">
							 NAME PREJECT
							 </h2>
							 <p class="b-animate b-from-left    b-delay03 ">
							 designed by Authour | May 23, 2014
							 </p>
							</div></a>
						</div>
					</div>	
					
					<div class="portfolio equipos mix_all" data-cat="equipos" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow fadeInLeft" data-wow-delay="0.4s">		
							<a href="images/hokey.png" class="b-link-stripe b-animate-go imagen">
							 <img src="images/hokey.png" alt="" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">
							 NAME PREJECT
							 </h2>
							 <p class="b-animate b-from-left    b-delay03 ">
							 designed by Authour | May 23, 2014
							 </p>
							</div></a>
						</div>
					</div>	
					
					
					<div class="portfolio mvp mix_all" data-cat="mvp" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow fadeInLeft" data-wow-delay="0.4s">		
							<a href="images/Football.png" class="b-link-stripe b-animate-go imagen">
								 <img src="images/Football.png" alt="" />
								 <div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">
									 NAME PREJECT</h2>
									 <p class="b-animate b-from-left b-delay03" id="para">
									 designed by Authour | May 23, 2014
									 </p>
								</div>
							</a>
						</div>
					</div>			
					
					

					
					
					
					<div class="portfolio equipos mix_all" data-cat="equipos" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow fadeInLeft" data-wow-delay="0.4s">		
							<a href="images/Football1.png" class="b-link-stripe b-animate-go imagen">
							 <img src="images/Football1.png" alt="" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">
							 NAME PREJECT
							 </h2>
							 <p class="b-animate b-from-left    b-delay03 ">
							 designed by Authour | May 23, 2014
							 </p>
							</div></a>
						</div>
					</div>	
					
					<div class="portfolio mvp mix_all" data-cat="mvp" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow fadeInLeft" data-wow-delay="0.4s">		
							<a href="images/Icc.png" class="b-link-stripe b-animate-go imagen">
							 <img src="images/Icc.png" alt="" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">
							 NAME PREJECT</h2>
							 <p class="b-animate b-from-left    b-delay03 ">
							 designed by Authour | May 23, 2014
							 </p>
							</div></a>
						</div>
					</div>		
					
					<div class="portfolio equipos mix_all" data-cat="equipos" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow fadeInLeft" data-wow-delay="0.4s">		
							<a href="images/ball1.png" class="b-link-stripe b-animate-go imagen">
							 <img src="images/ball1.png" alt="" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">
							 NAME PREJECT
							 </h2>
							 <p class="b-animate b-from-left    b-delay03 ">
							 designed by Authour | May 23, 2014
							 </p>
							</div></a>
						</div>
					</div>
					<div class="clearfix"></div>

				-->

				
				</div>
				
				<!-- Script for gallery Here -->
				<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
					<script type="text/javascript">
					$(function () {
						
						var filterList = {
						
							init: function () {
							
								// MixItUp plugin
								// http://mixitup.io
								$('#portfoliolist').mixitup({
									targetSelector: '.portfolio',
									filterSelector: '.filter',
									effects: ['fade'],
									easing: 'snap',
									// call the hover effect
									onMixEnd: filterList.hoverEffect()
								});				
							
							},
							
							hoverEffect: function () {
							
								// Simple parallax effect
								$('#portfoliolist .portfolio').hover(
									function () {
										$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
										$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
									},
									function () {
										$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
										$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
									}		
								);				
							
							}
				
						};
						
						// Run the show!
						filterList.init();	
					});	
					</script>
			<!-- Gallery Script Ends -->
			
					<!-- Script De Imagenes -->
					<script type="text/javascript">		//Script de fotos
						$('.imagen').magnificPopup({ 
						  type: 'image',
						  mainClass: 'mfp-with-zoom', // this class is for CSS animation below
						  cursor: 'auto',
						  //modal: true,	
							showCloseBtn: false,	
							closeOnBgClick: true,						
						  zoom: {
							enabled: true, // By default it's false, so don't forget to enable it

							duration: 300, // duration of the effect, in milliseconds
							easing: 'ease-in-out', // CSS transition easing function 
							
											
							// The "opener" function should return the element from which popup will be zoomed in
							// and to which popup will be scaled down
							// By defailt it looks for an image tag:
							opener: function(openerElement) {
							  // openerElement is the element on which popup was initialized, in this case its <a> tag
							  // you don't need to add "opener" option if this code matches your needs, it's defailt one.
							  return openerElement.is('img') ? openerElement : openerElement.find('img');
							}
						  }

						});
						
					  
						</script>
					<!-- Fin Script De Imagenes -->		
			
			
				<div class="clearfix"></div>
				<div class="plus wow fadeInLeft"> 
					<a href="#"><img src="images/plus.png" alt="" /></a>
				</div>
			</div>
			<!-- container -->
		</div>
		<!-- works -->
		
		<!-- POSICIONES -->
		<div class="our-team" id="posiciones">
			<!-- container -->
			<div class="container">
				<div class="team-hedding wow bounceIn" data-wow-delay="0.4s">
					<h3>Posiciones</h3>
				</div>
				
				
				<!--<div class="team-grids"> GRIDS
					<div class="col-md-4 team-grid">
						<img src="images/team.png" alt="" class="wow bounceIn" data-wow-delay="0.4s" />
						<ul class="plus wow fadeInRight">
							<li class="twitter"><a href="#"> </a></li>
							<li class="facebook"><a href="#"> </a></li>
							<li class="cam"><a href="#"> </a></li>
						</ul>
						<div class="team-grid-text wow bounceIn" data-wow-delay="0.4s">
							<h5>Michael Joe</h5>
							<p class="caption">CEO & Founder</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
						</div>
					</div>
					<div class="col-md-4 team-grid">
						<img src="images/team1.png" alt="" class="wow bounceIn" data-wow-delay="0.4s" />
						<ul class="plus wow fadeInRight">
							<li class="twitter"><a href="#"> </a></li>
							<li class="facebook"><a href="#"> </a></li>
							<li class="cam"><a href="#"> </a></li>
						</ul>
						<div class="team-grid-text wow bounceIn" data-wow-delay="0.4s">
							<h5>Michael Joe</h5>
							<p class="caption">CEO & Founder</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
						</div>
					</div>
					<div class="col-md-4 team-grid">
						<img src="images/team2.png" alt="" class="wow bounceIn" data-wow-delay="0.4s" />
						<ul class="plus wow fadeInRight">
							<li class="twitter"><a href="#"> </a></li>
							<li class="facebook"><a href="#"> </a></li>
							<li class="cam"><a href="#"> </a></li>
						</ul>
						<div class="team-grid-text wow bounceIn" data-wow-delay="0.4s">
							<h5>Michael Joe</h5>
							<p class="caption">CEO & Founder</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>-->
				<!--<div class="plus wow fadeInLeft"> EL MAS PLUS
					<a href="#"><img src="images/plus.png" alt="" /></a>
				</div>-->
			</div>
			<!-- container -->
		</div>
		<!-- POSICIONES -->
		
		<!-- ESTADISTICAS -->
		<div class="team-bottom">
			<!-- container -->
			<div class="container">
				<div class="col-md-4 gift wow fadeInLeft" data-wow-delay="0.4s">
					<span> <i class="fa fa-male fa-5x IconoBlanco"></i></span>
					
					<p>420</p>
					<p class="text">JUGADORES</p>
				</div>
				<div class="col-md-4 gift wow fadeInLeft" data-wow-delay="0.4s">
					<span> <i class="fa fa-group fa-5x IconoBlanco"></i></span>
					<p>16</p>
					<p class="text">EQUIPOS</p>
				</div>
				<div class="col-md-4 gift wow fadeInLeft" data-wow-delay="0.4s">
					<span> <i class="fa fa-trophy fa-5x IconoBlanco"></i></span>
					<p>1</p>
					<p class="text">CAMPEON</p>
				</div>
				
				<div class=""> </div>
			</div>
			<!-- container -->
		</div>
		<!-- ESTADISTICAS -->
		
		<!-- FIXTURE -->
		<div id="fixture" class="skills">
			<!-- container -->
			<div class="container">
				<div class="skills-hedding wow bounceIn" data-wow-delay="0.4s">
					<h3>Fixture</h3>
				</div>
				<div class="col-md-9">
					<div class="col-md-3 skills-grid">
						<div class="circle" id="circles-1"></div>
					</div>
					<div class="col-md-3 skills-grid">
						<div class="circle" id="circles-2"></div>
					</div>
					<div class="col-md-3 skills-grid">
						<div class="circle" id="circles-3"></div>
					</div>
					<div class="col-md-3 skills-grid">
						<div class="circle" id="circles-4"></div>
					</div>
					<div class="clearfix"> </div>
					<!-->
				 <script type="text/javascript" src="js/circles.js"></script>
					         <script>
								var colors = [
										['#FFFFFF', '#42B8DD'], ['#FFFFFF', '#42B8DD'], ['#FFFFFF', '#42B8DD'], ['#FFFFFF', '#42B8DD']
									];
								for (var i = 1; i <= 5; i++) {
									var child = document.getElementById('circles-' + i),
										percentage = 40 + (i * 10);
										
									Circles.create({
										id:         child.id,
										percentage: percentage,
										radius:     80,
										width:      10,
										number:   	percentage / 10,
										text:       '%',
										colors:     colors[i - 1]
									});
								}
						
				</script>
				<!--/-->
					<div class="skills-grid-text">
						<h5 class="plus wow fadeInRight">Something about our skills</h5>
						<p class="wow bounceIn" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor 
							incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
							exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor 
							in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
							Excepteur sint occaecat cupidatat non proident.
						</p>
						<p class="wow bounceIn" data-wow-delay="0.4s">	Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
							totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae 
							dicta.
						</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="totam">
						<div class="tab1 wow bounceIn" data-wow-delay="0.4s">
							<ul>
								<li><span> </span></li>
								<li class="text">Totam rem aperiam eaque</li>
								<li class="minus">-</li>
							</ul>
							<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
						</div>
						<div class="tab2 wow bounceIn" data-wow-delay="0.4s">
							<ul>
								<li class="lock"></li>
								<li class="sub-text">Nemo enim ipsam voluptatem</li>
								<li class="char">+</li>
							</ul>
							<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
						</div>
						<div class="tab3 wow bounceIn" data-wow-delay="0.4s">
							<ul>
								<li class="tower"></li>
								<li class="sub-text">Ut enim ad minima veniam</li>
								<li class="char">+</li>
							</ul>
							<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
						</div>
						<div class="tab4 wow bounceIn" data-wow-delay="0.4s">
							<ul>
								<li class="phone"></li>
								<li class="sub-text">Quis nostrum exercitationem ullam</li>
								<li class="char">+</li>
							</ul>
							<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
						</div>
						<div class="tab5 wow bounceIn" data-wow-delay="0.4s">
							<ul>
								<li class="book"></li>
								<li class="sub-text">Neque porro quisquam est qui</li>
								<li class="char">+</li>
							</ul>
							<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
						</div>
					</div>
					
						<script>
							$(document).ready(function(){
								$(".tab1 p").hide();
								$(".tab2 p").hide();
								$(".tab3 p").hide();
								$(".tab4 p").hide();
								$(".tab5 p").hide();
								$(".tab1 ul").click(function(){
									$(".tab1 p").slideToggle(300);
									$(".tab2 p").hide();
									$(".tab3 p").hide();
									$(".tab4 p").hide();
									$(".tab5 p").hide();
								})
								$(".tab2 ul").click(function(){
									$(".tab2 p").slideToggle(300);
									$(".tab1 p").hide();
									$(".tab3 p").hide();
									$(".tab4 p").hide();
									$(".tab5 p").hide();
								})
								$(".tab3 ul").click(function(){
									$(".tab3 p").slideToggle(300);
									$(".tab4 p").hide();
									$(".tab5 p").hide();
									$(".tab2 p").hide();
									$(".tab1 p").hide();
								})
								$(".tab4 ul").click(function(){
									$(".tab4 p").slideToggle(300);
									$(".tab3 p").hide();
									$(".tab2 p").hide();
									$(".tab1 p").hide();
									$(".tab5 p").hide();
								})
								$(".tab5 ul").click(function(){
									$(".tab5 p").slideToggle(300);
									$(".tab4 p").hide();
									$(".tab3 p").hide();
									$(".tab2 p").hide();
									$(".tab1 p").hide();
									
								})
								
							});
						</script>
						<!-- script -->
				</div>
				<div class="clearfix"> </div>
			</div>
			<!-- container -->
		</div>
		<!-- FIXTURE -->
		
		<!-- GOLEADORES -->
			<div class="our-team" id="goleadores">
				<!-- container -->
				<div class="container">
					<div class="team-hedding wow bounceIn" data-wow-delay="0.4s">
						<h3>Goleadores</h3>
					</div>
						
					
				</div>
				<!-- container -->
			</div>
		<!-- GOLEADORES -->
		
		<!-- BANNER1 -->
		<div class="icons">
			<!-- container -->
			<div class="container">
				<ul class="wow fadeInLeft" data-wow-delay="0.4s">
					<li>
						<span class="light"> </span>
					</li>
					<li>
						<span class="glob"> </span>
					</li>
					<li>
						<span class="camra"> </span>
					</li>
					<li>
						<span class="setting"> </span>
					</li>
					<li>
						<span class="mike"> </span>
					</li>
					<li>
						<span class="money"> </span>
					</li>
				</ul>
			</div>
			<!-- container -->
		</div>
		<!-- BANNER1 -->
		
		<!-- SANCIONES -->
		<div class="our-team" id="sanciones">
			<!-- container -->
			<div class="container">
				<div class="team-hedding wow bounceIn" data-wow-delay="0.4s">
					<h3>Sanciones</h3>
				</div>
					
				
			</div>
			<!-- container -->
		</div>
		<!-- SANCIONES -->
		
		<!-- INGRESAR EMAIL -->
		<!--<div class="skills-middle">
			 
			<div class="container">
				<div class="skills-middle-text">
					<form>
						<input type="text" class="text plus wow fadeInLeft" value="Enter your e-mail here..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your e-mail here...';}">
						<input type="submit" class="text plus wow fadeInRight" value="Subscribe">
					</form>
					<div class="clearfix"> </div>
				</div>
			</div>
			
		</div>-->
		<!-- INGRESAR EMAIL -->
		
		<!-- MARCAS -->
		<div class="skills-bottom">
			<!-- container -->
			<div class="container">
				<div class="skills-images wow fadeInLeft" data-wow-delay="0.4s">
					<div class="envato"><img src="images/envato.png" alt="" /></div>
					<div class="envato"><img src="images/word.png" alt="" /></div>
					<div class="envato"><img src="images/dribble.png" alt="" /></div>
					<div class="envato"><img src="images/envato.png" alt="" /></div>
					<div class="envato"><img src="images/word.png" alt="" /></div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<!-- container -->
		</div>
		<!-- MARCAS -->
		
		<!-- CONTACTO -->
		<div id="contact" class="contact">
			<!-- container -->
			<div class="container">
				<div class="contact-hedding wow bounceIn" data-wow-delay="0.4s">
					<h3>Inscribite</h3>
				</div>
				<p class="wow fadeInLeft" data-wow-delay="0.4s">Club Ferro Carril Oeste
					<span>+01 234 567 89 - +01 234 567 89 | info@ferrocarriloeste.com.ar</span>
				</p>
				<div class="social-icons wow fadeInLeft" data-wow-delay="0.4s">
					<ul>
						<a href="www.twitter.com"><li class="twit"></li></a>
						<a href="www.facebook.com"><li class="fb"></li></a>
						<!--<li class="google"></li>
						<li class="pinterest"></li>
						<li class="rect"></li>
						<li class="youtube"></li>
						<li class="skip"></li>
						<li class="dribbble"></li>-->
					</ul>
				</div>
				<div class="col-md-8 text-fields">
					<div class="text-fields-left">
						<div class="text-field-email">
							<form>
								<input type="text" class="text" value="E-mail" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'EMAIL';}">
							</form>
							<div class="msg-img"></div>
						</div>
						<div class="text-field-name">
							<form>
								<input type="text" class="text" value="Nombre" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'NAME';}">
							</form>
							<div class="user-img"></div>
						</div>
						<div class="clearfix"> </div>
						<div class="text-field-area wow fadeInLeft">
							<form>
								<textarea value="Mensaje:" onfocus="if(this.value == 'MESSAGE') this.value='';" onblur="if(this.value == '') this.value='MESSAGE';">Mensaje</textarea>
							</form>
							<div class="pen-img"></div>
						</div>
					</div>
				</div>
				<div class="col-md-4 text-fields">
					<div class="text-fields-right wow fadeInRight">
						<form>
							<input type="submit" value="Enviar">
						</form>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<!-- container -->
		</div>
		<!-- CONTACTO -->
		
		<!-- footer -->
		<div class="footer">
			<!-- container -->
			<div class="container">
				<h4>TORNEO FERRO 11</h4>
				<div class="copyright">
					<p>
						DIVERSION Y COMPETENCIA</a>
					</p>
				</div>
				<a class="scroll" href="#home"><img src="images/up-arrow.png" alt="" /></a>
			</div>
			<!-- container -->
		</div>
		<!-- footer -->
	</body>
</html>

