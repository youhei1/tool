<?php $page_title = 'ルビタグ生成' ?>
<?php include '../include/common.php'; ?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<title><?php the_page_title($page_title); ?></title>
<?php include DIR_SITE_INCLUDE . 'head.php'; ?>
</head>
<body>
<?php include DIR_SITE_INCLUDE . 'header.php'; ?>
	<main>
		<div class="jumbotron jumbotron-fluid bg-secondary">
			<div class="container container-fluid">
				<h1 class="display-8">ルビタグ生成</h1>
				<p>ルビタグに変換します。</p>
			</div>
		</div>
		<div class="main_content">
			<div class="container container-fluid">
				<div class="row mb-5">
					<div class="col-sm-6" id="input">
						<h3>変換前</h3>
						<div class="form-group">
							<div class="row">
								<div class="col-sm-12 form-group">
									<label>漢字</label>
									<input type="text" name="kanji" value="" class="form-control" placeholder="漢字">
								</div>
								<div class="col-sm-12 form-group">
									<label>よみがな</label>
									<input type="text" name="yomi" value="" class="form-control" placeholder="かんじ">
								</div>
								<div class="col-sm-6 form-group">
									<label>カッコ開始</label>
									<input type="text" name="kakko1" value="（" class="form-control">
								</div>
								<div class="col-sm-6 form-group">
									<label>カッコ閉じ</label>
									<input type="text" name="kkakko2" value="）" class="form-control">
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<h3>変換後</h3>
							<textarea rows="10" id="after" class="w-100 form-control"></textarea>
						</div>
						<div class="form-group">
							<h3>プレビュー</h3>
							<div id="preview" style="padding: 1em 2em;"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
<?php include DIR_SITE_INCLUDE . 'footer.php'; ?>
<?php include DIR_SITE_INCLUDE . 'script.php'; ?>
<script src="js/ruby.js"></script>
</body>
</html>