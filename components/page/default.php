<section class="site-privacy">
	<?php	if(have_posts()): while(have_posts()): the_post(); ?>
		<h1>
			<?php the_title() ?>
		</h1>
		<?php the_content() ?>
	<?php endwhile; endif; ?>
</section>
