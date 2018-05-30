<div class="row">
    <div class="col-md-3"> 

        <div class="jmy_web_contador" data-page="inicio" id="no_slider" data-value="<?php $this->pnt('no_slider','2'); ?>" data-titulo="Número de clientes "></div>
    </div>
    <div class="col-md-9"> 

          <div class=" jmy_web_slider" data-page="inicio" data-tabla="vistaweb"  id="marco1" data-marco="marco1" 
            <?php
            $va=[];
            for ($i=0; $i < $this->pnt('no_slider','2',["return"=>true]) ; $i++){

                $va[] = [ "type"=>"text",
                        "id"=>"slide_titulo_".$i,
                        "value"=>$this->pnt('slide_titulo_'.$i,'Título Slide '.$i,["return"=>true]),
                        "placeholder"=>"Título Slide ".$i,
                        ];
                $va[] = [ "type"=>"text",
                        "id"=>"slide_desc_".$i,
                        "value"=>$this->pnt('slide_desc_'.$i,'Descripción corta '.$i,["return"=>true]),
                        "placeholder"=>"Descripción corta ".$i,
                        ];
                $va[] = [ "type"=>"text",
                        "id"=>"slide_url_".$i,
                        "value"=>$this->pnt('slide_url_'.$i,'#'.$i,["return"=>true]),
                        "placeholder"=>"URL ".$i,
                        ];
                $va[] = [ "type"=>"imagen",
                        "id"=>"slide_img_".$i,
                        "class"=>"slide_img_".$i,
                        //"idadd"=>"",
                        "width"=>"1920",
                        "height"=>"799",
                        "url"=>$this->url_templet(["return"=>true]).'images/slides/slide1.png',
                        ];
            }
            ?>
data-var='<?php echo json_encode($va); ?>' ></div>
    </div>

