<?php

// Link generator for the current article tags
Widget::add('tagLinks', function($connect = ', ') use($speak) {
    $config = Config::get();
    $links = array();
    $source = $config->article->tags;
    if( ! isset($source) || ! is_object($source)) return "";
    foreach($source as $tag) {
        if($tag && $tag->id !== 0) {
            $links[] = '<a href="' . $config->url . '/' . $config->tag->slug . '/' . $tag->slug . '" rel="tag">' . $tag->name . '</a>';
        }
    }
    $text = count($links) > 1 ? $speak->tags : $speak->tag;
    return ! empty($links) ? $text . ': ' . implode($connect, $links) : "";
});

// Remove all icons in status messages
if(strpos($config->url_current, $config->url . '/' . $config->manager->slug . '/') !== 0) {
    Notify::configure('icons', array(
        'default' => "",
        'success' => "",
        'info' => "",
        'warning' => "",
        'error' => ""
    ));
}