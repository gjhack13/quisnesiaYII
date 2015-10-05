<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="img/favicon.ico" >
   <link rel="icon" type="image/gif" href="animated_favicon1.gif" >
	<title>Quisnesia.com</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="Kuis Online No.1 Indonesia "/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl;?>/css/reset.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl;?>/css/main.css">
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/js/main.js"></script>
</head>
<body>

	<header>
		<div class="logo">
			<a href="index.html"><img src="<?php echo Yii::app()->request->baseUrl;?>/img/head.png" title="Quisnesia" alt="Quisnesia"/></a>
		</div><!-- end logo -->

		<div id="menu_icon"></div>
		<nav>
			<ul>
				<li><a href="#" class="selected">Beranda</a></li>
				<li><a href="#">Tentang</a></li>
				<li><a href="#">Kerjasama</a></li>
			</ul>
		</nav><!-- end navigation menu -->

		<div class="footer clearfix">
			<ul class="social clearfix">
				<li><a href="#" class="fb" data-title="Facebook"></a></li>
				<li><a href="#" class="google" data-title="Google +"></a></li>
				<li><a href="#" class="twitter" data-title="Twitter"></a></li>
			</ul><!-- end social -->

			<div class="rights">
				<p>Copyright © 2015 Quisnesia.com</p>
				<p>08989646993 | admin@quisnesia.com </p>
			</div><!-- end rights -->
		</div ><!-- end footer -->
	</header><!-- end header -->

	<section class="main clearfix">
		<?php echo $content; ?>
	</section><!-- end main -->
	
</body>
</html>
