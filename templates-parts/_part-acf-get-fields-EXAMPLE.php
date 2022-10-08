<?php
//-------------------------------------------------------------------------------
// ACF get txt field
//-------------------------------------------------------------------------------

if (get_field( "manufacturer" )) {
?>
	<div><?php echo(get_field( "manufacturer" ));?></div>
<?php 
} 
?>



<?php	
//-------------------------------------------------------------------------------
// ACF get image field	 example
//-------------------------------------------------------------------------------

$header_image = get_field( "review_header_image" );
if ($header_image){ 
?>

	<img src="<?php echo  $header_image['url'] ?>" alt="<?php echo  $header_image['alt'] ?>" class="img-responsive" />

	<?php 
	} else {
	?>

	<img src="<?php echo (get_template_directory_uri() . '/images/no-image-header.png')?>" alt="" class="img-responsive" />

<?php 
}
?>


<?php	
//-------------------------------------------------------------------------------
// ACF get post field example
//-------------------------------------------------------------------------------
?>

<!-- Related reviews block -->
<div class="some-class">
	<?php	
	
	$related_elements=array();
	for ($i = 1; $i <= 5; $i++) {
		$post_object_elem = get_field('related_review_'.$i);
		if($post_object_elem) {
			array_push($related_elements, $post_object_elem);
		}
	}

	// Show related fields (if we have)
	if (count($related_elements)>0) {
	?>
		<div class="item clearfix">
		<?php
			for ($i = 1; $i <= count($related_elements); $i++) { 
				// get post object from field
				$post_object = get_field('related_review_'.$i);

				if( $post_object ) {
					// print_r($post_object);
					// override $post
					$related_title = $post_object->post_title;
					$related_id = $post_object->ID;
					$related_link = get_permalink($related_id);
					// option 1 > get square thumbnail
					// $image_url = get_the_post_thumbnail_url( $related_id, 'thumbnail' );
					// option 2 > get featured image url
					$thumb_id = get_post_thumbnail_id($post_object);
					$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
					$image_url= $thumb_url_array[0];
					
		?>	
				<a class="item" href="<?php echo $related_link ?>">
					<div class="title"><?php echo $related_title ?></div>
					<div class="image"><img src="<?php echo $image_url ?>" alt="" class="img-responsive" /></div>
				</a>
					
		<?php
				} // end if post_object
			} // end for		
		?>
		
		</div>
		<!-- END Related list -->
	<?php
	} // end if COUNT
	?>
</div>
<!-- END Related reviews -->


<?php
//-------------------------------------------------------------------------------
// get category image in ACF (archive php example)
//-------------------------------------------------------------------------------
// vars
$queried_object = get_queried_object(); 
$taxonomy = $queried_object->taxonomy;
//$term_id = $queried_object->term_id;  

// load image for this taxonomy term (term object)
$imagedata = get_field('categoryimage', $queried_object);

// load image for this taxonomy term (term string)
//$imagedata = get_field('categoryimage', $taxonomy . '_' . $term_id);

// get the desired size
$imageURL = $imagedata['url'];

//print($imageURL);
/*print "<pre>";
print_r($imagedata);
print "</pre>";*/
?>

<img class="img-responsive" src="<?php echo $imageURL ?>" alt = "">

<?php

/* DYNAMIC POST FIELDS > 
section_d_gallery (es un group field, devuelve array, devuelve array de sub fields, puedo iterarlo)
section_d_gallery_work_N 1 TO 20 */
$acf_section_d_gallery = get_field( "section_d_gallery" );

if ( $acf_section_d_gallery  ) {
	// iterate array of posts / fields
	foreach( $acf_section_d_gallery  as $gallery_post ){
		// get posts selected by the user
		if ( $gallery_post ) {

			// get whatever i need from the post, includinf acf fields
			$gallery_post_id = $gallery_post->ID;
			$gallery_post_title = $gallery_post->post_title;
			$gallery_post_link = get_permalink($gallery_post_id); 
			$gallery_acf_client = get_field('client', $gallery_post_id); 

			// option 1 > get square thumbnail
			// $image_url = get_the_post_thumbnail_url( $gallery_post_id, 'thumbnail' );

			// option 2 > get featured image url's, choose size
			$thumb_id = get_post_thumbnail_id ($gallery_post);
			$thumb_med_size_attachment_array = wp_get_attachment_image_src ( $thumb_id, 'custom-med-thumbnail', true );
			$thumb_full_size_attachment_array = wp_get_attachment_image_src ( $thumb_id, 'full', true);
			$gallery_image_med_size_url = $thumb_med_size_attachment_array[0];
			$gallery_image_full_size_url = $thumb_full_size_attachment_array[0];

			echo '<pre>';
			//print_r($gallery_post);
			echo ($gallery_image_med_size_url);
			echo '<br>';
			echo ($gallery_image_full_size_url);
			echo '<br>';
			echo ($gallery_post_title);
			echo '<br>';
			echo ($gallery_post_link);
			echo '<br>';
			echo ($gallery_acf_client); 
			echo '</pre>';
			
		}
  	} 
}

?>


<?php
//-------------------------------------------------------------------------------
// GET ALL THE FIELDS FOR A FIELD GROUP ID
//-------------------------------------------------------------------------------
$group_ID = 79;
$fields = array();
$fields = apply_filters('acf/field_group/get_fields', $fields, $group_ID);

if ($fields) {
	//print_r( $fields );
	echo '<div class="spec-fields">';
		//echo '<ul class="list-unstyled">';
		echo '<ul class="">';
		foreach( $fields as $field_name => $field )
			{
			$value = get_field( $field['name'] );
			if( $value && $value != 'no') {
				echo '<li>' . $field['label'] . ':&nbsp;' . $value . '</li>';
			}
		}
		echo '</ul>';
	echo '</div>';
}
?>