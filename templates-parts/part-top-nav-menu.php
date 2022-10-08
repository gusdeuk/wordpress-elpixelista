<?php // ------------------------------------------------------------------- ?>
<?php //  MAIN HEADER MENU MOBILE ?>
<?php // ------------------------------------------------------------------- ?>

<!-- Sliding Navigation MOBILE : start -->
<nav class="menu" id="slidemenu">
    <div class="sm-wrap">

        <!-- top menu mobile -->
        <?php
		foreach ($nav_menu_items as $key => $item) {
?>
        <a id="<?php echo $item['id-mob'];?>" class="<?php echo $item['class'];?>"
            href="<?php echo $item['link'];?>"><?php echo $item['name'];?></a>
        <?php
		}
?>

        <?php
		if ($switchLangURL) {
?>
        <!-- lang switch mobile -->
        <a class="fade-out-click-jump" href="<?php echo $switchLangURL; ?>"><?php echo $switchLangLabel; ?></a>
        <?php
		}
?>

    </div>
    <!-- Navigation Trigger Button -->
    <div id="sm-trigger">
        <div class="menu-icon-close fa fa-close"></div>
        <div class="menu-icon-hamb fa fa-navicon"></div>
        <div class="menu-icon-back-top fa fa-arrow-up" id="menu-icon-back-top"></div>
    </div>
</nav>
<!-- Sliding Navigation MOBILE : end -->

<!-- masthead : inicio -->
<header id="masthead" class="masthead clearfix">
    <div class="background-top-strip"></div>
    <!-- container : inicio -->
    <section class="container">
        <div class="row head-main-wrap">

            <article class="head-logo-wrap">

                <a class="fade-out-click-jump" href="<?php echo $backHomeURL; ?>">
                    <div class="main-logo"></div>
                </a>

            </article>

            <article class="head-nav-wrap">
                <ul id="main-nav" class="main-nav standard-nav text-right">

                    <!-- top menu std desktop -->
                    <?php
						foreach ($nav_menu_items as $key => $item) {
?>
                    <li><a id="<?php echo $item['id-std'];?>" class="<?php echo $item['class'];?>"
                            href="<?php echo $item['link'];?>">
                            <div class="item-menu-name"><?php echo $item['name'];?></div>
                            <div class="item-menu-oval"></div>
                        </a>
                    </li>
                    <?php
						}
?>
                    <?php
						if ($switchLangURL) {
?>
                    <!-- lang switch std -->
                    <li class="language-link">
                        <a class="fade-out-click-jump" href="<?php echo $switchLangURL; ?>"><?php echo $switchLangLabel; ?></a>
                    </li>
                    <?php
						}
?>

                </ul>
            </article>

        </div>
    </section>
    <!-- container : fin -->
</header>
<!-- masthead : fin -->

<?php // ------------------------------------------------------------------- ?>
<?php // !!!! magic spacer DIV to avoid overlaps with fixed header ?>
<?php // ------------------------------------------------------------------- ?>
<div class="magic-spacer"></div>