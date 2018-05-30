<?php
$page = $data['pagina'];

?>

<div class="page-title">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page-title-heading">
					<h1 class="h1-title jmy_web_div" data-page="<?php echo $page; ?>" id="titulo" data-editor="no">
					<?php $this->pnt('titulo','Servicios'); ?></h1>
				</div><!-- /.page-title-heading -->
				<ul class="breadcrumbs">
					<li><a href="<?php $this->url_inicio(); ?>" title="">Inicio<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
					<li><a href="<?php $this->url_inicio(); ?>servicios" title="">Servicios<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
					
					<li><a href="<?php $this->pnt('breadcrum',$this->url_inicio(['return'=>true]).'servicios'); ?><?php $this->url_inicio(); ?>servicios/<?php echo $page; ?>" title="" class="jmy_web_div" data-page="<?php echo $page; ?>" id="breadcrum" data-editor="no">
						<?php $this->pnt('breadcrum','Nombre del servicio '); ?>
						></a></li>
				</ul><!-- /.breadcrumbs -->
				<div class="clearfix"></div><!-- /.clearfix -->
			</div>
		</div>
	</div>
</div><!-- /.page-title -->

<section class="flat-row pd-aboutv3 " >
	<div class="container">
		<div class="row flat-tabs" data-effect ="fadeIn">
			<div class="col-md-3 hidden">
				<div class="jmy_web_contador" data-page="<?php echo $page; ?>" id="numero_tabs" data-value="<?php
		        $this->pnt('numero_tabs','1'); 
		        ?>" data-titulo="Inica el número de fotos a mostrar"></div>
				<div class="sidebar left">
					<aside class="widget widget_nav_menu">
						<div class="menu-services-container" >
							<ul class="menu menu-tab">
								<?php 
			                 $paginas = $this->pnt('numero_tabs','1',["return"=>true]); 
			                $contador = 0;
			                for($i=0;$i<$paginas;$i++){ 
			                	$ac = ($i==0) ? 'class="active"':"";
			                	echo '<li '.$ac.'><a href="#" class="jmy_web_div" data-page="'.$page.'" id="tab_btn_titulo_'.$i.'" data-editor="no">'.$this->pnt('tab_btn_titulo_'.$i,'Titulo de la subsección',["return"=>true]).'</a></li>';
			                	}?>	
							</ul>
						</div>
					</aside> <!-- /.widget_nav_menu -->

					<aside class="widget widget-brochure services">
						<div class="brochure-box-title">
							<h5 class="brochure-title jmy_web_div" data-page="<?php echo $page; ?>" id="noticia_titulo" data-editor="no"><?php $this->pnt('noticia_titulo','Notícia relevante'); ?></h5>
							<p class="jmy_web_div" data-page="<?php echo $page; ?>" id="noticia_texto" data-editor="no"><?php $this->pnt('noticia_texto','Texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto'); ?>
							</p>
						</div><!-- /.brochure-box-title -->
					</aside><!-- /.widget-brochure -->
				</div><!-- /.sidebar -->
			</div> <!-- /.col-md-3 -->  
			<div class="col-md-12 content-tab">


				<?php 
                 $paginas = $this->pnt('numero_tabs','3',["return"=>true]); 
                $contador = 0;
                for($i=0;$i<$paginas;$i++){  ?>

				<div class="content-inner">
					<div class="wrap-one-half services">
						<div class="one-half v1">
							<div class="jmy_web_contador" data-page="<?php echo $page; ?>" id="box_cont_concepto_<?php echo $i; ?>" data-value="<?php
					        $this->pnt('box_cont_concepto_'.$i,'3'); 
					        ?>" data-titulo="Inica el número de conceptos a mostrar"></div>

							<div class="box-content">
								<?php 
				                 $subsecciones = $this->pnt('box_cont_concepto_'.$i,'3',["return"=>true]); 			                
				                for($u=0;$u<$subsecciones;$u++){  ?>

								<div class="title jmy_web_div" data-page="<?php echo $page; ?>" id="box_concepto_titulo_<?php echo $i.'_'.$u; ?>" data-editor="no"><?php $this->pnt('box_concepto_titulo_'.$i.'_'.$u,'Sub título '.$i); ?></div>
								<p class="jmy_web_div" data-page="<?php echo $page; ?>" id="box_concepto_desc<?php echo $i.'_'.$u; ?>" data-editor="no"><?php $this->pnt('box_concepto_desc'.$i.'_'.$u,'Sed facilisis lorem in orci bibendum ullamcorper.
								Mauris vitae augue elementum, sodales nulla a,
								semper ligula. Nullam vel enim risus. Integer rhoncus
								hendrerit sem egestas porttitor. Integer et mi sed dolor
								eleifend pretium quis ut velit. '); ?></p>
								<div class="dividers dividers-bc-v1"></div>
								<ul class="flat-list jmy_web_div" data-page="<?php echo $page; ?>" id="box_concepto_lista_<?php echo $i.'_'.$u; ?>" data-editor="no"><?php $this->pnt('box_concepto_lista_'.$i.'_'.$u,'<li>Work fewer hours — and make more money</li>
									<li>Attract and retain quality, high-paying customers</li>
									<li>Integer rhoncus hendrerit sem egestas porttitor.</li> '); ?>
								</ul>
								<?php } ?>
							</div>									
						</div> <!-- /.one-half -->
						<div class="one-half v2">

							 <div class="row">
			                    <div class="col-md-3"> 

			                        <div class="jmy_web_contador" data-page="<?php echo $page; ?>" id="no_imagenes_tab_<?php echo $i; ?>" data-value="<?php $this->pnt('no_imagenes_tab_'.$i,'2'); ?>" data-titulo="Número de clientes "></div>
			                    </div>
			                    <div class="col-md-9"> 

			                          <div class=" jmy_web_slider" data-page="<?php echo $page; ?>"  data-tabla="vistaweb"  id="marco<?php echo $i; ?>" data-marco="marco<?php echo $i; ?>" 
			                            <?php
			                            	$va=[];
			                            for ($u=0; $u < $this->pnt('no_imagenes_tab_'.$i,'2',["return"=>true]) ; $u++){
			                                $va[] = [ "type"=>"imagen",
			                                        "id"=>"tab_imagenes_".$i."_".$u,
			                                        "class"=>"tab_imagenes_".$i."_".$u,
			                                        "idadd"=>"tab_imagenes_".$i."_".$u."_clone",
			                                        "width"=>"385",
			                                        "height"=>"252",
			                                        "url"=>$this->url_templet(["return"=>true]).'images/slides/sv1.jpg',
			                                        ];

			                            }
			                            ?>
							    data-var='<?php echo json_encode($va); ?>' ></div>
							                    </div>
							</div>
							<div class="flexslider s1">
		                        <div class="flat-slides">                            
		                            <ul class="slides">
		                                <li>   
		                                   <?php
	                            for ($u=0; $u < $this->pnt('no_imagenes_tab_'.$i,'2',["return"=>true]) ; $u++){ ?>
	                                <li ><img data-no-retina alt="" title="" id="tab_imagenes_<?php echo $i.'_'.$u; ?>" src="<?php $this->pnt('tab_imagenes_'.$i.'_'.$u,$this->url_templet(['return'=>true]).'images/slides/sv1.jpg'); ?>"/>
	                                </li>
	                            <?php } ?>
		                                </li>
		                            </ul> 
		                        </div> <!-- /.flat-slides -->
		                    </div> <!-- /.wrar-slides -->
		                    <div class="jmy_web_contador" data-page="<?php echo $page; ?>" id="box_cont_tabs_<?php echo $i; ?>" data-value="<?php
					        $this->pnt('box_cont_tabs_'.$i,'3'); 
					        ?>" data-titulo="Inica el número de tableros a mostrar"></div>
		                    <div class="flat-accordion style">
	                            <?php
		                    		$subsecciones = $this->pnt('box_cont_tabs_'.$i,'3',["return"=>true]); 			                
				                for($u=0;$u<$subsecciones;$u++){ 
				                	$act = ($u==0)?'active':'';
				                 ?>
	                            <div class="flat-toggle">
	                                <h6 class="toggle-title <?php echo $act; ?> jmy_web_div" data-page="<?php echo $page; ?>" id="box_tabs_titulo_<?php echo $i.'_'.$u; ?>" data-editor="no">
	                                	<?php $this->pnt('box_tabs_titulo_'.$i.'_'.$u,'Título de tab '); ?>

	                                </h6>
	                                <div class="toggle-content jmy_web_div" data-page="<?php echo $page; ?>" id="box_tabs_desc_<?php echo $i.'_'.$u; ?>" data-editor="yes">
	                                	<?php $this->pnt('box_tabs_desc_'.$i.'_'.$u,'
	                                    <p>Good strategy is the antidote to competition. Strategic thinking is the process of developing a strategy that defines your value proposition and your unique value chain. This process includes market and competitive research as well as an assessment of the company’s capabilities and the industry forces impacting it.</p>'); ?>

	                                </div>
	                            </div><!-- /toggle -->

								<?php } ?>
	                            
	                        </div> <!-- /.flat-accordion -->
						</div> <!-- /.one-half -->
						<div class="dividers dividers-bc-v2"></div>
						<div class="box-content">
							<div class="title jmy_web_div" data-page="<?php echo $page; ?>" id="box_final_desc_titulo_<?php echo $i; ?>" data-editor="no"><?php $this->pnt('box_final_desc_titulo_'.$i,'Título descripción'); ?></div>
							<dif class="jmy_web_div" data-page="<?php echo $page; ?>" id="box_final_desc_desc_<?php echo $i; ?>" data-editor="on"><?php $this->pnt('box_final_desc_desc_'.$i,'<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore</p>
							<div class="dividers dividers-bc-v3"></div>									
							<p>In your life, you may have many times facing financial issues. It’s good if you know how to handle it by yourself and have enough time to take care of it. In other cases, it’s time you get a financial consulting service. And the article below will show you those cases.</p>
							<div class="dividers dividers-bc-v3"></div>									
							<p>In your life, you may have many times facing financial issues. It’s good if you know how to handle it by yourself and have enough time to take care of it. In other cases, it’s time you get a financial consulting service. And the article below will show you those cases.</p>
							<div class="dividers dividers-bc-v3"></div>									
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore</p>'); ?>
							
						</div>
					</div> <!-- /.wrap-one-half -->
				</div>
				<?php } ?>



					</div> <!-- /.wrap-main-post -->
				</div>
			</div> <!-- /.col-md-9 -->
		</div><!-- /.row -->					
	</div><!-- /.container -->
</section><!-- /.flat-row-iconbox -->