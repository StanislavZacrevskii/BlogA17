<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html> <!--<![endif]-->

<html lang="ru-RU">
<head>
	<meta charset="UTF-8">	
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta name="viewport" content="width=device-width">
	
	<title>Карьерный путь</title>

	<link rel="icon" href="../image/favicon.ico">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet/less" href="../css/main.less">
	<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.6.1/less.min.js"></script>
	<script src="../js/modernizr-custom.js"></script>

</head>
<body>
	<!--[if lt IE 9]>
		<h1>Ваш браузер устарел!!! Прекратите свои мучения, <a href="http://browsehappy.com/">обновите</a> Ваш браузер!!!</h1>
	<![endif]-->

	<div class="wrapper">
		<div class="content">

			<!-- header -->
			<header class="header">
				<div class="container">
					<a href="../index.html"  class="user">
						<div class="user__avatar">
							<img id="avatar" class="user__avatar-pic">
						</div>
						<div id="firstName" class="user__name"></div>
						<div id="secondName" class="user__name"></div>
					</a>

					<!-- contacts -->
					<div class="contacts">
						<a href="#" class="contacts__trigger">Мои контакты</a>
						<ul class="contacts__dropdown">
							<li class="contacts__dropdown-item">
								<a href="mailto:stanislav.zakrevskii@gmail.com" class="contacts__dropdown-link">
									<img class="contacts__dropdown-img" src="../image/icons/mail.png" alt="почта">
									<div id="email"></div>
								</a>
							</li>
							<li class="contacts__dropdown-item">
								<a href="callto:+380976880625" class="contacts__dropdown-link">
									<img class="contacts__dropdown-img" src="../image/icons/call.png" alt="телефон">
									<div id="phone"></div>
								</a>
							</li>
							<li class="contacts__dropdown-item">
								<a href="callto:zuker010488" class="contacts__dropdown-link">
									<img class="contacts__dropdown-img" src="../image/icons/skype.png" alt="скайп">
									<div id="skype"></div>
								</a>
							</li>
						</ul>
					</div>
				</div>				
			</header>
			<div class="content">
				<div class="container">

					<!-- sidebar -->
					<aside class="sidebar">
						<nav class="navigating">
							<ul class="navigating__list">
								<li class="navigating__item">
									<a  class="navigating__link" href="/page/about">
										<i class="fa fa-user-secret"></i>
										Обо мне
									</a>
								</li>
								<li class="navigating__item navigating__item_active">
									<a class="navigating__link" href="#">
										<i class="fa fa-rocket"></i>
										Учебный путь
									</a>
								</li>
								<li class="navigating__item">
									<a class="navigating__link" href="/page/portfolio">
										<i class="fa fa-suitcase"></i>
										Модули
									</a>
								</li>
							</ul>
						</nav>
					</aside>
					<main class="profil">
						<div class="career">
							<div class="career_title">Учебный путь</div>
							<div class="career__left">
								<div class="career__pic">
									<img src="../image/career-pic.jpg" class="career__pic-img" alt="Картинка">
								</div>
							</div>
							<div class="career__right">
								<ul class="career__list">
									<li class="career__item">
										<div class="career__block">
											<div class="career__title">Название курса:</div>
											<div class="career__occupation" id="title"></div>
											<div class="career__date">Название модуля:</div>
											<div class="career__date" id="modules"></div>
											<div class="career__year">
												2016
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</main>
				</div>					
			</div>
		</div>
	</div>

	<footer class="footer">
		<div class="container">
			<div class="copyright">
			 	&#169; Дизайн сайта был разработан в школе LoftSchool
			</div>
			<div class="socials">
				<ul class="socials__list">
					<li class="socials__item">
						<a href="#" class="socials__link socials__link_fb"></a>
					</li>
					<li class="socials__item">
						<a href="#" class="socials__link socials__link_vk"></a>
					</li>
					<li class="socials__item">
						<a href="#" class="socials__link socials__link_tw"></a>
					</li>
				</ul>
			</div>
		</div>		
	</footer>	
</body>

<script src="https://intita.com/api/dist/intita-api-client.min.js"></script>
<script src="./../js/main.js"></script>

</html>