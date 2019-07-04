<html>
<head>
	<title>Главная</title>
    <link rel="stylesheet" href="styles/style.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700|Ubuntu:700&display=swap&subset=cyrillic" rel="stylesheet">  
	<meta charset="utf-8">
</head>

<body>
	<header>
		<div class="header">
			<div class="logo">
				<img src="res/images/Logo.png">
			</div>

			<div class="search">
					<img src="res/images/magnif.png" href=#>
					<img src="res/images/sign.png" href=#>
			</div>
		</div>

		<div class="nav">
			<a href="#">БИО</a>
			<a href="#">IT</a>
			<a href="#">РОБО</a>
			<a href="#">ЭНЕРДЖИ</a>
			<a href="#">ПРОМДИЗАЙН</a>
			<a href="#">ХАЙКТЕК</a>
		</div>
	</header>
	<div class="main">
		<div class="kvantum" id="Bio">
			<h1 class="kvantum-name">Самые популярные Био</h1>
			<div class="featured">
				<?php for ($i=0;$i<4;$i++){include("project-block.php");}?>
			</div>
		</div>
		<div class="kvantum" id="It">
            <h1 class="kvantum-name">Самые популярные Айти</h1>
            <div class="featured">
				<?php for ($i=0;$i<4;$i++){include("project-block.php");}?>
			</div>
		</div>
		<div class="kvantum" id="Robo">
			<h1 class="kvantum-name">Самые популярные Робо</h1>
			<div class="featured">
				<?php for ($i=0;$i<4;$i++){include("project-block.php");}?>
			</div>
		</div>
		<div class="kvantum" id="Energy">
			<h1 class="kvantum-name">Самые популярные Энерджи</h1>
			<div class="featured">
				<?php for ($i=0;$i<4;$i++){include("project-block.php");}?>
			</div>	
		</div>
		<div class="kvantum" id="Design">
			<h1 class="kvantum-name">Самые популярные Промдизайн</h1>
			<div class="featured">
				<?php for ($i=0;$i<4;$i++){include("project-block.php");}?>
			</div>
		</div>
		<div class="kvantum" id="Hitech">
			<h1 class="kvantum-name">Самые популярные Хай-тек</h1>
			<div class="featured">
				<?php for ($i=0;$i<4;$i++){include("project-block.php");}?>
			</div>
		</div>
	</div>
	<footer>

	</footer>
</body>
</html>
