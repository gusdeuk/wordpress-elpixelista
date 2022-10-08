<?php
/*
 * View 404
 */
?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

<!-- START HEAD ******************************************************************************** -->
<head>

<!-- start wp header -->
<?php require_once(dirname(__FILE__) . "/../../x-headers-footers/header-main.php"); ?>

<!-- start view css styles -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri() .  '/templates-wp/404/view-404.css'; ?>" type="text/css" media="all" />

</head>
<!-- END HEAD ******************************************************************************** -->

<!-- START BODY ****************************************************************************** -->
<body <?php body_class(); ?>>




<a class="notfound-image-wrapper" href="<?php echo get_bloginfo('url'); ?>">
    <div class="notfound-image"></div>
</a>




<?php // ------------------------------------------------------------------- ?>
<!-- start wp footer  -->
<?php require_once(dirname(__FILE__) . "/../../x-headers-footers/footer-main.php"); ?>

<!-- start view js  -->
<script type="text/javascript" src=" <?php echo get_template_directory_uri() .  '/templates-wp/404/view-404.js'; ?>"></script>

<!-- END BODY ***************************************************************************** -->
</body>
</html>
