

$(document).ready(function() {
	$("#new-account").on('click', function() {
		
		newAccMax = document.getElementById('newaccount-maximized');
		newAccMin = document.getElementById('newaccount-minimized');
		infoMax = document.getElementById('info-maximized')
		infoMin = document.getElementById('info-minimized')
		
		if (newAccMax.style.display == "block") {
			return true;
		}
		
		if (newAccMin.style.display == "block") {
			newAccMin.style.display = 'none';
			newAccMax.style.display = 'block';
			return true;
		}
		
		
		newAccMax.style.display = 'block';
		
		
		infoMax.className = infoMax.className.replace( /(?:^|\s)mt-md-5(?!\S)/g , '' );
		infoMax.className += ' mt-md-2';
		
		if (newAccMin.style.display == "block") {
			infoMin.className += ' mt-md-2';
		}else{
			infoMin.className = infoMin.className.replace( /(?:^|\s)mt-md-5(?!\S)/g , '' );
			infoMin.className += ' mt-md-2';
		}
		
		
		
							
							// document.getElementById('info-maximized').className = document.getElementById('info-maximized').className.replace( /(?:^|\s)mt-md-5(?!\S)/g , '' );
							// document.getElementById('info-maximized').className += ' mt-md-2';
							// document.getElementById('info-minimized').className = document.getElementById('info-minimized').className.replace ( /(?:^|\s)mt-md-5(?!\S)/g , '' );
							// document.getElementById('info-minimized').className += ' mt-md-2';
							
						// }
						// else if (response == 'failed')
							// pError.innerHTML = 'Wrong name or password.';
						// else
							// pError.innerHTML = 'Connection error!';
					// },
					// dataType: 'text'
				// }
			// );
		// }							
	});
	
});