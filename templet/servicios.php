
<div class="page-title">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page-title-heading">
					<h1 class="h1-title jmy_web_div" data-page="servicios" id="titulo" data-editor="no">
					<?php $this->pnt('titulo','Servicios'); ?></h1>
				</div><!-- /.page-title-heading -->
				<ul class="breadcrumbs">
					<li><a href="<?php $this->url_inicio(); ?>" title="">Inicio<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
					<li><a href="<?php $this->url_inicio(); ?>servicios" title="">Servicios<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				</ul><!-- /.breadcrumbs -->
				<div class="clearfix"></div><!-- /.clearfix -->
			</div>
		</div>
	</div>

<section class="flat-row pd-services-post">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="title-section center s1">
					<h2 class=" jmy_web_div" data-page="servicios" id="subtitulo" data-editor="no">
					<?php $this->pnt('subtitulo','Título Servicios'); ?> </h2>
					<p class="sub-title-section jmy_web_div" data-page="servicios" id="descripcion" data-editor="no">
					<?php $this->pnt('descripcion','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor<br>incididunt ut labore et dolore magna aliqua.'); ?></p>
				</div><!-- /.title-section -->
				<div class="dividers dividers-imagebox"></div>
			</div>
		</div><!-- /.row -->

		<div class="row">
			<div class="col-md-12">
				<div class="jmy_web_contador" data-page="servicios" id="numero_elementos" data-value="<?php
			        $this->pnt('numero_elementos','6'); 
			        ?>" data-titulo="Inica el número de servicios a mostrar"></div>

				<div class="wrap-imagebox-grid">

			        <?php 
		                 $paginas = $this->pnt('numero_elementos','6',["return"=>true]); 
		                for($i=0;$i<$paginas;$i++){  ?>

					<div class="flat-imagebox services-grid item">
						<div class="flat-imagebox-inner">
							<div class="flat-imagebox-image  jmy_web_slider" id="mbox_img_<?php echo $i; ?>" data-page="servicios" data-marco="mbox_img_<?php echo $i; ?>" 

								 <?php
	                            	$va=[];
	                                $va[] = [ "type"=>"imagen",
	                                        "id"=>"box_img_".$i,
	                                        //"class"=>"tab_imagenes_".$i."_".$u,
	                                        //"idadd"=>"tab_imagenes_".$i."_".$u."_clone",
	                                        "width"=>"370",
	                                        "height"=>"240",
	                                        "url"=>$this->url_templet(["return"=>true]).'images/imagebox/05.jpg',
	                                        ];

			                            
			                            ?>
							    data-var='<?php echo json_encode($va); ?>'
							    >
								<img data-no-retina height="60" alt="" title="" id="box_img_<?php echo $i; ?>" src=""/>
								<img src="<?php $this->pnt('box_img_'.$i,$this->url_templet(['return'=>true]).'images/imagebox/05.jpg'); ?>" alt="img">
							</div>
							<div class="flat-imagebox-header">
								<h3 class="flat-imagebox-title">
									<a href="<?php $this->pnt('box_titulo_'.$i.'_href',$this->url_inicio(['return'=>true]).'servicios/'); ?>" class="jmy_web_div" data-page="servicios" id="box_titulo_<?php echo $i; ?>" data-editor="no">
									<?php $this->pnt('box_titulo_'.$i,'Titulo del servicio'); ?></a>	
								</h3>
							</div>
							<div class="flat-imagebox-content">
								<div class="flat-imagebox-desc jmy_web_div" data-page="servicios" id="box_desc_<?php echo $i;?>" data-editor="no">
									<?php $this->pnt('box_desc_'.$i,'Descripción corta del servicio '); ?>

								</div>
								<div class="flat-imagebox-button">
									<a href="<?php $this->pnt('box_boton_'.$i.'_href',$this->url_inicio(['return'=>true]).'servicios/'); ?>" target="_blank" class="jmy_web_div" data-page="servicios" id="box_boton_<?php echo $i; ?>" data-editor="no">
										<?php $this->pnt('box_boton_'.$i,'Leer más '); ?>
									</a>
								</div>
							</div>
						</div>
					</div> <!-- /.item .flat-imagebox -->

					<?php } ?>
				</div> <!-- /.wrap-imagebox-grid -->
			</div>
		</div>
	</div><!-- /.container -->
</section><!-- /.flat-row-iconbox -->  