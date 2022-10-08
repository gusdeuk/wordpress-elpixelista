<?php
/*
 * WP STANDARD ROOT Search RESULTS VIEW
 * GET all post types results at once >>> check php include > search options)
 * standard posts
 * 
 * http://localhost/webs-wp/networkian/?s=test
 * search specific post type
 * http://localhost/webs-wp/networkian/?s=test&post_type=product
 * 
 * Form ejemplo
 <form id="searchform" action="http://localhost/webs-wp/networkian/" method="get">
        <input class="inlineSearch" type="text" name="s" value="Enter a keyword" onblur="if (this.value == '') {this.value = 'Enter a keyword';}" onfocus="if (this.value == 'Enter a keyword') {this.value = '';}" />
        <input type="hidden" name="post_type" value="events" />
        <input class="inlineSubmit" id="searchsubmit" type="submit" alt="Search" value="Search" />
</form>
 */
?>
<!doctype html>  
<html <?php language_attributes(); ?> class="no-js">

<!-- START HEAD ******************************************************************************** -->
<head>

<!-- start wp header -->
<?php require_once(dirname(__FILE__) . "/../../x-headers-footers/header-main.php"); ?>

<!-- start view css styles -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri() .  '/templates-wp/search-results/view-search-results.css'; ?>" type="text/css" media="all" />

</head>
<!-- END HEAD ******************************************************************************** -->

<!-- START BODY ****************************************************************************** -->
<body <?php body_class(); ?>>


<div class="title-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">

				<header class="page-heading">
					<h1 class="page-title" itemprop="headline"><?php echo "Search Results"; ?></h1>
				</header> <!-- end article header -->

			</div>
			<!-- end col -->
		</div>
		<!-- end row -->
	</div>
	<!-- end container -->
</div>
<!-- end main-title-wrapper -->

<!-- generic-content-wrapper -->
<div class="generic-content-wrapper">
	<!-- ************************************************* -->
	<!-- MAIN + OPTIONAL SIDEBAR -->
	<div class="container">  
		<div id="content" class="clearfix row">
			<div id="main" class="col-sm-12" role="main">
			<!-- ************************************************* -->

				<div class="search-results-title">
					<span><?php echo "Results for"; ?> > </span><span><?php echo esc_attr(get_search_query()); ?></span>
				</div>

				<div class="search-list">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<a class="search-results-item transition-250" href="<?php the_permalink() ?>">
						<div class="title"><?php the_title(); ?></div>
						<div class="date"><?php echo get_the_time('d M Y') ?></div>
						<div class="excerpt"><?php the_excerpt(); ?></div>
					</a>
					<div class="search-results-item-sep"></div>

				<?php endwhile; ?>
				</div>

					<?php if (function_exists("emm_paginate")) { 
						emm_paginate();
					} ?>

				<?php else : ?>

					<?php echo 'No search results found.';?>

				<?php endif; ?>
				
			<!-- ************************************************* -->
			</div>
			<!-- END MAIN -->	
			<?php // get_sidebar("sidebar-name"); ?>
			<!-- END SIDEBAR -->	
		</div>
		<!-- end #CONTENT -->
	</div>
	<!-- end container -->
	<!-- ************************************************* -->
</div>
<!-- end generic-content-wrapper -->



<?php // ------------------------------------------------------------------- ?>
<!-- start wp footer  -->
<?php require_once(dirname(__FILE__) . "/../../x-headers-footers/footer-main.php"); ?>

<!-- start view js  -->
<script type="text/javascript" src=" <?php echo get_template_directory_uri() .  '/templates-wp/search-results/view-search-results.js'; ?>"></script>

<!-- END BODY ***************************************************************************** -->
</body>
</html>