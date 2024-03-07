<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!-- SEO対策 -->
<meta
	content="ポートフォリオサイトをご覧いただきありがとうございます。はじめまして、Hiroki Chiyodaと申します。 私は株式投資をきっかけにプログラミングを勉強しています。まずは取引データの管理に役立つと思いPHPとMySQLを学びました。 その後、Web開発を本格的に学ぶためにLaravelやHTML、CSSを学びました。 またPythonやFlutterにも興味を持ち自己学習を続けています。自分が学んだことをアウトプットすることが大切だと考え、Webアプリやスマートフォンアプリを開発してきました。"
	name="description"
/>
<meta
	property="og:title"
	content="Wellcome to My Portfolio - Hiroki Chiyodaのポートフォリオサイトにようこそ"
/>
<meta
	property="og:description"
	content="ポートフォリオサイトをご覧いただきありがとうございます。はじめまして、Hiroki Chiyodaと申します。 私は株式投資をきっかけにプログラミングを勉強しています。"
/>
<meta property="og:type" content="ページの種類" />
<meta property="og:url" content="https://portfolio.arafipro.com/" />
<!-- <meta property="og:image" content="サムネイル画像の URL" /> -->
<meta
	property="og:site_name"
	content="Wellcome to My Portfolio - Hiroki Chiyodaのポートフォリオサイトにようこそ"
/>
<meta property="og:locale" content="ja_JP" />
<meta
	name="keywords"
	content="streamlit,ポートフォリオ,html,css,sass,wordpress,ts,react,nextjs,vue,tailwind,python,django,php,laravel,dart,flutter,git,github,vscode,figma,mysql,sqlite"
/>
<!-- SEO対策 終了-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/github-markdown-css/2.10.0/github-markdown.css">
<link
	href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"
	rel="stylesheet"
/>
<title>ARAFIPRO</title>
<!-- Google tag (gtag.js) -->
<script
	async
	src="https://www.googletagmanager.com/gtag/js?id=<?php echo get_option('analytics-tag'); ?>"
></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag() {
		dataLayer.push(arguments);
	}
	gtag("js", new Date());

	gtag("config", "<?php echo get_option('analytics-tag'); ?>");
</script>
<?php wp_head(); ?>
