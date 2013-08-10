<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?></title>
<meta name="description" content="<?php bloginfo('description'); ?>" />
<meta name="keywords" content="Portfolio" />
<?php include( TEMPLATEPATH . '/include/head.php' ); ?>
</head>
<body id="<?php echo $post->post_name; ?>">
  <div class="g960 content" id="pagetop">
    <div class="row pdg-b-30">
      <header class="c12">
        <a class="open radius5 grad" href="#nav"><i class="icon-reorder"></i></a>
        <h1>Portfolio</h1>
        <nav class="cf">
          <div id="nav" class="cf">
            <?php wp_nav_menu( array('menu' => 'sub_nav', 'container' => '')); ?>
          </div>
        </nav>
      </header>
    </div>

		<div class="row">
			<div class="c12">
				<?php
				if (have_posts()) : // WordPress ループ
				while (have_posts()) : the_post(); // 繰り返し処理開始 ?>
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h2><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
					<?php the_content(); ?>
					<?php
						$args = array(
						'before' => '<div class="page-link">',
						'after' => '</div>',
						'link_before' => '<span>',
						'link_after' => '</span>',
						);
					wp_link_pages($args); ?>
				</div>
				<?php
				endwhile; // 繰り返し処理終了
				else : // ここから記事が見つからなかった場合の処理 ?>
				<div class="post">
					<h2>記事はありません</h2>
					<p>お探しの記事は見つかりませんでした。</p>
				</div>
				<?php
				endif;
				?>
			</div>
		</div>

    <footer class="row">
      <div class="c12 text-center font-10 pdg-b-30">
        Copyright © 2013 Hideaki Hosoya. All Rights Reserved.
      </div>
    </footer>

  </div><!--g960-->
  <?php include( TEMPLATEPATH . '/include/footer_js.php' ); ?>
</body>
</html>
