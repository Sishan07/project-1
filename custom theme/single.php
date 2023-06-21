<?php
get_header();
?>




<div class="col-md-4">
        <div class="card">
          <div class="card-body">
          <h5 class="card-title"><?php the_title() ?></h5>
          <?php
   $imagepath= wp_get_attachment_image_src(
    get_post_thumbnail_id(), '
    large'
  );

?>

<img src="<?php $imagepath[0] ?>" alt="" width="100%">

<?php the_content(); ?>

<?php comments_template(); ?>
           
            
            
          </div>
        </div>
      </div> 











<?php

    get_footer();
?>