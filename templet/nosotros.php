
<div class="page-title">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page-title-heading">
					<h1 class="h1-title jmy_web_div" data-page="nosotros" id="titulo" data-editor="no">
					<?php $this->pnt('titulo','Nosotros'); ?></h1>
				</div><!-- /.page-title-heading -->
				<ul class="breadcrumbs">
					<li><a href="<?php $this->url_inicio(); ?>" title="">Inicio<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
					<li><a href="<?php $this->url_inicio(); ?>nosotros" title="">Nosotros</a></li>
				</ul><!-- /.breadcrumbs -->
				<div class="clearfix"></div><!-- /.clearfix -->
			</div>
		</div>
	</div>
</div><!-- /.page-title -->

<section class="flat-row pd-aboutv3 " >
	<div class="container">
		<div class="row flat-tabs" data-effect ="fadeIn">
			<div class="col-md-3">
				<div class="jmy_web_contador" data-page="nosotros" id="numero_tabs" data-value="<?php
		        $this->pnt('numero_tabs','3'); 
		        ?>" data-titulo="Inica el número de fotos a mostrar"></div>
				<div class="sidebar left">
					<aside class="widget widget_nav_menu">
						<div class="menu-services-container" >
							<ul class="menu menu-tab">
								<?php 
			                 $paginas = $this->pnt('numero_tabs','3',["return"=>true]); 
			                $contador = 0;
			                for($i=0;$i<$paginas;$i++){ 
			                	$ac = ($i==0) ? 'class="active"':"";
			                	echo '<li '.$ac.'><a href="#" class="jmy_web_div" data-page="nosotros" id="tab_btn_titulo_'.$i.'" data-editor="no">'.$this->pnt('tab_btn_titulo_'.$i,'Titulo de la subsección',["return"=>true]).'</a></li>';
			                	}?>	
							</ul>
						</div>
					</aside> <!-- /.widget_nav_menu -->

					<aside class="widget widget-brochure services">
						<div class="brochure-box-title">
							<h5 class="brochure-title jmy_web_div" data-page="nosotros" id="noticia_titulo" data-editor="no"><?php $this->pnt('noticia_titulo','Notícia relevante'); ?></h5>
							<p class="jmy_web_div" data-page="nosotros" id="noticia_texto" data-editor="no"><?php $this->pnt('noticia_texto','Texto texto texto texto texto texto texto texto texto
							 texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto'); ?>
							</p>
						</div><!-- /.brochure-box-title -->
					</aside><!-- /.widget-brochure -->
				</div><!-- /.sidebar -->
			</div> <!-- /.col-md-3 -->  
			<div class="col-md-9 content-tab">


				<?php 
                 $paginas = $this->pnt('numero_tabs','3',["return"=>true]); 
                $contador = 0;
                for($i=0;$i<$paginas;$i++){  ?>


				<div class="content-inner">
					 <div class="row">
	                    <div class="col-md-3"> 

	                        <div class="jmy_web_contador" data-page="nosotros" id="no_imagenes_tab_<?php echo $i; ?>" data-value="<?php $this->pnt('no_imagenes_tab_'.$i,'2'); ?>" data-titulo="Número de clientes "></div>
	                    </div>
	                    <div class="col-md-9"> 

	                          <div class=" jmy_web_slider" data-page="nosotros" data-tabla="vistaweb" id="marco<?php echo $i; ?>" data-marco="marco<?php echo $i; ?>" 
	                            <?php
	                            	$va=[];
	                            for ($u=0; $u < $this->pnt('no_imagenes_tab_'.$i,'2',["return"=>true]) ; $u++){
	                                $va[] = [ "type"=>"imagen",
	                                        "id"=>"tab_imagenes_".$i."_".$u,
	                                        "class"=>"tab_imagenes_".$i."_".$u,
	                                        "idadd"=>"tab_imagenes_".$i."_".$u."_clone",
	                                        "width"=>"802",
	                                        "height"=>"432",
	                                        "url"=>$this->url_templet(["return"=>true]).'images/about/s01.jpg',
	                                        ];

	                            }
	                            ?>
					    data-var='<?php echo json_encode($va); ?>' ></div>
					                    </div>
					</div>
					<div class="wrap-main-post about-v3">
						<div class="flexslider s2">
	                        <div class="flat-slides">                            
	                            <ul class="slides" >
	                            	   <?php
	                            for ($u=0; $u < $this->pnt('no_imagenes_tab_'.$i,'2',["return"=>true]) ; $u++){ ?>
	                                <li ><img data-no-retina alt="" title="" id="tab_imagenes_<?php echo $i.'_'.$u; ?>" src="<?php $this->pnt('tab_imagenes_'.$i.'_'.$u,$this->url_templet(['return'=>true]).'images/about/s01.jpg'); ?>"/>
	                                </li>
	                            <?php } ?>
	                            </ul> 
	                        </div> <!-- /.flat-slides -->
	                    </div> <!-- /.wrar-slides -->

	                    <div class="box-content">
							<div class="title jmy_web_div" data-page="nosotros" id="tab_titulo_<?php echo $i; ?>" data-editor="no"><?php $this->pnt('tab_titulo_'.$i,'Título principal '.$i); ?></div>
							<div class="jmy_web_div" data-page="nosotros" id="tab_desc_<?php echo $i; ?>"><?php $this->pnt('tab_desc_'.$i,'<p>In your life, you may have many times facing financial issues. It’s good if you know how to handle it by yourself and have enough time to take care of it. In other cases, it’s time you get a financial consulting service. And the article below will show you those cases.quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>'); ?>										
</div>
							<div class="dividers dividers-bc-v4"></div>
						</div>

<div class="jmy_web_contador" data-page="nosotros" id="numero_subsecciones_<?php echo $i; ?>" data-value="<?php
$this->pnt('numero_subsecciones_'.$i,'3'); 
?>" data-titulo="Inica el número de fotos a mostrar"></div>
				<?php 
                 $subsecciones = $this->pnt('numero_subsecciones_'.$i,'3',["return"=>true]); 			                
                for($u=0;$u<$subsecciones;$u++){  ?>

						<div class="flat-text-block-timeline">
							<div class="year jmy_web_div" data-page="nosotros" id="subsecciones_titulo_intro_<?php echo $i.'_'.$u; ?>" data-editor="no"><?php $this->pnt('subsecciones_titulo_intro_'.$i.'_'.$u,date('Y')); ?></div>
							<div class="flat-timeline-content">
								<div class="box-content">
									<div class="title jmy_web_div" data-page="nosotros" id="subsecciones_titulo_<?php echo $i.'_'.$u; ?>" data-editor="no"><?php $this->pnt('subsecciones_titulo_'.$i.'_'.$u,'Título de la subsección'); ?></div>
									<div class=" jmy_web_div" data-page="nosotros" id="subsecciones_desc_<?php echo $i.'_'.$u; ?>"><?php $this->pnt('subsecciones_desc_'.$i.'_'.$u,'<p>This was the time when we started our company. We had no idea how far we would go, we weren’t even sure that we would be able to survive for a few years. What drove us to start the company was the understanding that we could provide a service no one else was providing.</p> '); ?>
										
									</div>

								</div>
							</div>
						</div>
						<?php } ?>

						
					</div>
				</div>


					<?php } ?>



					</div> <!-- /.wrap-main-post -->
				</div>
			</div> <!-- /.col-md-9 -->
		</div><!-- /.row -->					
	</div><!-- /.container -->
</section><!-- /.flat-row-iconbox -->  