<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

$currentlang = get_bloginfo('language');
$serviciocli = 'Customer Support';
$labeldireccion = 'Address';
$labeltelefono = 'Telephone';
$labelcorreo = 'Email';
$labelredes = 'Follow us';
$direccion = get_theme_mod('direccion_ingles');
$politicas = 'Privacy policies';
$derechos = 'All rights reserved.';

$cookies = get_theme_mod('cookies_ingles');
$disclaimer = get_theme_mod('disclaimer_ingles');  
$politicasmod = get_theme_mod('politicas_ingles');  
$tycmod = get_theme_mod('tyc_ingles');   

if ($currentlang == 'es') {
	$serviciocli = 'Atención al cliente';
	$labeldireccion = 'Dirección';
	$direccion = get_theme_mod('direccion_español');
	$labeltelefono = 'Teléfono';
	$labelcorreo = 'Correo';
	$labelredes = 'Síganos en redes';
	$politicas = 'Políticas de privacidad';
	$derechos = 'Todos los derechos reservados.';

	$cookies = get_theme_mod('cookies_español');
	$disclaimer = get_theme_mod('disclaimer_español');  
	$politicasmod = get_theme_mod('politicas_español');  
	$tycmod = get_theme_mod('tyc_español');  
}
?>

		</div><!-- #content -->

		<footer>
			<div class="container footer-cont">
				<div>
					<a href="http://142.93.201.64/ScmMobility/index.php/home/"><img src="http://142.93.201.64/ScmMobility/wp-content/uploads/2019/05/Grupo-2200.png"></a>
				</div>
				<div class="footer-links-cont">
					<div class="footer-links">
						<?php 
							if ($currentlang == 'es') {
								wp_nav_menu( array('menu' => 'footer') ); 
							}else{
								wp_nav_menu( array('menu' => 'footer-en') ); 
							}
						?>
					</div>
				</div>
				<div class="footer-datosEmpresa">
					<p class="footer-datosTitulo"><?php echo $serviciocli; ?></p>
					<p><b><?php echo $labeldireccion; ?> |</b> <?php  echo $direccion; ?> </p>
					<p><b><?php echo $labeltelefono; ?> |</b>  <?php echo get_theme_mod('telefono_footer'); ?></p>
					<p><b><?php echo $labelcorreo; ?> |</b>  <?php echo get_theme_mod('correo_footer'); ?></p>
				</div>

				<div class="footer-redes">
					<p class="footer-datosTitulo"><?php echo $labelredes; ?></p>
					<ul>
						<li><a target="_blank" href="<?php echo get_theme_mod('link_facebook'); ?>"><img src="/ScmMobility/wp-content/uploads/2019/05/facebook.png"></a></li>
						<li><a target="_blank" href="<?php echo get_theme_mod('link_twitter'); ?>"><img src="/ScmMobility/wp-content/uploads/2019/05/twitter.png"></a></li>
						<li><a target="_blank" href="<?php echo get_theme_mod('link_youtube'); ?>"><img src="/ScmMobility/wp-content/uploads/2019/05/youtube.png"></a></li>
						<li><a target="_blank" href="<?php echo get_theme_mod('link_linkedin'); ?>"><img src="/ScmMobility/wp-content/uploads/2019/05/linked.png"></a></li>
					</ul>
				</div>

			</div>
			
			<div class="footer-cookies container">
				<ul>
					<li><a data-toggle="modal" href="#modalcookies"><b>Cookies</b></a></li>
					<li><a data-toggle="modal" href="#modaldisclaimer"><b>Disclaimer</b></a></li>
					<li><a data-toggle="modal" href="#modalpoliticas"><b><?php echo $politicas; ?></b></a></li>
					<li><a data-toggle="modal" href="#modalttyc"><b>T&C</b></a></li>
				</ul>
			</div>

			<div class="footer-cierre">
				<p>© Copyright 2019. <?php echo $derechos; ?></p>
			</div>

		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
<div class="modal fade" id="modalcookies">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="footer-datosTitulo">Cookies</h4>
			</div>
			<div class="modal-body">
				<?php echo $cookies; ?>
			</div>
			<!-- <div class="modal-footer"> -->
				<!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
			<!-- </div> -->
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div class="modal fade" id="modaldisclaimer">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="footer-datosTitulo">Disclaimer</h4>
			</div>
			<div class="modal-body">
				<?php echo $disclaimer; ?>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div class="modal fade" id="modalpoliticas">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="footer-datosTitulo"><?php echo $politicas; ?></h4>
			</div>
			<div class="modal-body">
				<?php echo $politicasmod; ?>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div class="modal fade" id="modalttyc">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="footer-datosTitulo">T&C</h4>
			</div>
			<div class="modal-body">
				<?php echo $tycmod; ?>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->