<?php
/*
 * View ESPECIFICA de TAXONOMY: >>>> "category-product", para el post TYPE "product"
 * View que requiere recibir un "TERM" o sea la categoria en parametro "test-product-category"
 * Ejemplo: http://localhost/webs-wp/networkian/category-product/test-product-category/
 */
?>
<!doctype html>  
<html <?php language_attributes(); ?> class="no-js">

<!-- START HEAD ******************************************************************************** -->
<head>

<!-- start wp header -->
<?php require_once(dirname(__FILE__) . "/../../x-headers-footers/header-main.php"); ?>

<!-- start view css styles -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri() .  '/templates-wp/taxonomy-category-product/view-taxonomy-category-product.css'; ?>" type="text/css" media="all" />

</head>
<!-- END HEAD ******************************************************************************** -->

<!-- START BODY ****************************************************************************** -->
<body <?php body_class(); ?>>

<div class="container">
    <div class="row">
        <div class="col-xs-12">

        <?php
        // This sets out a variable called $term - we'll use it ALOT for what we're about to do.
        $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); 

        // See how we used the variable to let Wordpress know we want to display the title of the taxonomy? -->
        /* echo $term->name;
        echo '<pre>';
        print_r($term); 
        echo '</pre>'; */

        // --------------------------------------------------------------------------
        // LOOP PARA ARMAR LISTA con query posts sobre:
        // POST TYPE 'product' / TAXONOMY 'category-product'
        // al valor para filtrar la taxonomy llega por SLUG, capici? ($term->slug)
        // --------------------------------------------------------------------------
        query_posts(array(
            // defino post type
            'post_type' => 'product',
            // filtro  SLUG en ESTA taxonomia > category-product
            'category-product'  => $term->slug,
            'posts_per_page' => 500,
            //'orderby' => 'rand'
            'order' => 'DESC'
        )); 

        // LOOP
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
<script type="text/javascript" src=" <?php echo get_template_directory_uri() .  '/templates-wp/taxonomy-category-product/view-taxonomy-category-product.js'; ?>"></script>

<!-- END BODY ***************************************************************************** -->
</body>
</html>
