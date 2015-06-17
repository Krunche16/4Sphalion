var popupDOM = document.createElement('div')
	popupDOM.className = 'popupVeil';

var popupContent = document.createElement('div');
	popupContent.className = 'popupContent';

var popupExit = document.createElement('div');
	popupExit.id = 'popupExit';
	
var popupExitContent = document.createElement('span');
	popupExitContent.className = 'exit1'
var popupExitContent2 = document.createElement('span');
	popupExitContent2.className = 'exit2';

var popupForm = document.createElement('form');
	popupForm.method = 'post';
	popupForm.action = 'Home';
	
var popupFormInputUsername = document.createElement('input');
	popupFormInputUsername.type = 'text';
	popupFormInputUsername.name = 'username';
	popupFormInputUsername.placeholder = 'Votre Nom d\'Utilisateur';
		
var popupFormInputPassword = document.createElement('input');
	popupFormInputPassword.type = 'password';
	popupFormInputPassword.name = 'userpass';
	popupFormInputPassword.placeholder = 'Votre Mot De Passe';
	
var popupFormInputSubmit = document.createElement('input');
	popupFormInputSubmit.type = 'submit';
	popupFormInputSubmit.id = 'submit';
	
var popupFormInputSubmitLabel = document.createElement('label');
	popupFormInputSubmitLabel.htmlFor = 'submit';
var popupFormInputSubmitLabelText = document.createTextNode('Valider');

popupFormInputSubmitLabel.appendChild(popupFormInputSubmitLabelText);
	
	
popupForm.appendChild(popupFormInputUsername);
popupForm.appendChild(popupFormInputPassword);
popupForm.appendChild(popupFormInputSubmit);
popupForm.appendChild(popupFormInputSubmitLabel);


popupExit.appendChild(popupExitContent);
popupExit.appendChild(popupExitContent2);

popupContent.appendChild(popupExit);
popupContent.appendChild(popupForm);


popupDOM.appendChild(popupContent);

/* 
<div id='popupveil'>
	<div id='popupContent'>
		<div class='popupClose'><span></span></div>
		<form method='post' action='Home'>
			<input type='text' name='username'/>
			<input type='password' name='userpass'/>
			<input type='submit' value='Valider'/>
		</form>
	</div>
</div> 
*/