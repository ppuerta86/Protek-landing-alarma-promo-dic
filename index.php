<?php
    /*
    || PROTEK | Landing GPS Comercial ||
    Set values for hidden fields in the CRM form and the correct parameter to
    trigger conversion tags. Determined by the GET parameter 'source'.
    */
     $source = $_GET['source'];
     $allowed_sources = array(

         		"pdesda"=>"PTKDESPREOCUPATE",
         "pdesgs"=>"PTKDESPREOCUPATE",
         "pdesfb"=>"PTKDESPREOCUPATE",
         "pdesig"=>"PTKDESPREOCUPATE",
         "pdesis"=>"PTKDESPREOCUPATE",
        
     );


    if (isset($allowed_sources[$source])) {
        $crm_campaign = $allowed_sources[$source];
        $crm_source = strtoupper($source);
        $conversion_trigger = strtolower($crm_campaign);
    } else {
        $crm_campaign = 'DESCONOCIDA';
        $crm_source = 'DESCONOCIDA';
        $conversion_trigger = 'none';
    }

    $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>

<!DOCTYPE HTML>
<html lang="es">
	<head>



		<meta charset="UTF-8" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<title>Protek | Despreocupate</title>

		<meta name="description" content="">
		<meta name="author" content="Protek | Despreocupate">

	  	<meta property="og:title" content="Protek | Despreocupate">
		<meta property="og:description" content="">
		<meta property="og:image" content="">
		<meta property="og:type" content="landing page">

		<!-- FAVICON -->
		<link rel="apple-touch-icon-precomposed" sizes="57x57" href="images/favicon/apple-touch-icon-57x57.png" />
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/favicon/apple-touch-icon-114x114.png" />
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/favicon/apple-touch-icon-72x72.png" />
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/favicon/apple-touch-icon-144x144.png" />
		<link rel="apple-touch-icon-precomposed" sizes="60x60" href="images/favicon/apple-touch-icon-60x60.png" />
		<link rel="apple-touch-icon-precomposed" sizes="120x120" href="images/favicon/apple-touch-icon-120x120.png" />
		<link rel="apple-touch-icon-precomposed" sizes="76x76" href="images/favicon/apple-touch-icon-76x76.png" />
		<link rel="apple-touch-icon-precomposed" sizes="152x152" href="images/favicon/apple-touch-icon-152x152.png" />
		<link rel="icon" type="image/png" href="images/favicon/favicon-196x196.png" sizes="196x196" />
		<link rel="icon" type="image/png" href="images/favicon/favicon-96x96.png" sizes="96x96" />
		<link rel="icon" type="image/png" href="images/favicon/favicon-32x32.png" sizes="32x32" />
		<link rel="icon" type="image/png" href="images/favicon/favicon-16x16.png" sizes="16x16" />
		<link rel="icon" type="image/png" href="images/favicon/favicon-128.png" sizes="128x128" />
		<meta name="application-name" content="&nbsp;"/>
		<meta name="msapplication-TileColor" content="#FFFFFF" />
		<meta name="msapplication-TileImage" content="mstile-144x144.png" />
		<meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
		<meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
		<meta name="msapplication-wide310x150logo" content="mstile-310x150.png" />
		<meta name="msapplication-square310x310logo" content="mstile-310x310.png" />

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="style.css?v=1.1" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Assistant:400,600,700,800" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,700,800,900" rel="stylesheet">
<link rel="stylesheet" href="css/awesome/css/font-awesome.min.css">

     <!-- jquerys -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PHQP4MF');</script>
<!-- End Google Tag Manager -->


