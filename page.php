<?php
/*
 * PAGE SINGLE VIEW TEMPLATE  
 */
?>
<!doctype html>  
<html <?php language_attributes(); ?> class="no-js">

<!-- START HEAD ******************************************************************************** -->
<head>

<!-- start wp header -->
<?php require_once( "x-headers-footers/header-main.php" ); ?>


<!-- start view css styles -->
<?php /* <link rel="stylesheet" href="<?php echo get_template_directory_uri() .  '/something/something.css'; ?>" type="text/css" media="all" />  */?>

</head>
<!-- END HEAD ******************************************************************************** -->

<!-- START BODY ****************************************************************************** -->
<body <?php body_class(); ?>>




<div class="alone-message">Please select a custom PAGE template!</div>



<?php // ------------------------------------------------------------------- ?>
<!-- start wp footer  -->
<?php require_once( "x-headers-footers/footer-main.php" ); ?>

<!-- start view js  -->
<?php /* <script type="text/javascript" src=" <?php echo get_template_directory_uri() .  '/something/something.js'; ?>"></script>  */?>

<!-- END BODY ***************************************************************************** -->
</body>
</html>