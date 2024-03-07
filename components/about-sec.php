<section id="about" class="about jump_point">
	<h2 class="top-title">
	<?php if(get_option('about-txt')): echo strtoupper(get_option('about-txt'));
					else: echo "About"; endif; ?>
	</h2>
	<div>
		<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/human.png" alt="" />
		<p>
			ポートフォリオサイトをご覧いただきありがとうございます。<br />
			はじめまして、Hiroki Chiyodaと申します。
			私は株式投資をきっかけにプログラミングを勉強しています。<br />
			まずは取引データの管理に役立つと思いPHPとMySQLを学びました。
			その後、Web開発を本格的に学ぶためにLaravelやHTML、CSSを学びました。
			またPythonやFlutterにも興味を持ち自己学習を続けています。<br />
			自分が学んだことをアウトプットすることが大切だと考え、Webアプリやスマートフォンアプリを開発してきました。<br />
			よろしくお願いいたします。
		</p>
	</div>
</section>
