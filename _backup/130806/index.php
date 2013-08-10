<!DOCTYPE html>
<html lang="ja" xmlns:og="http://ogp.me/ns#" xmlns:mixi="http://mixi-platform.com/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
<meta charset="UTF-8" />
<title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?></title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no" />
<meta property="og:title" content="" />
<meta property="og:description" content="" />
<meta property="og:url" content="" />
<meta property="og:image" content="" />
<meta property="og:site_name" content="" />
<link rel="apple-touch-icon-precomposed" href="" />
<link rel="index" href="/" title="トップページ" />
<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" />
<link rel="Shortcut Icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" type="text/css">

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/ivory.css" type="text/css"/>

<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" media="all" type="text/css" />
<!--[if IE]>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/ie.css" type="text/css">
<![endif]-->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.css" type="text/css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome-ie7.min.css" type="text/css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/respond.src.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/yuga.js"></script>
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
<![endif]-->
</head>
<body <?php body_class(); ?>>

  <div class="navbar navbar-inverse">
    <div class="navbar-inner">
        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <i class="icon-reorder"></i>
        </button>
        <h1 class="cf"><a href="<?php echo home_url('/'); ?>" class="brand"><?php bloginfo('name'); ?></a></h1>

        <div class="nav-collapse collapse">
					<div class="menu">
						<ul>
							<li class="page_item page-item-7">
								<a href="http://localhost:8888/wordpress/?">Home</a>
							</li>
							<li class="page_item page-item-7">
								<a href="http://localhost:8888/wordpress/?page_id=7">About</a>
							</li>
							<li class="page_item page-item-2">
								<a href="http://localhost:8888/wordpress/?page_id=2">サンプルページ</a>
							</li>
							<li class="page_item page-item-18 current_page_item">
								<a href="http://localhost:8888/wordpress/">トップページ</a>
							</li>
						</ul>
					</div>
        </div><!--/nav-collapse-->
    </div>
  </div><!--/navbar-->

	<div id="page_wrap" class="container row">
		<section id="content_wrap" class="row space-bot">
			<article class="c8 first">
				<h2><?php the_title(); ?></h2>
				<!-- 投稿ここから -->
				<?php if(have_posts()): while(have_posts()): the_post(); ?>
					<div class="post">
						<?php the_content(); ?>
					</div><!-- /.post -->
				<?php endwhile; endif; ?>
				<!-- /投稿ここまで -->
				<h2>新着ブログ一覧</h2>
				<dl class="news">
					<?php $posts = get_posts('numberposts=5&order=desc');
					foreach($posts as $post): ?>
					<dt><?php the_time('Y年n月j日'); ?></dt>
					<dd><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
					<?php endforeach; ?>
				</dl>
			</article>
			<sidebar class="c4 last">
				<?php get_sidebar(); ?>
			</sidebar>
		</section><!-- content_wrap -->
		<footer class="row">
			<?php get_footer(); ?>
		</footer>
	</div><!-- page_wrap -->
  <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-transition.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-dropdown.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-collapse.js"></script>
</body>
</html>