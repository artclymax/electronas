<?php
$page = 'options';

$subtitle = get_field('why_subtitle', $page) ?? '';
$title = get_field('why_title', $page) ?? '';
$list = get_field('why_list', $page) ?? '';
//$title = get_field('why_list_image', $page) ?? '';
//$title = get_field('why_list_title', $page) ?? '';
//$title = get_field('why_list_descr', $page) ?? '';

?>
<?php if ($list): ?>
	<section class="why" id="why">
		<div class="container why__container">
			<p class="why__subtitle subtitle">
				<?php echo esc_html($subtitle) ?>
			</p>
			<h2 class="why__title title-2">
				<?php echo esc_html($title) ?>
			</h2>
			<ul class="why__list">
				<?php foreach ($list as $item): ?>
					<li class="why__item why-item">
						<div class="why-item__icon image-box">
							<?php echo wp_get_attachment_image(
								$item['why_list_image']['ID'],
								'large',
								false,
								array(
									'class' => 'img',
									'alt' => $item['why_list_image']['alt'] ?: $item['why_list_title']
								)
							); ?>
						</div>
						<h3 class="why-item__title title-4">
							<?php echo esc_html($item['why_list_title']) ?>
						</h3>
						<div class="why-item__descr descr">
							<?php echo wp_kses_post($item['why_list_descr']) ?>
						</div>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</section>
<?php endif; ?>