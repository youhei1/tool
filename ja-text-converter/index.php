<?php $page_title = 'JAテキスト変換' ?>
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
				<h1 class="display-8">JAテキスト変換</h1>
				<p>JAのコーディングルールでよく使うような書き換えをまとめました。</p>
			</div>
		</div>
		<div class="main_content">
			<div class="container container-fluid">
				<div class="row mb-5">
					<div class="col-sm-6">
						<h3>変換前</h3>
						<textarea rows="10" id="before" class="w-100"></textarea>
					</div>
					<div class="col-sm-6">
						<h3>変換後</h3>
						<textarea rows="10" id="after" class="w-100"></textarea>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<h3>オプション</h3>
						<div class="form-group">
							<div class="custom-control custom-checkbox mr-sm-2">
								<input type="checkbox" class="custom-control-input" id="is_br">
								<label class="custom-control-label" for="is_br">改行にBRを出力する</label>
							</div>
							<div class="custom-control custom-checkbox mr-sm-2">
								<input type="checkbox" class="custom-control-input" id="is_br_after_maru">
								<label class="custom-control-label" for="is_br_after_maru">「。」のあとは改行する</label>
							</div>
							<div class="custom-control custom-checkbox mr-sm-2">
								<input type="checkbox" class="custom-control-input" id="is_start_space">
								<label class="custom-control-label" for="is_start_space">BRとPのあとに全角スペースを入れる</label>
							</div>
							<div class="custom-control custom-checkbox mr-sm-2">
								<input type="checkbox" class="custom-control-input" id="is_line">
								<label class="custom-control-label" for="is_line">1行にする</label>
							</div>
							<div class="custom-control custom-checkbox mr-sm-2">
								<input type="checkbox" class="custom-control-input" id="is_remove_tab">
								<label class="custom-control-label" for="is_remove_tab">タブを消す</label>
							</div>
							<div class="custom-control custom-checkbox mr-sm-2">
								<input type="checkbox" class="custom-control-input" id="is_p">
								<label class="custom-control-label" for="is_p">pタグで囲む</label>
							</div>
							<div class="custom-control custom-checkbox mr-sm-2">
								<input type="checkbox" class="custom-control-input" id="is_ja_full">
								<label class="custom-control-label" for="is_ja_full">JAを全角にする</label>
							</div>
							<div class="custom-control custom-checkbox mr-sm-2">
								<input type="checkbox" class="custom-control-input" id="is_half">
								<label class="custom-control-label" for="is_half">全角を半角にする</label>
							</div>
							<div class="custom-control custom-checkbox mr-sm-2">
								<input type="checkbox" class="custom-control-input" id="is_special">
								<label class="custom-control-label" for="is_special">特殊文字を変換する</label>
							</div>
							<div class="custom-control custom-checkbox mr-sm-2">
								<input type="checkbox" class="custom-control-input" id="is_jittai">
								<label class="custom-control-label" for="is_jittai">特殊文字を実態参照に変換する</label>
							</div>
							<div class="custom-control custom-checkbox mr-sm-2">
								<input type="checkbox" class="custom-control-input" id="is_tel">
								<label class="custom-control-label" for="is_tel">電話番号をリンクにする</label>
							</div>
							<div class="custom-control custom-checkbox mr-sm-2">
								<input type="checkbox" class="custom-control-input" id="is_remove_attr">
								<label class="custom-control-label" for="is_remove_attr">指定した属性を全部消す（カンマ区切りで）</label>
							</div>
						</div>
						<div class="form-group">
							<label for="remove_target_attrs">削除したい要素</label>
							<input type="email" class="form-control" id="remove_target_attrs" placeholder="Enter attrs">
							<small id="emailHelp" class="form-text text-muted">カンマ区切りで入れる</small>
						</div>
						<button onclick="clear_options(); return false;" class="btn btn-primary">リセット</button>
					</div>
					<div class="col-sm-6">
						<h3>実行結果</h3>
						<div id="diff"></div>
					</div>
				</div>
			</div>
		</div>
	</main>
<?php include DIR_SITE_INCLUDE . 'footer.php'; ?>
<?php include DIR_SITE_INCLUDE . 'script.php'; ?>
<script src="js/ja-text-converter.js"></script>
</body>
</html>