<?php
/*
 * Home
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
        href="<?php echo get_template_directory_uri() .  '/templates-custom/page-home/page-home.min.css' . $NOCACHE_VERSION_STRING; ?>"
        type="text/css" media="all" />

</head>
<!-- END HEAD ******************************************************************************** -->

<!-- START BODY ****************************************************************************** -->

<body <?php body_class(); ?>>
    <?php // PHP init stuff, vars, fields, etc ?>
    <?php require_once( "x-page-home-init.php"); ?>

    <?php // ------------------------------------------------------------------- ?>
    <!-- Master Wrap : inicio -->
    <section id="mastwrap" class="mastwrap-home">

        <?php // ------------------------------------------------------------------- ?>
        <?php //  MAIN HEADER TOP MENU DESKTOP - MOBILE ?>
        <?php // ------------------------------------------------------------------- ?>
        <?php
        require_once(dirname(__FILE__) . "/../../templates-parts/part-top-nav-menu.php");
        ?>

        <?php // ------------------------------------------------------------------- ?>
        <?php // SECTION INTRO ?>
        <?php // ------------------------------------------------------------------- ?>

        <!-- page-section : start -->
        <section id="intro" class="intro base-intro"
            style="background-image: url('<?php echo $acf_intro_image_url; ?>');">

            <div class="container vertical-center intro">
                <article class="col-md-12 text-center call-to-action">

                    <div class="avatar">
                        <a href="#about">
                            <div class="img-icon">
                                <?php require_once(dirname(__FILE__) .  "/../../images/logos/avatar-toon.svg"); ?>
                            </div>
                            <img class="img-photo" alt="" title=""
                                src="<?php echo get_template_directory_uri(); ?>/images/avatar.jpg" />
                            ?>
                    </div>


                    <h2 class="white"><?php echo $acf_intro_title; ?></h2>
                    <div class="liner-center"></div>
                    <h4 class="white"><?php echo $acf_intro_sub_title; ?></h4>

                    <div>
                        <a href="#about" class="btn btn-nwrk-light-blue welcome-pill"><?php _e('welcome', 'nwrktheme'); ?></a>
                    </div>

                </article>
            </div>

        </section>
        <!-- page-section : end -->


        <?php // ------------------------------------------------------------------- ?>
        <?php // SECTION ABOUT ?>
        <?php // ------------------------------------------------------------------- ?>

        <!-- page-section : start -->
        <section id="about" class="about page-section waypoint-in">

            <?php // ABOUT HEAD ?>
            <!-- inner-section : start -->
            <section class="inner-section page-head about-head">
                <!-- container : start -->
                <section class="container">
                    <div class="row">
                        <article class="col-md-6 text-left">
                            <h1 class="white"><?php echo $acf_section_a_main_title;?></h1>
                            <div class="liner liner-dark"></div>
                        </article>
                        <article class="col-md-6 text-right">
                            <h3 class="white"><?php echo $acf_section_a_main_caption;?></h3>
                            <div class="liner-high liner-high-dark"></div>
                        </article>
                    </div>
                </section>
                <!-- container : end -->
            </section>
            <!-- inner-section : end -->

            <?php // ABOUT INFO ?>
            <!-- inner-section : start -->
            <section class="inner-section about-info">

                <!-- container : start -->
                <section class="container add-top-half">
                    <div class="row">
                        <article class="col-md-4">
                            <p class="promo-text"><?php echo $acf_section_a_left_caption;?></p>
                            <div><span class="liner-big"></span></div>
                        </article>
                        <article class="col-md-4 col-sm-6">
                            <h3 class="sub-heading"><?php echo $acf_section_a_block_1_title;?></h3>
                            <div class="text-top"><?php echo $acf_section_a_block_1_text;?></div>
                        </article>
                        <article class="col-md-4 col-sm-6">
                            <h3 class="sub-heading"><?php echo $acf_section_a_block_2_title;?></h3>
                            <div class="text-top"><?php echo $acf_section_a_block_2_text ;?></div>
                        </article>
                    </div>

                    <!-- icos about : start-->
                    <div class="row icos-about">
                        <article class="col-md-4 col-sm-4 col-xs-4">
                            <div class="row">
                                <article class="col-md-3 mob-center ico-image">
                                    <img title="" alt="" class="img-responsive img-about-1"
                                        src="<?php echo get_template_directory_uri(); ?>/images/ico-about-1.svg" />
                                </article>

                                <article class="col-md-9 ico-txt">
                                    <p class="count"><?php echo $acf_section_a_icon_label_1;?></p>
                                </article>
                            </div>
                        </article>

                        <article class="col-md-4 col-sm-4 col-xs-4">
                            <div class="row">
                                <article class="col-md-3 mob-center ico-image">
                                    <img title="" alt="" class="img-responsive img-about-2"
                                        src="<?php echo get_template_directory_uri(); ?>/images/ico-about-2.svg" />
                                </article>

                                <article class="col-md-9 ico-txt">
                                    <p class="count"><?php echo $acf_section_a_icon_label_2;?></p>
                                </article>
                            </div>
                        </article>

                        <article class="col-md-4 col-sm-4 col-xs-4">
                            <div class="row">
                                <article class="col-md-3 mob-center ico-image">
                                    <img title="" alt="" class="img-responsive img-about-3"
                                        src="<?php echo get_template_directory_uri(); ?>/images/ico-about-3.svg" />
                                </article>

                                <article class="col-md-9 ico-txt">
                                    <p class="count"><?php echo $acf_section_a_icon_label_3;?></p>
                                </article>
                            </div>
                        </article>
                    </div>
                    <!-- icos about : fin-->

                </section>
                <!-- container : end -->
            </section>
            <!-- inner-section : end -->


        </section>
        <!-- page-section : end -->


        <?php // ------------------------------------------------------------------- ?>
        <?php // SECTION SKILLS ?>
        <?php // ------------------------------------------------------------------- ?>

        <!-- page-section : start -->
        <section id="skills" class="services page-section">
            <!-- inner-section : start -->
            <section class="inner-section page-head services-head">
                <!-- container : start -->
                <section class="container">
                    <div class="row">
                        <article class="col-md-6 text-left">
                            <h1 class="white"><?php echo $acf_section_b_main_title ;?></h1>
                            <div class="liner"></div>
                        </article>
                        <article class="col-md-6 text-right">
                            <h3 class="white"><?php echo $acf_section_b_main_caption;?></h3>
                            <div class="liner-high"></div>
                        </article>
                    </div>
                </section>
                <!-- container : end -->
            </section>
            <!-- inner-section : end -->


            <!-- inner-section services-info (blocks + skills) : start -->
            <section class="inner-section services-info">

                <!-- container service blocks : start -->
                <section class="container add-top-half">

                    <!-- service-block : start -->
                    <div class="service-block">
                        <div class="service-short">
                            <div class="row">
                                <article class="col-md-3 service-short-icon text-center">
                                    <img title="" alt="" class="img-responsive"
                                        src="<?php echo get_template_directory_uri(); ?>/images/ico-service-1.svg" />
                                </article>
                                <article class="col-md-9 service-short-info">
                                    <h2><?php echo $acf_section_b_block_1_title;?></h2>
                                    <p><?php echo $acf_section_b_block_1_text;?></p>
                                    <h5><span><?php echo $acf_section_b_block_1_text_bottom;?></span></h5>
                                </article>
                            </div>
                        </div>

                    </div>
                    <!-- service-block : end -->

                    <!-- service-block : start -->
                    <div class="service-block">
                        <div class="service-short">
                            <div class="row">
                                <article class="col-md-3 service-short-icon text-center">
                                    <img title="" alt="" class="img-responsive"
                                        src="<?php echo get_template_directory_uri(); ?>/images/ico-service-2.svg" />
                                </article>
                                <article class="col-md-9 service-short-info">
                                    <h2><?php echo $acf_section_b_block_2_title;?></h2>
                                    <p><?php echo $acf_section_b_block_2_text;?></p>
                                    <h5><span><?php echo $acf_section_b_block_2_text_bottom;?></span></h5>
                                </article>
                            </div>
                        </div>

                    </div>
                    <!-- service-block : start -->

                    <!-- service-block : inicio -->
                    <div class="service-block">
                        <div class="service-short">
                            <div class="row">
                                <article class="col-md-3 service-short-icon text-center">
                                    <img title="" alt="" class="img-responsive"
                                        src="<?php echo get_template_directory_uri(); ?>/images/ico-service-3.svg" />
                                </article>
                                <article class="col-md-9 service-short-info">
                                    <h2><?php echo $acf_section_b_block_3_title;?></h2>
                                    <p><?php echo $acf_section_b_block_3_text;?></p>
                                    <h5><span><?php echo $acf_section_b_block_3_text_bottom;?></span></h5>
                                </article>
                            </div>
                        </div>
                    </div>
                    <!-- service-block : end -->

                </section>
                <!-- container  service blocks: end -->


                <!-- icos skills: start  -->
                <section id="skill-bars-container" class="container skills-wrapper">

                    <div class="row skills-row">
                        <!-- icos skills fila 1 -->
                        <div class="col-sm-6 clearfix ">
                            <article class="skillbar clearfix " data-percent="100%">
                                <div class="skillbar-title" style="background: #92C92C;">
                                    <div>&nbsp;&nbsp;UX Design / Iterative Prototyping&nbsp;&nbsp;</div>
                                </div>
                                <div class="skillbar-bar" style="background: #9cc74c;"></div>
                                <div class="skill-bar-percent"></div>
                            </article>

                            <article class="skillbar clearfix " data-percent="100%">
                                <div class="skillbar-title" style="background: #ffdb5a;">
                                    <div>&nbsp;&nbsp;HTML 5 / UI Front End Dev&nbsp;&nbsp;</div>
                                </div>
                                <div class="skillbar-bar" style="background: #ece17b;"></div>
                                <div class="skill-bar-percent"></div>
                            </article>

                            <article class="skillbar clearfix " data-percent="100%">
                                <div class="skillbar-title" style="background: #f7a53b;">
                                    <div>&nbsp;&nbsp;CSS / SASS Expert&nbsp;&nbsp;</div>
                                </div>
                                <div class="skillbar-bar" style="background: #f7a53b;"></div>
                                <div class="skill-bar-percent"></div>
                            </article>
                        </div>

                        <!-- icos skills fila 2 -->
                        <div class="col-sm-6 clearfix">
                            <article class="skillbar clearfix " data-percent="95%">
                                <div class="skillbar-title" style="background: #336699;">
                                    <div>&nbsp;&nbsp;Functional Js Programming - Angular JS (1.x)&nbsp;&nbsp;</div>
                                </div>
                                <div class="skillbar-bar" style="background: #4D88C4;"></div>
                                <div class="skill-bar-percent"></div>
                            </article>

                            <article class="skillbar clearfix " data-percent="80%">
                                <div class="skillbar-title" style="background: #7dd7ff;">
                                    <div>&nbsp;&nbsp;Wordpress Theme Development&nbsp;&nbsp;</div>
                                </div>
                                <div class="skillbar-bar" style="background: #76D7EF;"></div>
                                <div class="skill-bar-percent"></div>
                            </article>

                            <article class="skillbar clearfix " data-percent="60%">
                                <div class="skillbar-title" style="background: #fa6e6e;">
                                    <div>&nbsp;&nbsp;ES6 - Vue JS - React JS - Angular 2+ &nbsp;&nbsp;</div>
                                </div>
                                <div class="skillbar-bar" style="background: #fa6e6e;"></div>
                                <div class="skill-bar-percent"></div>
                            </article>
                        </div>

                    </div>

                </section>
                <!-- icos skills : fin  -->

            </section>
            <!-- inner-section : end -->

        </section>
        <!-- page-section : end -->

        <!-- page-section : start -->
        <section id="portfolio" class="portfolio page-section">

            <!-- inner-section : start -->
            <section class="inner-section page-head portfolio-head">
                <!-- container : start -->
                <section class="container ">
                    <div class="row">
                        <article class="col-md-6 text-left">
                            <h1 class="white"><?php echo $acf_section_c_main_title;?></h1>
                            <div class="liner liner-dark"></div>
                        </article>
                        <article class="col-md-6 text-right">
                            <h3 class="white"><?php echo $acf_section_c_main_caption;?></h3>
                            <div class="liner-high liner-high-dark"></div>
                        </article>
                    </div>
                </section>
                <!-- container : end -->
            </section>
            <!-- inner-section : end -->

            <!-- inner-section : start -->
            <section class="inner-section carrusel-wrap">

                <!-- project-carousel : start -->
                <div id="project-carousel" class="project-carousel owl-carousel owl-theme">

                    <?php // use ACF post array objects
			if ( $acf_section_d_gallery ) {

				// iterate array of fields / posts objects in this case
				foreach( $acf_section_d_gallery  as $gallery_post ){
					// get posts selected by the user
					if ( $gallery_post ) {

						// get whatever i need from the post, includinf acf fields
						$gallery_post_id = $gallery_post->ID;
						$gallery_post_title = $gallery_post->post_title;
						$gallery_post_link = get_permalink ( $gallery_post_id );
						$gallery_acf_client = get_field ('client', $gallery_post_id );

						// option 1 > get square thumbnail
						// $image_url = get_the_post_thumbnail_url( $gallery_post_id, 'thumbnail' );

						// option 2 > get featured image url's, choose size
						$thumb_id = get_post_thumbnail_id ($gallery_post);
						$thumb_med_size_attachment_array = wp_get_attachment_image_src ( $thumb_id, 'custom-med-thumbnail', true );
						$thumb_full_size_attachment_array = wp_get_attachment_image_src ( $thumb_id, 'full', true);
						$gallery_image_med_size_url = $thumb_med_size_attachment_array[0];
						$gallery_image_full_size_url = $thumb_full_size_attachment_array[0];
			?>

                    <!-- thumb -->
                    <div class="item">
                        <img class="owl-lazy img-responsive" alt="" title=""
                            data-src="<?php echo $gallery_image_med_size_url; ?>"
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" />
                        <?php /* to open modal
				<a data-scroll-ignore class="open-modal-works" href="#modal-works" data-big-image="<?php echo $gallery_image_full_size_url; ?>">
                        <img class="owl-lazy img-responsive" alt="" title=""
                            data-src="<?php echo $gallery_image_med_size_url; ?>"
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" />
                        </a>
                        */?>
                    </div>
                    <!-- end thumb -->
                    <?php
					}
				}
			}
			?>

                    <!-- LAST thumb see more-->
                    <div class="item see-more">
                        <a href="<?php echo $fullPortfolioURL ; ?>" class="fade-out-click-jump">
                            <div class="icon-see-more"><img class=""
                                    src="<?php echo get_template_directory_uri(); ?>/images/btn-plus-circle.svg" />
                            </div>
                            <img class="owl-lazy img-responsive" alt="" title="" data-src=""
                                src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" />
                        </a>
                    </div>
                    <!-- end LAST thumb see more-->

                </div>
                <!-- project-carousel : end -->
            </section>
            <!-- inner-section : end -->


            <!-- inner-section : start -->
            <section class="inner-section portfolio-link-wrap">
                <section class="container">

                    <div class="row">
                        <article class="full-port-access-btn">
                            <a href="<?php echo $fullPortfolioURL ; ?>" class="btn fade-out-click-jump btn-ani-zoomed-1 animated heartBeat btn-nwrk-light-blue">
                                <?php _e('View Full Portfolio', 'nwrktheme');?>
                            </a>
                            <a href="<?php echo $latestProjectsURL ; ?>" class="btn fade-out-click-jump btn-ani-zoomed-2 animated heartBeat btn-nwrk-color ">
                                <?php _e('Check Latest Projects', 'nwrktheme');?>
                            </a>
                        </article>
                    </div>

                    <div class="row">
                        <article class="full-port-access-txt">
                            <?php echo $acf_section_c_bottom_text;?>
                        </article>
                    </div>

                </section>
            </section>
            <!-- inner-section : end -->


        </section>
        <!-- page-section : end -->

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
    <?php // MODALS ?>
    <?php // ------------------------------------------------------------------- ?>
    <?php /* modal not used
<!-- start modal Works -->
<div id="modal-works" class="modal-works-main-wrapper">
	<?php // OJO to close the modal, the class name has to match the name given on the ID > close-XXXXXX ?>
    <div id="modal-works-closebt-container" class="close-modal-works">
        <img class="modal-works-closebt" src="<?php echo get_template_directory_uri(); ?>/images/btn-close-modal.svg">
    </div>
    <div id="modal-works-content-container">
        <img id="modal-works-big-image" alt="" title=""
            src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" />
    </div>
    </div>
    <!-- end modal Works -->
    */ ?>


    <?php // ------------------------------------------------------------------- ?>
    <!-- start wp footer  -->
    <?php require_once(dirname(__FILE__) . "/../../x-headers-footers/footer-main.php"); ?>

    <!-- start view js + plugins -->
    <script type="text/javascript" defer
        src=" <?php echo get_template_directory_uri() .  '/templates-custom/page-home/page-home.min.js' . $NOCACHE_VERSION_STRING; ?>"></script>

    <!-- END BODY ***************************************************************************** -->
</body>

</html>