</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PHQP4MF"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

	<div class="container-fluid padding-remove">


		<div class="slider">

		<header>
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div id="logo"><img class="img-responsive" src="images/logom.png" alt="Protek"></div>
					</div>
			
				</div>
			</div>
		</header>

			<div class="container">
				<div class="row">
					<div class="col-equal">
						<div class="col-sm-6 servicio">

							<img class="img-responsive desktop-header" src="images/icon/alarma_para_casa.png" alt="">
							<img class="img-responsive mobile-header" src="images/icon/alarmapreciomobile.png" alt="">
						</div>
						<div class="col-sm-6 formucol">
							<div class="box amar">
								<div class="promo"><img class="img-responsive" src="images/icon/pedi-tu-promo-online.png" alt=""></div>
								<h4>
								<span class="hidden-xs">Completá con tus datos y un asesor te contactará</span></h4>

								<div class="row">
										<form action="http://openorange.protek.com.py/WebOpportunity/Creation/" id="contact-form" name="contact-form" method="POST">
											  <input type="hidden" name="_salesman" value="RH">
					                          <input type="hidden" name="_office" value="01">
					                          <input type="hidden" name="_campaign" value="<?php echo $crm_campaign; ?>">
					                          <input type="hidden" name="_channel" value="PRODIGITAL">
					                          <input type="hidden" name="_type" value="DIGITALES">
					                          <input type="hidden" name="_source" value="<?php echo $crm_source; ?>">
											  <input type="hidden" name="_url" value="<?php echo $url; ?>">
					                          <input type="hidden" name="_urlredirectsuccess" value="http://www.protek.com.py/despreocupate/gracias.html?ct=<?php echo $crm_source; ?>">
					                          <input type="hidden" name="_urlredirectfailure" value="http://www.protek.com.py/despreocupate/">
					                          <input type="hidden" name="_fields" value="name,Nombre|email,Email|telefono,Telefono|consulta,Consulta|servicio,Servicio">
										<div class="leftCol col-md-6">
											<div class="form-group">                          
											  <input type="text" class="form-control" id="nombre-regis" name="name" placeholder="Nombre" required>
											</div>
										</div>
										<div class="rightCol col-md-6">
											<div class="form-group">                          
											  <input type="text" class="form-control" id="apellido-regis" name="apellido" placeholder="Apellido" required>
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">                          
											  <input type="email" class="form-control" id="mail-regis" name="email" placeholder="Mail" required>
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">                          
											  <input type="text" class="form-control" id="tel-regis" name="telefono" placeholder="Código de área + teléfono" required>
											</div>
										
										</div>
										<div class="col-md-12 desktop-header">
											<div class="form-group">                          
											  <textarea name="consulta" class="form-control" id="mensaje" cols="30" rows="2" placeholder="Mensaje"></textarea>
											</div>
										</div>
										<div class="col-md-12">
											<div class="es_button">
												<input class="form-btn btn btn-default btn-secondary" name="submit" id="submit-button" value="¡QUIERO ESTA PROMO!" type="submit">
											</div>
										</div>
									</form>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

	<section>
		<div id="que-incluye" class="container">
			
				<div class="row incluye">
					<div class="col-sm-12">

						<h2>Viví la tranquilidad de estar siempre bien cuidado</h2>
						<span class="linea"></span>
						<p>Tené los beneficios de una protección 24/7 con una empresa líder en seguridad de 30 años de trayectoria</p>
					</div>
				</div>
				<div class="row incluye icon">
					<div class="col-xs-6 col-sm-4 col-md-4 col-lg-2">
						<div class="icons-content">
						<img src="images/icon/24h.png" alt="¿Qué incluye?" style="float:none; height: 65px; margin: 0 auto;display: block;" >
						<p>Alarma monitoreada por<br>
nuestra central las 24hs</p>
</div>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-4 col-lg-2">
					<div class="icons-content">
						<img src="images/icon/phone.png" alt="¿Qué incluye?" style="float:none; height: 65px; margin: 0 auto;display: block;" >
						<p>Control de tu alarma
desde tu celular</p>
</div>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-4 col-lg-2">
					<div class="icons-content">
						<img src="images/icon/keyhome.png" alt="¿Qué incluye?" style="float:none; height: 65px; margin: 0 auto;display: block;" >
						<p>Equipos de marcas<br>
líderes a nivel mundial</p>
</div>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-4 col-lg-2">
						<div class="icons-content">
						<img src="images/icon/carteles.png" alt="¿Qué incluye?" style="float:none; height: 65px; margin: 0 auto;display: block;" >
						<p>Carteles disuasorios<br>
para prevenir el delito</p>
</div>
					</div>
					
					<div class="col-xs-6 col-sm-4 col-md-4 col-lg-2">
						<div class="icons-content">
						<img src="images/icon/garantia.png" alt="¿Qué incluye?" style="float:none; height: 65px; margin: 0 auto;display: block;" >
						<p>Garantía de instalación<br>