</div> <!-- /.row -->

    <!-- START REVOLUTION SLIDER 5.4.2 auto mode -->
        <div id="banner-container" class="rev_slider_wrapper fullwidthbanner-container " data-alias="classic4export" data-source="gallery" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                <!-- START REVOLUTION SLIDER 5.3.0.2 auto mode -->
                <div id="banner-slide" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.3.0.2">
                    <div class="slotholder"></div>

                    
                    <ul><!-- SLIDE  -->
                        <?php for ($i=0; $i < $this->pnt('no_slider','2',["return"=>true]) ; $i++) { ?>
                        <!-- SLIDE 3 -->
                        <li data-index="rs-304<?php echo $i;?>" data-transition="slideremovedown" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"    data-rotate="0"  data-saveperformance="off"  data-title="Ken Burns" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">                        

                            <!-- MAIN IMAGE -->
                            <img src="<?php $this->pnt('slide_img_'.$i, $this->url_templet(['return'=>true]).'images/slides/slide1.png'); ?>" <?php echo 'id="slide_img_'.$i.'"'; ?>  alt=""  data-bgposition="center center" data-kenburns="off" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 12 -->
                            <div class="tp-caption title-slide color-white letter-spacing3px sombra" 
                                id="slide-3049-layer-1" 
                                data-x="['left','left','left','left']" data-hoffset="['39','39','39','39']" 
                                data-y="['middle','middle','middle','middle']" data-voffset="['-105','-77','-77','-77']" 
                                data-fontsize="['55','52','45','35']"
                                data-lineheight="['60','57','50','40']"
                                data-fontweight="['600','600','600','600']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                     
                                data-type="text" 
                                data-responsive_offset="on"                             

                                data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[10,10,10,10]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0"
                                data-paddingleft="[0,0,0,0]"

                                style="z-index: 16; white-space: nowrap;text-transform:left;"> <?php $this->pnt('slide_titulo_'.$i,'Titulo del slider '.$i); ?>
                            </div>

                            <!-- LAYER NR. 13 -->
                            <div class="tp-caption sub-title color-white sombra" 
                                id="slide-3049-layer-4" 
                                data-x="['left','left','left','left']" data-hoffset="['37','37','37','37']" 
                                data-y="['middle','middle','middle','middle']" data-voffset="['30','30','30','0']"
                                data-fontsize="['20',18','18','14']" 
                                data-lineheight="['30','28','28','24']"
                                data-fontweight="['400','400','400','400']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                     
                                data-type="text" 
                                data-responsive_offset="on" 

                                data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"

                                style="z-index: 17; white-space: nowrap;text-transform:left;"><?php $this->pnt('slide_desc_'.$i,'Descripción corta del slide '.$i); ?>
                            </div>
                            <?php /*
                            <a href="#" target="_self" class="tp-caption flat-button-slider bg-blue" 

                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                         
                            data-x="['left','left','left','left']" data-hoffset="['36','36','36','36']" 
                            data-y="['middle','middle','middle','middle']" data-voffset="['140','140','140','80']"
                            data-fontsize="['14','14','14','14']" 
                            data-width="['auto']"
                            data-height="['auto']">Our Company
                            </a><!-- END LAYER LINK -->
*/ ?>
                            <a href="<?php $this->pnt('slide_url_'.$i,'#'); ?>" target="_self" class="tp-caption flat-button-slider bg-transparent" 

                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                         
                            data-x="['left','left','left','left']" data-hoffset="['205','205','205','205']" 
                            data-y="['middle','middle','middle','middle']" data-voffset="['140','140','140','80']"  
                            data-fontsize="['14',14','14','14']"
                            data-width="['auto']"
                            data-height="['auto']">Ver más
                            </a><!-- END LAYER LINK -->
                        </li>
                    <?php } ?>                
                    </ul>
                </div>
        </div><!-- END REVOLUTION SLIDER -->

		<section class="flat-row pd-imagebox">
			<div class="container">
				<div class="row">
                    <?php for ($i=0; $i < 3 ; $i++) { ?>
					<div class="col-md-4">
                      
						<div class="imagebox-item">
							<div class="imagebox style1">
                                <div class="imagebox-image jmy_web_slider" id="box1_m_<?php echo $i; ?>" data-page="inicio" data-tabla="vistaweb" data-marco="box1_m_<?php echo $i; ?>" data-var='[{"type":"text","id":"box1_titulo_<?php echo $i;?>","value":"<?php $this->pnt('box1_titulo_<?php echo $i; ?>','Una idea inovadora'); ?>","placeholder":"Titulo"},{"type":"text","id":"box1_url_<?php echo $i;?>","value":"<?php $this->pnt('box1_url_<?php echo $i; ?>','#'); ?>","placeholder":"Url"},{"type":"imagen","id":"box1_img_<?php echo $i; ?>","url":"<?php $this->url_templet(); ?>images/imagebox/001.jpg","width":"370","height":"247"}]' ><img alt="" title="" id="box1_img_<?php echo $i; ?>" src="<?php $this->pnt('box1_img_'.$i,$this->url_templet(['return'=>true]).'images/imagebox/001.jpg'); ?>"/>
									
								</div><!-- /.imagebox-image -->
								
								<div class="imagebox-title">
									<h3><a href="<?php $this->pnt('box1_url_<?php echo $i; ?>','#'); ?>" title="" class="jmy_web_div" data-page="inicio" id="box1_titulo_<?php echo $i; ?>" data-editor="no">
<?php $this->pnt('box1_titulo_'.$i,'Una idea inovadora'); ?></a></h3>
								</div><!-- /.iamgebox-title -->
								<div class="imagebox-content">
									<div class="imagebox-desc jmy_web_div" data-page="inicio" id="box1_desc_<?php echo $i; ?>" data-editor="no"><?php $this->pnt('box1_desc_'.$i,'Sed ut perspiciatis unde omnis iste error sit voluptatem accusantium doloremque lau dantium, rem aperiam eaque ipsa ab illo inventore veritatis '); ?>
									</div>
									<div class="imagebox-button">
                                        <a href="<?php $this->pnt('box1_boton_'.$i.'_href','#'); ?>" title="" class="jmy_web_div" data-page="inicio" id="box1_boton_<?php echo $i; ?>" data-editor="no"><?php $this->pnt('box1_boton_'.$i,'leer más'); ?></a>
									</div>
								</div><!-- /.imagebox-content -->
							</div><!-- /.imagebox -->
						</div><!-- /.imagebox-item -->
					</div><!-- /.col-md-4 -->
                    <?php } ?>
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.flat-row-imagebox -->

		<section class="flat-row flat-iconbox bg-theme">
			<div class="container">

				<div class="row">
					<div class="col-md-12">
						<div class="title-section left">
							<h2 class="jmy_web_div" data-page="inicio" id="servicios_titulo" data-editor="no">
