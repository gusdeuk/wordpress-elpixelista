<?php
/*
 * UI elements 2
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

<!-- page-section : starts -->
<section id="samples" class="pricing page-section">
	<!-- inner-section : starts -->
	<section class="inner-section page-head pricing-head">
		<!-- container : starts -->
		<section class="container">
			<div class="row">
				<article class="col-md-6 text-left">
					<h1 class="white">Pricing Table</h1>
					<div class="liner liner-dark"></div>
				</article>
				<article class="col-md-6 text-right">
					<h3 class="white">We offer the best pricing in industry.<br />Quality is our first priority.</h3>
					<div class="liner-high liner-high-dark"></div>
				</article>
			</div>
		</section>
		<!-- container : ends -->
	</section>
	<!-- inner-section : ends -->


	<!-- inner-section : starts -->
	<section class="inner-section pricing-info">
		<!-- container : starts -->
		<section class="container">
			<!-- pricing-table-region : starts -->
			<div class="row flat">
				<div class="col-lg-3 col-md-3 col-xs-12 pricing-column">
					<ul class="plan plan1">
						<li class="plan-name">
							Basic
						</li>
						<li class="plan-price">
							<strong>$29</strong> / month
						</li>
						<li>
							<strong>5GB</strong> Storage
						</li>
						<li>
							<strong>1GB</strong> RAM
						</li>
						<li>
							<strong>400GB</strong> Bandwidth
						</li>
						<li>
							<strong>10</strong> Email Address
						</li>
						<li>
							<strong>Forum</strong> Support
						</li>
						<li class="plan-action">
							<a href="#" class="btn btn-nwrk-dark">Signup</a>
						</li>
					</ul>
				</div>

				<div class="col-lg-3 col-md-3 col-xs-12 pricing-column">
					<ul class="plan plan2 featured">
						<li class="plan-name">
							Standard
						</li>
						<li class="plan-price">
							<strong>$39</strong> / month
						</li>
						<li>
							<strong>5GB</strong> Storage
						</li>
						<li>
							<strong>1GB</strong> RAM
						</li>
						<li>
							<strong>400GB</strong> Bandwidth
						</li>
						<li>
							<strong>10</strong> Email Address
						</li>
						<li>
							<strong>Forum</strong> Support
						</li>
						<li class="plan-action">
							<a href="#" class="btn btn-nwrk-dark">Signup</a>
						</li>
					</ul>
				</div>

				<div class="col-lg-3 col-md-3 col-xs-12 pricing-column">
					<ul class="plan plan3">
						<li class="plan-name">
							Advanced
						</li>
						<li class="plan-price">
							<strong>$199</strong> / month
						</li>
						<li>
							<strong>50GB</strong> Storage
						</li>
						<li>
							<strong>8GB</strong> RAM
						</li>
						<li>
							<strong>1024GB</strong> Bandwidth
						</li>
						<li>
							<strong>Unlimited</strong> Email Address
						</li>
						<li>
							<strong>Forum</strong> Support
						</li>
						<li class="plan-action">
							<a href="#" class="btn btn-nwrk-dark">Signup</a>
						</li>
					</ul>
				</div>

				<div class="col-lg-3 col-md-3 col-xs-12 pricing-column">
					<ul class="plan plan4">
						<li class="plan-name">
							Mighty
						</li>
						<li class="plan-price">
							<strong>$999</strong> / month
						</li>
						<li>
							<strong>50GB</strong> Storage
						</li>
						<li>
							<strong>8GB</strong> RAM
						</li>
						<li>
							<strong>1024GB</strong> Bandwidth
						</li>
						<li>
							<strong>Unlimited</strong> Email Address
						</li>
						<li>
							<strong>Forum</strong> Support
						</li>
						<li class="plan-action">
						<a href="#" class="btn btn-nwrk-dark">Signup</a>
						</li>
					</ul>
				</div>

			</div>
			<!-- pricing-table-region : ends -->

		</section>
		<!-- container : ends -->
	</section>
	<!-- inner-section : ends -->


	<!-- inner-section : starts -->
	<section class="inner-section">
		<!-- container : starts -->
		<section class="container">
			<div class="row">
				<article class="col-md-12 col-sm-12 pricing-det">
					<h3 class="sub-heading">Plans &amp; Specialities</h3>
					<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.<br /><br />Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>
					<a class="btn btn-nwrk-dark" href="#">Request a Quote</a>
				</article>
			</div>
		</section>
		<!-- container : ends -->
	</section>
	<!-- inner-section : ends -->
</section>
<!-- page-section : ends -->


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