<html>
<title>Био</title>
	
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700|Ubuntu:700&display=swap&subset=cyrillic" rel="stylesheet">  
	<link rel="stylesheet" href="Untitled-1.css">
	<link rel="stylesheet" href="style.css">
	<meta charset="utf-8">
</head>

<body>
	<header>
		<div class="header">
	
			<div class="logo">
				<img src="images/Logo.png">
			</div>

			<div class="search">
					<img src="images/magnif.png" href=#>
					<img src="images/sign.png" href=#>
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

			<h1> По популярности </h1>
			<div class ="f">    
				<?php for ($i=0;$i<24;$i++){?>
					<div class="proj">
						<div class="rating">
							<div class="likes">
								<span>20 L</span>
								<img src="arrow.png">
							</div>

							<div class="dislikes">
								<span>10 DL</span>
								<img src="arrowD.png">
							</div>
						</div>
						<div>
							<img src="placeholder.png" class="project-thumbnail">
						</div>
						<div>
							<h1 class="project-name">Lorem Ipsum Dolor</h1>
						</div>
					</div>
				<?php }?>
			</div>
		</div>
	</div>
	<footer>
		<div class="phone">
			<img src="images/phone.png" alt="" class="phone-logo">
			<span class="phone-number">+7 (863) 238-15-68,  +7 (863) 251-22-81</span>
		</div>
		<div class="mail">
			<img src="images/mail.png" alt="" class="mail-logo">
			<span class="email">info@kvantorium-don.ru</span>
		</div>
 </html>
