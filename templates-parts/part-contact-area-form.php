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

            <div class="row ">
                <article class="col-sm-12 clearfix">

                    <?php if (function_exists('simple_contact_form')){
						//simple_contact_form();
					}?>

                </article>
            </div>
            <!-- end row -->

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

                <article class="col-md-10 text-left">
                    <div class="left">
                        <div class="footer-icon-linked"><a class="fa fa-linkedin-square fade-out-click-jump"
                                href="http://ar.linkedin.com/in/gusdeuk"></a></div>
                        <div class="footer-txt-linked">
                            <div>
                                <?php _e('If you want to know more about me, take a look to my profile on ', 'nwrktheme'); ?>
                                <a class="contact-link fade-out-click-jump"
                                    href="http://ar.linkedin.com/in/gusdeuk">LinkedIn</a>
                            </div>
                            <div><?php _e('Thanks for your visit!', 'nwrktheme'); ?></div>
                        </div>
                        <div>
                </article>

                <article class="col-md-2 text-right">
                    <div class="footer-icon-back-top fa fa-arrow-circle-up" id="footer-icon-back-top">
                    </div>
                </article>

            </div>
        </div>

    </section>
    <!-- inner-section : fin -->


</footer>
<!-- page-section : fin -->