<meta charset="UTF-8">
<title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?></title>
<?php //meta descriptionの設定
$custom_fields = get_post_custom();
$description = $custom_fields['description'];
if ($description != null) { ?>
<meta name="description" content="<?php echo get_post_meta($post->ID,'description',true); ?>" />
<?php }
else {　?>
<meta name="description" content="<?php bloginfo('description'); ?>" />
<?php }
?>
<?php //meta keywordsの設定
$custom_fields = get_post_custom();
$keywords = $custom_fields['keywords'];
if ($keywords != null) { ?>
<meta name="keywords" content="<?php echo get_post_meta($post->ID,'keywords',true); ?>" />
<?php }
else {　?>
<meta name="keywords" content="portfolio" />
<?php }
?>
<meta name="robots" content="noindex,nofollow">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no" />
<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" type="text/css">
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" media="all" type="text/css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.css"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome-ie7.css"/>
<?php wp_head(); ?>