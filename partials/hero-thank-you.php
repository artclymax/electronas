<?php
$page = 'options';

$title = get_field('thank_you_title', $page) ?? '';
$descr = get_field('thank_you_descr', $page) ?? '';
$btn = get_field('thank_you_btn', $page) ?? '';
$image = get_field('thank_you_image', $page) ?? '';

?>
<section class="hero hero-thank-you jarallax" id="hero">
	<div class="container hero__container">
		<div class="hero__body">
			<h1 class="hero__title title-1 descr">
				<?php echo wp_kses_post($title) ?>
			</h1>
			<div class="hero__descr descr">
				<?php echo wp_kses_post($descr) ?>
			</div>
			<div class="hero__btn-box">
				<a class="btn hero__btn" href="<?php echo esc_attr($btn['url']) ?>">
					<span><?php echo esc_html($btn['title']) ?></span>
				</a>
			</div>
		</div>
	</div>
	<div class="hero__image-box image-box jarallax-img">
		<?php echo wp_get_attachment_image(
			$image['ID'],
			'large',
			false,
			array(
				'class' => 'img',
				'alt' => $image['alt'] ?: $title
			)
		); ?>
	</div>
</section>