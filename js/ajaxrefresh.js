$(document).ready(function() {
	// CHARACTER LIST
	
	$.ajax(
	{
		url: '/php/charinfo.php',
		method: 'POST',
		success: function (response) {
			table = document.getElementById('table-char-body');
			table.innerHTML = response;
		},
	});
	
	$.ajax(
	{
		url: '/php/livechat-gamechat.php',
		method: 'POST',
		success: function (response) {
			// alert(response);
			livechat_gamechat = document.getElementById('gamechat-inner');
			livechat_gamechat.innerHTML = response;
		},
	});
	
	$.ajax(
	{
		url: '/php/livechat-tradechat.php',
		method: 'POST',
		success: function (response) {
			// alert(response);
			livechat_tradechat = document.getElementById('tradechat-inner');
			livechat_tradechat.innerHTML = response;
		},
	});
	
	$.ajax(
	{
		url: '/php/livechat-questchat.php',
		method: 'POST',
		success: function (response) {
			var g = response;
			livechat_questchat = document.getElementById('questchat-inner');
			livechat_questchat.innerHTML = response;
		},
	});
});