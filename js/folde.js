// window.onscroll = function() {scrollFunction()};

function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

function foldeInfo() {
	var minimized = document.getElementById("info-minimized");
	var maximized = document.getElementById("info-maximized");
	 
	if (maximized.style.display === 'none') {
		minimized.style.display = 'none';
		maximized.style.display = 'block';
	} else {
		maximized.style.display = 'none';
		minimized.style.display = 'block';
		if (document.getElementById('newaccount-maximized').style.display == "block" || document.getElementById('newaccount-minimized').style.display == "block") {
			document.getElementById('info-minimized').className = document.getElementById('info-minimized').className.replace( /(?:^|\s)mt-md-5(?!\S)/g , '' );
			document.getElementById('info-minimized').className += ' mt-md-2';
		}
	}
}

function folde($name) {
	var minimized = document.getElementById($name + "-minimized");
	var maximized = document.getElementById($name + "-maximized");
	
	if (maximized.style.display === 'none') {
		minimized.style.display = 'none';
		maximized.style.display = 'block';
	} else {
		maximized.style.display = 'none';
		minimized.style.display = 'block';
	}
}

function foldeNewAccount() {
	var minimized = document.getElementById("newaccount-minimized");
	var maximized = document.getElementById("newaccount-maximized");
	 
	if (maximized.style.display === 'none') {
		minimized.style.display = 'none';
		maximized.style.display = 'block';
	} else {
		maximized.style.display = 'none';
		minimized.style.display = 'block';
	}
}