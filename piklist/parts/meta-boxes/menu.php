<?php
/*
Title: Menu
Post Type: page
Collapse: true
Order: 3
*/

piklist('field', array(
  'type' => 'text'
  ,'columns' => 6
  ,'label' => 'Widget ID'
  ,'field' => 'menu_widget_id'
  ,'description' => 'Lowercase hyphen separated. TO be used by menu items'
));

piklist('field', array(
  'type' => 'text'
  ,'field' => 'menu_widget_title'
  ,'columns' => 12
  , 'rows' => 3
  ,'label' => 'Widget title'
));

piklist('field', array(
  'type' => 'group'
  ,'field' => 'menu_section_col_1'
  ,'label' => 'Menu section Col 1'
  ,'description' => 'Add menu sections'
  ,'add_more' => true
  ,'fields' => array(
    array(
      'type' => 'text'
      ,'field' => 'menu_title'
      ,'label'=> 'Menu section title'
      ,'columns' => 12
      , 'rows' => 3
    )
    ,array(
      'type' => 'text'
      ,'field' => 'menu_subtitle'
      ,'label'=> 'Menu section subtitle'
      ,'columns' => 12
      , 'rows' => 3
    )
    ,array(
      'type' => 'group'
      ,'field' => 'menu_item'
      ,'label' => 'Menu item'
      ,'description' => 'Add menu item'
      ,'add_more' => true
      ,'fields' => array(
        array(
          'type' => 'text'
          ,'field' => 'menu_item_name'
          ,'label'=> 'Menu item name'
          ,'columns' => 12
          , 'rows' => 3
        )
        ,array(
          'type' => 'text'
          ,'field' => 'menu_item_price'
          ,'label'=> 'Menu item price'
          ,'columns' => 12
          , 'rows' => 3
        )
        ,array(
          'type' => 'text'
          ,'field' => 'menu_item_description'
          ,'label'=> 'Menu item description'
          ,'columns' => 12
          , 'rows' => 3
        )
      )
    )
  )   
));

piklist('field', array(
  'type' => 'group'
  ,'field' => 'menu_section_col_2'
  ,'label' => 'Menu section Col 2'
  ,'description' => 'Add menu sections'
  ,'add_more' => true
  ,'fields' => array(
    array(
      'type' => 'text'
      ,'field' => 'menu_title'
      ,'label'=> 'Menu section title'
      ,'columns' => 12
      , 'rows' => 3
    )
    ,array(
      'type' => 'text'
      ,'field' => 'menu_subtitle'
      ,'label'=> 'Menu section subtitle'
      ,'columns' => 12
      , 'rows' => 3
    )
    ,array(
      'type' => 'group'
      ,'field' => 'menu_item'
      ,'label' => 'Menu item'
      ,'description' => 'Add menu item'
      ,'add_more' => true
      ,'fields' => array(
        array(
          'type' => 'text'
          ,'field' => 'menu_item_name'
          ,'label'=> 'Menu item name'
          ,'columns' => 12
          , 'rows' => 3
        )
        ,array(
          'type' => 'text'
          ,'field' => 'menu_item_price'
          ,'label'=> 'Menu item price'
          ,'columns' => 12
          , 'rows' => 3
        )
        ,array(
          'type' => 'text'
          ,'field' => 'menu_item_description'
          ,'label'=> 'Menu item description'
          ,'columns' => 12
          , 'rows' => 3
        )
      )
    )
  )   
));

piklist('field', array(
  'type' => 'group'
  ,'field' => 'menu_section_col_3'
  ,'label' => 'Menu section Col 3'
  ,'description' => 'Add menu sections'
  ,'add_more' => true
  ,'fields' => array(
    array(
      'type' => 'text'
      ,'field' => 'menu_title'
      ,'label'=> 'Menu section title'
      ,'columns' => 12
      , 'rows' => 3
    )
    ,array(
      'type' => 'text'
      ,'field' => 'menu_subtitle'
      ,'label'=> 'Menu section subtitle'
      ,'columns' => 12
      , 'rows' => 3
    )
    ,array(
      'type' => 'group'
      ,'field' => 'menu_item'
      ,'label' => 'Menu item'
      ,'description' => 'Add menu item'
      ,'add_more' => true
      ,'fields' => array(
        array(
          'type' => 'text'
          ,'field' => 'menu_item_name'
          ,'label'=> 'Menu item name'
          ,'columns' => 12
          , 'rows' => 3
        )
        ,array(
          'type' => 'text'
          ,'field' => 'menu_item_price'
          ,'label'=> 'Menu item price'
          ,'columns' => 12
          , 'rows' => 3
        )
        ,array(
          'type' => 'text'
          ,'field' => 'menu_item_description'
          ,'label'=> 'Menu item description'
          ,'columns' => 12
          , 'rows' => 3
        )
      )
    )
  )   
));

piklist('field', array(
  'type' => 'select'
  ,'field' => 'menu_widget_bg_colour'
  ,'label' => 'Widget bg colour'
  ,'value' => 'slab--white'
  ,'choices' => array(
    'slab--white' => 'White',
    'slab--brand' => 'Light Orange',
    'slab--primary' => 'Light Green'
  )
));