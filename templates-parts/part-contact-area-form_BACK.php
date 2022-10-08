<?php // ------------------------------------------------------------------- ?>	
<?php // SECTION CONTACT ?>	
<?php // ------------------------------------------------------------------- ?>	
<?php 
// get and declare some flags / vars needed in this php view / part
$currentLocale = get_locale();
switch ($currentLocale ) {
    case "en_US":
		$isViewEnglish = true;
        break;
	case "es_ES":
	case "default":
		$isViewSpanish = true;
        break;
}
?>
<!-- page-section : inicio -->
<section id="contact" class="contact page-section">
	<!-- inner-section : inicio -->
	<section class="inner-section page-head contact-head">
		<!-- container : inicio -->
		<section class="container">
			<div class="row">
				<article class="col-md-6 text-left">
					<h1 class="white"><?php _e('Contact Me', 'nwrktheme'); ?></h1>
					<div class="liner"></div>
				</article>
				<article class="col-md-6 text-right">
					<h3 class="white">
						<?php _e('If you have any questions or queries, please contact me at any time.', 'nwrktheme'); ?>
						<?php _e('I\'ll get back to you as soon as I can.', 'nwrktheme'); ?>	
					</h3>
						<?php /*?><span><a class="contact-mail" href="#">info@lala.com</a></span><?php */?>
					<div class="liner-high"></div>
				</article>
			</div>
		</section>
		<!-- container : fin -->
	</section>


	<!-- inner-section : inicio -->
	<section class="inner-section contact-mail-wrap">
		<!-- container : inicio -->
		<section class="container add-top-half add-bottom-half">
		
		<?php // CONTACT 7 FORM INSERT > get shortcode strings from options because ids can change
		$themeOptions = get_option('nwrk_theme_options');
		
		if ( $isViewEnglish ) {
			echo do_shortcode( $themeOptions['contact_shortcode_en'] );
		} else {
			echo do_shortcode( $themeOptions['contact_shortcode_es'] );
		}
		?>

		</section>
		<!-- container : fin -->
	</section>
	<!-- inner-section : fin -->

</section>

<?php // ------------------------------------------------------------------- ?>	
<?php // FOOTER ?>	
<?php // ------------------------------------------------------------------- ?>	

<!-- page-section : inicio -->
<footer id="mastfoot" class="mastfoot">

	<!-- inner-section : inicio -->
	<section class="inner-section footer-bottom">

		<!-- container : inicio -->
		<div class="container">
			<div class="row">

				<article class="col-md-4 text-left">
					<ul class="footer-social">
						<li><a href="http://ar.linkedin.com/in/gusdeuk"><img title="" alt="" src="<?php echo get_template_directory_uri(); ?>/images/ico-footer-linked.svg" /></a></li>
					</ul>
				</article>

				<article class="col-md-8 text-right">
					<div class="credits">
						<p>
							<?php _e('If you want to know more about me, take a look to my profile on ', 'nwrktheme'); ?> <a  class="contact-link" href="http://ar.linkedin.com/in/gusdeuk">LinkedIn</a><br>
							<?php _e('Thanks for your visit!', 'nwrktheme'); ?>
						</p>
					</div>
				</article>
				
			</div>
		</div>

	</section>
	<!-- inner-section : fin -->


</footer>
<!-- page-section : fin -->