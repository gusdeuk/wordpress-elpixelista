<?php

add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'theme_options_add_page' );

/*
Init plugin options to white list our options
*/

/* PARA ACCEDER A LOS SETTINGS DE CUALQUIER LADO
    $options = get_option('nwrk_theme_options');
    echo $options['sometext'];
*/


function theme_options_init(){
	register_setting( 'nwrk_options', 'nwrk_theme_options', 'theme_options_validate' );
}

/**
 * Load up the menu page
 */
function theme_options_add_page() {
	//add_theme_page( 'Theme Options', 'Theme Options', 'edit_theme_options', 'theme_options', 'theme_options_do_page' );
	add_menu_page( 'Global Options', 'Global Options', 'edit_theme_options', 'theme_options', 'theme_options_do_page', get_bloginfo('template_url') . "/images/app-icons/ico-wp-lat-red.png" /*, 30*/);
	//add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
	//PARA QUE ESTO FUNCIONE PARA EL EDITOR, DEBO HABILITARLE "edit_theme_options" y TAMBNIEN "manage_options", sino no graba los settings
	//add_menu_page("Custom Settings", "Custom Settings", 'edit_theme_options', basename(__FILE__), 'theme_settings_admin', get_bloginfo('template_url') . "/images/app-icons/ico-wp-lat-red.png");
}


/**
 * Create arrays for our select and radio options
 */
$select_options = array(
	'0' => array(
		'value' =>	'0',
		'label' => 'Zero'
	),
	'1' => array(
		'value' =>	'1',
		'label' => 'One'
	),
	'2' => array(
		'value' => '2',
		'label' => 'Two'
	),
	'3' => array(
		'value' => '3',
		'label' => 'Three'
	),
	'4' => array(
		'value' => '4',
		'label' => 'Four'
	),
	'5' => array(
		'value' => '3',
		'label' => 'Five'
	)
);

$radio_options = array(
	'yes' => array(
		'value' => 'yes',
		'label' => 'Yes'
	),
	'no' => array(
		'value' => 'no',
		'label' => 'No'
	),
	'maybe' => array(
		'value' => 'maybe',
		'label' => 'Maybe'
	)
);

/**
 * Create the options page
 */
