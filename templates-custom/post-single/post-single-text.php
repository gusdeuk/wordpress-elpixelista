<?php
/*
 * Post Single - Text
 */
?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js custom-scroll-area">

<!-- START HEAD ******************************************************************************** -->

<head>

    <!-- start wp header -->
    <?php require_once(dirname(__FILE__) . "/../../x-headers-footers/header-main.php"); ?>

    <!-- start view css styles -->
    <link rel="stylesheet"
        href="<?php echo get_template_directory_uri() .  '/templates-custom/post-single/post-single-text.min.css' . $NOCACHE_VERSION_STRING; ?>"
        type="text/css" media="all" />

</head>
<!-- END HEAD ******************************************************************************** -->

<!-- START BODY ****************************************************************************** -->

<body <?php body_class(); ?>>

    <?php // PHP init stuff, vars, fields, etc ?>
    <?php require_once( "x-post-single-init.php"); ?>

    <?php // ------------------------------------------------------------------- ?>
    <!-- Master Wrap : start -->
    <section id="mastwrap" class="base-portfolio">
        <?php // ------------------------------------------------------------------- ?>

        <?php // ------------------------------------------------------------------- ?>
        <?php //  MAIN HEADER TOP MENU DESKTOP - MOBILE ?>
        <?php // ------------------------------------------------------------------- ?>
        <?php
require_once(dirname(__FILE__) . "/../../templates-parts/part-top-nav-menu.php");
?>

        <?php // ------------------------------------------------------------------- ?>
        <?php // SECTION MAIN INFO  ?>
        <?php // ------------------------------------------------------------------- ?>

        <!-- page-section "project-main-info" : start -->
        <section id="project-main-info" class="page-section project-main-info">


            <!-- inner-section : start -->
            <section class="inner-section page-head bgd-nwrk-blue">
                <!-- container : start -->
                <section class="container">
                    <div class="row">
                        <article class="col-sm-12 text-left">
                            <h1 class="white"><?php echo get_the_title(); ?></h1>
                            <div class="liner"></div>
                        </article>
                    </div>
                </section>
                <!-- container : end -->
            </section>
            <!-- inner-section : end -->

            <?php
	// show if we have an image
	if ($acf_single_text_post_top_image) {
	?>
            <!-- inner-section : start -->
            <section class="inner-section">
                <!-- images -->
                <div class="top-image">
                    <img class="img-responsive" alt="" title="" src="<?php echo $acf_single_text_post_top_image; ?>">
                </div>
            </section>
            <!-- inner-section : end -->
            <?php }; // end if  ?>


            <!-- inner-section : start -->
            <section class="inner-section">
                <!-- container : start -->
                <section class="container">

                    <div class="row">
                        <div class="col-sm-12 main-body-wsiwyg-block"><?php echo $acf_single_text_post_text_block; ?>
                        </div>
                    </div>

                </section>
                <!-- container : end -->
            </section>
            <!-- inner-section : end -->


            <?php
	// show if we have an image
	if ($acf_single_text_post_bottom_image) {
	?>
            <!-- inner-section : start -->
            <section class="inner-section">
                <!-- images -->
                <div class="bottom-image">

                    <?php if ($acf_single_text_post_bottom_image_link) { ?>
                    <a href="<?php echo $acf_single_text_post_bottom_image_link; ?>">
                        <?php }; // end link if  ?>

                        <img class="img-responsive" alt="" title=""
                            src="<?php echo $acf_single_text_post_bottom_image; ?>">

                        <?php if ($acf_single_text_post_bottom_image_link) { ?>
                    </a>
                    <?php }; // end link if  ?>

                </div>
            </section>
            <!-- inner-section : end -->
            <?php }; // end if  ?>

        </section>
        <!-- page-section "project-main-info" : end -->



        <?php // ------------------------------------------------------------------- ?>
        <?php // SECTION CONTACT ?>
        <?php // ------------------------------------------------------------------- ?>
        <?php
// get part for contact area
require_once(dirname(__FILE__) . "/../../templates-parts/part-contact-area-form.php");
?>


        <?php // ------------------------------------------------------------------- ?>
    </section>
    <!-- Master Wrap : end -->
    <?php // ------------------------------------------------------------------- ?>


    <?php // ------------------------------------------------------------------- ?>
    <!-- start wp footer  -->
    <?php require_once(dirname(__FILE__) . "/../../x-headers-footers/footer-main.php"); ?>

    <!-- start view js  -->
    <script type="text/javascript"
        src=" <?php echo get_template_directory_uri() .  '/templates-custom/post-single/post-single-text.min.js' . $NOCACHE_VERSION_STRING; ?>">
    </script>

    <!-- END BODY ***************************************************************************** -->
</body>

</html>