</div>
<footer>
<?php
wp_nav_menu( array(
'theme_location'=>'clients',
'container'=>'true',
'menu_class'=>'',
'fallback_cb'=>'true',
'depth'=>0
) );
?>
<?php
if(! is_active_sidebar( 'bilal-sidebar-2' )){
return;
};

?>
<aside id="bilal-sidebarr" class="widget-area" role="complementry">
<?php dynamic_sidebar( 'bilal-sidebar-2' );?>
</aside>
<p>Copyright &copy; 2020</p>
</footer>
</div>
<?php wp_footer();?>
</body>
</html>