<?php
while (have_posts()) {
    the_post(); ?>
<?php the_title(); ?>

<?php
    function get_clean_youtube_url_from_content($content)
    {
        // Regular expression to match the YouTube URL
        $pattern = '/https?:\/\/(www\.)?(youtube\.com\/watch\?v=|youtu\.be\/)([^\s"\']+)/';

        // Find the first YouTube URL in the content
        preg_match($pattern, $content, $matches);

        // If a match is found, extract the video ID and return the embeddable URL
        if (!empty($matches)) {
            $video_id = $matches[3]; // Video ID is in the third capture group
            return 'https://www.youtube.com/embed/' . $video_id; // Embeddable URL
        } else {
            return ''; // No URL found
        }
    }

    // Usage
    $content = get_the_content();
    $youtube_link = get_clean_youtube_url_from_content($content);
    ?>

<h1>From this function</h1>
<iframe width="560" height="315" src="<?php echo $youtube_link; ?>" frameborder="0" allowfullscreen></iframe>


<?php
    ?>
<?php
}