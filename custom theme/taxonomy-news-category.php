<?php

get_header();
$catData=get_queried_object();

?>

<div class="middle-class" style="width : 100%;">
    <div class="page-status">
        <h1><?php echo $catData->name; ?></h1>

    </div>

</div>
<div class="card" style="width: 18rem;">
<?php
  $wpnew=array(
    'post_type'=>'news',
    'post_status'=>'Publish'
  );

  $newsquery=new Wp_Query($wpnew);
  while($newsquery->have_posts()) {
    $newsquery->the_post();
    $imagepath= wp_get_attachment_image_src(
      get_post_thumbnail_id(), '
      large'
    );
  ?>

  <img src="<?php echo $imagepath[0]  ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php the_title(); ?></h5>
    <p class="card-text"><?php the_excerpt(); ?></p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<?php } ?>



<?php
get_footer();

?>
