<?php

// RETURN RESULTS FOR ALL POST TYPES IF NEEDED
function searchfilter($query) {
 
if ($query->is_search && !is_admin() ) {
    $query->set('post_type',array('post','page','work','product'));
}

return $query;
}
// DISABLED!
// add_filter('pre_get_posts','searchfilter');



?>
