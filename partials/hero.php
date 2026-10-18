<?php
$page = 'options';

$title = get_field('hero_title', $page) ?? '';
$descr = get_field('hero_descr', $page) ?? '';
$btn_1 = get_field('hero_btn_1', $page) ?? '';
$btn_2 = get_field('hero_btn_2', $page) ?? '';
$image = get_field('hero_image', $page) ?? '';

?>
<section class="hero jarallax" id="hero" style="--hero-overlay: url('<?php echo get_template_directory_uri()
	. '/assets/images/hero-bg-gradient.png' ?>)">
	<div class="container hero__container">
		<div class="hero__body">
			<h1 class="hero__title title-1">
				<?php echo wp_kses_post($title) ?>
			</h1>
			<div class="hero__descr descr">
				<?php echo wp_kses_post($descr) ?>
			</div>
			<div class="hero__btn-box">
				<a class="btn hero__btn icon icon--after icon--hero-btn" href="<?php echo esc_attr($btn_1['url']) ?>">
					<span>
						<?php echo esc_html($btn_1['title']) ?>
					</span>
				</a>
				<a class="btn hero__btn btn--light" href="<?php echo esc_attr($btn_2['url']) ?>">
					<?php echo esc_html($btn_2['title']) ?>
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