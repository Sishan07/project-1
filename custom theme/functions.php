<?php
    register_nav_menus(
        array('primary-menu' =>'Top Menu')
    );
         add_theme_support('post-thumbnails');
         add_theme_support('custom-header');

         
            /* Register the 'primary' sidebar. */
            register_sidebar(
                array(
                    'id'            => 'primary',
                    'name'          => __( 'Primary Sidebar' ),
                    'description'   => __( 'A short description of the sidebar.' ),
                    'before_widget' => '<div id="%1$s" class="widget %2$s">',
                    'after_widget'  => '</div>',
                    'before_title'  => '<h3 class="widget-title">',
                    'after_title'   => '</h3>',
                )
            );

            add_theme_support('custom-background');

            add_post_type_support('page','excerpt')
           
?>