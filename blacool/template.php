<?php
	/**
	 * Blacool Style TEMPLATE.PHP
	 * Copyright (C) 2019 Takym.
	 *
	 * Blacoolはosdev-jp向けに作成しました。
	 * このPHPファイルはHTMLファイルを生成する為のテンプレートです。
	 * 生成されたHTMLファイルは静的ページとして動作します。
	 *
	 * このテンプレートを利用してページを生成するには、
	 * http://www.php.net/ からPHPをダウンロードして以下のコマンドを実行してください。
	 * > php -c php.ini template.php > template.html
	 * 動作確認バージョン：v7.2.11
	 *
	 * @author Takym
	 * @version 0.0.0.3
	 */

	// ウェブアプリ名
	$name = "osdev-jp";
	// 著作者または製作者
	$author = "osdev-jp members";
	// ウェブサイトの題名
	$title_website = "<a href=\"./index.html\">osdev-jp</a> - 日本のOS開発コミュニティ";
	// ページの題名
	$title_page = "テンプレートページ";
	// ページの説明
	$description = "osdev-jpはOS開発に有用な情報を収集し公開しています。";
	// ページのキーワード (カンマ区切り)
	$keywords = "";
	// blacool.css が格納されているディレクトリ (最後のスラッシュは不要)
	$styledir = ".";
	// サイドバーを表示するかどうか "show" なら表示 "hide" なら非表示です。
	$sidebar = "show";
?>
<?xml version="1.0" encoding="UTF-8" ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja-JP">
	<head>
		<meta charset="UTF-8">
		<title><?php echo $title_page ?> | <?php echo $title_website ?></title>
		<meta name="application-name" content="<?php echo $name ?>" />
		<meta name="author" content="<?php echo $author ?>">
		<meta name="description" content="<?php echo $description ?>" />
		<meta name="generator" content="Blacool Style TEMPLATE.PHP">
		<meta name="keywords" content="<?php echo "osdev-jp,OS開発,プログラミングコミュニティ,低レイヤ,".$title_page.",".$keywords ?>" />
		<link rel="stylesheet" href="<?php echo $styledir ?>/blacool.css" type="text/css" />
	</head>
	<body>
		<div id="container">
			<!-- ヘッダー開始 -->
			<header>
				<h1 id="top"><?php echo $title_website ?></h1>
				<p><?php echo $description ?></p>
			</header>
			<!-- ヘッダー終了 -->

			<!-- メインコンテンツ 開始 -->
			<div id="main">

				<!-- 本文開始 -->
				<section class="main" nav="<?php echo $sidebar ?>">
					<h1><?php echo $title_page ?></h1>
					<!-- 記事 (例) -->
					<article id="contents_1">
						<h2>見出し</h2>
						<p>
							内容をここに挿入。内容をここに挿入。内容をここに挿入。
							内容をここに挿入。内容をここに挿入。内容をここに挿入。
							内容をここに挿入。内容をここに挿入。内容をここに挿入。
							内容をここに挿入。内容をここに挿入。内容をここに挿入。
							内容をここに挿入。内容をここに挿入。内容をここに挿入。
							内容をここに挿入。内容をここに挿入。内容をここに挿入。
							内容をここに挿入。内容をここに挿入。内容をここに挿入。
							内容をここに挿入。内容をここに挿入。内容をここに挿入。
							内容をここに挿入。内容をここに挿入。内容をここに挿入。
							内容をここに挿入。内容をここに挿入。内容をここに挿入。
							内容をここに挿入。内容をここに挿入。内容をここに挿入。
							内容をここに挿入。内容をここに挿入。内容をここに挿入。
						</p>
					</article>
					<br />
				</section>
				<!-- 本文終了 -->

				<?php if ($sidebar == "show") { ?><!-- サイドバー開始 -->
				<nav>
					<!-- 記事 (例) -->
					<article id="menu_1">
						<h2>見出し</h2>
						<p>
							内容をここに挿入。内容をここに挿入。内容をここに挿入。
							内容をここに挿入。内容をここに挿入。内容をここに挿入。
							内容をここに挿入。内容をここに挿入。内容をここに挿入。
							内容をここに挿入。内容をここに挿入。内容をここに挿入。
							内容をここに挿入。内容をここに挿入。内容をここに挿入。
							内容をここに挿入。内容をここに挿入。内容をここに挿入。
							内容をここに挿入。内容をここに挿入。内容をここに挿入。
							内容をここに挿入。内容をここに挿入。内容をここに挿入。
							内容をここに挿入。内容をここに挿入。内容をここに挿入。
							内容をここに挿入。内容をここに挿入。内容をここに挿入。
							内容をここに挿入。内容をここに挿入。内容をここに挿入。
							内容をここに挿入。内容をここに挿入。内容をここに挿入。
						</p>
					</article>
					<br />
				</nav>
				<!-- サイドバー終了 --><?php } ?>

			</div>
			<!-- メインコンテンツ 終了 -->

			<!-- フッター開始 -->
			<footer>
				<small>Community: <?php echo $author ?></small><br />
				<small>Website: Copytight (C) 2019 Takym.</small>
			</footer>
			<!-- フッター終了 -->
		</div>
	</body>
</html>
