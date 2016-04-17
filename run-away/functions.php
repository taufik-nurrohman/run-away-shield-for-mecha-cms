<?php

Filter::add('chunk:output', function($content, $path) {
    $name = File::N($path);
    if($name === 'block.footer') {
        $content = str_replace('<div class="blog-footer-right">', '<div class="blog-footer-right">Background: <a href="http://www.freeimages.com/photo/1092493" re="nofollow" target="_blank">Running Track</a> &middot; ', $content);
    }
    return $content;
});