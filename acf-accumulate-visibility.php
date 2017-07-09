<?php
/*
Plugin Name: Advanced Custom Fields: Accumulate Visibility
Plugin URI: https://github.com/mindfullsilence/ACF-Accumulate-Visibility
Description: ACF "hide on screen" rules use a first-found approach. This allows accumulative rules for each field group.
Version: 1.0.0
Author: Timothy Anderson
Author URI: https://github.com/mindfullsilence/
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

// Enforce a "hidden overrides shown" rule for hide_on_screen
add_action('acf/input/admin_footer', function() {
  global $post, $typenow; // vars

  $field_groups = acf_get_field_groups(); // dont run when no field groups defined

  if( empty($field_groups) ) {
    return;
  }

  foreach( $field_groups as $field_group ) {

    $args = array( 'post_id' => $post->ID, 'post_type' => $typenow );
    $visible = acf_get_field_group_visibility( $field_group, $args);

    if( $visible ) {
      $styles = acf_get_field_group_style( $field_group );
      echo '<style type="text/css">' . $styles . '</style>';
    }
  }
});
