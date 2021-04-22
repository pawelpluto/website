$(document).ready(function() {
	$("#btn-logout").on('click', function() {
		$.ajax(
				{
					url: 'logout.php',
					method: 'POST',
					data: {
					},
					
					success: function (response) {
						pError = document.getElementById("loginError");
						pWelcome = document.getElementById("welcomeMsg");
						login = document.getElementById("inputUsername");
						password = document.getElementById("inputPassword");
						headerLogin = document.getElementById('loginHeader');
						loginForm = document.getElementById('loginForm');
						btnlogout = document.getElementById('btn-logout');
						accMax = document.getElementById('account-maximized');
						accMin = document.getElementById('account-minimized');
						tableCharBody = document.getElementById('table-char-body');
						
						password.value = '';
						login.value = '';
						
						headerLogin.style.display = 'block';
						pWelcome.style.display = 'none';
						pError.innerHTML = '';
						loginForm.style.display = 'block';
						btnlogout.style.display = 'none';
						accMax.style.display = 'none';
						accMin.style.display = 'none';
						tableCharBody.innerHTML = '';
						
						loggedInContent = document.getElementById('loggedin-content');
						loggedInContent.style.display = 'none';	
						
						// document.getElementById('info-maximized').className = document.getElementById('info-maximized').className.replace( /(?:^|\s)mt-md-2(?!\S)/g , '' );
						// document.getElementById('info-maximized').className += ' mt-md-5';
						// document.getElementById('info-minimized').className = document.getElementById('info-minimized').className.replace ( /(?:^|\s)mt-md-2(?!\S)/g , '' );
						// document.getElementById('info-minimized').className += ' mt-md-5';
						
						
					},
				}
			);
							
	});
	
});