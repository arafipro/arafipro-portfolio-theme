<?php if(is_front_page()): ?>
	<div class="hero-top">
		<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/human.png" alt="" />
		<p>
			<span><?php bloginfo('name'); ?></span>
			<br />
			<?php bloginfo('description'); ?>
		</p>
	</div>
<?php endif; ?>