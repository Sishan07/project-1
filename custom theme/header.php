<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css">
  <title> <?php bloginfo('name'); ?><?php wp_title() ?> | <?php if (is_front_page()) {  bloginfo('description'); } ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://kit.fontawesome.com/1c9d15e811.js" crossorigin="anonymous"></script>
  <?php wp_head(); ?>
</head>
</head>

<body <?php body_class(); ?>>
  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container-fluid">
      <?php
        $logoimg=get_header_image();
      ?>

      <a href="<?php echo site_url(); ?>"><img src="<?php echo $logoimg ?>" alt=""></a>
      <!-- <a class="navbar-brand" href="#">2rism</a> -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <?php wp_nav_menu(
    array(
        'theme_location'=>'primary-menu',
        'menu_class'=>'nav'
     )) ?>
    
      <div class="User-pic">
        <div class="profile">
          <p>User Profile</p>
          <h4>Pablo Escobar</h4>
        </div>
        <div class="photo">
          <img src="<?php bloginfo('template_directory') ?>/image/profile.jpg" alt="nvbnvb">
        </div>
      </div>
      </form>
    </div>
  </nav>
  