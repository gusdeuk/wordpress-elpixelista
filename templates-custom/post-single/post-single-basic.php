<?php
/*
 * Post Single - Project Detail
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
        href="<?php echo get_template_directory_uri() .  '/templates-custom/post-single/post-single-basic.min.css' . $NOCACHE_VERSION_STRING; ?>"
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
            <section class="inner-section page-head head-top-title bgd-nwrk-blue">
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
			// show full width image
			if ($acf_basic_head_full_width_image) {
			?>
            <!-- inner-section : start -->
            <section class="inner-section top-wide-image">
                <!-- image wide -->
                <div class="img-wide">
                    <img class="img-responsive" alt="" title="" src="<?php echo $acf_basic_head_full_width_image; ?>">
                </div>
            </section>
            <!-- inner-section : end -->
            <?php }; // end IF ?>


            <!-- inner-section : start -->
            <section class="inner-section top-dual-images">
                <!-- images -->
                <div class="top-dual-images-wrap clearfix">
                    <div class="img-item">
                        <div class="image">
                            <img class="img-responsive" alt="" title="" src="<?php echo $acf_basic_before_image; ?>">
                        </div>
                        <?php /* <div class="caption"></div> */ ?>

                    </div>
                    <div class="img-item">
                        <div class="image">
                            <img class="img-responsive" alt="" title="" src="<?php echo $acf_basic_after_image; ?>">
                        </div>
                        <?php /* <div class="caption"></div> */ ?>
                    </div>
                </div>
            </section>
            <!-- inner-section : end -->

            <?php
            // show project-zoom-info only if we have a zoom
            if ($acf_basic_zoomed_full_image) {
            ?>
            <!-- page-section "project-zoom-info" : start -->
            <section id="project-zoom-info" class="page-section project-zoom-info">
                <!-- inner-section : start -->
                <section class="inner-section">
                    <!-- container : start -->
                    <section class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <a data-scroll-ignore
                                    class="open-modal-works btn animated infinite heartBeat btn-nwrk-color bottom-open-popup"
                                    href="#modal-works" data-big-image="<?php echo $acf_basic_zoomed_full_image; ?>">
                                </a>
                            </div>
                        </div>
                    </section>
                    <!-- container : end -->
                </section>
                <!-- inner-section : end -->
            </section>
            <!-- page-section "project-zoom-info" : end -->

            <?php }; // end IF project-zoom-info ?>


            <!-- inner-section : start -->
            <section class="inner-section">
                <!-- container : start -->
                <section class="container">

                    <div class="row">
                        <div class="col-sm-12 text-center top-text-block">
                            <?php echo $acf_basic_before_after_text_block; ?></div>
                    </div>


                </section>
                <!-- container : end -->
            </section>
            <!-- inner-section : end -->

        </section>
        <!-- page-section "project-main-info" : end -->



        <?php // ------------------------------------------------------------------- ?>
        <?php // SECTION XTRA INFO  ?>
        <?php // ------------------------------------------------------------------- ?>


        <?php
