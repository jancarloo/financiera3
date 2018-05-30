<?php 
$page = ($data['pagina']!='')?$data['pagina']:"contacto";
?>
<div class="page-title">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page-title-heading">
					<h1 class="h1-title jmy_web_div" data-page="<?php echo $page; ?>" id="titulo" data-editor="no">
					<?php $this->pnt('titulo','Contacto'); ?></h1>
				</div><!-- /.page-title-heading -->
				<ul class="breadcrumbs">
					<li><a href="<?php $this->url_inicio(); ?>" title="">Inicio<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
					<li><a href="<?php $this->url_inicio(); ?>contacto" title="">Contacto<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				</ul><!-- /.breadcrumbs -->
				<div class="clearfix"></div><!-- /.clearfix -->
			</div>
		</div>
	</div>
</div><!-- /.page-title -->

<section class="flat-row pd-contact-v1">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="contact-info">
					<div class="info info-address">
						<div class="title jmy_web_div" data-page="<?php echo $page; ?>" id="dec_titulo" data-editor="no">
							<?php $this->pnt('dec_titulo','Título'); ?>

						</div>
						<p class="jmy_web_div" data-page="<?php echo $page; ?>" id="desc_desc" data-editor="no"><?php $this->pnt('desc_desc','Descripción'); ?></p>
					</div>

					
				</div>
			</div> <!-- /.col-md-4 -->

			<div class="col-md-8">
				<div class="flat-form-info">
					<form id="contactform"  method="post" action="./contact/contact-process.php" novalidate="novalidate" class="form-info">
						<div class="one-half v3">
							<p class="input-info"><input type="text" name="name" id="name" value="" placeholder="Nombre" required="required"></p>
							<p class="input-info"><input type="email" name="email" id="email" value="" placeholder="Email" required="required"></p>
							<p class="input-info"><input type="text" name="telefono" id="telefono" value="" placeholder="Número de teléfono" required="required"></p>
							<p class="input-info"><button type="submit" class="submit">Enviar mensaje</button></p>
						</div>
						<div class="one-half v4">
							<p class="input-info"><textarea id="message-contact" name="message" placeholder="Si tiene alguna duda o comentario escribela aquí" required="required"></textarea></p>
						</div>
					</form> <!-- /.flat-form-info -->
				</div>
			</div> <!-- /.col-md-8 -->

		</div><!-- /.row -->
	</div><!-- /.container -->
</section><!-- /.flat-row-iconbox -->  