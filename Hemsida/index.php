<?php
include('assets/function.php');
@session_start();

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
  case 'Process':
    $show_page = "process";
    $title = "Process";
    break;
  default:
    $show_page = "404";
    $title = "404";
    break;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Rapidio UF · <?php echo $title; ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href='assets/css/bootstrap.css' rel='stylesheet' type='text/css'>
    <link href='assets/css/stylesheet.css' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <div class="container">
      <?php
      if($show_page == "home"){
        ?>
        <div id="slideshow">
          <div>
            <img src="assets/img/bild1.jpg">
          </div>
          <div>
            <img src="assets/img/bild1.jpg">
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
      <div class="row-fluid">
        <div class="span4">
          <div class="sidebar-nav">
            <a href="?page=Hem"><img src="assets/img/logo.png"></a>
            <hr>
            <a class="btn btn-block" href="?page=Hem">Hem</a>
            <a class="btn btn-block" href="?page=Om">Om oss</a>
            <a class="btn btn-block" href="?page=Kontakt">Kontakt</a>
          </div>
        </div>
        <div class="span8">
          <div class="hero-unit">
            <?php include('assets/pages/'.$show_page.'.php'); ?>
          </div>
        </div>
      </div>
    </div>
    <center>
      <br>
      <p style="color:#EEEEEE;">Made by <a href="#">Webbits</a></p>
    </center>
    <?php include('assets/js/stats.js'); ?>
  </body>
</html>