<?php $this->pnt('servicios_titulo','Nuestros servicios'); ?></h2>
						</div><!-- /.title-section -->
					</div>
				</div><!-- /.row -->

				<div class="row">
                    <?php 

                    $iconos = ['ion-clipboard','line-chart','clock','magic','artboard','global'];
                    $ic = 0 ;
                    for ($i=0; $i < 6 ; $i++) { 
                        $ic=($ic>count($iconos))?0:$ic;
                        $icono=$iconos[$ic];
                        if($i==3){
                            echo '</div><!-- /.row --><div class="row"><div class="col-md-12"><div class="height80"></div></div></div><div class="row">';
                        }

                        ?>

                    <div class="col-md-4">
                        <div class="iconbox-item">
                            <div class="iconbox style1">
                                <div class="box-header">
                                    <div class="icon-rounded <?php echo $icono; ?>">

                                    </div><!-- /.icon-rounded -->
                                    <div class="box-title">
                                        <a href="<?php $this->pnt('servicios_titulo_'.$i.'_href','#'); ?>" title="" class="jmy_web_div" data-page="inicio" id="servicios_titulo_<?php echo $i; ?>" data-editor="no">
                                        <?php $this->pnt('servicios_titulo_'.$i,'titulo '); ?>
                                        </a>
                                    </div><!-- /.box-title -->
                                </div><!-- /.box-header -->
                                <div class="box-content jmy_web_div" data-page="inicio" id="servicios_desc_<?php echo $i; ?>" data-editor="no">
                                        <?php $this->pnt('servicios_desc_'.$i,'Donec lacinia mi rutrum sagittis
                                    consequat. Donec sagittis, tellus sodales sollicitudin commodo '); ?>
                                </div><!-- /.box-content -->
                            </div><!-- /.iconbox -->
                        </div><!-- /.iconbox-item -->
                    </div><!-- /.col-md-4 -->
                    <?php $ic++; } ?>
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.flat-row-iconbox -->

		<section class="flat-row flat-owl-stage hidden">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="title-section left">
							 <h2 class="jmy_web_div" data-page="inicio" id="proyecctos_titulo" data-editor="no">
<?php $this->pnt('proyecctos_titulo','Proyectos'); ?></h2>
						</div><!-- /.title-section -->
					</div>
				</div><!-- /.row -->
				<div class="row">
					<div class="col-md-12">
                        <div class="jmy_web_contador" data-page="inicio" id="proyectos_numero_sliders" data-value="<?php
                        $this->pnt('proyectos_numero_sliders','3'); 
                        ?>" data-titulo="Inica el número de fotos a mostrar"></div>
						<div class="iconbox-slider">
							<ul class="slides" data-item="3" data-nav="false" data-dots="false" data-auto="true">
                                <?php 
                                 $paginas = $this->pnt('proyectos_numero_sliders','3',["return"=>true]); 
                                $contador = 0;
                                for($i=0;$i<$paginas;$i++){ ?>
								<li class="item">
									<div class="featured-post jmy_web_slider" id="proyectos_box_<?php echo $i; ?>" data-page="inicio" data-marco="proyectos_box_<?php echo $i; ?>" data-var='[{"type":"imagen","id":"proyectos_img_<?php echo $i; ?>","url":"<?php $this->url_templet(); ?>images/logo.png"}]' >

                                        <img alt="" title="" id="proyectos_img_<?php echo $i; ?>" src="<?php $this->pnt('proyectos_img_'.$i,$this->url_templet(['return'=>true]).'images/stage/image-01.png'); ?>"/>
                                        <a href="<?php $this->url_inicio(); ?>"><i class="fa fa-arrows-alt"></i></a>
									</div>
									<div class="title-post">
										 <a href="<?php $this->pnt('proyectos_titulo_'.$i.'_href','#'); ?>" title="" class="jmy_web_div" data-page="inicio" id="proyectos_titulo_<?php echo $i; ?>" data-editor="no">
                                        <?php $this->pnt('proyectos_titulo_'.$i,'titulo '); ?>
                                        </a>
									</div>
									<div class="category-post">
										 <a href="<?php $this->pnt('proyectos_desc_'.$i.'_href','#'); ?>" title="" class="jmy_web_div" data-page="inicio" id="proyectos_desc_<?php echo $i; ?>" data-editor="no">
                                        <?php $this->pnt('proyectos_desc_'.$i,'Descripción '); ?>
                                        </a>
									</div>
								</li><!-- /item -->
                                <?php } ?>
							</ul><!-- /.slides -->
						</div>
						<div class="clearfix">
							
						</div><!-- /.clearfix -->
					</div><!-- /.col-md-12 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.flat-owl-stage -->

		<section class="flat-row flat-callback">
			<div class="container">
				<div class="row">

					<div class="col-md-4">
						<div class="text-block-callback">
							 <h2 class="jmy_web_div" data-page="inicio" id="call_titulo" data-editor="no">
<?php $this->pnt('call_titulo','Te llamamos'); ?></h2>
							<div class="text-callback-content jmy_web_div" data-page="inicio" id="call_desc" data-editor="no">
<?php $this->pnt('call_desc','Si necesita hablar con nosotros sobre una consulta llené el siguiente formulario y te devolveremos la llamada.'); ?>
							</div>
						</div><!-- /.text-block-callback -->
					</div><!-- /.col-md-4 -->

					<div class="col-md-8">
						<div class="flat-callback-form">
							<form id="contactform" method="post" action="./contact/contact-process2.php" novalidate="novalidate" >
								<div class="flat-field">
									<div class="field-one-half">
                                        <div class="jmy_web_categorias" data-page="inicio" id="call_cat" data-value="<?php
            $categorias = ["Asunto 1","Asunto 2","Asunto 3"];
            $categorias = $this->pnt('call_cat',implode(',', $categorias),['return'=>true]); 
            echo $categorias;
            $categorias = explode(",",$categorias);
            ?>" data-titulo="Indica el nombre de categoría separado por comas"></div>
										<label class="jmy_web_div" data-page="inicio" id="call_label" data-editor="no">
<?php $this->pnt('call_label','¿Como podemos ayudarle?'); ?></label>
										<select name="discuss">
                                            <?php echo '<option>'.implode('</option><option>', $categorias).'</option>'; ?>
										</select>
									</div><!-- /.field-one-half -->
									<div class="field-one-half field-email">
										<input type="text" id="email" value="" name="email" placeholder="Email" required="required">
									</div><!-- /.field-one-half -->
									<div class="clearfix"></div>
								</div>
								<div class="flat-field">
									<div class="field-one-half field-phone">
										<input type="text" id="phone" value="" name="phone" placeholder="Teléfono" required="required">
									</div>
									<div class="field-one-half field-submit">
										<button type="submit" name="submit" class="button-submit-field">Envía ahora</button>
									</div>
								</div><!-- /.flat-field -->
							</form><!-- /.form -->
						</div><!-- /.callback-form -->
					</div><!-- /.col-md-8 -->

				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.flat-callback -->

		<section class="flat-row flat-news">
			<div class="container">

				<div class="row">
					<div class="col-md-12">
						<div class="title-section left">
							<h2 class="jmy_web_div" data-page="inicio" id="blog_titulo" data-editor="no">
<?php $this->pnt('blog_titulo','Últimas noticias'); ?></h2>
						</div><!-- /.title-section -->
					</div>
					
			<div id="jmy_web_agregar_blog"></div>
				</div><!-- /.row -->

				<div class="row">
                    <?php //$this ->pre(['p'=>$data['blog'],'t'=>'TITULO_ARAY']); ?>

                    <?php  for ($i=0; $i < 2 ; $i++) {  $t=$data['blog'][$i]; if($t['imagen_1']!='' && $t['titulo']!=''  ){ ?>
					<div class="col-md-4">
                        <article class="post style2">
                            <div class="featured-post">
                                <a href="<?php $this->url_inicio(["return"=>true]); echo 'blog/'.$t['url'];?>" title="" class="post-image">
                                    <img src="<?php echo $t['imagen_1'];?>" alt="">
                                </a>
                                <ul class="post-date">
                                    <li class="month"><?php echo $t['fecha'];?></li>
                                </ul>
                            </div><!-- /.featured-post -->
                            <div class="content-post">
                                <h4 class="title-post">
                                    <a href="<?php $this->url_inicio(["return"=>true]); echo 'blog/'.$t['url'];?>" title=""><?php echo $t['titulo'];?></a>
                                </h4>
                                <div class="entry-post">
                                    <p><?php echo $t['sub_titulo'];?></p>
                                </div>      
                            </div><!-- /.content-post -->
                        </article><!-- /.post -->
                    </div><!-- /.col-md-4 -->
                <?php }} ?>

                    <div class="col-md-4">
                        <div class="slidebar-news">
                        <aside class="widget widget-recent-news">
                            <ul class="recent-news">
                                <?php  for ($i=2; $i < 7; $i++) {  $t=$data['blog'][$i]; 
                                if($t['imagen_1']!='' && $t['titulo']!=''  ){
                                ?>
                                <li>                                    
                                    <div class="thumb">
                                        <span class="overlay-pop"></span>
                                        <a href="<?php $this->url_inicio(["return"=>true]); echo 'blog/'.$t['url'];?>">
                                            <img src="<?php echo $t['imagen_1'];?>" alt="">
                                        </a><!-- /.thumb --> 
                                    </div><!-- /.row -->                                          
                                    <div class="text">
                                        <h4>
                                            <a href="<?php $this->url_inicio(["return"=>true]); echo 'blog/'.$t['url'];?>" title=""><?php echo $t['titulo'];?></a>
                                        </h4>
                                        <div class="entry-post">
                                            <p><?php echo $t['fecha'];?></p>
                                        </div>
                                    </div><!-- /.content-post -->                                   
                                </li>

                                <?php }} ?>
                               
                            </ul>
                        </aside><!-- /.widget-recent-news -->
                        </div><!-- /.slidebar-news -->
                    </div><!-- /.col-md-4 -->

				</div><!-- /.row -->

			</div><!-- /.container -->
		</section><!-- /.flat-news -->

		<!-- Carousel -->
        <section class="flat-row flat-client bg-theme">
            <div class="container">
                <div class="row">
                    <div class="col-md-3"> 

                        <div class="jmy_web_contador" data-page="inicio" id="no_clientes" data-value="<?php $this->pnt('no_clientes','3'); ?>" data-titulo="Número de clientes "></div>
                    </div>
                    <div class="col-md-9"> 

                          <div class=" jmy_web_slider" data-page="inicio"  id="marco<?php echo $i; ?>" data-marco="marco<?php echo $i; ?>" 
                            <?php
                            $va=[];
                            for ($i=0; $i < $this->pnt('no_clientes','3',["return"=>true]) ; $i++){

                                $va[] = [ "type"=>"imagen",
                                        "id"=>"cliente_img_".$i,
                                        "class"=>"cliente_img_".$i,
                                        //"idadd"=>"",
                                        "width"=>"171",
                                        "height"=>"49",
                                        "url"=>$this->url_templet(["return"=>true]).'images/client/logo-slide-04.png',
                                        ];

                            }
                            ?>
    data-var='<?php echo json_encode($va); ?>' ></div>
                    </div>
                    <div class="col-md-12"> 

                        <ul class="flat-carousel" data-item="5" data-nav="false" data-dots="false" data-auto="true">
                            <?php for ($i=0; $i < $this->pnt('no_clientes','3',["return"=>true]) ; $i++) {
                                echo '<li class="item">
                                        <img src="'.$this->pnt('cliente_img_'.$i,$this->url_templet(["return"=>true]).'images/client/logo-slide-04.png',["return"=>true]).'" id="cliente_img_'.$i.'" class="cliente_img_'.$i.'" alt="img">
                                        </li>';
                            }?>
                        </ul>
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </section> <!-- /.flat-row -->
