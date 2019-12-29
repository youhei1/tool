<?php $page_title = '.htpasswd生成'; ?>
<?php include '../include/common.php'; ?>
<?php

	if (isset($_POST['id']) && isset($_POST['pw'])) {

		$pw = password_hash($_POST['pw'], PASSWORD_BCRYPT);
		$id = $_POST['id'];

		$htpasswd = $id . ':' . $pw;

	}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<title><?php the_page_title($page_title); ?></title>
<?php include DIR_SITE_INCLUDE . 'head.php'; ?>
	<link rel="stylesheet" href="css/htpasswd.css">
</head>
<body>
<?php include DIR_SITE_INCLUDE . 'header.php'; ?>
	<main>
		<div class="jumbotron jumbotron-fluid bg-secondary">
			<div class="container container-fluid">
				<h1 class="display-8"><?php echo $page_title; ?></h1>
				<p>.htpasswdを生成します。</p>
			</div>
		</div>	
		<div class="main_content">
			<div class="container container-fluid">
				<h2>入力</h2>
				<form id="form" method="POST" action="/htpasswd/">
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label class="required">ID</label>
								<input type="text" name="id" value="<?php echo isset($_POST['id']) ? $_POST['id'] : ''; ?>" class="form-control" required>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label class="required">PW</label>
								<input type="text" name="pw" value="<?php echo isset($_POST['pw']) ? $_POST['pw'] : ''; ?>" class="form-control" required>
							</div>
						</div>
					</div>
					<div class="text-right"><input type="submit" value="追加" class="btn btn-primary"></div>
				</form>
				<h2>.htpasswd出力</h2>
<?php if (isset($htpasswd)): ?>
				<div class="alert alert-success htpasswd_box" role="alert">
					<a href="javascript:void(0);" data-clipboard-target="#htpasswd" class="copy_link">Copy</a>
					<pre id="htpasswd" class="mb-0"><?php echo isset($htpasswd) ? $htpasswd : ''; ?></pre>
				</div>
<?php endif; ?>
			</div>
		</div>
	</main>
<?php include DIR_SITE_INCLUDE . 'footer.php'; ?>
<?php include DIR_SITE_INCLUDE . 'script.php'; ?>
<script src="js/htpasswd.js"></script>
</body>
</html>
