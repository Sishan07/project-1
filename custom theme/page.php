<?php
    get_header();
    the_post();

?>

<section class="about_section">
          <h2><a href="<?php echo site_url();?>"></a><?php the_title() 
          ?></h2>
          <?php the_content() ?>
        </section>
        <?php the_excerpt(); ?>
        

<?php

    get_footer()

?>