<?php
/*
Template Name: portfolio
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

    <?php query_posts( 'category_name=portfolio' ); ?>
    <?php if(have_posts()): ?>
      <?php while(have_posts()): the_post(); ?>

        <div class="row">
          <div class="c12 cf">
            <h2><?php the_title(); ?></h2>
          </div>
        </div>
        <div class="row pf_box">
          <div class="c8 first gallery<?php the_field("gallery_number"); ?>">
            <div class="gallery_big">
              <img src="<?php the_field("client_img01", $post->ID); ?>" alt="<?php the_title(); ?>" />
            </div>
          </div>
          <div class="c4 last client_data">
            <ul class="cf">
              <li class="gray_radius">クライアント</li>
              <li><h3><?php the_field("client_name"); ?></h3></li>
            </ul>
            <ul class="charge cf">
              <li class="gray_radius">担当箇所</li>
              <?php if(get_post_meta( $post->ID, 'coding', true )): ?>
                <li class="coding"><?php the_field('coding'); ?></li>
              <?php endif; ?>
              <?php if(get_post_meta( $post->ID, 'mt', true )): ?>
                <li class="mt"><?php the_field('mt'); ?></li>
              <?php endif; ?>
              <?php if(get_post_meta( $post->ID, 'design', true )): ?>
                <li class="design"><?php the_field('design'); ?></li>
              <?php endif; ?>
            </ul>
            <p class="cf"><span class="gray_radius">URL</span><span class="url"><?php the_field("url"); ?></span></p>



            <ul class="click_img gallery_thumb cf">
              <?php if(get_post_meta( $post->ID, 'client_img01', true )): ?>
                <li>
                  <a class="gallery<?php the_field("gallery_number"); ?>" href="<?php the_field("client_img01"); ?>"><img src="<?php the_field("client_img01"); ?>" alt="<?php the_title(); ?>" /></a>
                </li>
              <?php endif; ?>
              <?php if(get_post_meta( $post->ID, 'client_img02', true )): ?>
                <li>
                  <a class="gallery<?php the_field("gallery_number"); ?>" href="<?php the_field("client_img02"); ?>"><img src="<?php the_field("client_img02"); ?>" alt="<?php the_title(); ?>" /></a>
                </li>
              <?php endif; ?>
              <?php if(get_post_meta( $post->ID, 'client_img03', true )): ?>
                <li>
                  <a class="gallery<?php the_field("gallery_number"); ?>" href="<?php the_field("client_img03"); ?>"><img src="<?php the_field("client_img03"); ?>" alt="<?php the_title(); ?>" /></a>
                </li>
              <?php endif; ?>
              <?php if(get_post_meta( $post->ID, 'client_img04', true )): ?>
                <li>
                  <a class="gallery<?php the_field("gallery_number"); ?>" href="<?php the_field("client_img04"); ?>"><img src="<?php the_field("client_img04"); ?>" alt="<?php the_title(); ?>" /></a>
                </li>
              <?php endif; ?>
            </ul>


          </div><!--c7-->
        </div><!--row-->




      <?php endwhile; ?>
    <?php endif; wp_reset_query(); ?>

    <div class="row pf_box">
      <div class="c12">
        <?php while(have_posts()): the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; ?>
      </div>
    </div>
    <?php require_once( TEMPLATEPATH . '/include/footer.php' ); ?>
  </div><!--g960-->
  <?php require_once( TEMPLATEPATH . '/include/footer_js.php' ); ?>
</body>
</html>