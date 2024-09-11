<?php

if (has_category('opinion')) {
    // Load template or code for 'news' category
    get_template_part('content/content', 'watch');
} elseif (has_category('socail new')) {
    // Load template or code for 'blog' category
    get_template_part('template-parts/single', 'social-new');
}
