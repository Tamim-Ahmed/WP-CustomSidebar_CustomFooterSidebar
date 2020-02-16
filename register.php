/* WP Sidebar Register STARTS ( Custom Wordpress Sidebar or Footer Sidebar by Tamim Ahmed ) */

<?php
if ( function_exists('register_sidebar') )
register_sidebar(array(
'name' => 'Sidebar',
'before_widget' => '<div class="sidebaritem">',
'after_widget' => '</div>',
'before_title' => '<h3>',
'after_title' => '</h3>',
));
if ( function_exists('register_sidebar') )
register_sidebar(array(
'name' => 'Footer',
'before_widget' => '<div class="footer-item">',
'after_widget' => '</div>',
'before_title' => '<h3>',
'after_title' => '</h3>',
));
?>

/* WP Sidebar Register ENDS ( Custom Wordpress Sidebar or Footer Sidebar by Tamim Ahmed ) */
