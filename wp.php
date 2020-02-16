/* WP Code STARTS ( Custom Wordpress Sidebar or Footer Sidebar by Tamim Ahmed ) */

<div class="footer-item">
<h3>Recent Posts</h3>
<ul>
<?php wp_get_archives('type=postbypost&limit=4'); ?>
</ul>
</div>
<div class="footer-item">
<h3>Monthy Archives</h3>
<ul>
<?php wp_get_archives('limit=4'); ?>
</ul>
</div>
<div class="footer-item">
<h3>Daily Archives</h3>
<ul>
<?php wp_get_archives('type=daily&limit=4'); ?>
</ul>
</div>

/* N.B : Replace These Codes With the Earlier HTML Codes */

/* WP Code STARTS ( Custom Wordpress Sidebar or Footer Sidebar by Tamim Ahmed ) */
