        <?php if($config->page_type !== 'manager'): ?>
        <section class="grid-group column-bottom-group">
          <div class="grid span-3 column-bottom column-bottom-left">
            <?php Shield::chunk('block.widget', array(
                'title' => $speak->widget->tags,
                'content' => Widget::tag()
            )); ?>
            <?php Shield::chunk('block.widget', array(
                'title' => $speak->search,
                'content' => Widget::search()
            )); ?>
          </div>
          <div class="grid span-3 column-bottom column-bottom-right">
            <?php Shield::chunk('block.widget', array(
                'title' => $speak->widget->archives,
                'content' => Widget::archive()
            )); ?>
          </div>
        </section>
        <?php endif; ?>
      </div> <!-- .main-wrapper -->
      <?php Shield::chunk('block.footer'); ?>
      <?php Weapon::fire('cargo_after'); ?>
    </div> <!-- .blog-wrapper -->
    <?php Weapon::fire('sword_before'); ?>
    <?php echo Asset::javascript($config->protocol . 'ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js'); ?>
    <?php echo Asset::javascript('assets/sword/layout.js'); ?>
    <?php Weapon::fire('sword_after'); ?>
    <?php Weapon::fire('SHIPMENT_REGION_BOTTOM'); ?>
  </body>
</html>