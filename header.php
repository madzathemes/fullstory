<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head class="animated">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
</head>

<?php
$option = get_option("fullstory_theme_options");
?>
<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

<?php
$bg_post = get_post_meta(get_the_ID(), "magazin_background_image", true);
$style = get_post_meta(get_the_ID(), "magazin_post_style", true);

$body_class = "";
if(!empty($style)){
	$body_class = $style;
} else if (!empty($option['post_style'])) {
	$body_class = $option['post_style'];
}
?>
<?php if(is_single() and $body_class == "8") { ?>
	<div class="background-image lazyload" style="background-image:url('<?php echo get_the_post_thumbnail_url(get_the_ID(),"full"); ?>');"></div>
<?php } else if(!empty($bg_post)) { ?>
	<div class="background-image lazyload" style="background-image:url('<?php echo esc_url($bg_post); ?>');"></div>
<?php } else if(!empty($option['background_image'])) { ?>
	<div class="background-image lazyload" style="background-image:url('<?php echo esc_url($option['background_image']); ?>');"></div>
<?php } ?>
<div class="mt-smart-menu-out"></div>

<div class="mt-smart-menu">
	<span class="close pointer"></span>
	<?php fullstory_logo(); ?>
	<?php fullstory_nav_mobile(); ?>
	<?php fullstory_socials(); ?>
</div>

<div class="mt-outer-wrap">

<?php fullstory_header(); ?>


<?php if(is_front_page()) { ?>
<div class="container">
	<div class="row mt-head">
		<div class="col-md-8 pull-left">
			<span class="mt-head-title">Last Rumor:</span>
			<span class="mt-head-aleft"></span>
			<span class="mt-head-aright"></span>
			<span class="mt-head-text">Music festival season is officially in full swing</span>
		</div>
		<div class="col-md-4 pull-right">
			<span class="mt-head-date">06 Oct</span>
			<span class="mt-head-clock">11:11:11</span>
		</div>
	</div>
</div>
<?php } ?>
