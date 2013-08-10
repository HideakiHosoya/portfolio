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

    <?php
      foreach((get_the_category()) as $cat) {
      $catid = $cat->cat_ID ;
      break ;
      }
      $get_posts_parm = "'numberposts=10&category=" . $catid . "9";
    ?>
    <?php $posts = get_posts($get_posts_parm); ?>
    <?php foreach($posts as $post): ?>
      <div class="row pf_box">
        <div class="c5 first gallery_big gallery<?php the_field("gallery_number"); ?>">
          <img src="<?php the_field("client_img01", $post->ID); ?>" alt="<?php the_title(); ?>" />
        </div>
        <div class="c7 last client_data">
          <h2><?php the_title(); ?></h2>
          <p><?php the_field("client_name"); ?></p>
          <?php if(have_posts()):while(have_posts()):the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile;endif; ?>

          <ul class="click_img gallery_thumb cf">
            <?php if(get_post_meta( $post->ID, 'client_img01', true )): ?>
              <li>
                <a class="gallery<?php the_field("gallery_number"); ?>" href="<?php the_field("client_img01", $post->ID); ?>"><img src="<?php the_field("client_img01", $post->ID); ?>" alt="<?php the_title(); ?>" /></a>
              </li>
            <?php endif; ?>
            <?php if(get_post_meta( $post->ID, 'client_img02', true )): ?>
              <li>
                <a class="gallery<?php the_field("gallery_number"); ?>" href="<?php the_field("client_img02", $post->ID); ?>"><img src="<?php the_field("client_img02", $post->ID); ?>" alt="<?php the_title(); ?>" /></a>
              </li>
            <?php endif; ?>
            <?php if(get_post_meta( $post->ID, 'client_img03', true )): ?>
              <li>
                <a class="gallery<?php the_field("gallery_number"); ?>" href="<?php the_field("client_img03", $post->ID); ?>"><img src="<?php the_field("client_img03", $post->ID); ?>" alt="<?php the_title(); ?>" /></a>
              </li>
            <?php endif; ?>
            <?php if(get_post_meta( $post->ID, 'client_img04', true )): ?>
              <li>
                <a class="gallery<?php the_field("gallery_number"); ?>" href="<?php the_field("client_img04", $post->ID); ?>"><img src="<?php the_field("client_img04", $post->ID); ?>" alt="<?php the_title(); ?>" /></a>
              </li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    <?php endforeach; ?>



    <?php require_once( TEMPLATEPATH . '/include/footer.php' ); ?>
  </div><!--g960-->
  <?php require_once( TEMPLATEPATH . '/include/footer_js.php' ); ?>
</body>
</html>