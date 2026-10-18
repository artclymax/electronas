<?php
// header
create_options_page(
	'Шапка',
	'opt-header',
);

create_fields(
	'Шапка',
	'opt-header',
	[
		add_field_repeater(
			'header_emails',
			'Email',
			[
				add_field_text(
					'header_emails_email',
					'Email',
				),
			]
		),
		add_field_repeater(
			'header_phones',
			'Телефон',
			[
				add_field_text(
					'header_phones_phone',
					'Телефон',
				),
			]
		),
		add_field_link(
			'header_btn',
			'Кнопка',
		)
	]
);

//!=== home
create_options_page(
	'Главная',
	'opt-home',
);
// hero
create_options_page(
	'Первый экран',
	'opt-hero',
	'opt-home',
);

create_fields(
	'Первый экран',
	'opt-hero',
	[
		add_field_redactor_wysiwyg(
			'hero_title',
			'Заголовок'
		),
		add_field_redactor_wysiwyg(
			'hero_descr',
			'Описание'
		),
		add_field_link(
			'hero_btn_1',
			'Кнопка акцентная'
		),
		add_field_link(
			'hero_btn_2',
			'Кнопка вторая'
		),
		add_field_image(
			'hero_image',
			'Фон'
		),
	]
);

// why
create_options_page(
	'Преимущества',
	'opt-why',
	'opt-home',
);

create_fields(
	'Преимущества',
	'opt-why',
	[
		add_field_text(
			'why_subtitle',
			'Подзаголовок'
		),
		add_field_text(
			'why_title',
			'Заголовок'
		),
		add_field_repeater(
			'why_list',
			'Список',
			[
				add_field_image(
					'why_list_image',
					'Картинка'
				),
				add_field_text(
					'why_list_title',
					'Заголовок'
				),
				add_field_redactor_wysiwyg(
					'why_list_descr',
					'Описание'
				)
			],
			null,
			[
				'layout' => 'block',
				'collapsed' => 'field_why_list_title',
			]
		),
	]
);

// products
create_options_page(
	'Продукция',
	'opt-products',
	'opt-home',
);

create_fields(
	'Продукция',
	'opt-products',
	[
		add_field_text(
			'products_subtitle',
			'Подзаголовок'
		),
		add_field_text(
			'products_title',
			'Заголовок'
		),
		add_field_redactor_wysiwyg(
			'products_descr',
			'Описание'
		),
		add_field_link(
			'products_btn',
			'Кнопка'
		),
		add_field_repeater(
			'products_list',
			'Список',
			[
				add_field_image(
					'products_list_image',
					'Картинка'
				),
				add_field_text(
					'products_list_title',
					'Заголовок'
				),
				add_field_redactor_wysiwyg(
					'products_list_descr',
					'Описание'
				)
			],
			null,
			[
				'layout' => 'block',
				'collapsed' => 'field_products_list_title',
			]
		),
	]
);
// about
create_options_page(
	'О компании',
	'opt-about',
	'opt-home',
);

create_fields(
	'О компании',
	'opt-about',
	[
		add_field_text(
			'about_subtitle',
			'Подзаголовок'
		),
		add_field_text(
			'about_title',
			'Заголовок'
		),
		add_field_redactor_wysiwyg(
			'about_descr',
			'Описание'
		),
		add_field_repeater(
			'about_list',
			'Список',
			[
				add_field_image(
					'about_list_image',
					'Картинка'
				),
				add_field_text(
					'about_list_title',
					'Заголовок'
				),
				add_field_text(
					'about_list_descr',
					'Описание'
				)
			],
			null,
			[
				'layout' => 'block',
				'collapsed' => 'field_about_list_title',
			]
		),
		add_field_image(
			'about_image',
			'Картинка'
		)
	]
);
// products
create_options_page(
	'Портфолио',
	'opt-portfolio',
	'opt-home',
);

create_fields(
	'Портфолио',
	'opt-portfolio',
	[
		add_field_text(
			'portfolio_subtitle',
			'Подзаголовок'
		),
		add_field_text(
			'portfolio_title',
			'Заголовок'
		),
		add_field_repeater(
			'portfolio_list',
			'Список',
			[
				add_field_image(
					'portfolio_list_image',
					'Картинка'
				),
				add_field_text(
					'portfolio_list_title',
					'Заголовок'
				),
				add_field_redactor_wysiwyg(
					'portfolio_list_descr',
					'Описание'
				)
			],
			null,
			[
				'layout' => 'block',
				'collapsed' => 'field_portfolio_list_title',
			]
		),
	]
);

// steps
create_options_page(
	'Этапы работы',
	'opt-steps',
	'opt-home',
);

create_fields(
	'Этапы работы',
	'opt-steps',
	[
		add_field_text(
			'steps_subtitle',
			'Подзаголовок'
		),
		add_field_text(
			'steps_title',
			'Заголовок'
		),
		add_field_repeater(
			'steps_list',
			'Список',
			[
				add_field_text(
					'steps_list_title',
					'Заголовок'
				),
				add_field_redactor_wysiwyg(
					'steps_list_descr',
					'Описание'
				)
			],
			null,
			[
				'layout' => 'block',
				'collapsed' => 'field_steps_list_title',
			]
		),
	]
);

// cta
create_options_page(
	'Расчёт стоимости',
	'opt-cta',
	'opt-home',
);

create_fields(
	'Этапы работы',
	'opt-cta',
	[
		add_field_text(
			'cta_title',
			'Заголовок'
		),
		add_field_redactor_wysiwyg(
			'cta_descr',
			'Описание'
		)
	]
);

