<?php
/*
Template Name: archive_all
*/
?>
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

            <div id="container">
               <div id="content">
                  <?php the_post() ?>
                  <h2 class="page-title"><?php the_title(); ?></h2>
                  <div class="entry-content">
                  <?php the_content() ?>
                  <?php wp_get_archives("type=postbypost");?>
                  </div>
               </div><!-- #content -->
            </div><!-- #container -->

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