function theme_options_do_page() {
	global $select_options, $radio_options;

	if ( ! isset( $_REQUEST['settings-updated'] ) )
		$_REQUEST['settings-updated'] = false;

	?>
	<div class="wrap">
		<?php /*screen_icon(); */ echo "<h2>" /*. get_current_theme()*/ . 'Global Site Options' . "</h2>"; ?>

		<hr>

		<?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
		<div class="updated fade"><p><strong><?php echo 'Options saved'; ?></strong></p></div>
		<?php endif; ?>

		<form method="post" action="options.php">
			<?php settings_fields( 'nwrk_options' ); ?>
			<?php $options = get_option( 'nwrk_theme_options' ); ?>

			<table class="form-table">

				<!-- CONTACT FORMS SHORTCOEDES -->
				<tr valign="top"><th scope="row"><?php echo 'Contact Form 7 EN ShortCode'; ?></th>
					<td>
						<input id="nwrk_theme_options[contact_shortcode_en]" class="regular-text" type="text" name="nwrk_theme_options[contact_shortcode_en]" value="<?php echo esc_attr($options['contact_shortcode_en'] ); ?>" />	
					</td>
				</tr>
				<tr valign="top"><th scope="row"><?php echo 'Contact Form 7 ES ShortCode'; ?></th>
					<td>
						<input id="nwrk_theme_options[contact_shortcode_es]" class="regular-text" type="text" name="nwrk_theme_options[contact_shortcode_es]" value="<?php echo esc_attr($options['contact_shortcode_es'] ); ?>" />	
					</td>
				</tr>
			</table>



			<hr>



			<table class="form-table">

				<!-- TEXT FIELD EXAMPLE -->
				<tr valign="top"><th scope="row"><?php echo 'Header Text Example'; ?></th>
					<td>
						<input id="nwrk_theme_options[header_text]" class="regular-text" type="text" name="nwrk_theme_options[header_text]" value="<?php echo esc_attr($options['header_text'] ); ?>" />
					</td>
				</tr>

			</table>


			<hr>


			<table class="form-table">

				 <!-- A sample checkbox option -->

				<tr valign="top"><th scope="row"><?php echo 'A checkbox'; ?></th>
					<td>
						<input id="nwrk_theme_options[option1]" name="nwrk_theme_options[option1]" type="checkbox" value="1" <?php checked( '1', $options['option1'] ); ?> />
						<label class="description" for="nwrk_theme_options[option1]"><?php echo 'Sample checkbox'; ?></label>
					</td>
				</tr>

				<!-- A sample text  -->
				<tr valign="top"><th scope="row"><?php echo 'Some text'; ?></th>
					<td>
						<input id="nwrk_theme_options[sometext]" class="regular-text" type="text" name="nwrk_theme_options[sometext]" value="<?php echo esc_attr($options['sometext'] ); ?>" />
						<label class="description" for="nwrk_theme_options[sometext]"><?php echo 'Sample text input'; ?></label>
					</td>
				</tr>

				<!-- A sample select option -->
				<tr valign="top"><th scope="row"><?php echo 'Select input'; ?></th>
					<td>
						<select name="nwrk_theme_options[selectinput]">
							<?php
								$selected = $options['selectinput'];
								$p = '';
								$r = '';

								foreach ( $select_options as $option ) {
									$label = $option['label'];
									if ( $selected == $option['value'] ) // Make default first in list
										$p = "\n\t<option style=\"padding-right: 10px;\" selected='selected' value='" . esc_attr( $option['value'] ) . "'>$label</option>";
									else
										$r .= "\n\t<option style=\"padding-right: 10px;\" value='" . esc_attr( $option['value'] ) . "'>$label</option>";
								}
								echo $p . $r;
							?>
						</select>
						<label class="description" for="nwrk_theme_options[selectinput]"><?php echo  'Sample select input'; ?></label>
					</td>
				</tr>

				<!-- A sample radio  -->
				<tr valign="top"><th scope="row"><?php echo 'Radio buttons'; ?></th>
					<td>
						<fieldset><legend class="screen-reader-text"><span><?php echo 'Radio buttons'; ?></span></legend>
						<?php
							if ( ! isset( $checked ) )
								$checked = '';
							foreach ( $radio_options as $option ) {
								$radio_setting = $options['radioinput'];

								if ( '' != $radio_setting ) {
									if ( $options['radioinput'] == $option['value'] ) {
										$checked = "checked=\"checked\"";
									} else {
										$checked = '';
									}
								}
								?>
								<label class="description"><input type="radio" name="nwrk_theme_options[radioinput]" value="<?php echo esc_attr($option['value'] ); ?>" <?php echo $checked; ?> /> <?php echo $option['label']; ?></label><br />
								<?php
							}
						?>
						</fieldset>
					</td>
				</tr>

				<!-- A sample TEXT AREA option -->
				<tr valign="top"><th scope="row"><?php echo 'A textbox'; ?></th>
					<td>
						<textarea id="nwrk_theme_options[sometextarea]" class="large-text" cols="50" rows="10" name="nwrk_theme_options[sometextarea]"><?php echo esc_textarea( $options['sometextarea'] ); ?></textarea>
						<label class="description" for="nwrk_theme_options[sometextarea]"><?php echo 'Sample text box'; ?></label>
					</td>
				</tr>

			</table>


			<hr>


			<p class="submit">
				<input type="submit" class="button-primary" value="<?php echo  'Save Options'; ?>" />
			</p>
		</form>
	</div>
	<?php
}

/**
 * Sanitize and validate input. Accepts an array, return a sanitized array.
 */
function theme_options_validate( $input ) {
	global $select_options, $radio_options;

	// Our checkbox value is either 0 or 1
	if ( ! isset( $input['option1'] ) )
		$input['option1'] = null;
	$input['option1'] = ( $input['option1'] == 1 ? 1 : 0 );

	// Say our text option must be safe text with no HTML tags
	$input['sometext'] = wp_filter_nohtml_kses( $input['sometext'] );

	// Our select option must actually be in our array of select options
	if ( ! array_key_exists( $input['selectinput'], $select_options ) )
		$input['selectinput'] = null;

	// Our radio option must actually be in our array of radio options
	if ( ! isset( $input['radioinput'] ) )
		$input['radioinput'] = null;
	if ( ! array_key_exists( $input['radioinput'], $radio_options ) )
		$input['radioinput'] = null;

	// Say our textarea option must be safe text with the allowed tags for posts
	$input['sometextarea'] = wp_filter_post_kses( $input['sometextarea'] );

	return $input;
}

// adapted from http://planetozh.com/blog/2009/05/handling-plugins-options-in-wordpress-28-with-register_setting/
?>