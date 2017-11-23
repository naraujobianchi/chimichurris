<?php
/*
Title: Two Columns with Image Component
Post Type: page
Collapse: true
Order: 5
*/

piklist('field', array(
  'type' => 'text'
  ,'columns' => 6
  ,'label' => 'Widget ID'
  ,'field' => 'two_columns_with_img_widget_id'
  ,'description' => 'Lowercase hyphen separated. To be used by menu items'
));

piklist('field', array(
  'type' => 'text'
  ,'field' => 'two_columns_with_img_heading'
  ,'label' => 'Heading'
  ,'columns' => 12
  ,'description'=>'Please add the Heading'
));
piklist('field', array(
  'type' => 'file'
  ,'field' => 'two_columns_with_img_image'
  ,'description'=>'Please add the image that will appear in the left column. At least 500px wide'
  ,'label' => 'Content image'
  ,'columns' => 12
));
piklist('field', array(
  'type' => 'editor'
  ,'field' => 'two_columns_with_img_copy'
  ,'label' => 'Copy'
  ,'description'=>'Left column'
  ,'options' => array(
      'wpautop' => true
      ,'media_buttons' => true
      ,'shortcode_buttons' => true
      ,'teeny' => false
      ,'dfw' => false
      ,'tinymce' => array(
        'resize' => false
        ,'wp_autoresize_on' => true
      )
      ,'quicktags' => true
      ,'drag_drop_upload' => true
    )
    // ,'on_post_status' => array(
    //   'value' => 'lock'
    // )
));
piklist('field', array(
  'type' => 'select'
  ,'field' => 'two_columns_with_img_bg_colour'
  ,'label' => 'Widget bg colour'
  ,'value' => 'slab--white'
  ,'choices' => array(
    'slab--white' => 'White',
    'slab--brand' => 'Light Orange',
    'slab--primary' => 'Light Green'
  )
));