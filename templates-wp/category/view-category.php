<?php
/*
 * View ESPECIFICA STD de category: >>>> para el post TYPE "POST"
 * View que requiere recibir un "TERM" o sea la categoria en parametro "noticias"
 * Ejemplo: http://localhost/webs-wp/networkian/category/noticias/
 */
?>
<!doctype html>  
<html <?php language_attributes(); ?> class="no-js">

<!-- START HEAD ******************************************************************************** -->
<head>

<!-- start wp header -->
<?php require_once(dirname(__FILE__) . "/../../x-headers-footers/header-main.php"); ?>

<!-- start view css styles -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri() .  '/templates-wp/category/view-category.css'; ?>" type="text/css" media="all" />

</head>
<!-- END HEAD ******************************************************************************** -->

<!-- START BODY ****************************************************************************** -->
<body <?php body_class(); ?>>

<div class="container">
    <div class="row">
        <div class="col-xs-12">

        <?php
        // --------------------------------------------------------------------------
        // LOOP STANDARD, POR default WP toma TERM data del main query y filtra
        // --------------------------------------------------------------------------
        if (have_posts()) : while (have_posts()) : the_post(); ?>

            <div>

                <a href="<?php the_permalink(); ?>">
                    <div>
                        <div>
                            <?php the_title()?>
                        </div>
                        
                        <div>
                            <?php the_excerpt(''); ?>
                        </div>

                        <!-- ITEM TEST -->
                        <?php if ( has_post_thumbnail() ) { ?>
                            <div>
                                <?php the_post_thumbnail( 'thumbnail' , array( 'class' => 'img-responsive' )); ?>
                            </div>
                        <?php } ?> 

                    </div>
                </a>

            </div>
            <!-- end item -->

        <?php endwhile; ?>
        <?php endif; ?>
        <!--  END LOOP -->

        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
</div>
<!-- end container -->


<?php // ------------------------------------------------------------------- ?>
<!-- start wp footer  -->
<?php require_once(dirname(__FILE__) . "/../../x-headers-footers/footer-main.php"); ?>


<!-- start view js  -->
<script type="text/javascript" src=" <?php echo get_template_directory_uri() .  '/templates-wp/category/view-category.js'; ?>"></script>

<!-- END BODY ***************************************************************************** -->
</body>
</html>