// show project-xtra-info only if we have a title
if ($acf_basic_bottom_text_title) {
?>
        <!-- page-section "project-xtra-info" : start -->
        <section id="project-xtra-info" class="page-section project-xtra-info">


            <!-- inner-section : start -->
            <section class="inner-section page-head bgd-nwrk-green bottom-text-title">
                <!-- container : start -->
                <section class="container">
                    <div class="row">
                        <article class="col-sm-12">
                            <h1 class="white"><?php echo $acf_basic_bottom_text_title; ?></h1>
                        </article>
                    </div>
                </section>
                <!-- container : end -->
            </section>
            <!-- inner-section : end -->


            <!-- inner-section : start -->
            <section class="inner-section">
                <!-- image wide -->
                <div class="img-wide">
                    <img class="img-responsive" alt="" title="" src="<?php echo $acf_basic_bottom_full_width_image; ?>">
                </div>
            </section>
            <!-- inner-section : end -->


            <!-- inner-section : start -->
            <section class="inner-section">
                <!-- container : start -->
                <section class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center bottom-text-block"><?php echo $acf_basic_bottom_text_block; ?>
                        </div>
                    </div>
                </section>
                <!-- container : end -->
            </section>
            <!-- inner-section : end -->

        </section>
        <!-- page-section "project-xtra-info" : end -->

        <?php }; // end IF project-xtra-info ?>



        <!-- page-section "project-related" : start -->
        <section id="project-related" class="page-section project-related">


            <!-- inner-section : start -->
            <section class="inner-section page-head bgd-nwrk-light-blue related-carousel-title">
                <!-- container : start -->
                <section class="container">
                    <div class="row">
                        <article class="col-sm-12">
                            <h1 class="white"><?php _e('Other Projects'); ?></h1>
                        </article>
                    </div>
                </section>
                <!-- container : end -->
            </section>
            <!-- inner-section : end -->


            <!-- inner-section : start -->
            <section class="inner-section">

                <!-- related-carousel : start -->
                <div id="related-carousel" class="related-carousel owl-carousel owl-theme">

                    <?php
			// --------------------------------------------------------------------------
			// LOOP PARA ARMAR THUMBNAILS con query posts sobre el POST TYPE
			// --------------------------------------------------------------------------
			$count = 1;
			query_posts(array(
			'post_type' => 'post',
			'category_name'  => 'latest-projects',
			'posts_per_page' => 500,
			// 'paged' => get_query_var('paged'),
			// 'orderby' => 'rand'
			'order' => 'DESC'
			));

			if (have_posts()) : while (have_posts()) : the_post();

				// get post link
				$postlink = get_permalink($post->ID);
				// post thb > 2 sizes (URLS)
				if ( has_post_thumbnail()) {
					$thumb_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'custom-med-thumbnail');
					$big_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');

					$acf_post_custom_excerpt_a = get_field( "post_custom_excerpt_a" );
					$acf_post_custom_excerpt_b = get_field( "post_custom_excerpt_b" );
				}
				?>


                    <?php // if ( $currentPostId != $post->ID) {?>
                    <!-- thumb -->
                    <div class="item clickable">
                        <a class="fade-out-click-jump" href="<?php echo $postlink; ?>">
                            <img class="owl-lazy img-responsive" alt="" title=""
                                data-src="<?php echo $big_image_url[0]; ?>"
                                src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" />
                        </a>
                    </div>
                    <!-- end thumb -->
                    <?php // } ?>

                    <?php $count++; endwhile; endif;
			// --------------------------------------------------------------------------
			// FIN LOOP
			// --------------------------------------------------------------------------
			?>

                </div>
                <!-- related-carousel : end -->
            </section>
            <!-- inner-section : end -->

        </section>
        <!-- page-section "project-related" : end -->



        <?php // ------------------------------------------------------------------- ?>
        <?php // SECTION CONTACT ?>
        <?php // ------------------------------------------------------------------- ?>
        <?php
        // get part for contact area
        require_once(dirname(__FILE__) . "/../../templates-parts/part-contact-area-form.php");
        ?>


        <?php // ------------------------------------------------------------------- ?>
        <?php // MODALS ?>
        <?php // ------------------------------------------------------------------- ?>

        <!-- start modal Works -->
        <div id="modal-works" class="modal-works-main-wrapper">
            <?php // OJO to close the modal, the class name has to match the name given on the ID > close-XXXXXX ?>
            <div id="modal-works-closebt-container" class="close-modal-works">
                <img class="modal-works-closebt"
                    src="<?php echo get_template_directory_uri(); ?>/images/btn-close-modal.svg">
            </div>
            <div id="modal-works-content-container" class="custom-scroll-area">
                <img id="modal-works-big-image" alt="" title=""
                    src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7">
            </div>
        </div>
        <!-- end modal Works -->


        <?php // ------------------------------------------------------------------- ?>
    </section>
    <!-- Master Wrap : end -->
    <?php // ------------------------------------------------------------------- ?>


    <?php // ------------------------------------------------------------------- ?>
    <!-- start wp footer  -->
    <?php require_once(dirname(__FILE__) . "/../../x-headers-footers/footer-main.php"); ?>

    <!-- start view js  -->
    <script type="text/javascript"
        src=" <?php echo get_template_directory_uri() .  '/templates-custom/post-single/post-single-basic.min.js' . $NOCACHE_VERSION_STRING; ?>">
    </script>

    <!-- END BODY ***************************************************************************** -->
</body>

</html>