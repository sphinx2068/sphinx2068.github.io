<!DOCTYPE HTML>
<html lang="pl">														<!-- jezyk -->
<head>

	<meta charset="utf-8" />											<!-- zgodosc -->
	<title><?= $title ?></title>
	<meta name="description" content="drewienko" />
	<meta name="keywords" content="sphinx20683 drewienko" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<link rel="stylesheet" href="style.css" type="text/css" />			<!-- podpiecie css -->
	<link rel="stylesheet" href="css/fontello.css" type="text/css" />			<!-- podpiecie fontello -->
	
	<link href=
		"https://fonts.googleapis.com/css?family=Lato:400,700" 
	rel="stylesheet"> 													<!--odpiecie trzcionki -->
</head>

<body >
	
	<div class="opakowanie">									        <!-- główny kontener -->
		<div class="naglowek">
			<div class="logo">
				<img src="obrazy/logo.jpg" width="48px" height="48px" 
				style="float: left;"/>									<!-- obrazek wysokosc szerokosc i zeby był z lewej -->
					<span style="color: #000000">R</span>yszard			<!-- colorek dla r -->
					<span style="color: #000000">G</span>regorczyk
				<div style="clear:both;">								<!-- czyszczenie do lewej -->
				</div>
			</div>
			
			<div class="nav">
				<ol>													<!-- lista numerowana li podlisty ol tagi-->
					<li>
						<a href="index.php?page=startowa">=Strona główna=</a>								<!-- link # nie do strony tylk rozwijany -->	
						
					</li>
					<li>
						<a href="#">=meble= </a>								<!-- link # nie do strony tylk rozwijany -->	
							<ul>
								<li><a href="index.php?page=Lawki">Ławki</a></li>
								<li><a href="index.php?page=Domek">Domek</a></li>
								<li><a href="index.php?page=Meble">Meble</a></li>
								<li><a href="index.php?page=Lozka">Łóżka</a></li>
								<li><a href="index.php?page=Malep">Małe projekty</a></li>
								<li><a href="index.php?page=Pomoce">Pomoce warsztatowe</a></li>
								
								
							</ul>
					</li>				
					
					
					<li>
						<a href="index.php?page=nowosci"><span style="color: #ff9900">==NOWOŚCI==</span></a>								<!-- link # nie do strony tylk rozwijany -->	
					</li>
					<li>
						<a href="index.php?page=koment"><span >=Komentarze=</span></a>								<!-- link # nie do strony tylk rozwijany -->	
					</li>
					<li>
						<audio controls autoplay loop >
							
							<source src="audio/luzik.mp3" type="audio/mpeg" >
								Your browser does not support the audio element.
							</audio
					</li>
					
					
				</ol>
			</div>
			
			<div class="linki">
				<div class="kafelki">
					<div class="youtube">
						<a href="https://www.youtube.com" target="_blank" title="youtube">
						<i class="icon-youtube"></i>
						</a>
						
					</div>
					<div class="cda">
						<a href="https://www.cda.pl" target="_blank" title="cda">
							cda
						</a>
					</div>
					<div class="alltube">
						<a href="https://www.alltube.tv" target="_blank" title="alltuba">
							alltube
						</a>
					
					</div>
					<div class="allegro">
						<a href="https://www.allegro.pl" target="_blank" title="allegro">
							allegro
						</a>
					</div>
					<div style="clear:both;"></div>
				</div>			
			
			</div>

						
			
		</div>
<?php
	
	
	
	if(file_exists($file)) {										//sprawdza co ładuje jak strony nie ma to idzie startowa
		include($file);
		}
	else {
		include("startowa.php");
		}
		
	
	
?>	
		
	<div class="stopka">Ryszard &copy; 2017</div>	
	</div>
	<script src="css/jquery-3.2.1.min.js">
	</script>
	<script>

		$(document).ready(function() {
	var NavY = $('.nav').offset().top;
	 
	var stickyNav = function(){
	var ScrollY = $(window).scrollTop();
		  
	if (ScrollY > NavY) { 
		$('.nav').addClass('sticky');
	} else {
		$('.nav').removeClass('sticky'); 
	}
	};
	 
	stickyNav();
	 
	$(window).scroll(function() {
		stickyNav();
	});
	});
	
	
	
		
	
	
	
	
		
	
	
</script>
</body>
</html>