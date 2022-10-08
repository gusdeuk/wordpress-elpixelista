<?php
/*
 * Grid Projects
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
        href="<?php echo get_template_directory_uri() .  '/templates-custom/page-grid-projects/page-grid-projects.min.css' . $NOCACHE_VERSION_STRING; ?>"
        type="text/css" media="all" />

</head>
<!-- END HEAD ******************************************************************************** -->

<!-- START BODY ****************************************************************************** -->

<body <?php body_class(); ?>>

    <?php // PHP init stuff, vars, fields, etc ?>
    <?php require_once( "x-page-grid-projects-init.php"); ?>

    <?php // ------------------------------------------------------------------- ?>
    <!-- Master Wrap : inicio -->
    <section id="mastwrap" class="base-portfolio">
        <?php // ------------------------------------------------------------------- ?>

        <?php // ------------------------------------------------------------------- ?>
        <?php //  MAIN HEADER TOP MENU DESKTOP - MOBILE ?>
        <?php // ------------------------------------------------------------------- ?>
        <?php
require_once(dirname(__FILE__) . "/../../templates-parts/part-top-nav-menu.php");
?>

        <?php // ------------------------------------------------------------------- ?>
        <?php // SECTION PORTFOLIO FULL ?>
        <?php // ------------------------------------------------------------------- ?>

        <!-- page-section section : inicio -->
        <section id="projects" class="projects page-section">

            <!-- inner-section : inicio -->
            <section class="inner-section page-head bgd-nwrk-green">
                <!-- container : inicio -->
                <section class="container">
                    <div class="row">
                        <article class="col-md-6 text-left">
                            <h1 class="white"><?php _e('Latest Projects', 'nwrktheme'); ?></h1>
                            <div class="liner liner-dark"></div>
                        </article>
                        <article class="col-md-6 text-right">
                            <h3 class="white">
                                <?php _e('In this section you can take a quick look over my latest designs and developments.', 'nwrktheme'); ?>
                            </h3>
                            <div class="liner-high liner-high-dark"></div>
                        </article>
                    </div>
                </section>
                <!-- container : fin -->
            </section>
            <!-- inner-section : fin -->


            <!-- inner-section : inicio -->
            <section class="inner-section post-list bgd-nwrk-mega-blue">

                <!-- container : inicio -->
                <section class="container">

                    <?php
			// --------------------------------------------------------------------------
			// LOOP PARA ARMAR THUMBNAILS con query posts sobre el POST TYPE
			// --------------------------------------------------------------------------
			$count = 1;
			query_posts(array(
			'post_type' => 'post',
			// show only latest projects
			'category_name'  => 'latest-projects',
			//'category_name'  => 'latest-projects, general-articles',
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

                    <!-- post item -->
                    <div class="row">
                        <article class="col-sm-12">

                            <div class="post-item">

                                <a class="block-a fade-out-click-jump" href="<?php echo $postlink; ?>">
                                    <img alt="" title="" class="img-responsive" src=<?php echo $big_image_url[0];?> />
                                </a>

                                <div class="block-b">
                                    <div class="post-title"><?php the_title(); ?></div>
                                    <div class="post-excerpt-a"><?php echo $acf_post_custom_excerpt_a; ?></div>
                                    <div class="post-excerpt-b ellipsis-txt"><?php echo $acf_post_custom_excerpt_b; ?>
                                    </div>
                                </div>

                                <a class="block-c fade-out-click-jump" href="<?php echo $postlink; ?>">
                                    <img alt="" title="" class="curved-arrow"
                                        src="<?php echo get_template_directory_uri() .  '/images/ico-curved-arrow.svg'; ?>" />
                                </a>

                            </div>

                        </article>
                    </div>
                    <!-- end post item -->

                    <?php $count++; endwhile; endif;
			// --------------------------------------------------------------------------
			// FIN LOOP
			// --------------------------------------------------------------------------
			?>

                </section>
                <!-- container : fin -->

            </section>
            <!-- inner-section : fin -->

        </section>
        <!-- page-section section  : fin -->


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
    <script type="text/javascript"
        src=" <?php echo get_template_directory_uri() .  '/templates-custom/page-grid-projects/page-grid-projects.min.js'  . $NOCACHE_VERSION_STRING; ?>">
    </script>

    <!-- END BODY ***************************************************************************** -->
</body>

</html>