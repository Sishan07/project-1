<?php
/* Template Name: Contact*/

get_header();

?>
<section class="about_section">
          <h2><a href="<?php echo site_url();?>"></a><?php the_title() 
          ?></h2>
          <?php the_content() ?>
        </section>
        
<div class="container">
        <form>
            <h1>Contact Us Form</h1>
            <input type="text" id="firstName" placeholder="First Name" required>
            <input type="text" id="lastName" placeholder="Last Name" required>
            <input type="email" id="email" placeholder="Email" required>
            <input type="text" id="mobile" placeholder="<?php the_field('phone_number_1',581);  ?>" required>
            <h4>Type Your Message Here...</h4>
            <textarea required></textarea>
            <input type="submit" value="Send" id="button">
        </form>
    </div>
<?php
    get_footer();

?>