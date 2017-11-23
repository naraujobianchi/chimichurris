<?php
/*
Title: Hero Slideshow
Post Type: page
Collapse: true
Order: 1
*/

piklist('field', array(
'type' => 'group'
,'field' => 'hero-slides'
,'add_more' => true
,'label' => __('Slides', 'piklist-demo')
,'description' => __('Add the slides for the slideshow.  You can add as many slides as you want, and they can be drag-and-dropped into the order that you would like them to appear.', 'piklist-demo')
,'fields'  => array(
  array(
    'type' => 'file'
    ,'field' => 'hero-slide-image'
    ,'label' => 'Slide background image'
    ,'columns' => 12
  )
  ,array(
    'type' => 'text'
    ,'field' => 'hero-slide-heading'
    ,'label' => 'Slide Heading'
    ,'columns' => 12
  )
  ,array(
    'type' => 'editor'
    ,'field' => 'hero-slide-copy'
    ,'label' => 'Slide Copy'
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
      ,'on_post_status' => array(
        'value' => 'lock'
      )
  )
)
));