y servicio técnico propio</p>
</div>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-4 col-lg-2">
						<div class="icons-content">
						<img src="images/icon/home.png" alt="¿Qué incluye?" style="float:none; height: 65px; margin: 0 auto;  display: block;">
						<p>Acompañamiento en
el<br> ingreso a tu casa</p>
</div>
					</div>
				</div>
			</div>
</section>
	<section class="fan" >
		<div id="fan" class="container-fluid">
			<img class="desktop-fan" style="width: 100%;" src="images/banner-FAN.png" alt="">
			<img class="mobile-fan" style="width: 100%; max-width: 375px; float: none; margin:0 auto;" src="images/banner-Fan-mobile.jpg" alt="">
			
		</div>
</section>

	<section>
		<div id="que-incluye" class="container funciona">
			
				<div class="row incluye ">
					<div class="col-sm-12">

						<h2>¿Cómo funciona nuestra alarma?</h2>
						
					</div>
				</div>
				<div class="row desktop-funciona">

	<div class="col-md-5">
		<!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">

    <h3><strong>1.</strong> Disuasión</h3>
    <p>La placa de Protek en la puerta de tu casa ayuda a disuadir a los delincuentes.</p>
    <span></span>


</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">
       <h3><strong>2.</strong> Detección</h3>
    <p>Si los sensores detectan algo inusual envían la señal a nuestra central y a tu celular.</p>
    <span></span>

    </a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">
    	
    
       <h3><strong>3.</strong>Recepción de la señal</h3>
    <p>Al recibir la señal de alarma se activa un operativo de respuesta inmediata.</p>
    <span></span>

    </a></li>
    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">
       <h3><strong>4.</strong>Respuesta de patrulla</h3>
    <p>Contamos con 24 patrullas distribuidas estratégicamente para acudir rápidamente.</p>
    <span></span>


    </a></li>
  </ul>

	</div>	
	<div class="col-md-7">
		<!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home"><img src="images/funciona/01.png" class="img-responsive" alt=""></div>
    <div role="tabpanel" class="tab-pane" id="profile"><img src="images/funciona/02.png" alt="" class="img-responsive"></div>
    <div role="tabpanel" class="tab-pane" id="messages"><img src="images/funciona/03.png" alt="" class="img-responsive"></div>
    <div role="tabpanel" class="tab-pane" id="settings"><img src="images/funciona/04.png" alt="" class="img-responsive"></div>
  </div>
		
	</div>				

  

  


</div>

				<div class="row mobile-funciona">

	
	<div class="col-md-7" style="margin-bottom: 20px;">
		<!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home2"><img src="images/funciona/01.png" class="img-responsive" alt=""></div>
    <div role="tabpanel" class="tab-pane" id="profile2"><img src="images/funciona/02.png" alt="" class="img-responsive"></div>
    <div role="tabpanel" class="tab-pane" id="messages2"><img src="images/funciona/03.png" alt="" class="img-responsive"></div>
    <div role="tabpanel" class="tab-pane" id="settings2"><img src="images/funciona/04.png" alt="" class="img-responsive"></div>
  </div>
		
	</div>				

  	<div class="col-md-5">
		<!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home2" aria-controls="home" role="tab" data-toggle="tab">

    <h3><strong>1.</strong> Disuasión</h3>
    <p>La placa de Protek en la puerta de tu casa ayuda a disuadir a los delincuentes.</p>
    <span></span>


</a></li>
    <li role="presentation"><a href="#profile2" aria-controls="profile" role="tab" data-toggle="tab">
       <h3><strong>2.</strong> Detección</h3>
    <p>Si los sensores detectan algo inusual envían la señal a nuestra central y a tu celular.</p>
    <span></span>

    </a></li>
    <li role="presentation"><a href="#messages2" aria-controls="messages" role="tab" data-toggle="tab">
    	
    
       <h3><strong>3.</strong> Recepción de la señal</h3>
    <p>Al recibir la señal de alarma se activa un operativo de respuesta inmediata.</p>
    <span></span>

    </a></li>
    <li role="presentation"><a href="#settings2" aria-controls="settings" role="tab" data-toggle="tab">
       <h3><strong>4.</strong> Respuesta de patrulla</h3>
    <p>Contamos con 24 patrullas distribuidas estratégicamente para acudir rápidamente.</p>
    <span></span>


    </a></li>
  </ul>

	</div>

  


