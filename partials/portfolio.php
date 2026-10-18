<?php
$page = 'options';

$subtitle = get_field('portfolio_subtitle', $page) ?? '';
$title = get_field('portfolio_title', $page) ?? '';
$list = get_field('portfolio_list', $page) ?? '';

?>
<?php if ($list): ?>
	<section class="portfolio" id="portfolio">
		<div class="container portfolio__container">
			<p class="portfolio__subtitle subtitle">
				<?php echo esc_html($subtitle) ?>
			</p>
			<h2 class="portfolio__title title-2">
				<?php echo esc_html($title) ?>
			</h2>
			<ul class="portfolio__list">
				<?php foreach ($list as $item): ?>
					<li class="portfolio__item portfolio-item">
						<div class="portfolio-item__image image-box">
							<?php echo wp_get_attachment_image(
								$item['portfolio_list_image']['ID'],
								'large',
								false,
								array(
									'class' => 'img',
									'alt' => $item['portfolio_list_image']['alt'] ?: $item['portfolio_list_title']
								)
							); ?>
						</div>
						<div class="portfolio-item__content">
							<h3 class="portfolio-item__title">
								<?php echo esc_html($item['portfolio_list_title'])?>
							</h3>
							<div class="portfolio-item__text descr">
								<?php echo wp_kses_post($item['portfolio_list_descr'])?>
							</div>
						</div>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</section>
<?php endif; ?>