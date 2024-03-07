<section class="site-privacy">
	<?php	if(have_posts()): while(have_posts()): the_post(); ?>
		<h1>
		<?php if(get_option('about-txt')): echo strtoupper(get_option('about-txt'));
					else: echo "About"; endif; ?>
		</h1>
		<?php the_content() ?>
	<?php endwhile; endif; ?>
</section>
