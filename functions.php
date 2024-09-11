<?php
function made_feature()
{   // ให้มันดิสเพลชื่อเพจบนเบ้าเซอร์
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'made_feature');
