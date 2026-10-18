<?php
$page = 'options';

$title = get_field('cta_title', $page) ?? '';
$descr = get_field('cta_descr', $page) ?? '';

?>
<section class="section section-cta" id="section-cta">
	<div class="container section-cta__container">
		<div class="section-cta__content">
			<h2 class="section-cta__title">
				<?php echo esc_html($title) ?>
			</h2>
			<div class="section-cta__descr descr">
				<?php echo wp_kses_post($descr) ?>
			</div>
		</div>
		<div class="section-cta__form">
			<?php echo do_shortcode('[contact-form-7 id="546a8e9" title="Нужен расчёт стоимости?"]') ?>
		</div>
	</div>
</section>