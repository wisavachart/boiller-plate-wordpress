<?php
$args = array(
    'post_type' => "mdchannel",
);
$query = new WP_Query($args);

while ($query->have_posts()) : $query->the_post();
?>
    <h6><?php the_title(); ?></h6>
<?php endwhile;
wp_reset_query();
?>