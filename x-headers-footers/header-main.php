<?php // NOTA: este header es mas bien un include de metas. no usar html tags aca ?>
<meta charset="utf-8">
<?php // Google Chrome Frame for IE ?>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php // Page Title ?>
<title><?php if (is_front_page()) { bloginfo('name'); } else { wp_title('El Pixelista  - '); } ?></title>
<?php // Mobile meta ?>
<meta name="HandheldFriendly" content="True" />
<meta name="MobileOptimized" content="320" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<?php // icons & favicons (generador de icos automatico > https://realfavicongenerator.net/) ?>
<?php // Apple touch + varios PNG + .ICO para IE + Tile image para windows 8 o 10 ?>
<link rel="apple-touch-icon" sizes="180x180"
    href="<?php echo get_template_directory_uri(); ?>/images/favicons/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"
    href="<?php echo get_template_directory_uri(); ?>/images/favicons/favicon-192x192.png">
<link rel="icon" type="image/png" sizes="96x96"
    href="<?php echo get_template_directory_uri(); ?>//images/favicons/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="48x48"
    href="<?php echo get_template_directory_uri(); ?>/images/favicons/favicon-48x48.png">
<link rel="icon" type="image/png" sizes="32x32"
    href="<?php echo get_template_directory_uri(); ?>/images/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16"
    href="<?php echo get_template_directory_uri(); ?>/images/favicons/favicon-16x16.png">
<!--[if IE]>
<link rel="shortcut icon" type=”image/x-icon” href="<?php echo get_template_directory_uri(); ?>/images/favicons/favicon.ico">
<![endif]-->
<meta name="msapplication-TileColor" content="#9cc74c">
<meta name="msapplication-TileImage"
    content="<?php echo get_template_directory_uri(); ?>/images/favicons/mstile-150x150.png">

<!-- OG DATA -->
<meta property="og:title"
    content="<?php if (is_front_page()) { bloginfo('name'); } else { wp_title('El Pixelista - '); } ?>" />
<meta property="og:description"
    content="I’m a screen craftsman. I believe that attention to small details makes the difference. I´m a curious guy, specialized in creating high-quality screen experiences. Beyond everything, interaction design is all about storytelling." />
<meta property="og:type" content="website" />
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/og-screens/og-image-1.jpg" />
<meta property="og:image:type" content="image/jpeg">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:url" content="<?php global $wp; echo home_url( $wp->request );?>" />


<!-- start header-main pace -->
<script type="text/javascript">
// pace options
paceOptions = {
    startOnPageLoad: true, // true default
    // document: false, // disabled
    /* elements: {
        selectors: ['.base-intro']
    }, */
    ajax: false, // disabled
    eventLag: false, // disabled
    restartOnPushState: false,
    restartOnRequestAfter: false
}
</script>

<!-- pace in line css-->
<style>
<?php require_once(dirname(__FILE__).'/../templates-assets/js-plugins/pace/pace.css.min.php'); ?>
</style>

<!-- pace in line JS-->
<script type="text/javascript">
<?php require_once(dirname(__FILE__).'/../templates-assets/js-plugins/pace/pace.min.php'); ?>
</script>

<!-- start wp head -->
<?php wp_head(); ?>
<!-- end wp head -->

<!-- start header-main css -->
<link rel='stylesheet'
    href='<?php echo get_template_directory_uri(); ?>/templates-assets/dist/global-master-bundle.min.css<?php echo $NOCACHE_VERSION_STRING; ?>'
    type='text/css' media='all' />
<!-- end header-main css -->