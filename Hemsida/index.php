<?php
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
			<?php
			if($show_page == "home"){
				?>
				<div id="slideshow">
				   	<div>
				     	<img src="http://datatel1.com/wp-content/uploads/2011/01/940x250-1.jpg">
				   	</div>
				   	<div>
				    	<img src="http://www.straddiebungalows.com.au/assets/cache/jetty2-940x250r0.jpg">
				   	</div>
				</div>
				<script type="text/javascript">
					$("#slideshow > div:gt(0)").hide();
					setInterval(function() { 
					  $('#slideshow > div:first')
					    .fadeOut(1000)
					    .next()
					    .fadeIn(1000)
					    .end()
					    .appendTo('#slideshow');
					},  5000);
				</script>
				<?php
			}
			?>
			<?php include('assets/pages/'.$show_page.'.php'); ?>
			<div class="footer">
				<p>Made by <a target="_Blank" href="http://webbits.nu/">Webbits</a></p>
			</div>
		</div>
	</body>
</html>