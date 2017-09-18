<?php
	//Breaking the differents parts in different atoms so that it looks more like a MVC
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>MVC: Interview</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="./assets/css/main.css")>
		<noscript><link rel="stylesheet" href="noscript" /></noscript>
		
	</head>
	<body class="is-loading">
		<!-- Wrapper -->
			<div id="wrapper" class="fade-in">

				<!-- this one will be in multiple pages-->
				<!-- Intro -->

				<?php include 'intro.php'; ?>
		
				<!-- Header -->

				<!-- those two will be in multiple pages-->

				<?php include 'nav.WebDev.php'; ?>

				<!-- Main -->
					
				<?php include 'article.WebDev.php'; ?>



					
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>