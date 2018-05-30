	<footer id="footer">
			<div class="footer-widgets">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="widget-infomation">
								<ul class="infomation-footer">
									
									<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="<?php 
							          $this->pnt( 	'footer_mail_href',
													'mailto:',
													["secundario"=>"footer"]
													); 
													?>" title=""
									class="jmy_web_div"  id="footer_mail" data-page="footer" data-editor="no">
									<?php 
							          $this->pnt( 	'footer_mail',
													'support@themesflat.com',
													["secundario"=>"footer"]
													); 
													?>
									</a></li>



									<li><i class="fa fa-phone" aria-hidden="true"></i><a href="<?php 
							          $this->pnt( 	'footer_telefono_href',
													'tel:',
													["secundario"=>"footer"]
													); 
													?>" title=""
									class="jmy_web_div"  id="footer_telefono" data-page="footer" data-editor="no">
									<?php 
							          $this->pnt( 	'footer_telefono',
													'+61 3 8376 6284',
													["secundario"=>"footer"]
													); 
													?>
									</a></li>



									<li><i class="fa fa-map-marker" aria-hidden="true"></i><a href="<?php 
							          $this->pnt( 	'footer_direccion_href',
													'#',
													["secundario"=>"footer"]
													); 
													?>" title=""
									class="jmy_web_div"  id="footer_direccion" data-page="footer" data-editor="no">
									<?php 
							          $this->pnt( 	'footer_direccion',
													'Insurgentes Sur #9000, CDMX, México',
													["secundario"=>"footer"]
													); 
													?>
									</a></li>

								</ul><!-- /.infomation-footer -->
							</div><!-- /.widget-infomation -->
						</div><!-- /.col-md-12 -->
					</div><!-- /.row -->
					<div class="row widget-box">
						<div class="col-md-4">
							<div class="widget widget-text jmy_web_div"  id="footer_descripción" data-page="footer">
									<?php 
							          $this->pnt( 	'footer_descripción',
													'<p>Lorem ipsum dolor sit consectetur adipiscing elit sed
														do eiusmod tempor incididunt ut labore et dolore 
															magna veniam aliqua.Ut enim ad minim veniam
													</p>
													<p>
														Ut enim ad minim veniam, quis nostrud exercitation
														ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in
														voluptate 
													</p>	',
													["secundario"=>"footer"]
													); 
													?>
								
							</div><!-- /.widget-text -->
						</div><!-- /.col-md-4 -->
						<div class="col-md-4">
							<div class="widget widget-services
							 jmy_web_div"  id="footer_links" data-page="footer">
									<?php 
							          $this->pnt( 	'footer_links',
													'
								<ul class="one-half first">
									<li><a href="#" title="">Nosotros</a></li>
								</ul><!-- /.one-half -->
								<ul class="one-half">
									<li><a href="#" title="">Inicio</a></li>
								</ul><!-- /.one-half -->
													',
													["secundario"=>"footer"]
													); 
													?>
								
							</div><!-- /.widget-services -->
						</div><!-- /.col-md-4 -->
						<div class="col-md-4">
							<div class="widget widget-subscribe">
								<form id="subscribe-form" action="#" method="post" accept-charset="utf-8" data-mailchimp="true">
                                    <div id="subscribe-content">
    									<label for="form-email-footer" class="jmy_web_div"  id="footer_boletin_titulo" data-page="footer" data-editor="no">
									<?php 
							          $this->pnt( 	'footer_boletin_titulo',
													'Boletín de noticias',
													["secundario"=>"footer"]
													); 
													?></label>
    									<div class="input-email">
    										<input type="email" name="email-form" id="subscribe-email" placeholder="Correo electronico" />
    									</div>
    									<button type="button" id="subscribe-button" class="button-subscribejmy_web_div"  id="footer_boletin_boton" data-page="footer" data-editor="no">
									<?php 
							          $this->pnt( 	'footer_boletin_boton',
													'Suscribirme',
													["secundario"=>"footer"]
													); 
													?></button>
                                    </div>
                                    <div id="subscribe-msg"></div>
								</form>
							</div><!-- /.widget-subscribe -->
							
						</div><!-- /.col-md-4 -->
					</div><!-- /.row .widget-box -->
				</div><!-- /.container -->
			</div><!-- /.footer-widgets -->
			<div class="footer-bottom">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="copyright">
								<p class="jmy_web_div"  id="footer_copy" data-page="footer" data-editor="no">
									<?php 
							          $this->pnt( 	'footer_copy',
													'Copyright '.date('Y').'. <a href="https://comsis.mx/" title="Concomsis, desarrollos web">[-]</a> ',
													["secundario"=>"footer"]
													); 
													?></p>
							</div>
						</div>
					</div>
				</div>
			</div><!-- /.footer-bottom -->
		</footer><!-- /#footer -->
		<div class="button-go-top">
			<a href="#" title="" class="go-top">
				<i class="fa fa-chevron-up"></i>
			</a>
		</div>

        </div> <!-- /.boxed -->

	<!-- Javascript -->
    <script type="text/javascript" src="<?php $this->url_templet(); ?>javascript/jquery.min.js"></script>
    <script type="text/javascript" src="<?php $this->url_templet(); ?>javascript/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php $this->url_templet(); ?>javascript/owl.carousel.js"></script>
    <script type="text/javascript" src="<?php $this->url_templet(); ?>javascript/jquery.easing.js"></script>
    <script type="text/javascript" src="<?php $this->url_templet(); ?>javascript/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="<?php $this->url_templet(); ?>javascript/waypoints.min.js"></script>
    
    <script type="text/javascript" src="<?php $this->url_templet(); ?>javascript/jquery.cookie.js"></script> 
    <script type="text/javascript" src="<?php $this->url_templet(); ?>javascript/jquery-validate.js"></script>
    <script type="text/javascript" src="<?php $this->url_templet(); ?>javascript/main.js"></script>


    <!-- Revolution Slider -->
    <script type="text/javascript" src="<?php $this->url_templet(); ?>revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="<?php $this->url_templet(); ?>revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="<?php $this->url_templet(); ?>revolution/js/slider_v1.js"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->    
    <script type="text/javascript" src="<?php $this->url_templet(); ?>revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="<?php $this->url_templet(); ?>revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="<?php $this->url_templet(); ?>revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="<?php $this->url_templet(); ?>revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="<?php $this->url_templet(); ?>revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="<?php $this->url_templet(); ?>revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="<?php $this->url_templet(); ?>revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="<?php $this->url_templet(); ?>revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="<?php $this->url_templet(); ?>revolution/js/extensions/revolution.extension.video.min.js"></script>
    <?php  $this->llamar_js(); ?> 
	</body>
</html>