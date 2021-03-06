<?php $page_title = 'ホーム'; ?>
<?php include 'include/common.php'; ?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<title><?php the_page_title(); ?></title>
<?php include DIR_SITE_INCLUDE . 'head.php'; ?>
</head>
<body>
<?php include DIR_SITE_INCLUDE . 'header.php'; ?>
	<main>
		<div class="jumbotron jumbotron-fluid bg-secondary">
			<div class="container container-fluid">
				<h1 class="display-8"><?php echo SITE_NAME; ?></h1>
				<p>作ってみた</p>
			</div>
		</div>
		<div class="main_content">
			<div class="container container-fluid">
				<h2>News</h2>
				<div class="news_area">
					<ul class="list-group list-group-flush">
						<li class="list-group-item news_line">
							<div class="news_line__date">2021.04.22</div>
							<div class="news_line__text"><a href="/ruby/">ルビタグ生成</a>を追加しました。</div>
						</li>
						<li class="list-group-item news_line">
							<div class="news_line__date">2020.08.15</div>
							<div class="news_line__text"><a href="/ja-text-converter/">JAテキスト変換</a>で、ccを変換するようにしました。</div>
						</li>
						<li class="list-group-item news_line">
							<div class="news_line__date">2020.01.24</div>
							<div class="news_line__text">Chrome拡張機能、<a href="https://chrome.google.com/webstore/detail/share-page/ejfiiljjnjdhahdoeebcknnndabkadgg" target="_blank">Share Page<i class="btn__ext fas fa-external-link-alt"></i></a> を公開しました。</div>
						</li>
						<li class="list-group-item news_line">
							<div class="news_line__date">2020.01.07</div>
							<div class="news_line__text"><a href="/ja-text-converter/">JAテキスト変換</a>の、リセットボタンが動作しない不具合を修正しました。</div>
						</li>
						<li class="list-group-item news_line">
							<div class="news_line__date">2020.01.01</div>
							<div class="news_line__text"><a href="/htpasswd/">.htpasswd生成ツール</a>にパスワードの自動生成ボタンを追加しました。</div>
						</li>
						<li class="list-group-item news_line">
							<div class="news_line__date">2020.01.01</div>
							<div class="news_line__text"><a href="/htpasswd/">.htpasswd生成ツール</a>で生成したファイルをダウンロードできるようにしました。</div>
						</li>
						<li class="list-group-item news_line">
							<div class="news_line__date">2019.12.29</div>
							<div class="news_line__text"><a href="/htpasswd/">.htpasswd生成ツール</a>を追加しました。</div>
						</li>
						<li class="list-group-item news_line">
							<div class="news_line__date">2019.12.29</div>
							<div class="news_line__text"><a href="/gtag/">gtag生成</a>を世代ごとにonclick属性を作れるようにしました。</div>
						</li>
						<li class="list-group-item news_line">
							<div class="news_line__date">2019.12.29</div>
							<div class="news_line__text">BootStrap4で全体的に作り直しました。</div>
						</li>
					</ul>
				</div>
				<h2 class="">Web Tools</h2>
				<div class="row card_list">
					<div class="col-md-4 col-sm-12">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">ルビタグ生成</h5>
								<h6 class="card-subtitle mb-2 text-muted">RUBY TAG GENERATOR</h6>
							</div>
							<div class="card-body">
								<p class="card-text">ルビタグに変換します。</p>
							</div>
							<div class="card-footer text-right">
								<a href="/ruby/" class="btn btn-primary w-100">使う</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">JAテキスト変換</h5>
								<h6 class="card-subtitle mb-2 text-muted">JA TEXT CONVERTER</h6>
							</div>
							<div class="card-body">
								<p class="card-text">JAを全角にしたり、英数字を半角にしたりします。</p>
							</div>
							<div class="card-footer text-right">
								<a href="/ja-text-converter/" class="btn btn-primary w-100">使う</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">gtag生成</h5>
								<h6 class="card-subtitle mb-2 text-muted">GTAG GENERATOR</h6>
							</div>
							<div class="card-body">
								<p class="card-text">Google Analytics のタグを生成します。</p>
							</div>
							<div class="card-footer text-right">
								<a href="/gtag/" class="btn btn-primary w-100">使う</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">.htpasswd生成</h5>
								<h6 class="card-subtitle mb-2 text-muted">HTPASSWD GENERATOR</h6>
							</div>
							<div class="card-body">
								<p class="card-text">.htpasswd を生成します。</p>
							</div>
							<div class="card-footer text-right">
								<a href="/htpasswd/" class="btn btn-primary w-100">使う</a>
							</div>
						</div>
					</div>
				</div>
				<h2>Chrome Extensions</h2>
				<div class="row card_list">
					<div class="col-md-4 col-sm-12">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Share Page</h5>
								<h6 class="card-subtitle mb-2 text-muted">SHARE PAGE</h6>
							</div>
							<div class="card-body">
								<p class="card-text">ページのタイトルとURLをクリップボードにコピーします。</p>
							</div>
							<div class="card-footer text-right">
								<a href="https://chrome.google.com/webstore/detail/share-page/ejfiiljjnjdhahdoeebcknnndabkadgg" target="_blank" class="btn btn-primary w-100">使う<i class="btn__ext fas fa-external-link-alt"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
<?php include DIR_SITE_INCLUDE . 'footer.php'; ?>
<?php include DIR_SITE_INCLUDE . 'script.php'; ?>
	<script src="top/js/top.js"></script>
</body>
</html>