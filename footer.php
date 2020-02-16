/* Footer add STARTS ( Custom Wordpress Sidebar or Footer Sidebar by Tamim Ahmed ) */

//before the first “sidebar-item” div, add the following.
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer") ) : ?>

//after the final closing “footer-item” div (and above the “clear” div which we added earlier) we’ll add the following:
<?php endif; ?>

/* Footer add ENDS ( Custom Wordpress Sidebar or Footer Sidebar by Tamim Ahmed ) */
