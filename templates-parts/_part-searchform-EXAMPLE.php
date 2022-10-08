<?php
/*
 * WP STANDARD  Search FORM
 * search all post types (check inc search options)
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
<form action="<?php echo home_url( '/' ); ?>" method="get" class="form-inline search-form">
    <fieldset>

		<div class="input-group">
			<input type="text" name="s" id="search" placeholder="<?php echo 'Search'; ?>" value="<?php the_search_query(); ?>" class="" />

			<button type="submit" class="btn-search">
				<span class="fa fa-search "  aria-hidden="true"></span>
			</button>
	    </div>

    </fieldset>
</form>

