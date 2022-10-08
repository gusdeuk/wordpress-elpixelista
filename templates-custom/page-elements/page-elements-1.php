<?php
/*
 * UI elements 1
 */
?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js custom-scroll-area">

<!-- START HEAD ******************************************************************************** -->
<head>

<!-- start wp header -->
<?php require_once(dirname(__FILE__) . "/../../x-headers-footers/header-main.php"); ?>

<!-- start view css styles -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri() .  '/templates-custom/page-elements/page-elements.css'; ?>" type="text/css" media="all" />

</head>
<!-- END HEAD ******************************************************************************** -->

<!-- START BODY ****************************************************************************** -->
<body <?php body_class(); ?>>

<?php // PHP init stuff, vars, fields, etc ?>
<?php require_once( "x-page-elements-init.php"); ?>

<?php // ------------------------------------------------------------------- ?>
<!-- Master Wrap : inicio -->
<section id="mastwrap" class="base-samples">
<?php // ------------------------------------------------------------------- ?>

<?php // ------------------------------------------------------------------- ?>
<?php //  MAIN HEADER TOP MENU DESKTOP - MOBILE ?>
<?php // ------------------------------------------------------------------- ?>
<?php
require_once(dirname(__FILE__) . "/../../templates-parts/part-top-nav-menu.php");
?>


<?php // ------------------------------------------------------------------- ?>
<?php // SECTION SAMPLES ?>
<?php // ------------------------------------------------------------------- ?>

<!-- page-section TEST section : inicio -->
<section id="samples" class="page-section">

	<!-- inner-section : inicio -->
	<section class="inner-section page-head bgd-nwrk-blackie-blue">
		<!-- container : inicio -->
		<section class="container">
			<div class="row">
				<article class="col-md-6 text-left">
					<h1 class="white">Projects</h1>
					<div class="liner liner-dark"></div>
				</article>
				<article class="col-md-6 text-right">
					<h3 class="white">An amazingly creative design agency from the heart of Singapore, the city of Lion</h3>
					<div class="liner-high liner-high-dark"></div>
				</article>
			</div>
		</section>
		<!-- container : fin -->
	</section>
	<!-- inner-section : fin -->


	<!-- inner-section : inicio -->
	<section class="inner-section">

		<!-- container : start -->
		<section class="container add-top-half">
			<div class="row">
				<article class="col-md-4">
					asdasd
				</article>
				<article class="col-md-4 col-sm-6">
					asd
				</article>
				<article class="col-md-4 col-sm-6">
					asd
				</article>
			</div>
		</section>
		<!-- container : end -->

	</section>
	<!-- inner-section : fin -->

</section>
<!-- page-section TEST section  : fin -->



<?php // ------------------------------------------------------------------- ?>
<?php // SECTION CONTACT ?>
<?php // ------------------------------------------------------------------- ?>
<?php
// get part for contact area
require_once(dirname(__FILE__) . "/../../templates-parts/part-contact-area-form.php");
?>

<?php // ------------------------------------------------------------------- ?>
</section>
<!-- Master Wrap : fin -->
<?php // ------------------------------------------------------------------- ?>


<?php // ------------------------------------------------------------------- ?>
<!-- start wp footer  -->
<?php require_once(dirname(__FILE__) . "/../../x-headers-footers/footer-main.php"); ?>

<!-- start view js  -->
<script type="text/javascript" src=" <?php echo get_template_directory_uri() .  '/templates-custom/page-elements/page-elements.js'; ?>"></script>

<!-- END BODY ***************************************************************************** -->
</body>
</html>