$(function(){
	$('body').on('click', '#chat-trade', function(){
		$("#chat-home").css("background", "url('../img/chat/gamechat.png')");
		$("#chat-quest").css("background", "url('../img/chat/quests.png')");
		$("#chat-trade").css("background", "url('../img/chat/trade-active.png')");
		
		$('#chat-home').removeClass('active');
		// alert('test');
		// div.style.marginTop = ".25in";
		$('#chat-quest').removeClass('active');
		
		$('#chat-home').removeClass('border-primary');
		$('#chat-quest').removeClass('border-primary');
		
		$('#chat-trade').removeClass('border-secondary');
		
		$('#chat-home').addClass('border-secondary');
		$('#chat-quest').addClass('border-secondary');
		
		$(this).closest('#chat-trade').addClass('active');
		$(this).closest('#chat-trade').addClass('border-primary');
	
		
	});
	
	$('body').on('click', '#chat-home', function(){
		$("#chat-trade").css("background", "url('../img/chat/trade.png')");
		$("#chat-quest").css("background", "url('../img/chat/quests.png')");
		$("#chat-home").css("background", "url('../img/chat/gamechat-active.png')");
		
		$('#chat-trade').removeClass('active');
		$('#chat-quest').removeClass('active');
		
		$('#chat-trade').removeClass('border-primary');
		$('#chat-quest').removeClass('border-primary');
		
		$('#chat-home').removeClass('border-secondary');
		
		$('#chat-trade').addClass('border-secondary');
		$('#chat-quest').addClass('border-secondary');
		
		$(this).closest('#chat-home').addClass('active');
		$(this).closest('#chat-home').addClass('border-primary');
	});
	
	$('body').on('click', '#chat-quest', function(){
		$("#chat-trade").css("background", "url('../img/chat/trade.png')");
		$("#chat-home").css("background", "url('../img/chat/gamechat.png')");
		$("#chat-quest").css("background", "url('../img/chat/quests-active.png')");
		
		$('#chat-trade').removeClass('active');
		$('#chat-home').removeClass('active');
		
		$('#chat-trade').removeClass('border-primary');
		$('#chat-home').removeClass('border-primary');
		
		$('#chat-quest').removeClass('border-secondary');
		
		$('#chat-trade').addClass('border-secondary');
		$('#chat-home').addClass('border-secondary');
		
		$(this).closest('#chat-quest').addClass('active');
		$(this).closest('#chat-quest').addClass('border-primary');
	});
});