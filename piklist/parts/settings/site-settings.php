<?php
/*
Title: Settings
Setting: site_settings
*/
piklist('field', array(
  'type' => 'text'
  ,'field' => 'company_details_name'
  ,'label' => 'Company Name'
  ,'columns' => 4
  ,'description' => 'Company Name'
  ,'help' => 'Name used in teh contact details'
  ,'value' => 'Company Name'
 ));
piklist('field', array(
  'type' => 'text'
  ,'field' => 'company_details_address_line_1'
  ,'label' => 'Address Line 1'
  ,'columns' => 4
  ,'description' => 'Address line 1'
  ,'help' => 'House name, house number'
  ,'value' => 'Address line 1'
 ));
piklist('field', array(
  'type' => 'text'
  ,'field' => 'company_details_address_line_2'
  ,'label' => 'Address Line 2'
  ,'columns' => 4
  ,'description' => 'Address line 2'
  ,'help' => 'eg: (Locality), can be empty'
  ,'value' => 'Locality'
 ));
piklist('field', array(
  'type' => 'text'
  ,'field' => 'company_details_city'
  ,'label' => 'City'
  ,'columns' => 4
  ,'description' => 'City'
  ,'help' => 'eg: (London)'
  ,'value' => 'City'
 ));
piklist('field', array(
  'type' => 'text'
  ,'field' => 'company_details_postcode'
  ,'label' => 'Postcode'
  ,'columns' => 4
  ,'description' => 'Postcode'
  ,'help' => 'eg: (SE12 5XX)'
  ,'value' => 'Postcode'
 ));
 
 piklist('field', array(
  'type' => 'text'
  ,'field' => 'company_details_phone'
  ,'label' => 'Phone'
  ,'columns' => 4
  ,'description' => 'Telephone'
  ,'help' => 'eg: (0200 000 0000))'
  ,'value' => '0200 000 0000'
 ));

piklist('field', array(
  'type' => 'text'
  ,'field' => 'company_details_email'
  ,'label' => 'Company Email'
  ,'columns' => 4
  ,'description' => 'Email address'
  ,'value' => 'info@example.com'
 ));
piklist('field', array(
  'type' => 'text'
  ,'field' => 'company_details_description'
  ,'label' => 'Company description'
  ,'columns' => 4
  ,'description' => 'All rights reserved.'
  ,'help' => 'Company description comes after copyright symbol and company name'
  ,'value' => 'All rights reserved.'
 ));
piklist('field', array(
  'type' => 'editor'
  ,'field' => 'company_details_extra_info'
  ,'label' => 'Company extra info. E.g. Opening hours'
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
));
piklist('field', array(
  'type' => 'text'
  ,'field' => 'company_details_facebook'
  ,'label' => 'Facebook'
  ,'columns' => 4
  ,'description' => 'Link to Facebook'
  ,'value' => 'https://www.facebook.com/'
 ));

piklist('field', array(
  'type' => 'text'
  ,'field' => 'company_details_twitter'
  ,'label' => 'Twitter'
  ,'columns' => 4
  ,'description' => 'Link to Twitter'
  ,'value' => 'https://twitter.com/'
 ));

piklist('field', array(
  'type' => 'text'
  ,'field' => 'company_details_instagram'
  ,'label' => 'Instagram'
  ,'columns' => 4
  ,'description' => 'Link to Instagram'
  ,'value' => 'https://www.instagram.com/'
 ));