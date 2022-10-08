<?php
/*
 * Template Name: Product Single - Product Detail
 * Template Post Type: product
 * NOTE: este template este seteado para PostType "PRODUCT" en la linea anterior
 */
?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js custom-scroll-area">

<!-- START HEAD ******************************************************************************** -->
<head>

<!-- start wp header -->
<?php require_once(dirname(__FILE__) . "/../../x-headers-footers/header-main.php"); ?>

<!-- start view css styles -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri() .  '/templates-custom/product-single/product-single.css'; ?>" type="text/css" media="all" />

</head>
<!-- END HEAD ******************************************************************************** -->

<!-- START BODY ****************************************************************************** -->
<body <?php body_class(); ?>>




Product Single Item Detail CUSTOM TEMPLATE OK!!




<?php // ------------------------------------------------------------------- ?>
<!-- start wp footer  -->
<?php require_once(dirname(__FILE__) . "/../../x-headers-footers/footer-main.php"); ?>

<!-- start view js  -->
<script type="text/javascript" src=" <?php echo get_template_directory_uri() .  '/templates-custom/product-single/product-single.js'; ?>"></script>

<!-- END BODY ***************************************************************************** -->
</body>
</html>