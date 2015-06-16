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
			
			<?= $status ?>
		</header>
		
		<section>
			<?= $content ?>
			<?= $nav ?>
		</section>
		<script src='js/popup.js'></script>
		<script src='js/popupDOM.js'></script>
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
		<script>
			var popup = new Popup(popupDOM);
				popup.setTriggerAppear(document.getElementById('connexion'), 'click');
				popup.setTriggerDisappear(document.body, 'click');
		</script>
	</body>
</html>