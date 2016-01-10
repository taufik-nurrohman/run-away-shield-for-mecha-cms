<?php

Widget::add('tagLinks', function($connect = ', ') use($config, $speak) {
    $links = array();
    $article = Shield::lot('article');
    if( ! $article || ! isset($article->tags)) return "";
    foreach($article->tags as $tag) {
        if($tag && $tag->id !== 0) {
            $url = Filter::colon('tag:url', $config->url . '/' . $config->tag->slug . '/' . $tag->slug);
            $links[] = '<a href="' . $url . '" rel="tag">' . $tag->name . '</a>';
        }
    }
    $text = count($links) > 1 ? $speak->tags : $speak->tag;
    return ! empty($links) ? $text . ': ' . implode($connect, $links) : "";
});

Filter::add('chunk:output', function($content, $path) {
    $name = File::N($path);
    if($name === 'block.footer') {
        $content = str_replace('<div class="blog-footer-right">', '<div class="blog-footer-right">Background: <a href="http://www.freeimages.com/photo/1092493" re="nofollow" target="_blank">Running Track</a> &middot; ', $content);
    }
    return $content;
});