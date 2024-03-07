## ブレイクポイント

1280px 　 1024px
タブレット　幅　 768px
スマホ　幅　 480px

## フォント

Noto Sans JP Thin 100 title
Noto Sans JP Light 300 discription
Noto Sans JP Regular 400 menu

## component

- card（投稿タイプ別）
- nav（メニュー）
- single（個別ページ）

## CSS

### components 対応 CSS

| ファイル                  | 対応 CSS                     |
| ------------------------- | ---------------------------- |
| about-sec.php             | section/\_about.scss         |
| contact-sec.php           | section/\_contact.scss       |
| news-sec.php              | section/\_news.scss          |
| skill-sec.php             | section/\_skill.scss         |
| card/discription-card.php | card/\_discription-card.scss |

# SCSS

## 全体

| SCSS ファイル     | 対応箇所                   |
| ----------------- | -------------------------- |
| \_default.scss    | フォント設定・リセット CSS |
| \_footer.scss     | フッター                   |
| \_header.scss     | ヘッダー                   |
| \_privacy.scss    | プライバシーポリシー       |
| \_responsive.scss | レスポンシブ               |
| \_scrollup.scss   | スクロール                 |
| \_wp_block.scss   | 記事投稿本文               |

## 一覧表示

| ファイル                     | 対応箇所 |
| ---------------------------- | -------- |
| card/\_default.scss          | 共通     |
| card/\_discription-card.scss | 記事     |
| card/\_movie-card.scss 　    | 動画     |
| card/\_product-card.scss     | Product  |

## 固定ページ

| ファイル                 | 対応箇所             |
| ------------------------ | -------------------- |
| page/\_default.scss      | 共通                 |
| page/\_site-privacy.scss | プライバシーポリシー |

## トップページ

| ファイル               | 対応箇所 |
| ---------------------- | -------- |
| section/\_default.scss | 共通     |
| section/\_about.scss   | About    |
| section/\_contact.scss | Contact  |
| section/\_skill.scss   | Skill    |

## 個別ページ

| ファイル                  | 対応箇所 |
| ------------------------- | -------- |
| single/\_default.scss     | 共通     |
| single/\_discription.scss | 記事     |
| single/\_product.scss     | Product  |

# プラグイン

- Custom Field Suite
- Query Monitor
- SyntaxHighlighter Evolved
- Highlighting Code Block
- WP Multibyte Patch
- Contact Form 7

# 検討プラグイン

https://wp-statistics.com/

# 管理画面

https://jajaaan.co.jp/wordpress/wordpress-admin-page/

ヘッダーメニュー・トップページセクションタイトル・一覧ページタイトルを連動して設定で変更できるようにする

- Home
- Discription
- Movie
- Product
- About
- Skill
- Contact
