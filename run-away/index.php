<?php include 'header.php'; ?>
<?php if($config->total_articles > 0): ?>
<?php foreach($articles as $article): ?>
<article class="post post-index">
  <p class="post-time"><time datetime="<?php echo $article->date->W3C; ?>"><?php echo $article->date->FORMAT_1; ?></time></p>
  <h2 class="post-title"><a href="<?php echo $article->url; ?>"><?php echo $article->title; ?></a></h2>
  <div class="post-body"><?php echo $article->description; ?></div>
</article>
<?php endforeach; ?>
<nav class="blog-pager">
  <span class="blog-pager-prev"><?php echo $pager->prev->link; ?></span>
  <span class="blog-pager-next"><?php echo $pager->next->link; ?></span>
</nav>
<?php endif; ?>
<?php include 'footer.php'; ?>