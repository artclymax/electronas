<?php
$page = 'options';

$title = get_field('about_title', $page) ?? '';
$subtitle = get_field('about_subtitle', $page) ?? '';
$descr = get_field('about_descr', $page) ?? '';
$list = get_field('about_list', $page) ?? '';
//$title = get_field('about_list_image', $page) ?? '';
//$title = get_field('about_list_title', $page) ?? '';
//$title = get_field('about_list_descr', $page) ?? '';
$image = get_field('about_image', $page) ?? '';

?>
<section class="about" id="about">
	<div class="container about__container">
		<div class="about__content">
			<p class="about__subtitle subtitle">
				<?php echo esc_html($subtitle) ?>
			</p>
			<h2 class="about__title title-2">
				<?php echo esc_html($title) ?>
			</h2>
			<div class="about__descr descr">
				<?php echo wp_kses_post($descr) ?>
			</div>
			<?php if ($list): ?>
				<ul class="about__list grid">
					<?php foreach ($list as $item): ?>
					<li class="about__item about-item">
						<div class="about-item__icon image-box">
							<?php echo wp_get_attachment_image(
								$item['about_list_image']['ID'],
								'large',
								false,
								array(
									'class' => 'img',
									'alt' => $item['about_list_image']['alt'] ?: $item['about_list_title']
								)
							); ?>
						</div>
						<p class="about-item__number">
							<?php echo esc_html($item['about_list_title'])?>
						</p>
						<p class="about-item__text">
							<?php echo esc_html($item['about_list_descr'])?>
						</p>
					</li>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>
		</div>
		<div class="about__image image-box">
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
	</div>
</section>