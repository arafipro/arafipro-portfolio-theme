<section id="contact" class="contact">
	<h2 class="top-title">
	<?php if(get_option('contact-txt')): echo strtoupper(get_option('contact-txt'));
					else: echo "Contact"; endif; ?>
	</h2>
	<h3>
		お問い合わせは&nbsp;<a href="mailto:contact@arafipro.com">
			contact@arafipro.com
		</a>
		&nbsp;へ
	</h3>
	<!-- <h3>お問い合わせは以下のフォームから</h3> -->
	<!-- <?php echo apply_shortcodes('[contact-form-7 id="bdc3af2" title="コンタクトフォーム"]'); ?> -->
</section>