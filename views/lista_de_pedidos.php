<!DOCTYPE html>
<html lang="es">
    <head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Spa Pricing Table template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free Web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
   <link rel="stylesheet" href="<?php echo constant('URL');?>public/CSS/style.css" type="text/css">

    <link rel="stylesheet" href="<?php echo constant('URL');?>public/CSS/owl.carousel.css" type="text/css">
<!-- web font -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'><!--web font-->
<link href="//fonts.googleapis.com/css?family=Petit+Formal+Script" rel="stylesheet">

       <!--TITULO E ICONO EN PESTAÑA DEL NAVEGADOR-->
    <title>PRINCIPAL</title> <link rel="shortcut icon" href="public/IMG/icono.png"> 
    </head>
	
    <body>
        <!--Encabezado-->
    <div class="header-main">
        <div class="main-content">
            <ul class="elementos-header">
            <!--ICONO PRINCIPAL ESQUINA SUPERIOR-->
            <a href="#">
            <img src="<?php echo constant('URL');?>public/IMG/logo.png" class="logo">
            </a>
            
</ul>
    </div>
</div>

	<!-- main -->
	<div class="main">
		<h1>Administracion de pedidos</h1>
		<div class="main-agileinfo"> 
			<div id="owl-demo" class="owl-carousel owl-theme"><!-- owl-carousel -->
				<div class="item">
					<div class="pricing pricing-two">
						<div class="pricing-top top-two">
							<h3>PEDIDOS PENDIENTES</h3>
							<p>Actualizado al 20/12/2021</p>
						</div>
						<div class="pricing-bottom"> 
							<p>Sin registros aun</p> 
							<p></p> 
							<p></p> 
							<p></p> 
							<p class="w3agile">-</p> 
							<div class="agileits-buy">
								<a class="popup-with-zoom-anim" href="#small-dialog">Administrar</a>
							</div>
						</div>
					</div> 
				</div> <div class="item">
					<div class="pricing pricing-two">
						<div class="pricing-top top-two">
							<h3>PEDIDOS EN PROGRESO</h3>
							<p>Actualizado al 20/12/2021</p>
						</div>
						<div class="pricing-bottom"> 
							<p>Sin registros aun</p> 
							<p></p> 
							<p></p> 
							<p></p> 
							<p class="w3agile">-</p> 
							<div class="agileits-buy">
								<a class="popup-with-zoom-anim" href="#small-dialog">Administrar</a>
							</div>
						</div>
					</div> 
				</div> <div class="item">
					<div class="pricing pricing-two">
						<div class="pricing-top top-two">
							<h3>PEDIDOS FINALIZADOS</h3>
							<p>Actualizado al 20/12/2021</p>
						</div>
						<div class="pricing-bottom"> 
							<p>Sin registros aun</p> 
							<p></p> 
							<p></p> 
							<p></p> 
							<p class="w3agile">-</p> 
							<div class="agileits-buy">
								<a class="popup-with-zoom-anim" href="#small-dialog">Administrar</a>
							</div>
						</div>
					</div> 
				</div> 
			</div>	
			<!-- //owl-carousel -->
		</div>	
	</div>	
	<!-- //main -->
	<!-- pop-up-grid -->
	 <div id="small-dialog" class="mfp-hide">
		<div class="pop_up w3-agile">
			<div class="payment-online-form-left">
				<form action="#" method="post"> 
					<h4>Account Info</h4>
					<ul>
						<li><input class="text-box-dark" placeholder="Frist Name" type="text" required></li>
						<li><input class="text-box-dark" placeholder="Last Name" type="text" required></li>
					</ul>
					<ul>
						<li><input class="text-box-dark" placeholder="Email" type="text" required></li>
						<li><input class="text-box-dark" placeholder="Company Name" type="text" required></li>
					</ul>
					<ul>
						<li><input class="text-box-dark" placeholder="Phone Number" type="text" required></li>
						<li><input class="text-box-dark" placeholder="Address" type="text" required></li>
					</ul>	 
					<div class="clear"> </div>
					<ul class="payment-type w3-agile">
						<h4>Payment Method</h4> 
						<li><span class="col_checkbox">
							<input type="radio" name="payment-method" id="paypal" value="paypal"> 
							<a class="visa" href="#"> </a>
							</span>												
						</li>
						<li>
							<span class="col_checkbox">
								<input type="radio" name="payment-method" id="card" value="card" checked="">
								<a class="paypal" href="#"> </a>
							</span>
						</li>  
					</ul>
					<div class="clear"> </div>
					<ul>
						<li><input class="text-box-dark" placeholder="Card Number" type="text" required></li>
						<li><input class="text-box-dark" placeholder="Name on card" type="text" required></li>
					</ul>
					<ul>
						<li><input class="text-box-light hasDatepicker" placeholder="Expiration Date" type="text" required></li>
						<li><input class="text-box-dark" placeholder="Security Code" type="text" required></li>
					</ul> 
					<ul class="payment-sendbtns">
						<li><input type="reset" value="Reset"></li>
						<li><input type="submit" value="Process order"></li>
					</ul>
					<div class="clear"> </div>
				</form>
			</div>
		</div>
	</div>
	<!-- //pop-up-grid --> 
	
	<!-- js -->
	<script src="js/jquery-1.9.1.min.js"></script> 
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function() { 
			$("#owl-demo").owlCarousel({
				
			  autoPlay: 3000, //Set AutoPlay to 3 seconds 
			  items : 3,
			  itemsDesktop : [640,5],
			  itemsDesktopSmall : [414,4]
		 
			}); 
		}); 
	</script> 
	<!-- //js -->
	<!-- popup js --> 
	<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>  
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
	<!-- //popup js --> 
</body>

    <?php require 'views/footer.php';?>



</html>
