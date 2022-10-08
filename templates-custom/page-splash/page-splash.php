<?php
/*
 * Splash
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
        href="<?php echo get_template_directory_uri() .  '/templates-custom/page-splash/page-splash.min.css' . $NOCACHE_VERSION_STRING; ?>"
        type="text/css" media="all" />

</head>
<!-- END HEAD ******************************************************************************** -->

<!-- START BODY ****************************************************************************** -->

<body <?php body_class(); ?>>

    <?php // ------------------------------------------------------------------- ?>
    <!-- Master Wrap : inicio -->
    <section class="splash-container">

        <div class="top-block">

            <div class="stars">
                <?php require_once(dirname(__FILE__) .  "/../../images/stars.svg"); ?>
            </div>
            <div class="stars-mini">
                <?php require_once(dirname(__FILE__) .  "/../../images/stars-mini.svg"); ?>
            </div>

        </div>

        <div class="mid-block">

            <div class="logo-wrap">

                <div class="logo">
                    <?php require_once(dirname(__FILE__) .  "/../../images/logos/elpixelista-isologo.svg"); ?>
                </div>

            </div>

            <div class="nav-wrap">

                <a class="nav-item fade-out-click-jump" href="<?php echo get_bloginfo('url') . '/en/'; ?>">
                    <div class="item-title">who</div>
                    <div class="item-caption">about me</div>
                </a>

                <a class="nav-item fade-out-click-jump" href="<?php echo get_bloginfo('url') . '/portfolio-en/'; ?>">
                    <div class="item-title">work</div>
                    <div class="item-caption">portfolio</div>
                </a>

                <a class="nav-item fade-out-click-jump" href="<?php echo get_bloginfo('url') . '/projects-en/'; ?>">
                    <div class="item-title">latest</div>
                    <div class="item-caption">projects</div>
                </a>

            </div>

        </div>

        <div class="bottom-block">
            <div class="friend">
                <?php require_once(dirname(__FILE__) .  "/../../images/logos/elpixelista-friend-iso.svg"); ?>
            </div>
        </div>



        <?php // ------------------------------------------------------------------- ?>
    </section>
    <!-- Master Wrap : end -->
    <?php // ------------------------------------------------------------------- ?>


    <?php // ------------------------------------------------------------------- ?>
    <!-- start wp footer  -->
    <?php require_once(dirname(__FILE__) . "/../../x-headers-footers/footer-main.php"); ?>

    <!-- start view js + plugins -->
    <script type="text/javascript">
    $(document).ready(function() {
        $('.blinking-star-link').click(function() {

            $("body").fadeOut(function () {
                window.location.href = window.location.href + "/en/";
            });

        })
    });

    </script>

    <!-- END BODY ***************************************************************************** -->
</body>

</html>