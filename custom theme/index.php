<?php
  get_header();

// The Query
?>


<!-- <div id="sidebar-primary" class="sidebar">
	<?php dynamic_sidebar( 'primary' ); ?>
</div> -->
 
<div class="row">
<?php 
// The Loop
  while (have_posts()) {
      the_post();
      $imagepath= wp_get_attachment_image_src(
        get_post_thumbnail_id(), '
        large'
      );
      
      ?>  
      <div class="col-md-4">
        <div class="card">
        <img src="<?php echo $imagepath[0] ?>" class="slides" alt="...">
          <div class="card-body">
          <h5 class="card-title"><?php the_title() ?></h5>
          <p><?php the_excerpt() ?></p>
          <a href="<?php the_permalink();  ?>"><input type="button" value="Read More"></a>
           
            
            
          </div>
        </div>
      </div>      
            
    </div>
    <?php
          }
      
      ?>
      <p class="navi"><?php echo wp_pagenavi();  ?></p>
      <?php
    get_footer();        