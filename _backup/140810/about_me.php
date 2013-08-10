<?php
/*
Template Name: about_me
*/
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<?php require_once( TEMPLATEPATH . '/include/head.php' ); ?>
</head>
<body id="<?php echo $post->post_name; ?>">
  <div class="g960 content" id="pagetop">
		<?php require_once( TEMPLATEPATH . '/include/header_nav.php' ); ?>
		<?php
			if (have_posts()) : // WordPress ループ
			while (have_posts()) : the_post(); // 繰り返し処理開始
		?>

			<div class="row main_visual">
				<div class="c12">
					<?php the_post_thumbnail(); ?>
				</div>
			</div>

			<div class="row">
				<div class="c12">
	        <div class="content_box cf">
		        <h2>スキル</h2>
		        <ul>
		          <li>HTML</li>
		          <li>CSS</li>
		          <li>SASS</li>
		          <li>jQuery</li>
		          <li>Movable Typeを使ってのブログ、サイト構築</li>
		          <li>WordPressを使ってのブログ、サイト構築</li>
		          <li>Photoshopを使ったサイトデザイン</li>
		        </ul>
		      </div>
		      <div class="content_box cf">
		        <h2>制作環境</h2>
		        <ul>
		          <li>mac</li>
		          <li>windows</li>
		          <li>Sublime Text 2</li>
		          <li>Photoshop</li>
		          <li>Illustrator</li>
		          <li>Dreamweaver（メインはSublime Text）</li>
		          <li>Flash</li>
		        </ul>
	        </div>
				</div>
			</div>
			<?php
				endwhile; // 繰り返し処理終了
				else : // ここから記事が見つからなかった場合の処理
			?>
			<h2>記事はありません</h2>
			<p>お探しの記事は見つかりませんでした。</p>
		<?php
			endif; // WordPress ループ終了
		?>


		<?php require_once( TEMPLATEPATH . '/include/footer.php' ); ?>
  </div><!--g960-->
  <?php require_once( TEMPLATEPATH . '/include/footer_js.php' ); ?>
</body>