</div>

			</div>
</section>





	<section class="blue" id="somos">
			<div class="container">
				<div class="row">
					<div class="col-sm-12" style="margin-bottom: 50px">
						<h2><span>¡Descubrí todo lo que podés hacer con nuestra APP!</span><span class="linea-blanca"></span></h2>
						<p>Descargala GRATIS y controlá tu alarma en cualquier momento y lugar desde tu celular</p>
					</div>
				</div>
		

					<div class="row">
  <div class="col-md-4 ">  

<div class="media left"> 
	<div class="media-left"> <a href="#"> <img alt="64x64" class="media-object" data-src="holder.js/64x64" src="images/activo.png" data-holder-rendered="true" style="width: 64px; height: 64px;"> </a> 
	</div> 
	<div class="media-body"> 
		<h4 class="media-heading">Activá y desactivá tu<br>
sistema estés donde estés</h4> 
	</div> 
</div>

<div class="media left"> 
	<div class="media-left"> <a href="#"> <img alt="64x64" class="media-object" data-src="holder.js/64x64" src="images/eventos.png" data-holder-rendered="true" style="width: 64px; height: 64px;"> </a> 
	</div> 
	<div class="media-body"> 
		<h4 class="media-heading">Recibí los eventos de <br>
los sensores de tu hogar</h4> 
	</div> 
</div>

<div class="media left"> 
	<div class="media-left"> <a href="#"> <img alt="64x64" class="media-object" data-src="holder.js/64x64" src="images/ayuda.png" data-holder-rendered="true" style="width: 64px; height: 64px;"> </a> 
	</div> 
	<div class="media-body"> 
		<h4 class="media-heading">Solicitá ayuda y contención <br>
ante emergencias</h4> 
	</div> 
</div>

</div>

  <div class="col-md-4"><img class="img-responsive" style="float: none; max-width: 255px !important; margin: 0 auto;" src="images/Iphone.png" alt=""></div>
  


  <div class="col-md-4">  

<div class="media right"> 
	<div class="media-right"> <a href="#"> <img alt="64x64" class="media-object" data-src="holder.js/64x64" src="images/comunidad.png" data-holder-rendered="true" style="width: 95px; height: 65px;"> </a> 
	</div> 
	<div class="media-body"> 
		<h4 class="media-heading">Creá tu propia <br>
comunidad de seguridad</h4> 
	</div> 
</div>

<div class="media right"> 
	<div class="media-right"> <a href="#"> <img alt="64x64" class="media-object" data-src="holder.js/64x64" src="images/conoce.png" data-holder-rendered="true" style="width: 64px; height: 64px;"> </a> 
	</div> 
	<div class="media-body"> 
		<h4 class="media-heading">Conocé quién entra a tu <br>
casa y a qué hora lo hace</h4> 
	</div> 
</div>

<div class="media right"> 
	<div class="media-right"> <a href="#"> <img alt="64x64" class="media-object" data-src="holder.js/64x64" src="images/servicio.png" data-holder-rendered="true" style="width: 64px; height: 64px;"> </a> 
	</div> 
	<div class="media-body"> 
		<h4 class="media-heading">Pedí servicio técnico o
asesoramiento más rápido</h4> 
	</div> 
</div>

</div>
				
</div>






		</section>




		<section class="alarmas camaras">
			<div class="container">
				<div class="row">
		<div class="col-sm-12 testimonial">
						<h2><span>Trabajamos día a día para mejorar tu calidad de vida</span><span class="linea2"></span></h2>
						<p>Conocé por qué nos eligen nuestros clientes</p>
					</div>
				</div>
				<div class="row servicios">
			<div class="col-md-8 col-center m-auto">

			<div id="myCarousel1" class="carousel slide mobile" data-ride="carousel">
				<!-- Carousel indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel1" data-slide-to="1"></li>
					<li data-target="#myCarousel1" data-slide-to="2"></li>
				</ol>   
				<!-- Wrapper for carousel items -->
				<div class="carousel-inner">
					<div class="item carousel-item active">
						<div class="img-box"><img src="images/MTestimonio01.png" alt=""></div>
		<!-- 				<p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
						<p class="overview"><b>Paula Wilson</b>, Media Analyst</p>  -->
					</div>
					<div class="item carousel-item">
					<div class="img-box"><img src="images/MTestimonio02.png" alt=""></div>
						<!--<p class="testimonial">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis. Suspendisse potenti. Aliquam sit amet gravida nibh, facilisis gravida odio.</p>
						<p class="overview"><b>Antonio Moreno</b>, Web Developer</p>-->
					</div>
					<div class="item carousel-item">
						<div class="img-box"><img src="images/MTestimonio03.png" alt=""></div>
						<!--<p class="testimonial">Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia. Etiam faucibus mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt. Phasellus risus risus, volutpat vel tellus ac, tincidunt fringilla massa. Etiam hendrerit dolor eget rutrum.</p>
						<p class="overview"><b>Michael Holz</b>, Seo Analyst</p>-->
					</div>
				</div>
				<!-- Carousel controls -->
							 <!-- Left and right controls -->
