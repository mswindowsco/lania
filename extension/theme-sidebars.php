<?php
  // enable and register custom sidebar
  if (function_exists('register_sidebar')) {
    // default sidebar array
    $sidebar_attr = array(
      'name'          => '',
      'id'            => '',
      'description'   => '',
      'before_widget' => '<aside id="%1$s" class="%2$s widget">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h3 class="module-title"><span>',
      'after_title'   => '</span></h3>'
    );

    $id = 0;
    $sidebars = array(
                       "Sidebar right"=>"Display Sidebar on all page",
                       "Footer 1"=>"Display footer on all page",
                       "Footer 2"=>"Display footer on all page",
                       "Footer 3"=>"Display footer on all page",
                       "Footer 4"=>"Display footer on all page",
                      
                     );
      foreach ($sidebars as $key=>$value) {
          $sidebar_attr['name'] = $key;
          $sidebar_attr['description']=$value;
          $sidebar_attr['id'] = THEME_PREFIX . '-sidebar-' . $id++;
          register_sidebar($sidebar_attr);
      }


  }



