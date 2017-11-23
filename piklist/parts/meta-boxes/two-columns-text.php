<?php
/*
Title: Two Columns Text Component
Post Type: page
Collapse: true
Order: 2
*/

piklist('field', array(
  'type' => 'text'
  ,'columns' => 6
  ,'label' => 'Widget ID'
  ,'field' => 'two_columns_text_widget_id'
  ,'description' => 'Lowercase hyphen separated. To be used by menu items'
));

piklist('field', array(
  'type' => 'editor'
  ,'field' => 'two_columns_text_heading'
  ,'label' => 'Heading'
  , 'description' => 'Column 1. Large heading.'
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
  'type' => 'editor'
  ,'field' => 'two_columns_text_copy'
  ,'label' => 'Copy'
  , 'description' => 'Small copy.'
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
  'type' => 'text'
  ,'field' => 'two_columns_text_cta_url'
  ,'label'=> 'Link URL'
  , 'description' => 'please enter an absolute URL'
  ,'columns' => 4
));

piklist('field', array(
      'type' => 'text'
      ,'field' => 'two_columns_text_cta_text'
      ,'label'=> 'Link Text'
      , 'description' => 'please enter the text of the link'
      ,'columns' => 4
));

piklist('field', array(
  'type' => 'editor'
  ,'field' => 'two_columns_text_copy_col2'
  ,'label' => 'Copy'
  ,'description' => 'Column 2'
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
  ,'field' => 'two_columns_text_copy_bg_colour'
  ,'label' => 'Widget bg colour'
  ,'value' => 'slab--white'
  ,'choices' => array(
    'slab--white' => 'White',
    'slab--brand' => 'Light Orange',
    'slab--primary' => 'Light Green'
  )
));