// standards
create_options_page(
	'Стандарты',
	'opt-standards',
	'opt-home',
);
create_fields(
	'Стандарты',
	'opt-standards',
	[
		add_field_text(
			'standards_subtitle',
			'Подзаголовок'
		),
		add_field_text(
			'standards_title',
			'Заголовок'
		),
		add_field_redactor_wysiwyg(
			'standards_descr',
			'Описание'
		),
		add_field_repeater(
			'standards_list',
			'Список',
			[
				add_field_image(
					'standards_list_image',
					'Картинка'
				),
				add_field_text(
					'standards_list_title',
					'Заголовок'
				),
			],
			null,
			[
				'layout' => 'block',
				'collapsed' => 'field_standards_list_title',
			]
		),
	]
);

// reviews
create_options_page(
	'Отзывы',
	'opt-reviews',
	'opt-home',
);

create_fields(
	'Отзывы',
	'opt-reviews',
	[
		add_field_text(
			'reviews_subtitle',
			'Подзаголовок'
		),
		add_field_text(
			'reviews_title',
			'Заголовок'
		),
		add_field_redactor_wysiwyg(
			'reviews_descr',
			'Описание'
		),
		add_field_repeater(
			'reviews_list',
			'Список',
			[
				add_field_image(
					'reviews_list_image',
					'Картинка'
				),
			],
			null,
			[
				'layout' => 'block',
				'collapsed' => 'field_reviews_list_title',
			]
		),
	]
);

//!=== contacts
create_options_page(
	'Контакты',
	'opt-contacts'
);

create_fields(
	'Контакты',
	'opt-contacts',
	[
		add_field_text(
			'contacts_subtitle',
			'Подзаголовок'
		),
		add_field_text(
			'contacts_title',
			'Заголовок'
		),
		add_field_tab(
			'contacts_tab_address',
			'Адрес'
		),
		add_field_text(
			'contacts_address_title',
			'Заголовок адреса'
		),
		add_field_redactor_wysiwyg(
			'contacts_address',
			'Адрес'
		),
		add_field_tab(
			'contacts_tab_email',
			'Email'
		),
		add_field_text(
			'contacts_email_title',
			'Заголовок email'
		),
		add_field_repeater(
			'contacts_emails',
			'Email',
			[
				add_field_text(
					'contacts_email_text',
					'Email'
				),
			],
			null,
			[
				'layout' => 'block',
				'collapsed' => 'field_contacts_email_text',
			]
		),
		add_field_tab(
			'contacts_tab_phone',
			'Телефон'
		),
		add_field_text(
			'contacts_phone_title',
			'Заголовок телефона'
		),
		add_field_repeater(
			'contacts_phones',
			'Телефон',
			[
				add_field_text(
					'contacts_phone_text',
					'Телефон'
				),
			],
			null,
			[
				'layout' => 'block',
				'collapsed' => 'field_contacts_email_text',
			]
		),
		add_field_tab(
			'contacts_tab_time',
			'Время работы'
		),
		add_field_text(
			'contacts_time_title',
			'Заголовок время работы'
		),
		add_field_redactor_wysiwyg(
			'contacts_time',
			'Время работы'
		),
		add_field_tab(
			'contacts_tab_payment',
			'Реквизиты'
		),
		add_field_text(
			'contacts_payment_title',
			'Заголовок реквизиты'
		),
		add_field_redactor_wysiwyg(
			'contacts_payment',
			'Реквизиты'
		),
		add_field_tab(
			'contacts_tab_map',
			'Карта'
		),
		add_field_redactor_wysiwyg(
			'contacts_map',
			'Карта'
		),
	]
);

//!=== footer
create_options_page(
	'Подвал',
	'opt-footer'
);

create_fields(
	'Подвал',
	'opt-footer',
	[
		add_field_text(
			'footer_copy',
			'Копирайт'
		),
		add_field_repeater(
			'footer_links',
			'Ссылки',
			[
				add_field_link(
					'footer_links_link',
					'Ссылка'
				),
			],
			null,
			[
				'layout' => 'block',
				'collapsed' => 'footer_links_link',
			]
		),
	]
);

//!=== footer
create_options_page(
	'Модальные окна',
	'opt-modal'
);

create_fields(
	'Модальные окна',
	'opt-modal',
	[
		add_field_tab(
			'modal_calc_tab',
			'Заказать расчёт'
		),
		add_field_text(
			'modal_calc_title',
			'Заголовок'
		),
		add_field_redactor_wysiwyg(
			'modal_calc_descr',
			'Описание'
		),
		add_field_tab(
			'modal_call_tab',
			'Рассчитать смету'
		),
		add_field_text(
			'modal_call_title',
			'Заголовок'
		),
		add_field_redactor_wysiwyg(
			'modal_call_descr',
			'Описание'
		),
	]
);

//!=== thank-you
create_options_page(
	'Страница благодарности',
	'opt-thank-you'
);

create_fields(
	'Страница благодарности',
	'opt-thank-you',
	[
		add_field_redactor_wysiwyg(
			'thank_you_title',
			'Заголовок'
		),
		add_field_redactor_wysiwyg(
			'thank_you_descr',
			'Описание'
		),
		add_field_link(
			'thank_you_btn',
			'Ссылка'
		),
		add_field_image(
			'thank_you_image',
			'Картинка'
		),
	]
);
//!=== 404
create_options_page(
	'Страница 404',
	'opt-page-404'
);

create_fields(
	'Страница 404',
	'opt-page-404',
	[
		add_field_redactor_wysiwyg(
			'page_404_title',
			'Заголовок'
		),
		add_field_redactor_wysiwyg(
			'page_404_descr',
			'Описание'
		),
		add_field_link(
			'page_404_btn',
			'Ссылка'
		),
		add_field_image(
			'page_404_image',
			'Картинка'
		),
	]
);