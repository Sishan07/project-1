<?php
/* Template Name: Home*/

get_header();
?>
 <div class="image">
    <div class="content">
      <h3>Discover The Most Engaging places</h3>
      <button class="button"><i class="fa-solid fa-globe"></i> Explore The Globe In 3D</button>
    </div>
    <div class="container Explore">
      <div class="places">
        <p>Location</p>
        <div class="logo">
          <i class="fa-solid fa-location-dot"></i>
        </div>
        <h3>Explore the Destination</h3>
      </div>
      <div class="places">
        <p> Activity</p>
        <div class="logo">
          <i class="fa-solid fa-bicycle"></i>
        </div>
        <h3> All Activity</h3>
      </div>
      <div class="places">
        <p> When</p>
        <div class="logo">
          <i class="fa-solid fa-calendar-days"></i>
        </div>
        <h3> Choose Date</h3>
      </div>
      <div class="places">
        <p>Guest</p>
        <div class="logo">
          <i class="fa-solid fa-person"></i>
        </div>
        <h3>Choose Guest</h3>
      </div>
      <div class="search places">
        <button type="submit"><i class="fa fa-search"></i></button>
      </div>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4 tour">
      <div class="col">
        <div class="card">
          <img src="<?php bloginfo('template_directory') ?>/image/canada.jpg" class="slides" alt="...">
          <div class="card-body">
            <h5 class="card-title">Canada</h5>
            <p class="card-text">One of the biggest country home to punjabi</p>
            <a href="#" class="btn btn-primary">Read More</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="<?php bloginfo('template_directory') ?>/image/nepal.jpg" class="slides" alt="...">
          <div class="card-body">
            <h5 class="card-title">Nepal</h5>
            <p class="card-text">small tiny nation with beautiful views of himalayas</p>
            <a href="#" class="btn btn-primary">Read More</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="<?php bloginfo('template_directory') ?>/image/brazil.jpg" class="slides" alt="...">
          <div class="card-body">
            <h5 class="card-title">Brazil</h5>
            <p class="card-text">one the biggest country in latin america with beautiful girl</p>
            <a href="#" class="btn btn-primary">Read More</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="<?php bloginfo('template_directory') ?>/image/newzealand.jpg" class="slides" alt="...">
          <div class="card-body">
            <h5 class="card-title">New Zealand</h5>
            <p class="card-text">country with many natural view and one the beautiful to explore</p>
            <a href="#" class="btn btn-primary">Read More</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="<?php bloginfo('template_directory') ?>/image/maldives.jpg" class="slides" alt="...">
          <div class="card-body">
            <h5 class="card-title">Maldives</h5>
            <p class="card-text">best places for white beaches and for honeymoon</p>
            <a href="#" class="btn btn-primary">Read More</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="<?php bloginfo('template_directory') ?>/image/tanzania.jpg" class="slides" alt="...">
          <div class="card-body">
            <h5 class="card-title">Tanzania</h5>
            <p class="card-text">Africa heart and with some speactular jungle views</p>
            <a href="#" class="btn btn-primary">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <p class="lead">
    Latest News
</p>
<?php 
  $newsCat=get_terms(['taxonomy'=>'news-category','hide_empty'
=>false,
'orderby'=>'name','order'=>'DESC'

]);

foreach($newsCat as $newsCatData){

  $meta_image = get_wp_term_image($newsCatData->term_id);



?>

<div class="icon">
  <?php if($meta_image!="") { ?>
  <img src="<?php print_r($meta_image); ?>" alt="" class="center">
  <?php } ?>
  <a href="<?php echo 
  get_category_link($newsCatData->term_id); ?>"><h3><?php echo $newsCatData->name;  ?></h3></a>
</div>

<?php } ?>

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
    <p class="card-text"><?php echo get_the_date(); ?></p>
    <a href="#" class="btn btn-primary">Read More</a>
  </div>
</div>
<?php } ?>
 


 <?php

    get_footer()

 ?>
</body>

</html>