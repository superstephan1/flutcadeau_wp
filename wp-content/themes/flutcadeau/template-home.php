<?php
/*
Template Name: Home
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Flutcadeau</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo( 'template_directory' );?>/assets/styles/main.css" rel="stylesheet">
    <?php wp_head();?>
</head>

<body>

<div class="nav-container">
    <?php get_template_part('template-parts/navbar'); ?>
</div>

<div class="container">
    <div class="content">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                the_content();
            endwhile;
        endif;
        ?>
    </div>
</div>
</body>

<?php get_footer();?>

