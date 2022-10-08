<?php
/*
 * Grid Works
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
        href="<?php echo get_template_directory_uri() .  '/templates-custom/page-grid-works/page-grid-works.min.css' . $NOCACHE_VERSION_STRING; ?>"
        type="text/css" media="all" />

</head>
<!-- END HEAD ******************************************************************************** -->

<!-- START BODY ****************************************************************************** -->

<body <?php body_class(); ?>>

    <?php // PHP init stuff, vars, fields, etc ?>
    <?php require_once( "x-page-grid-works-init.php"); ?>

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
        <section id="portfolio-full" class="portfolio-full page-section">

            <!-- inner-section : inicio -->
            <section class="inner-section preview-wrap">

                <!-- Filter -->
                <div id="filter" class="clearfix">
                    <div id="filter_wrapper">
                        <ul id="portfolioFilter">
                            <?php
                            // Set your args
                            $args = array(
                                'hide_empty' => 0   // Show terms that are not associated with any posts
                            );
                            // Get the terms
                            $projects = get_terms('category-work', $args);
                            $projectsSorted = [];

                            foreach($projects as $key => $project) {
                                // sorteo las categorias que quiero ordenar chequeando el slug
                                if ($project->slug=="featured"){
                                    $featured=$project;
                                    $featured->filter = ".featured";
                                }
                                if ($project->slug=="touch"){
                                    $touch=$project;
                                    $touch->filter = ".touch";
                                }
                                if ($project->slug=="applications"){
                                    $applications=$project;
                                    $applications->filter = ".applications";
                                }
                                if ($project->slug=="web" || $project->slug=="wordpress"){
                                    // join these two categories > set custom name
                                    $webwordpress=$project;
                                    $webwordpress->filter = ".web, .wordpress";
                                    $webwordpress->name = "Web/WordPress";
                                }
                                if ($project->slug=="e-marketing"){
                                    $emarketing=$project;
                                    $emarketing->filter = ".e-marketing";
                                }
                                if ($project->slug=="graphics"){
                                    $graphics=$project;
                                    $graphics->filter = ".graphics";
                                }
                                if ($project->slug=="presentations"){
                                    $presentations=$project;
                                    $presentations->filter = ".presentations";
                                }

                            }

                            $allFilters= ".featured, .touch, .e-marketing, .applications, .graphics, .web, .wordpress, .presentations";

                            array_push($projectsSorted , $featured);
                            array_push($projectsSorted , $touch);
                            array_push($projectsSorted , $applications);
                            array_push($projectsSorted , $webwordpress);
                            array_push($projectsSorted , $emarketing);
                            array_push($projectsSorted , $graphics);
                            array_push($projectsSorted , $presentations);

                            // Loopeamos por las categorias/terms
                            $count=1;
                            foreach($projectsSorted as $project) {
                                if ($count==1){
                                    // seteamos el primero como activo
                                    echo '<li class="filter active active-filter" data-filter="' . $project->filter . '">' . $project->name. "</li>";
                                } else {
                                    echo '<li class="filter" data-filter="' . $project->filter . '">' . $project->name. "</li>";
                                }
                                $count++;
                            }

                            // seteamos el ultimo como all
                            echo '<li class="filter" data-filter="' . $allFilters . '">All</li>';

                            ?>
                        </ul>
                    </div>
                </div> <!-- Fin: Filter -->


                <div id="portfolio-wrap">

                    <!-- Thumbnails -->
                    <div id="portfolio_thumbs">

                        <ul id="grid-portfolio" class="sortablePortfolio clearfix">
                            <?php
					// --------------------------------------------------------------------------
					// LOOP PARA ARMAR THUMBNAILS con query posts sobre el POST TYPE
					// --------------------------------------------------------------------------
					$count = 1;
					query_posts(array(
					'post_type' => 'work',
					//'category-work'  => 'destacados',
					// EXCLUYO CAT XXXX
					// 'exclude' => '29',
					'posts_per_page' => 500,
					//'paged' => get_query_var('paged'),
					//'orderby' => 'rand'
					'order' => 'DESC'
					));

					if (have_posts()) : while (have_posts()) : the_post();

					// me traigo las categorias/terms y las junto
					$terms = wp_get_post_terms( $post->ID, 'category-work');
					$string_clases_cats="";
					foreach($terms as $term) {
						$string_clases_cats= $string_clases_cats . $term->slug . " " ;
					}
					// UNA FORMA DE TRAER EL THUMB PERO SOLO EL SRC FILE
					if ( has_post_thumbnail()) {
						$thumb_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'custom-med-thumbnail');
						$big_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');
					}
					?>

                            <!-- thumb -->
                            <li class="mix <?php echo $string_clases_cats;?> ">
                                <!-- Thumbnail -->
                                <a data-scroll-ignore class="open-modal-works" id="zoom-<?php echo $post->post_name; ?>"
                                    href="#modal-works" data-big-image="<?php echo $big_image_url[0]; ?>">
                                    <img alt="" title="" class="img-responsive"
                                        data-src="<?php echo $thumb_image_url[0]; ?>"
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" />

                                    <!-- Info -->
                                    <div class="item_info">
                                        <h3><span><?php the_title(); ?></span></h3>
                                        <div class="tags">
                                            <span>
                                                <?php
										if (get_field( "client" )) {
											echo get_field ( "client" );
										} else {
											echo ( "------" );
										}
									?>

                                        </div>
                                    </div>

                                </a>
                            </li>
                            <!-- end thumb -->

                            <?php $count++; endwhile; endif;
					// --------------------------------------------------------------------------
					// FIN LOOP
					// --------------------------------------------------------------------------
					?>
                        </ul> <!-- Fin: ul grid -->

                    </div> <!-- Fin: Thumbnails -->

                </div> <!-- Fin: Portfolio Wrap -->

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
                src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" />
        </div>
    </div>
    <!-- end modal Works -->


    <?php // ------------------------------------------------------------------- ?>
    <!-- start wp footer  -->
    <?php require_once(dirname(__FILE__) . "/../../x-headers-footers/footer-main.php"); ?>

    <!-- start view js + plugins -->
    <script type="text/javascript" defer
        src=" <?php echo get_template_directory_uri() .  '/templates-custom/page-grid-works/page-grid-works.min.js' . $NOCACHE_VERSION_STRING; ?>">
    </script>

    <!-- END BODY ***************************************************************************** -->
</body>

</html>