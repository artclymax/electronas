<?php
$page = 'options';
$copy = get_field('footer_copy', $page) ?? '';
$links = get_field('footer_links', $page) ?? '';

?>
</main>
<footer class="footer" id="footer">
	<div class="container footer__container">
		<div class="footer__brand">
			<div class="logo footer__logo">
				<?php mx_logo(); ?>
			</div>
			<p class="footer__copy">
				&copy; <?php echo get_the_date('Y') ?> <?php echo esc_html($copy) ?>
			</p>
		</div>
		<nav class="footer__menu footer-menu">
			<?php
			$menu = wp_nav_menu(
				array(
					'theme_location' => 'footer-menu',
					'container' => false,
					'menu_class' => 'footer-menu__list',
					'depth' => 1
				)
			);
			echo htmlspecialchars($menu); ?>
		</nav>
		<div class="footer__legal">
			<?php foreach ($links as $item): ?>
				<a href="<?php echo esc_html($item['footer_links_link']['url']) ?>">
					<?php echo esc_html($item['footer_links_link']['title']) ?>
				</a>
			<?php endforeach; ?>
		</div>
	</div>
</footer>

<?php get_template_part('partials/modal-calc') ?>
<?php get_template_part('partials/modal-call') ?>
<?php get_template_part('partials/cookie-banner') ?>
<?php get_template_part('partials/scroll-to-top') ?>

<?php wp_footer(); ?>
</body>

</html>