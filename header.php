<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div class="wrapper">
		<?php
		$page = 'options';

		$emails = get_field('header_emails', $page) ?? '';
		//header_emails_email
		$phones = get_field('header_phones', $page) ?? '';
		//header_phones_phone
		$btn = get_field('header_btn', $page) ?? '';
		?>
		<header class="header" data-auto-calc="header, height">
			<div class="container header__container">
				<!-- logo -->
				<div class="logo header__logo">
					<?php mx_logo(); ?>
				</div>
				<!-- header__content -->
				<div class="header__content hidden-tablet">
					<ul class="header__contacts">
						<?php if ($emails): ?>
							<?php foreach ($emails as $item): ?>
								<li class="header__contacts-item header-contacts-item icon icon--header-email">
									<a class="header-contacts-item__link link"
										href="mailto:<?php echo esc_attr($item['header_emails_email']) ?>">
										<?php echo esc_html($item['header_emails_email']) ?>
									</a>
								</li>
							<?php endforeach; ?>
						<?php endif; ?>
						<?php if ($phones): ?>
							<?php foreach ($phones as $item): ?>
								<li class="header__contacts-item header-contacts-item icon icon--header-phone">
									<a class="header-contacts-item__link link"
										href="tel:+<?php echo esc_attr(correct_phone($item['header_phones_phone'])) ?>">
										<?php echo esc_html($item['header_phones_phone']) ?>
									</a>
								</li>
							<?php endforeach; ?>
						<?php endif; ?>
					</ul>
					<a class="header__btn btn" href="<?php echo esc_attr($btn['url']) ?>">
						<?php echo esc_html($btn['title']) ?>
					</a>
				</div>
				<!-- phone-btn -->
				<button class="header__phone-btn phone-btn visible-tablet" aria-label="Позвонить" type="button">
					<svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path
							d="M14.5397 9.59474C14.226 8.5484 14.0103 7.47515 13.8954 6.38887C13.7806 5.30586 12.8351 4.5 11.7462 4.5H6.69463C5.39517 4.5 4.39479 5.6225 4.50887 6.91611C5.66062 19.9539 16.0461 30.3386 29.0839 31.4911C30.3782 31.6052 31.5 30.6085 31.5 29.309V24.8044C31.5 23.1605 30.6941 22.2186 29.6111 22.1038C28.5249 21.9891 27.4516 21.7737 26.4053 21.4603C25.7849 21.2763 25.1263 21.2637 24.4993 21.4237C23.8723 21.5838 23.3003 21.9105 22.844 22.3693L20.6816 24.5316C16.782 22.419 13.581 19.2179 11.4684 15.3184L13.6307 13.156C14.0896 12.6998 14.4165 12.1278 14.5766 11.5008C14.7368 10.8738 14.7235 10.2152 14.5397 9.59474Z"
							fill="currentColor"></path>
					</svg>
				</button>
				<!-- burger-btn -->
				<button class="header__burger-btn burger-btn visible-tablet" type="button"
					aria-label="открыть/закрыть меню">
					<span></span>
				</button>
			</div>
			<!-- header__menu-body -->
			<div class="header__menu-body">
				<div class="container header__menu-container">
					<nav class="header__menu header-menu">
						<?php
						$menu = wp_nav_menu(
							array(
								'theme_location' => 'header-menu',
								'container' => false,
								'menu_class' => 'header-menu__list',
								'depth' => 1
							)
						);
						echo htmlspecialchars($menu); ?>
						<!-- header-menu__box -->
						<div class="header-menu__box visible-tablet">
							<?php if ($emails): ?>
								<ul class="header-menu__emails">
									<?php foreach ($emails as $item): ?>
										<li class="header-menu__email icon icon--header-email">
											<a class="header-menu__link link"
												href="mailto:<?php echo esc_attr($item['header_emails_email']) ?>">
												<?php echo esc_html($item['header_emails_email']) ?>
											</a>
										</li>
									<?php endforeach; ?>
								</ul>
							<?php endif; ?>
							<a class="header__btn btn" href="<?php echo esc_attr($btn['url']) ?>">
								<?php echo esc_html($btn['title']) ?>
							</a>
						</div>
					</nav>
				</div>
			</div>
			<!-- header-phone-box -->
			<?php if ($phones): ?>
				<ul class="header__phone-box header-phone-box visible-tablet">
					<?php foreach ($phones as $item): ?>
						<li class="header-phone-box__item icon icon--header-phone">
							<a a class="header-phone-box__link link"
								href="tel:+<?php echo esc_attr(correct_phone($item['header_phones_phone'])) ?>">
								<?php echo esc_html($item['header_phones_phone']) ?>
							</a>
						</li>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>
		</header>

		<!--<header class="header" data-auto-calc="header, height">
			<div class="container header__container">
				<div class="header__logo logo">
					<?php mx_logo(); ?>
				</div>
				<nav class="header__menu header-menu">
					
					<a class="btn header__btn visible-tablet" href="<?php echo get_field('header_btn', 'options')['url']; ?>">
						<?php echo get_field('header_btn', 'options')['title']; ?>
					</a>
				</nav>
				<a class="btn header__btn hidden-tablet" href="<?php echo get_field('header_btn', 'options')['url']; ?>">
					<?php echo get_field('header_btn', 'options')['title']; ?>
				</a>
				<button class="header__burger-btn burger-btn visible-tablet" type="button"
					aria-label="открыть/закрыть меню">
					<span></span>
				</button>
			</div>
		</header>-->

		<main class="main">
			<?php if (!is_front_page() && !is_404() && !is_page('thank-you')): ?>
				<?php get_template_part('partials/hero-page'); ?>
			<?php endif; ?>