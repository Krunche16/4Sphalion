<!DOCTYPE HTML>
<html>
	<head>
		<meta charset='utf-8'/>
		<meta name='viewport' content='width=device-width' />
		<link rel='stylesheet' type='text/css' href='css/style.css'/>
		<link rel='stylesheet' type='text/css' href='css/hamburgerOpened.css'/>
		<link rel='stylesheet' type='text/css' href='css/navOpened.css'/>
		<link rel='shortcut icon' href='img/favico.ico'/>
		<title>4Sphalion | <?= $title ?></title>
	</head>
	
	<body>
		<header>
			<div id='title'><h1>4Sphalion</h1></div>
			<div id='icon'><img alt='icon' src='img/icon.png'></div>
			<div class='right' id='hamburger'><span></span></div>
		</header>
		
		<section>
			<?= $content ?>
	
			<div id='contentSlide'>
				<nav id='nav'>
					<ul>
						<a href='Home'><li class='categorie home'><span class='icon'></span>Home</li></a>
						<a href='MonCompte'><li class='categorie account'><span class='icon'></span>Mon compte</li></a>
						<a href='Strategies'><li class='categorie strategie'><span class='icon'></span>Stratégies</li></a>
						<a href='Discution'><li class='categorie discution'><span class='icon'></span>Discution</li></a>
					</ul>
				</nav>
			</div>
			
		</section>
			<script>
				var hamburger = document.getElementById('hamburger');
				var nav = document.getElementById('nav');
			
				hamburger.addEventListener('click', function(){
					if(this.className === 'hamburgerOpened'){
						this.className = 'hamburgerClosed';
						nav.className = 'navClosed';
					}else{
						this.className = 'hamburgerOpened';
						nav.className = 'navOpened';
					}
				}, false);
			</script>
	</body>
</html>