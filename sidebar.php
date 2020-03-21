<?php
if(! is_active_sidebar( 'bilal-sidebar-1' )){
return;
};

?>
<aside id="bilal-sidebar" class="widget-area" role="complementry">
<?php dynamic_sidebar( 'bilal-sidebar-1' );?>
</aside>