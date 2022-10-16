<!DOCTYPE html>
<html lang="pl">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<title>"Multi Band Kraków- zespół muzyczny na wesele"</title>
	<meta name="description" content="Poznaj zespół coverowy Multi Band, który w sposób profesjonalny zadba o sferę muzyczną Twojego wydarzenia.">
	<meta name="keywords" content="zespół muzyczny, zespół weselny, zespół coverowy, zespół kraków">
	<meta name="author" content="Wojciech Szczepański">
	<meta http-equiv="X-Ua-Compatible" content="IE=edge">
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="main.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700|ZCOOL+XiaoWei&amp;subset=latin-ext" rel="stylesheet">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

	
</head>

<body>

	<header>
	
		<nav class="navbar navbar-light bg-white navbar-expand-md fixed-top">
		
			<a class="navbar-brand"  href="index.html"> Multi<img src="img/graf.png" width="30" height="30"  alt="graf" >Band.pl</a>
		
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainmenu" aria-controls="mainmenu" aria-expanded="false" aria-label="Przełącznik nawigacji">
				<span class="navbar-toggler-icon"></span>
			</button>
		
			<div class="collapse navbar-collapse justify-content-center" id="mainmenu" >
			
				<ul class="navbar-nav ">
				
					<li class="nav-item ">
						<a class="nav-link" href="oferta.html"> Oferta </a>
					</li>
					
					
					
					<li class="nav-item">
						<a class="nav-link" href="repertuar.html"> Repertuar </a>
					</li>
					
					<li class="nav-item">
						<a class="nav-link" href="video.html"> Video </a>
					</li>
					
					<li class="nav-item">
						<a class="nav-link" href="o nas.html"> O nas </a>
					</li>
					
					<li class="nav-item active">
						<a class="nav-link" href="kontakt.html"> Kontakt </a>
					</li>
				
				</ul>
			
				
			
			</div>
		
		</nav>
	
	
	
	
	<div id="demo" class="carousel slide" data-ride="carousel" data-interval="3000">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="slider-img1.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="slider-img2.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="slider-img3.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</header>

<main>
		
	<section class="info">
		
		<div class="container">
				
				<header>
					
					<h1>Zapraszamy do kontaktu:</h1>
				</header>
				<?php

$to      = 'info@multiband.pl';
$name    = $_POST['name'];
$email   = $_POST['email'];
$subject = 'Nowy e-mail od ' . $name . ' (' . $email . ')';
$message = $_POST['message'];
$headers = 'From: ' . $name . ' (' . $email . ')';
$headers .= 'Content-Type: text/html; charset=utf-8';

mail($to, $subject, $message, $headers);

echo '<h2>Wiadomość wysłana :)</h2>';
?>
					<div class="contact">
								<form method="post" name="contactform" action="mail.php">
									<div class="field half first">
										
										<input type="text" name="name" id="name" placeholder="Imię..." onfocus="this.placeholder=''" onblur="this.placeholder='Imię...'" required/>
									</div>
									<div class="field half">
										
										<input type="email" name="email" id="email" placeholder="E-mail..." onfocus="this.placeholder=''" onblur="this.placeholder='E-mail...'" required/>
									</div>
									<div class="field">
										
										<textarea name="message" id="message" rows="4" placeholder="Wiadomość..." onfocus="this.placeholder=''" onblur="this.placeholder='Wiadomość...'" required></textarea>
									</div>
									<div class="actions">
										<input type="submit" name="submit" value="Wyślij" class="special" />
									</div>
								</form>
								
						
							
							
							
					</div>			
					
		</div>
	</section>
</main>


				
<footer>	
		
	<div id="foot">
		
		<div class="footer">MultiBand</div>
		<div class="footer">tel: 694 956 647</div>
		<div class="footer">e-mail: info@multiband.pl</div>
		
	</div>
</footer>
				
		
		
	
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	
	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>