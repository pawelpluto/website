$(document).ready(function() {
	$("#btn-submit").on('click', function() {
		var acc = $("#inputUsername").val();
		var password = $("#inputPassword").val();
		pError = document.getElementById("loginError");
		pWelcome = document.getElementById("welcomeMsg");

		if (acc == "" || password == "") 
			pError.innerHTML = "Both fields cannot be empty.";
		else {
			$.ajax(
				{
					url: 'login.php',
					method: 'POST',
					data: {
						login: 1,
						accountNamePHP: acc,
						accountPasswordPHP: password,
					},
					success: function (response) {
						if (response != 'failed' && response != '')
						{
							headerLogin = document.getElementById('loginHeader');
							loginForm = document.getElementById('loginForm');
							btnlogout = document.getElementById('btn-logout');
							loggedInContent = document.getElementById('loggedin-content');
							accountMaximized = document.getElementById('account-maximized');

							headerLogin.style.display = 'none';
							pWelcome.style.display = 'block';
							pWelcome.innerHTML = 'Welcome, ' + response + '!';
							pError.innerHTML = '';
							loginForm.style.display = 'none';
							btnlogout.style.display = 'block';	
							loggedInContent.style.display = 'block';
							accountMaximized.style.display = 'block';
							
							// document.getElementById('info-maximized').className = document.getElementById('info-maximized').className.replace( /(?:^|\s)mt-md-5(?!\S)/g , '' );
							// document.getElementById('info-maximized').className += ' mt-md-2';
							// document.getElementById('info-minimized').className = document.getElementById('info-minimized').className.replace ( /(?:^|\s)mt-md-5(?!\S)/g , '' );
							// document.getElementById('info-minimized').className += ' mt-md-2';
							
							newAccMax = document.getElementById('newaccount-maximized');
							newAccMin = document.getElementById('newaccount-minimized');
							
							if (newAccMin.style.display == "block") {
								newAccMin.style.display = 'none';
							}
							
							if (newAccMax.style.display == "block") {
								newAccMax.style.display = 'none';
							}
						}
						else if (response == 'failed')
							pError.innerHTML = 'Wrong name or password.';
						else
							pError.innerHTML = 'Connection error!';
					},
					dataType: 'text'
				}
			);
			
			$.ajax(
			{
				url: '/php/charinfo.php',
				method: 'POST',
				success: function (response) {
					table = document.getElementById('table-char-body');
					table.innerHTML = response;
				},
			}
			);
		}							
	});
	
});