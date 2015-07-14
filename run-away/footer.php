        <?php if($config->page_type !== 'manager'): ?>
        <section class="grid-group column-bottom-group">
          <div class="grid span-3 column-bottom column-bottom-left">
            <div class="widget-wrapper">
              <h4 class="widget-title">Tags</h4>
              <div class="widget-content">
                <?php echo Widget::tag('LIST'); ?>
              </div>
            </div>
            <div class="widget-wrapper">
              <h4 class="widget-title">Search</h4>
              <div class="widget-content">
                <?php echo Widget::search(); ?>
              </div>
            </div>
          </div>
          <div class="grid span-3 column-bottom column-bottom-right">
            <div class="widget-wrapper">
              <h4 class="widget-title">Archives</h4>
              <div class="widget-content">
                <?php echo Widget::archive('HIERARCHY'); ?>
              </div>
            </div>
          </div>
        </section>
        <?php endif; ?>
      </div> <!-- .main-wrapper -->
      <footer class="blog-footer">
        <div class="blog-footer-left">&copy; <?php echo date('Y'); ?> <a href="<?php echo $config->url; ?>"><?php echo $config->title; ?></a></div>
        <div class="blog-footer-right">Background: <a href="http://www.freeimages.com/photo/1092493" re="nofollow" target="_blank">Running Track</a><?php if( ! $manager): ?> &middot; <a href="<?php echo $config->url . '/' . $config->manager->slug; ?>/login"><?php echo $speak->log_in; ?></a><?php endif; ?></div>
      </footer>
      <?php Weapon::fire('cargo_after'); ?>
    </div> <!-- .blog-wrapper -->
    <?php Weapon::fire('sword_before'); ?>
    <?php echo Asset::javascript(array(
        $config->protocol . 'ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js',
        'assets/sword/main.js'
    )); ?>
    <?php Weapon::fire('sword_after'); ?>
    <?php Weapon::fire('SHIPMENT_REGION_BOTTOM'); ?>
  </body>
</html>