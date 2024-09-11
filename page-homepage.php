<?php
get_header();
?>

<h1>This is Home page</h1>


<div style="border: 1px solid red;">b</div>

<h1>this is Social new Section</h1>

<?php
$args = array(
    'post_type' => "post",
);
$query = new WP_Query($args);

while ($query->have_posts()) : $query->the_post();
?>
    <h6><?php the_title(); ?></h6>
<?php endwhile;
wp_reset_query();
?>

<div style="border: 1px solid red;">b</div>
<h1>this is md channel section</h1>
<?php get_template_part("/components/home", "mdchannel") ?>
<div style="border: 1px solid red;">b</div>
<h1>this is pr events section</h1>
<?php get_template_part("/components/home", "prevents") ?>
<?php get_footer();
