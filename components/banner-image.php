<?php $banner_image = get_field('banner_image'); ?>
<?php $banner_text = get_field('banner_text'); ?>

<div class="vj_bannerimage" style="background-image:url(<?php echo $banner_image['url']; ?>);">
	<h1 class="vj_bannerimage__text"><?php echo $banner_text; ?></h1>
</div>