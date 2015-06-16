/* var popupDOM = document.createElement('div');
	popupDOM.id = 'popup';
	
var popupInputName = document.createElement('input');
	popupInputName.type = 'text';
	popupInputName.name = 'username';
	
var popupInputPassword = document.createElement('input');
	popupInputPassword.type = 'password';
	popupInputPassword.name = 'password';
	
var popupInputSubmit = document.createElement('input');
	popupInputSubmit.type ='submit';
	popupInputSubmit.value = 'Valider';
	
popupDOM.appendChild(popupInputName);
popupDOM.appendChild(popupInputPassword);
popupDOM.appendChild(popupInputSubmit); */

var popupDOM = document.createElement('div')
	popupDOM.className = 'popupVeil';

var popupContent = document.createElement('div');
	popupContent.className = 'popup';

var popupExit = document.createElement('div');
	popupExit.className = 'popupClose';
	
var popupExitContent = document.createElement('span');

var popupForm = document.createElement('form');
	popupForm.method = 'post';
	popupForm.action = 'Home';
	
var popupFormInputUsername = document.createElement('input');
	popupFormInputUsername.type = 'text';
	popupFormInputUsername.name = 'username';
	
var popupFormInputPassword = document.createElement('input');
	popupFormInputPassword.type = 'password';
	popupFormInputPassword.name = 'username';
	
var popupFormInputSubmit = document.createElement('input');
	popupFormInputSubmit.type = 'submit';
	popupFormInputSubmit.value = 'Valider';
	
	
popupForm.appendChild(popupFormInputUsername);
popupForm.appendChild(popupFormInputPassword);
popupForm.appendChild(popupFormInputSubmit);


popupExit.appendChild(popupExitContent);
popupContent.appendChild(popupForm);

popupDOM.appendChild(popupExit);
popupDOM.appendChild(popupForm);

/* 
<div id='veil'>
	<div id='popup'>
		<div class='close'><span></span></div>
		<form method='post' action='Home'>
			<input type='text' name='username'/>
			<input type='password' name='userpass'/>
			<input type='submit' value='Valider'/>
		</form>
	</div>
</div> 
*/