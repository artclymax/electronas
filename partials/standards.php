<?php
$page = 'options';

$subtitle = get_field('standards_subtitle', $page) ?? '';
$title = get_field('standards_title', $page) ?? '';
$descr = get_field('standards_descr', $page) ?? '';
$list = get_field('standards_list', $page) ?? '';
$list = array_merge($list, $list);
?>
<?php if ($list): ?>
	<section class="standards" id="standards">
		<div class="container standards__container">
			<div class="standards__header">
				<p class="standards__subtitle subtitle">
					<?php echo esc_html($subtitle) ?>
				</p>
				<h2 class="standards__title title-2">
					<?php echo esc_html($title) ?>
				</h2>
				<div class="standards__descr descr">
					<?php echo wp_kses_post($descr) ?>
				</div>
			</div>
			<div class="standards__btn-box hidden-mobile">
				<button class="swiper-btn swiper-btn__prev site-slider__btn site-slider__btn-prev" type="button"
					aria-label="Назад" data-swiper-btn-prev=".site-slider">
					<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M15 8L2 8" stroke="currentColor" stroke-width="1.33333" stroke-linecap="round"
							stroke-linejoin="round" />
						<path d="M6 12.6667L1.33333 8.00001L6 3.33334" stroke="currentColor" stroke-width="1.33333"
							stroke-linecap="round" stroke-linejoin="round" />
					</svg>
				</button>
				<button class="swiper-btn swiper-btn__next site-slider__btn site-slider__btn-next" type="button"
					aria-label="Вперёд" data-swiper-btn-next=".site-slider">
					<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1 8L14 8" stroke="currentColor" stroke-width="1.33333" stroke-linecap="round"
							stroke-linejoin="round" />
						<path d="M10 3.33333L14.6667 7.99999L10 12.6667" stroke="currentColor" stroke-width="1.33333"
							stroke-linecap="round" stroke-linejoin="round" />
					</svg>
				</button>
			</div>
		</div>
		<div class="container">
			<div class="swiper site-slider" data-swiper="{'slidesPerView':'auto', 'loop': true}">
				<div class="swiper-wrapper site-slider__wrapper">
					<?php foreach ($list as $item): ?>
						<div class="swiper-slide site-slide">
							<a class="site-slide__wrapper" href="<?php echo esc_attr($item['standards_list_image']['url'])?>" data-fancybox>
								<div class="site-slide__image image-box">
									<?php echo wp_get_attachment_image(
										$item['standards_list_image']['ID'],
										'large',
										false,
										array(
											'class' => 'img',
											'alt' => $item['standards_list_image']['alt'] ?: $item['standards_list_title']
										)
									); ?>
								</div>
								<p class="site-slide__text">
									<?php echo esc_html($item['standards_list_title'])?>
								</p>
							</a>
						</div>
					<?php endforeach; ?>
				</div>
				<div class="swiper-pagination site-slider__pagination visible-mobile" data-swiper-pagination=".site-slider">
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>