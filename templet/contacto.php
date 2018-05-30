<?php 
$page = "contacto";
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
			<div class="col-md-12">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7530.656014913314!2d-99.183985!3d19.410925999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x837031f842fae986!2sOrozco+Felgueres+Y+Asociados%2C+S.C.!5e0!3m2!1ses!2sus!4v1527145165413" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="contact-info">
					<div class="info info-address">
						<div class="title jmy_web_div" data-page="<?php echo $page; ?>" id="direccion_titulo" data-editor="no">
							<?php $this->pnt('direccion_titulo','Dirección'); ?>

						</div>
						<p class="jmy_web_div" data-page="<?php echo $page; ?>" id="direccion" data-editor="no"><?php $this->pnt('direccion','Reforma 222, CDMX, México'); ?></p>
					</div>

					<div class="info info-address">
						<div class="title jmy_web_div" data-page="<?php echo $page; ?>" id="telefono_titulo" data-editor="no">
							<?php $this->pnt('telefono_titulo','Teléfono'); ?>

						</div>
						<p class="jmy_web_div" data-page="<?php echo $page; ?>" id="telefono" data-editor="no">
							<?php $this->pnt('telefono','Llámanos 190 140 2458'); ?></p>
					</div>

					<div class="info info-address">
						<div class="title jmy_web_div" data-page="<?php echo $page; ?>" id="email_titulo" data-editor="no"><?php $this->pnt('email_titulo','E-Mail '); ?></div>
						<p class="jmy_web_div" data-page="<?php echo $page; ?>" id="email" data-editor="no"><?php $this->pnt('email','contacto@mail.com '); ?></p>
					</div>
				</div>
			</div> <!-- /.col-md-4 -->

			<div class="col-md-8">
				<div class="flat-form-info">
					<form id="contactform"  method="post" action="./contact/contact-process.php" novalidate="novalidate" class="form-info">
						<div class="one-half v3">
							<p class="input-info"><input type="text" name="name" id="name" value="" placeholder="Nombre" required="required"></p>
							<p class="input-info"><input type="email" name="email" id="email" value="" placeholder="Email" required="required"></p>
							<p class="input-info"><input type="text" name="subject" id="subject" value="" placeholder="Asunto" required="required"></p>
							<p class="input-info"><button type="submit" class="submit">Enviar mensaje</button></p>
						</div>
						<div class="one-half v4">
							<p class="input-info"><textarea id="message-contact" name="message" placeholder="Mensaje" required="required"></textarea></p>
						</div>
					</form> <!-- /.flat-form-info -->
				</div>
			</div> <!-- /.col-md-8 -->

		</div><!-- /.row -->
	</div><!-- /.container -->
</section><!-- /.flat-row-iconbox -->  