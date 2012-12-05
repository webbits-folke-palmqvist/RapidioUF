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
				<div class="navbar">
					<ul>
						<li><a href="?page=Hem">Hem</a></li>
						<li>|</li>
						<li><a href="?page=Kontakt">Kontakt</a></li>
						<li>|</li>
						<li><a href="?page=Om">Om oss</a></li>
					</ul>
				</div>
			</div>
			<?php
			if($show_page == "home"){
				?>
				<div id="slideshow">
				   	<div>
				     	<img src="assets/img/logo.png">
				   	</div>
				   	<div>
				    	Pretty cool eh? This slide is proof the content can be anything.
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
			<div class="paper">			
				<?php include('assets/pages/'.$show_page.'.php'); ?>
			</div>
		</div>
	</body>
</html>