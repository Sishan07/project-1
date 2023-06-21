<?php

//Template Name:Add News

get_header();
if(isset($_POST['savenews'])){
    $id=wp_insert_Post(
        array(
            'post_type'=>'Link',
            'post_status'=>'draft',
            'post_title'=>$_POST['ntitle'],
            'post_title'=>$_POST['ndes']
        )
        );
        }


?>

<div class="middle-container">
    <div class="page-status">
        <h1><?php the_title(); ?></h1>

        <h2><a href="<?php echo site_url(); ?>"><i></i></a></h2>

    </div>

    <form method="post" style="pading: 20px;" class="formData">
    <div>News Title</div>
    <div><input type="text" name="ntitle"></div>
    <div>News Discription</div>
    <div>
        <textarea name="ndes" id="" cols="30" rows="10"></textarea>
    </div>
    <button name="savenews">Save News</button>
    </form>
    
    
</div>

<?php get_footer() ?>