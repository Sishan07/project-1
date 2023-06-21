<?php
/*
Tempalate Name:News Template
*/
get_header()
?>
 
<div class="card" style="width: 18rem;">
<form method="get">
    <input type="text" placeholder="Search by name" name="
    title" style="width: 250px;padding: 10px">
    <input type="hidden" name="paged" style="width: 25px;padding: 10px" value="<?php echo $paged ?>">
    <input type="sumbit" value="search" name="" styles="padding: 12px;">
  </form>
  <?php
  $wpnew=array(
    'post_type'=>'news',
    'post_status'=>'Publish'
    's'=>$searchData
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
    <p class="card-text"><?php echo get_the_date(); ?></p>
    <a href="#" class="btn btn-primary">Read More</a>
  </div>
</div>
<?php } ?>
 


 <?php

    get_footer()

 ?>