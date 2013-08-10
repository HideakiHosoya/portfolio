    <div class="row pdg-b-30">
      <header class="c12">
        <a class="open radius5 grad" href="#nav"><i class="icon-reorder"></i></a>
        <?php if(is_home()): ?>
        <h1><?php bloginfo('name'); ?></h1>
        <?php elseif(is_page()): ?>
        <h1><?php echo get_the_title(); ?></h1>
        <?php elseif(is_single()): ?>
        <h1><?php wp_h1(''); ?>｜<?php bloginfo('name'); ?></h1>
        <?php elseif(is_category()): ?>
        <h1><?php single_cat_h1() ?>の記事一覧｜<?php bloginfo('name'); ?></h1>
        <?php elseif(is_month()): ?>
        <h1><?php the_time("Y年m月") ?>の記事一覧｜<?php bloginfo('name'); ?></h1>
        <?php endif; ?>

        <nav class="cf">
          <div id="nav" class="cf">
            <?php
               wp_nav_menu( array('menu' => 'global_nav', 'container' => ''));
             ?>
          </div>
        </nav>
      </header>
    </div>


