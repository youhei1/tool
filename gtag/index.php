<?php $page_title = 'gtag生成'; ?>
<?php include '../include/common.php'; ?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<title><?php the_page_title($page_title); ?></title>
<?php include DIR_SITE_INCLUDE . 'head.php'; ?>
	<link rel="stylesheet" href="css/gtag.css">
</head>
<body>
<?php include DIR_SITE_INCLUDE . 'header.php'; ?>
	<main>
		<div class="jumbotron jumbotron-fluid bg-secondary">
			<div class="container container-fluid">
				<h1 class="display-8"><?php echo $page_title; ?></h1>
				<p>GoogleAnalyticsのタグを生成します。</p>
			</div>
		</div>	
		<div class="main_content">
			<div class="container container-fluid">
				<h2>入力</h2>
				<form id="form">
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label class="required">読み込まれているjs</label>
								<select name="gtag_type" class="form-control" required>
									<option value="">選択してください</option>
									<option value="gtag.js">gtag.js（第5世代）</option>
									<option value="analytics.js">analytics.js（第4世代）</option>
									<option value="ga.js">ga.js（第3世代）</option>
								</select>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>ページ名</label>
								<input type="text" name="page" value="" class="form-control">
							</div>
							<div class="form-group">
								<label>URL</label>
								<input type="text" name="url" value="" class="form-control">
							</div>
							<div class="form-group">
								<label>対象のタグ</label>
								<input type="text" name="target" value="" class="form-control">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label class="required">カテゴリ</label>
								<input type="text" name="category" value="tel" class="form-control" required>
							</div>
							<div class="form-group">
								<label class="required">アクション</label>
								<input type="text" name="action" value="tap" class="form-control" required>
							</div>
							<div class="form-group">
								<label class="required">ラベル</label>
								<input type="text" name="label" value="" class="form-control" required>
							</div>
						</div>
					</div>
					<div class="form-group text-right">
						<input type="submit" value="追加" class="btn btn-primary">
					</div>
				</form>
				<h2>gtag出力</h2>
				<table class="table table-bordered table-striped table-responsive" id="result_table">
					<thead class="thead-primary">
						<tr>
							<th class="cell_no">No</th>
							<th class="cell_page">ページ</th>
							<th class="cell_url">URL</th>
							<th class="cell_target">対象のタグ</th>
							<th class="cell_gtag">onclick</th>
							<th class="cell_btn">削除</th>
						</tr>
					</thead>
					<tbody>
					</tbody>
				</table>
				<p class="text-right"><input type="button" value="全削除" id="all_delete_btn" class="btn btn-primary"></p>
			</div>
		</div>
	</main>
<?php include DIR_SITE_INCLUDE . 'footer.php'; ?>
<?php include DIR_SITE_INCLUDE . 'script.php'; ?>
<script src="js/gtag.js"></script>
</body>
</html>