<!--   <a class="left carousel-control" href="#myCarousel1" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="right carousel-control" href="#myCarousel1" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Siguiente</span>
  </a> -->
			
			</div>
				</div>
				<div class="col-md-12 col-center m-auto">

	<div id="myCarousel" class="carousel slide desktop" data-ride="carousel">
				<!-- Carousel indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>   
				<!-- Wrapper for carousel items -->
				<div class="carousel-inner">
					<div class="item carousel-item active">
						<div class="img-box"><img src="images/Testimonios-01.png" alt=""></div>
		<!-- 				<p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
						<p class="overview"><b>Paula Wilson</b>, Media Analyst</p>  -->
					</div>
					<div class="item carousel-item">
					<div class="img-box"><img src="images/Testimonios-02.png" alt=""></div>
						<!--<p class="testimonial">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis. Suspendisse potenti. Aliquam sit amet gravida nibh, facilisis gravida odio.</p>
						<p class="overview"><b>Antonio Moreno</b>, Web Developer</p>-->
					</div>
					<div class="item carousel-item">
						<div class="img-box"><img src="images/Testimonios-03.png" alt=""></div>
						<!--<p class="testimonial">Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia. Etiam faucibus mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt. Phasellus risus risus, volutpat vel tellus ac, tincidunt fringilla massa. Etiam hendrerit dolor eget rutrum.</p>
						<p class="overview"><b>Michael Holz</b>, Seo Analyst</p>-->
					</div>
				</div>
			 <!-- Left and right controls -->
<!--   <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Siguiente</span>
  </a> -->
			
			</div>


		</div>

			
					</div>
				
				</div>
			</div>

		

		</section>
	

		
		</section>
		<div id="cta">
			<a href="#" class="btn btn-primary cta">QUIERO MÁS INFORMACIÓN</a>
		</div>
		

		<footer>
			 <p class="copyright text-center"> © <?php echo date("Y");  ?> <strong>Protek Seguridad</strong><span class="hidden-xs">- Todos los derechos reservados</span> | MKT y diseño: <a href="http://crandi.com"><span class="crandi"></span></a></p>
		</footer>

		<a id="gotop" href="#"><span></span></a>

		<!-- jquerys -->
    <script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js" type="text/javascript"></script>
		<script src="js/validation.js" type="text/javascript"></script>
		<script src="send_form.js" type="text/javascript"></script>
	
		

		

		<script>
			$(document).ready(function(){
				$('#gotop').hide();
				$(window).scroll(function () {
				if ($(this).scrollTop() > 50) {
					$('#gotop').fadeIn();
				} else {
					$('#gotop').fadeOut();
				}
			});
			// scroll body to 0px on click
			$('#gotop, #cta a').click(function () {
				$('#gotop').tooltip('hide');
				$('body,html').animate({
					scrollTop: 0
				}, 800);
				return false;
			});

			$('#gotop').tooltip('show');

			});
		</script>



<script src="pana-accordion.js"></script>

<script type="text/javascript">

    $(function(){
      accordion.init({
        id: 'accordion',
        expandWidth: 500,
		itemWidth: 215,
		extpand: 0,
		autoPlay: true,
		delay: 5000,
		animateTime: 400,
		borderWidth: 1,
		autoPlay: true,
		deviator: 0,
		bounce:"0px"
      });
    });
    </script>
    <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>



	</div>
</body>
</html>






