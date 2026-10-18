<?php
$page = 'options';

$subtitle = get_field('contacts_subtitle', $page) ?? '';
$title = get_field('contacts_title', $page) ?? '';

$address_title = get_field('contacts_address_title', $page) ?? '';
$address = get_field('contacts_address', $page) ?? '';

$email_title = get_field('contacts_email_title', $page) ?? '';
$emails = get_field('contacts_emails', $page) ?? '';
//$subtitle = get_field('contacts_email_text', $page) ?? '';

$phone_title = get_field('contacts_phone_title', $page) ?? '';
$phones = get_field('contacts_phones', $page) ?? '';
//$subtitle = get_field('contacts_phone_text', $page) ?? '';

$time_title = get_field('contacts_time_title', $page) ?? '';
$time = get_field('contacts_time', $page) ?? '';

$payment_title = get_field('contacts_payment_title', $page) ?? '';
$payment = get_field('contacts_payment', $page) ?? '';

$map = get_field('contacts_map', $page) ?? '';
?>
<section class="contacts" id="contacts">
	<div class="container contacts__container">
		<p class="contacts__subtitle subtitle">
			<?php echo esc_html($subtitle) ?>
		</p>
		<h2 class="contacts__title title-2">
			<?php echo esc_html($title) ?>
		</h2>
		<div class="contacts__content">
			<div class="contacts__info">
				<ul class="contacts__list">
					<?php if ($address): ?>
						<li class="contacts__item contacts-item icon icon--address">
							<div class="contacts-item__content">
								<p class="contacts-item__title">
									<?php echo esc_html($address_title) ?>
								</p>
								<div class="contacts-item__text descr">
									<?php echo wp_kses_post($address) ?>
								</div>
							</div>
						</li>
					<?php endif; ?>
					<?php if ($emails): ?>
						<li class="contacts__item contacts-item icon icon--email">
							<div class="contacts-item__content">
								<p class="contacts-item__title">
									<?php echo esc_html($email_title) ?>
								</p>
								<?php foreach ($emails as $item): ?>
									<a class="contacts-item__text contacts-item__link link"
										href="mailto:<?php echo esc_attr($item['contacts_email_text']) ?>">
										<?php echo esc_html($item['contacts_email_text']) ?>
									</a>
								<?php endforeach; ?>
							</div>
						</li>
					<?php endif; ?>
					<?php if ($phones): ?>
						<li class="contacts__item contacts-item icon icon--phone">
							<div class="contacts-item__content">
								<p class="contacts-item__title">
									<?php echo esc_html($phone_title) ?>
								</p>
								<?php foreach ($phones as $item): ?>
									<a class="contacts-item__text contacts-item__link link"
										href="tel:+<?php echo esc_attr(correct_phone($item['contacts_phone_text'])) ?>">
										<?php echo esc_html($item['contacts_phone_text']) ?>
									</a>
								<?php endforeach; ?>
							</div>
						</li>
					<?php endif; ?>
					<?php if ($time): ?>
						<li class="contacts__item contacts-item icon icon--time">
							<div class="contacts-item__content">
								<p class="contacts-item__title">
									<?php echo esc_html($time_title) ?>
								</p>
								<div class="contacts-item__text descr">
									<?php echo wp_kses_post($time) ?>
								</div>
							</div>
						</li>
					<?php endif; ?>
				</ul>
				<?php if ($payment): ?>
					<div class="contacts__requisites contacts-requisites">
						<p class="contacts-requisites__title contacts-item__title">
							<?php echo esc_html($payment_title) ?>
						</p>
						<div class="contacts-requisites__text descr">
							<?php echo wp_kses_post($payment) ?>
						</div>
					</div>
				<?php endif; ?>
			</div>
			<?php if ($map): ?>
				<div class="contacts__map">
					<?php echo wp_kses($map, [
						'iframe' => [
							'src' => true,
							'width' => true,
							'height' => true,
							'style' => true,
							'allowfullscreen' => true,
							'loading' => true,
						],
					]) ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>