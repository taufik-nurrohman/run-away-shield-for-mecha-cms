<?php include 'header.php'; ?>
<article class="post" id="page-<?php echo $page->id; ?>">
  <h2 class="post-title"><?php echo $page->title; ?></h2>
  <div class="post-body"><?php echo $page->content; ?></div>
  <footer class="post-footer">
    <div><?php echo $speak->posted_by; ?> <a href="<?php echo $config->author_profile_url; ?>" rel="author"><?php echo $page->author; ?></a> <?php echo strtolower($speak->on) . ' ' . $page->date->FORMAT_5; ?></div>
    <div><?php Weapon::fire('page_footer', array($page)); ?></div>
  </footer>
</article>
<?php include 'footer.php'; ?>