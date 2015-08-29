<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Car Share</title> 
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">		
        <link rel="stylesheet" href="css/lightbox.css">
    </head>
    <body>
    <!-- BEGIN NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top navbar-carshare">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsible-nav" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!--<a class="navbar-brand smoothScroll" href="#inicio"><img src="img/logo-name.png" alt="North Pallets"></a>-->
				</div>
				<div id="collapsible-nav" class="collapse navbar-collapse">
					<ul class="nav navbar-nav pull-right">
						<li><a href="<?php echo ($page=='index')? '#inicio':'index.php' ?>" class="smoothScroll">Inicio</a></li>
						<li><a href="<?php echo ($page=='index')? '#empresa':'index.php' ?>" class="smoothScroll">Empresa</a></li>
						<li><a href="<?php echo ($page=='index')? '#mision':'index.php' ?>" class="smoothScroll">Misión</a></li>
						<li><a href="<?php echo ($page=='index')? '#creadores':'index.php' ?>" class="smoothScroll">Creadores</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->

    