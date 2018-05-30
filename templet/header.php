<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
	<!-- Basic Page Needs -->
	<meta charset="UTF-8">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<title>Financial Occult</title>

	<meta name="author" content="themsflat.com">

	<!-- Boostrap style -->
	<link rel="stylesheet" type="text/css" href="<?php $this->url_templet(); ?>stylesheet/bootstrap.css">

    <!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" type="text/css" href="<?php $this->url_templet(); ?>revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="<?php $this->url_templet(); ?>revolution/css/settings.css">
	
	<!-- Theme style -->
	<link rel="stylesheet" type="text/css" href="<?php $this->url_templet(); ?>stylesheet/style.css">

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="<?php $this->url_templet(); ?>stylesheet/colors/color7.css" id="colors"> 
      
	<!-- Reponsive -->
	<link rel="stylesheet" type="text/css" href="<?php $this->url_templet(); ?>stylesheet/responsive.css">

    <!-- Animation Style -->
    <link rel="stylesheet" type="text/css" href="<?php $this->url_templet(); ?>stylesheet/animate.css">

    <!-- Favicon and touch icons  -->
    <link href="<?php $this->url_templet(); ?>icon/apple-touch-icon-48-precomposed.png" rel="apple-touch-icon-precomposed">
    <link href="<?php $this->url_templet(); ?>icon/apple-touch-icon-32-precomposed.png" rel="apple-touch-icon-precomposed">
    <link href="<?php $this->url_templet(); ?>icon/favicon.png" rel="shortcut icon">

	

</head>
	<body>
	    <div id="jmy_web"></div>
	    <div id="jmy_web_tools"></div>


        <div class="boxed">
		<!-- Preloader -->
	    <div class="preloader">
	        <div class="clear-loading loading-effect-2">
	            <span></span>
	        </div>
	    </div>

		<div class="top">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="flat-infomation">
							<li class="phone jmy_web_div" id="header_telefono" data-page="header" data-editor="no"><?php 
                      $this->pnt( 'header_telefono',
								  'Llámanos (55) 5555-5555',
								  ["secundario"=>"header"]
						); 
					?></li>
							<li class="email"><a href="<?php 
		                      $this->pnt( 'header_email_href', 'mailto:support24-7@gmail.com', ["secundario"=>"header"] ); 
							?>" title="email" class="jmy_web_div" id="header_email" data-page="header" data-editor="no"><?php 
		                      $this->pnt( 'header_email',
										  'support24-7@gmail.com',
										  ["secundario"=>"header"]
								); 
							?></a></li>
						</ul><!-- /flat-infomation -->
						<div class="flat-questions">
							<a href="<?php 
		                      $this->pnt( 'header_preguntas_href', '#', ["secundario"=>"header"] ); 
							?>" title="" class="questions jmy_web_div" id="header_preguntas" data-page="header" data-editor="no"><?php 
		                      $this->pnt( 'header_preguntas',
										  '¿Tienes preguntas?',
										  ["secundario"=>"header"]
								); 
							?></a>
							<a href="<?php 
		                      $this->pnt( 'header_cita_href', '#', ["secundario"=>"header"] ); 
							?>" title="" class="appointment jmy_web_div" id="header_cita" data-page="header" data-editor="no"><?php 
		                      $this->pnt( 'header_cita',
										  'OBTEN UNA CITA',
										  ["secundario"=>"header"]
								); 
							?></a>
						</div><!-- /.flat-questions -->
						<div class="clearfix"></div><!-- /.clearfix -->
					</div>
				</div>
			</div>
		</div><!-- /.top -->
		
		<header id="header" class="header bg-color">
			<div class="container">
				<div class="row">
					<div class="header-wrap">
						<div class="col-md-4">
							<div id="logo" class="logo">
								<div class="jmy_web_slider" id="logo_top" data-page="inicio" data-marco="logo_top" data-var='[{"type":"imagen","id":"logo_top_img","url":"<?php $this->url_templet(); ?>images/logo.png"}]' ><a href="<?php $this->url_inicio(); ?>"><img alt="" title="" id="logo_top_img" src="<?php $this->pnt('logo_top_img',$this->url_templet(['return'=>true]).'images/logo-blog.png'); ?>"/></a></div>
								
							</div><!-- /#logo -->                            
						</div><!-- /.col-md-2 -->
						<div class="col-md-8">	
                           		
							<div class="nav-wrap">
                                <div class="btn-menu">
                                    <span></span>
                                </div><!-- //mobile menu button -->								
								<nav id="mainnav" class="mainnav">
									<ul class="menu">
										<li>
											<a href="<?php $this->url_inicio(); ?>" title="">Inicio</a>
										</li>
										<li>
											<a href="<?php $this->url_inicio(); ?>nosotros" title="">Nosotros </a>											
										</li>
										<li>
											<a href="<?php $this->url_inicio(); ?>servicios" title="Servicios">Servicios  <i class="fa fa-angle-down" aria-hidden="true"></i></a>
											<ul class="sub-menu">
												<li><a href="<?php $this->url_inicio(); ?>servicios/asesoria-financiera" title="">Asesoría Financiera</a></li>
												<li><a href="<?php $this->url_inicio(); ?>servicios/asesoria-fiscal" title="">Asesoría Fiscal</a></li>
												<li><a href="<?php $this->url_inicio(); ?>servicios/asesoria-juridica" title="">Asesoría Jurídica</a></li>
												<li><a href="<?php $this->url_inicio(); ?>servicios/asesoria-patrimonial" title="">Asesoría Patrimonial</a></li>
												<li><a href="<?php $this->url_inicio(); ?>servicios/auditoria" title="">Auditoria</a></li>
												<li><a href="<?php $this->url_inicio(); ?>servicios/contabilidad" title="">Contabilidad</a></li>
												<li><a href="<?php $this->url_inicio(); ?>servicios/precios-de-transferiencia" title="">Precios de transferencia</a></li>
												<li><a href="<?php $this->url_inicio(); ?>servicios/propiedad-intelectual" title="">Propiedad Intelectual</a></li>
											</ul><!-- /.sub-menu -->
										</li>
										<li>
											<a href="<?php $this->url_inicio(); ?>capacitacion" title="">Capacitación  <i class="fa fa-angle-down" aria-hidden="true"></i></a>
											<ul class="sub-menu">
												<li><a href="<?php $this->url_inicio(); ?>capacitacion/cursos" title="">Cursos</a></li>
                                                <li><a href="<?php $this->url_inicio(); ?>capacitacion/expositores" title="">Expositores</a></li>
											</ul><!-- /.sub-menu -->
										</li>
										<li>
											<a href="<?php $this->url_inicio(); ?>fundacion" title="">Responsabilidad Social  <i class="fa fa-angle-down" aria-hidden="true"></i></a>
											<ul class="sub-menu">
												<li><a href="<?php $this->url_inicio(); ?>fundacion/trayectoria" title="">Trayectoria</a></li>
												<li><a href="<?php $this->url_inicio(); ?>fundacion/" title="">Fiscalista</a></li>
											</ul><!-- /.sub-menu -->
										</li>
										<li>
											<a href="<?php $this->url_inicio(); ?>contacto" title="">Contacto  </a>
										</li>										
									</ul><!-- /.menu -->									
								</nav><!-- /#mainnav -->															
							</div><!-- /.nav-wrap -->
						</div><!-- /.col-md-9 -->
					</div><!-- /.header-wrap -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</header><!-- /header -->
		