<!DOCTYPE html>
<html class="no-js page-<?php echo $config->page_type; ?>">
  <head>
    <?php Weapon::fire('SHIPMENT_REGION_TOP'); ?>
    <?php Weapon::fire('shell_before'); ?>
    <?php echo Asset::stylesheet(array(
        $config->protocol . 'fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic|Playball',
        'assets/shell/atom.css',
        'assets/shell/layout.css'
    )); ?>
    <script>
    (function(h) {
        h.className = h.className.replace(/(^|\s)no-js(\s|$)/,'$1js$2');
    })(document.documentElement);
    </script>
    <?php Weapon::fire('shell_after'); ?>
  </head>
  <body>
    <div class="blog-wrapper">
      <?php Weapon::fire('cargo_before'); ?>
      <header class="blog-header">
        <?php if($config->url == $config->url_current): ?>
        <h1 class="blog-title"><?php echo $config->title; ?></h1>
        <?php else: ?>
        <h1 class="blog-title"><a href="<?php echo $config->url; ?>"><?php echo $config->title; ?></a></h1>
        <?php endif; ?>
        <p class="blog-slogan"><?php echo $config->slogan; ?></p>
      </header>
      <nav class="blog-navigation">
        <?php echo Menu::get(); ?>
        <a class="blog-navigation-toggle" href="javascript:;">
          <span></span>
          <span></span>
          <span></span>
        </a>
      </nav>
      <div class="main-wrapper">
        <?php echo Widget::manager(); ?>