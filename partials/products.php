<?php
$page = 'options';

$subtitle = get_field('products_subtitle', $page) ?? '';
$title = get_field('products_title', $page) ?? '';
$descr = get_field('products_descr', $page) ?? '';
$btn = get_field('products_btn', $page) ?? '';
$list = get_field('products_list', $page) ?? '';

?>
<?php if ($list): ?>
	<section class="products" id="products">
		<div class="container products__container">
			<p class="products__subtitle subtitle">
				<?php echo esc_html($subtitle) ?>
			</p>
			<h2 class="products__title title-2">
				<?php echo esc_html($title) ?>
			</h2>
			<div class="products__descr descr">
				<?php echo wp_kses_post($descr) ?>
			</div>
			<ul class="products__list grid">
				<?php foreach ($list as $item): ?>
					<li class="products__item products-item">
						<div class="products-item__image-box image-box">
							<?php echo wp_get_attachment_image(
								$item['products_list_image']['ID'],
								'large',
								false,
								array(
									'class' => 'img',
									'alt' => $item['products_list_image']['alt'] ?: $item['products_list_title']
								)
							); ?>
						</div>
						<div class="products-item__content">
							<h3 class="products-item__title title-3">
								<?php echo esc_html($item['products_list_title']) ?>
							</h3>
							<div class="products-item__descr descr">
								<?php echo wp_kses_post($item['products_list_descr']) ?>
							</div>
							<a class="products-item__btn" href="<?php echo esc_attr($btn['url']) ?>">
								<?php echo esc_html($btn['title']) ?>
							</a>
						</div>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</section>
<?php endif; ?>