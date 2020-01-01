<?php $page_title = 'ページが見つかりません。'; ?>
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
				<h1 class="display-8"><?php echo $page_title; ?></h1>
				<p>404 Not Found.</p>
			</div>
		</div>	
		<div class="main_content">
			<div class="container container-fluid">
				<p>申し訳ありません。お探しのページは一時的にアクセスが出来ない状況にあるか、もしくは移動、削除され見つけることができません。</p>
				<p class="text-center"><a href="/" class="btn btn-primary">トップページへ</a></p>
			</div>
		</div>
	</main>
<?php include DIR_SITE_INCLUDE . 'footer.php'; ?>
<?php include DIR_SITE_INCLUDE . 'script.php'; ?>
<script src="js/htpasswd.js"></script>
</body>
</html>
