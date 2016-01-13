<!DOCTYPE html>
<html class="no-js page-<?php echo $config->page_type ? $config->page_type : 'home'; ?>">
  <head>
    <?php Weapon::fire('SHIPMENT_REGION_TOP'); ?>
    <?php Weapon::fire('shell_before'); ?>
    <?php echo Asset::stylesheet($config->protocol . 'fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic|Playball'); ?>
    <?php echo Asset::stylesheet(array(
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
      <?php Shield::chunk('block.header'); ?>
      <nav class="blog-navigation">
        <?php echo Menu::navigation(); ?>
        <a class="blog-navigation-toggle" href="javascript:;">
          <span></span>
          <span></span>
          <span></span>
        </a>
      </nav>
      <div class="main-wrapper">
        <?php if($manager && Widget::exist('manager')): ?>
        <?php echo Widget::manager(); ?>
        <?php endif; ?>