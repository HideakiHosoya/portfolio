<!DOCTYPE html>
<html lang="ja">
<head>
<?php require_once( TEMPLATEPATH . '/include/head.php' ); ?>
</head>
<body id="<?php echo $post->post_name; ?>">
  <div class="g960 content" id="pagetop">
		<?php require_once( TEMPLATEPATH . '/include/header_nav.php' ); ?>

		<div class="row">
			<?php
				if (have_posts()) : // WordPress ループ
				while (have_posts()) : the_post(); // 繰り返し処理開始
			?>
				<?php the_content(); ?>
				<?php the_field("client_name", $post->ID); ?>
				<?php
					$args = array(
					'before' => '<div class="page-link">',
					'after' => '</div>',
					'link_before' => '<span>',
					'link_after' => '</span>',
					);
					wp_link_pages($args);
				?>

			<?php
				endwhile; // 繰り返し処理終了
				else : // ここから記事が見つからなかった場合の処理
			?>
			<div class="post">
				<h2>記事はありません</h2>
				<p>お探しの記事は見つかりませんでした。</p>
			</div>
			<?php
				endif;
			?>
		</div>

		<?php require_once( TEMPLATEPATH . '/include/footer.php' ); ?>
  </div><!--g960-->
  <?php require_once( TEMPLATEPATH . '/include/footer_js.php' ); ?>
</body>