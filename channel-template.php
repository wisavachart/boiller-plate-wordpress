<?php
/*
Template Name: Made Channel Template
*/

get_header(); ?>
<div class="made-channel-child-content">
    THIS IS ALL CHANNEL IN MADE TEMPLATE
    <?php
    // Display the title of the child page
    while (have_posts()) : the_post();
    ?>
        <h1><?php the_title(); ?></h1> <!-- Displays the title of the child page -->
        <div class="page-content">
            <?php the_content(); ?>
            <!-- Displays the page content -->
        </div>
    <?php
    endwhile;
    ?>
</div>

<div>ทำอย่างอื่น</div>

<?php get_footer(); ?>