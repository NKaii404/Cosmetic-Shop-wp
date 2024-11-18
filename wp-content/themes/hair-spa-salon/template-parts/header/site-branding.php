<?php 
/*
* Display Header
*/
?>
<div class="headerbox">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-md-5 align-self-center menu-1">
          <?php get_template_part( 'template-parts/navigation/site', 'nav-1' ); ?>
      </div>
      <div class="col-lg-2"></div>
       <div class="col-lg-5 col-md-5 align-self-center menu-2">
          <?php get_template_part( 'template-parts/navigation/site', 'nav-2' ); ?>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>