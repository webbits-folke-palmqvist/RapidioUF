<?php
include('assets/function.php');

$page = @$_GET['page'];
switch ($page) {
	case '':
		$show_page = "home";
		$title = "Hem";
		break;
	case 'Hem':
		$show_page = "home";
		$title = "Hem";
		break;
	case 'Om':
		$show_page = "about";
		$title = "Om oss";
		break;
	case 'Kontakt':
		$show_page = "contact";
		$title = "Kontakt";
		break;
	case 'Ansökan':
		$show_page = "application";
		$title = "Ansökan";
		break;
	default:
		$show_page = "404";
		$title = "404";
		break;
}
?>
<html>
	<head>
		<title>Rapidio UF · <?php echo $title; ?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link href='assets/css/main.css' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="assets/js/jquery-1.2.6.min.js"></script>
	</head>
	<body>
		<div class="container center">
			<div class="nav">
				<a href="?page=Hem"><img src="assets/img/logo.png"></a>
				<div class="navbar">
					<ul>
						<li <?php if($show_page == "home") { echo 'class="active"'; } ?>><a href="?page=Hem">Hem</a></li>
						<li>|</li>
						<li <?php if($show_page == "contact") { echo 'class="active"'; } ?>><a href="?page=Kontakt">Kontakt</a></li>
						<li>|</li>
						<li <?php if($show_page == "about") { echo 'class="active"'; } ?>><a href="?page=Om">Om oss</a></li>
					</ul>
				</div>
			</div>
			<?php include('assets/pages/'.$show_page.'.php'); ?>
			<div class="footer">
				<p>Made by <a target="_Blank" href="http://webbits.nu/">Webbits</a></p>
			</div>
		</div>
	</body>
</html>