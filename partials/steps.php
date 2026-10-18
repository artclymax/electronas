<?php
$page = 'options';

$subtitle = get_field('steps_subtitle', $page) ?? '';
$title = get_field('steps_title', $page) ?? '';
$list = get_field('steps_list', $page) ?? '';

?>
<?php if ($list): ?>
	<section class="steps" id="steps">
		<div class="container steps__container">
			<p class="steps__subtitle subtitle">
				<?php echo esc_html($subtitle) ?>
			</p>
			<h2 class="steps__title title-2">
				<?php echo esc_html($title) ?>
			</h2>
			<ul class="steps__list grid">
				<?php foreach ($list as $index => $item): ?>
					<li class="steps__item steps-item">
						<p class="steps-item__number">
							<?php echo ++$index < 10 ? '0' . $index : $index ?>
						</p>
						<h3 class="steps-item__title title-4">
							<?php echo esc_html($item['steps_list_title'])?>
						</h3>
						<div class="steps-item__descr descr">
							<?php echo wp_kses_post($item['steps_list_descr'])?>
						</div>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</section>
<?php endif; ?>