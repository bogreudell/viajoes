<?php if( is_product_category() || is_shop() ): ?>
	<?php $banner_image = get_field('products_banner_image', 'option'); ?>
	<?php $banner_text = get_field('products_banner_text', 'option'); ?>
<?php else: ?>
	<?php $banner_image = get_field('banner_image'); ?>
	<?php $banner_text = get_field('banner_text'); ?>
<?php endif; ?>

<div <?php if( $banner_id ): ?>id="<?php echo $banner_id; ?>" <?php endif;?>class="vj_bannerimage" style="background-image:url(<?php echo $banner_image['url']; ?>);">
	<h1 class="vj_bannerimage__text"><?php echo $banner_text; ?></h1>
</div>