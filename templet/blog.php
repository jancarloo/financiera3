<?php 

$page = "blog";

$this->pre(["p"=>$data["resultados"]]);

?>

<div class="page-title">

	<div class="container">

		<div class="row">

			<div class="col-md-12">

				<div class="page-title-heading">

					<h1 class="h1-title jmy_web_div" data-page="<?php echo $page; ?>" id="titulo" data-editor="no"><?php $this->pnt('titulo','Blog'); ?></h1>

				</div><!-- /.page-title-heading -->

				<ul class="breadcrumbs">

					<li><a href="<?php $this->url_inicio(); ?>" title="">Inicio<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>

					<li><a href="<?php $this->url_inicio(); ?>blog" title="">Blog<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>

				</ul><!-- /.breadcrumbs -->

				<div class="clearfix"></div><!-- /.clearfix -->

			</div>

		</div>

	</div>

</div><!-- /.page-title -->



<section class="main-content">

	<div class="container">

		<div class="row">



			<div class="col-md-8">

			<div id="jmy_web_agregar_blog"></div>

				<div class="post-wrap">


					<?php
					$categorias = [];
					 for ($i=0; $i < count($data["resultados"]) ; $i++) { $t=$data["resultados"][$i]; 

					 	$tmp = explode(",",$t["categorias"]);
					 	foreach ($tmp as $key => $value) {
					 		if(!in_array($value, $categorias))
					 			$categorias[]=trim($value);
					 	}
					 	//$this ->pre(['p'=>$categorias,'t'=>'categorias']);
					 	$this ->pre(['p'=>$t,'t'=>'t']);
					?>
					<article class="main-post">
						<div class="entry-post-title">
							<h2 class="post-title"><a href="<?php $this->url_inicio();  echo 'blog/'. $t['url'];?>" title=""><?php echo $t['titulo']; ?></a></h2>
							<ul class="entry-meta">
								<li class="date"><a href="<?php $this->url_inicio();  echo 'blog/'. $t['url'];?>" title=""><?php echo $t['fecha']; ?></a></li>
								<li class="author"><a href="<?php $this->url_inicio();  echo 'blog/'. $t['url'];?>" title=""><?php echo $t['autor']; ?></a></li>
								<li class="categories"><a href="<?php $this->url_inicio();  echo 'blog/'. $t['url'];?>" title=""><?php echo $t['categorias']; ?></a></li>
							</ul><!-- /.entry-meta -->
						</div><!-- /.entry-post-title -->
						<div class="featured-post">
							<a href="<?php $this->url_inicio();  echo 'blog/'. $t['url'];?>" title="">
								<img src="<?php echo ($t['imagen_1']!='')?$t['imagen_1']:'images/blog/blog-post-01.png'; ?>" alt="" />
							</a>
						</div><!-- /.featured-post -->
						<div class="entry-content">
							<p><?php echo $t['sub_titulo']; ?>
							</p>
							<p>
								<a href="<?php $this->url_inicio();  echo 'blog/'. $t['url'];?>" title="" class="more-link">Leer más</a>
							</p>
						</div><!-- /.entry-content -->
					</article>
					<?php } ?>


					

					<div class="blog-pagination hidden">

						<ul class="flat-pagination">

							<li><a href="#" title="" class="active">1</a></li>

							<li><a href="#" title="">2</a></li>

							<li><a href="#" title="">></a></li>

						</ul><!-- /.flat-pagination -->

					</div><!-- /.blog-pagination -->

				</div><!-- /.post-wrap -->

				

			</div><!-- /.col-md-8 -->

			

			<div class="col-md-4">

				<div class="sidebar right">

					<aside id="recent-post" class=" widget widget-recent">

						<h3 class="widget-title  jmy_web_div" data-page="<?php echo $page; ?>" id="notas_reciéntes" data-editor="no"><?php $this->pnt('notas_recientes','Notas reciéntes'); ?></h3>

						<ul>
								<?php for ($i=0; $i < 5 ; $i++) { $t=$data["resultados"][$i]; if( $t['titulo']!=''){ ?>
							<li>

								<a href="<?php $this->url_inicio(); echo 'blog/'.$t['url']; ?>" title=""><?php echo $t['titulo']; ?></a>

								<span><?php echo $t['fecha']; ?></span>

							</li>
						<?php } } ?>
						</ul>

					</aside><!-- /.widget-recent -->

					<aside class=" widget widget-categories">

						<h3 class="widget-title jmy_web_div" data-page="<?php echo $page; ?>" id="categorias" data-editor="no"><?php $this->pnt('categorias','Categorías'); ?></h3>

						<ul>
							<?php foreach ($categorias as $key => $value) {
								echo '<li><a href="'.$this->url_inicio(['return'=>true]).'categorias/'.$value.'" title="">'.$value.'</a></li>';
							}?>						

						</ul>

					</aside><!-- /.widget-categories -->

					<aside class="widget widget-brochure">

						<div class="brochure-box-title">

							<h5 class="brochure-title  jmy_web_div" data-page="<?php echo $page; ?>" id="adicional_titulo" data-editor="no"><?php $this->pnt('adicional_titulo','Texto adicional '); ?></h5>

							<p class=" jmy_web_div" data-page="<?php echo $page; ?>" id="adicional_texto" data-editor="no"><?php $this->pnt('adicional_texto','View our 2016 financial prospectus brochure for an easy to read guide on all of the	services offered.'); ?>
							</p>

						</div><!-- /.brochure-box-title -->


					</aside><!-- /.widget-brochure -->

					<aside class="widget widget-tags">

						<h3 class="widget-title">TAGS</h3>

						<div class="tag-cloud">

							<a href="#" title="" class="tag-link">Business</a>

						</div><!-- /.tag-cloud -->

					</aside><!-- /.widget-tags -->

				</div><!-- /.sidebar -->		

			</div><!-- /.col-md-4 -->

		</div><!-- /.row -->

	</div><!-- /.container -->

</section><!-- /.main-content -->

