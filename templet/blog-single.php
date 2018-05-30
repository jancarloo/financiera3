<?php

	$this ->pre(['p'=>$data,'t'=>'Datos s']);

	$blog = $data['url'];

?>

<div class="page-title">

	<div class="container">

		<div class="row">

			<div class="col-md-12">

				<div class="page-title-heading">

					<h1 class="h1-title jmy_web_div"  data-tabla="blog" data-page="<?php echo $blog; ?>"  id="titulo" data-editor="no">

					<?php $this->pnt('titulo','Titulo del blog'); ?></h1>

				</div><!-- /.page-title-heading -->

				<ul class="breadcrumbs">

					<li><a href="<?php $this->url_inicio(); ?>" title="">Inicio<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>

					<li><a href="<?php $this->url_inicio(); ?>blog" title="">Blog</a></li>

				</ul><!-- /.breadcrumbs -->

				<div class="clearfix"></div><!-- /.clearfix -->

			</div>

		</div>

	</div>

</div><!-- /.page-title -->



<section class="flat-row pd-aboutv3 " >

	<div class="container">

		<div class="row flat-tabs" data-effect ="fadeIn">

			<div class="col-md-9 content-tab">






				<div class="content-inner">

		<div class=" jmy_web_slider" data-tabla="blog" data-page="<?php echo $blog; ?>"  id="marco1" data-marco="marco1" 

	data-var='[{"type":"imagen","id":"imagen_1","idadd":"imagen_1_clone","width":"803","height":"433","url":"<?php $this->url_templet(); ?>images/about/s01.jpg"},{"type":"imagen","id":"imagen_2","idadd":"imagen_2_clone","width":"803","height":"433","url":"<?php $this->url_templet(); ?>images/about/s01.jpg"}]' >Cambia tu imagen</div>


		


					<div class="wrap-main-post about-v3">

						<div class="flexslider s2">

	                        <div class="flat-slides">                            

	                            <ul class="slides" >



	                                <li><img data-no-retina alt="" title="" id="imagen_1" src="<?php $this->pnt('imagen_1',$this->url_templet(['return'=>true]).'images/about/s01.jpg'); ?>"/>
	                                </li>
	                                <li><img data-no-retina alt="" title="" id="imagen_2" src="<?php $this->pnt('imagen_2',$this->url_templet(['return'=>true]).'images/about/s01.jpg'); ?>"/>
	                                </li>




	                            </ul> 

	                        </div> <!-- /.flat-slides -->

	                    </div> <!-- /.wrar-slides -->



	                    <div class="box-content">
	                    	<div class="row">
	                    		<div class="col-md-4">
	                    			<div class="desc jmy_web_div"  data-tabla="blog" data-page="<?php echo $blog; ?>"  id="fecha" data-editor="no"><?php $this->pnt('fecha',date('Y/m/d')); ?></div>	
	                    		</div>
	                    		<div class="col-md-4">
	                    			<div class="desc jmy_web_div"  data-tabla="blog" data-page="<?php echo $blog; ?>"  id="autor" data-editor="no"><?php $this->pnt('autor','Autor'); ?></div>	
	                    		</div>
	                    		<div class="col-md-4">
	                    			<div class="desc jmy_web_div"  data-tabla="blog" data-page="<?php echo $blog; ?>"  id="categorias" data-editor="no"><?php $this->pnt('categorias','categoria 1, categoria 2'); ?></div>	
	                    		</div>
	                    	</div>
								

							<div class="title jmy_web_div"  data-tabla="blog" data-page="<?php echo $blog; ?>"  id="sub_titulo" data-editor="no"><?php $this->pnt('sub_titulo','Descripción corta'); ?></div>

							<div class="jmy_web_div"  data-tabla="blog" data-page="<?php echo $blog; ?>"  id="texto"><?php $this->pnt('texto','<p>In your life, you may have many times facing financial issues. It’s good if you know how to handle it by yourself and have enough time to take care of it. In other cases, it’s time you get a financial consulting service. And the article below will show you those cases.quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>'); ?>										

</div>

							<div class="dividers dividers-bc-v4"></div>

						</div>





						

					</div>








					</div> <!-- /.wrap-main-post -->

					

			<div class="col-md-3">

				

				<div class="sidebar left">

					



					<aside class="widget widget-brochure services">

						<div class="brochure-box-title">

							<h5 class="brochure-title jmy_web_div"  data-tabla="blog" data-page="<?php echo $blog; ?>"  id="noticia_titulo" data-editor="no"><?php $this->pnt('noticia_titulo','Notícia relevante'); ?></h5>

							<p class="jmy_web_div"  data-tabla="blog" data-page="<?php echo $blog; ?>"  id="noticia_texto" data-editor="no"><?php $this->pnt('noticia_texto','Texto texto texto texto texto texto texto texto texto

							 texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto'); ?>

							</p>

						</div><!-- /.brochure-box-title -->

					</aside><!-- /.widget-brochure -->

				</div><!-- /.sidebar -->

			</div> <!-- /.col-md-3 -->  

				</div>

			</div> <!-- /.col-md-9 -->

			

		</div><!-- /.row -->					

	</div><!-- /.container -->

</section><!-- /.flat-row-iconbox -->  