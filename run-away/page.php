<?php Shield::chunk('header'); ?>
<article class="post" id="page-<?php echo $page->id; ?>">
  <?php Shield::chunk('page.header'); ?>
  <?php Shield::chunk('page.body'); ?>
  <?php Shield::chunk('page.footer'); ?>
</article>
<?php Shield::chunk('footer'); ?>