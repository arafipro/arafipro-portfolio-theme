<section>
	<?php	if(have_posts()): while(have_posts()): the_post(); ?>
		<div class="single-container">
			<div>
				<img src="<?php echo CFS()->get("p_thumbnail"); ?>" alt="" />
			</div>
			<div>
				<h3><?php the_title() ?></h3>
				<p><a href="<?php CFS()->get("p_github"); ?>">GitHub</a></p>
				<p><a href="<?php CFS()->get("p_url"); ?>">リンク</a></p>
				<p class="stacks">HTML / CSS / WordPress</p>
				<p>
					Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio esse
					perferendis ipsum ipsam voluptatum impedit quos, asperiores
					exercitationem quia minus suscipit placeat nisi eligendi aliquam
					voluptatibus tempore repellat necessitatibus pariatur libero veritatis
					a neque cupiditate. Cum quo illum eaque eos officia excepturi.
					Distinctio molestias earum vitae veniam deleniti iure pariatur. Vitae
					dolore, aspernatur totam voluptates sequi repellat nostrum esse
					pariatur quasi? Suscipit voluptate numquam voluptas officia culpa cum
					minima optio dolorum excepturi eaque? Corporis iste ipsam
					reprehenderit et qui a quia blanditiis? Cupiditate, impedit eum nemo
					quidem cumque, ratione culpa perferendis earum quae voluptates ad,
					quis temporibus rem nam commodi!
				</p>
			</div>
		</div>
	<?php endwhile; endif; ?>
</section>
