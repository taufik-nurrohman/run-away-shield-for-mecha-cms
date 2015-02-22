<?php

// Tag links for article footer
Widget::add('tagLinks', function($connector = ', ') {
    $config = Config::get();
    $speak = Config::speak();
    $links = array();
    $source = $config->article->tags;
    if( ! isset($source) || ! is_object($source)) return "";
    foreach($source as $tag) {
        if($tag && $tag->id !== 0) {
            $links[] = '<a href="' . $config->url . '/' . $config->tag->slug . '/' . $tag->slug . '" rel="tag">' . $tag->name . '</a>';
        }
    }
    return ! empty($links) ? (count($links) > 1 ? $speak->tags : $speak->tag) . ': ' . implode($connector, $links) : "";
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