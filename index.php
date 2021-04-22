<?PHP
	// include_once 'includes/sql.php';
	include_once 'includes/functions.php';
	include_once 'includes/sql.php';
	session_start();
?>

<html lang="en">
	<head>
		<title>OTS</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-Ua-Compatible" content="IE=edge">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
		
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	  
		<!-- <link rel="icon" href="icon.gif" type="image/gif" sizes="16x16"> -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/css.css">
		
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<!-- FONTS -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Vollkorn:ital,wght@0,400;0,900;1,400;1,900&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">	
	</head>
	
	<body style>
		<div class="container mt-5 p-0">
			<div class="row col-12 m-auto">
				<!-- LEFT CONTAINERS  -->
				<div class="col-12 col-left col-md-3 px-3 mb-md-3">
					<!-- LOGIN -->	
					<!-- MINIMIZED -->
					<div class="col col-info mb-3 border rounded border-primary p-2 minimized" id="login-minimized">
							<i class="material-icons icon icon-folded" onclick="folde('login')">
								add
							</i>
							<h1 class="folded block-title mt-1 text-center">Login</h1>
					</div>
					
					<!-- MAXIMIZED -->
					<div class="col col-box p-2 mb-3" id="login-maximized">
						<i class="material-icons icon" onclick="folde('login')">remove</i>
						<h1 class="h4 block-title mt-1 mb-2 text-center" id="loginHeader">Login</h1>
						<p class="h4 block-title mt-3 mb-2 text-center" id="welcomeMsg"></p>
						<hr class="d-none d-sm-block w-25 mx-auto mt-0">
						
						<div class="container mb-3" id="loggedin-content">
							<div class="row">
								<p class="mt-0 pt-0 p-premium">Premium days: <span class="">0</span></p>
								
								<ul class="accountList mx-3">
									<li>
										<a>New character</a>
									</li>
									<li>
										<a>Change password</a>
									</li>
								</ul>
							</div>
						</div>
						
						<input type="button" id="btn-logout" value="Logout" class="">
						
						<div class="mx-md-1 mb-2 mb-md-0 col-md my-1 p-2" id="loginForm">
							<form class="mb-2" action="index.php" method="post">
								  <div class="form-group">
									<label for="inputUsername">Account name:</label>
									<input type="text" class="form-control" id="inputUsername" aria-describedby="emailHelp" placeholder="Your account name:" value="" name="login">
								  </div>
								  <div class="form-group">
									<label for="inputPassword">Password:</label>
									<input type="password" class="form-control" id="inputPassword" placeholder="Password:" value="" name="password">
									</div>
									<p class="p-1 m-1 pb-0 mb-0" id="loginError"></p>
									<div class="d-flex d-md-block d-xl-flex justify-content-around text-md-center">
										
									<input type="button" id="btn-submit" value="LOGIN" class="btn btn-success btn-outline-dark mt-2 float-left p-2 p-md-2">
									</input>
									
										
									<button type="button" class="btn btn-warning btn-outline-dark mt-2 p-2 p-md-2" id="btn-forgot"><b>Forgot Passowrd?</b></button>
									</div>
							</form>
						
							<div class="row m-auto col-6 mb-2">
								<input type="button" id="new-account" value="Create account!" class="btn btn-secondary btn-outline-dark p-md-2">
								</input>
							</div>
						</div>
						
					</div>
					
					
					<!-- ROOKGAARD  -->
					<!-- MINIMIZED -->
					<div class="col col-info mb-3 border rounded border-primary p-2 minimized" id="rookgaard-minimized">
							<i class="material-icons icon icon-folded" onclick="folde('rookgaard')">
								add
							</i>
							<h1 class="folded block-title mt-1 text-center">Rookgaard</h1>
					</div>
					
					<!-- MAXIMIZED -->
					<div class="col col-box p-2 mb-3" id="rookgaard-maximized">
						<i class="material-icons icon" onclick="folde('rookgaard')">remove</i>
						<h1 class="h4 block-title mt-1 mb-2 text-center">Rookgaard</h1>
						<hr class="d-none d-sm-block w-50 mx-auto mt-0">
							<div class="p-2">
								<div class="col col-12 my-0">
									<h1 class="h5 block-title mt-2 mb-2 text-center">POWERGAMERS</h1>
									<hr class="d-none d-sm-block w-50 mx-auto mt-0">
								</div>
								
								<div class="col col-12 my-3">
									<h1 class="h5 block-title mt-2 mb-2 text-center">BEST PLAYERS</h1>
									<hr class="d-none d-sm-block w-50 mx-auto mt-0">
								</div>
							</div>
					</div>
				</div>
				
				
				
				
				
				<!-- MID CONTAINERS  -->
				
				<div class="col-12 col-middle col-md-6 px-3 mb-0 mb-md-3 p-md-0 ">
					<!-- LIVE CHAT -->
					
					<!-- MINIMIZED -->
					<div class="col col-info mb-3 border rounded border-primary p-2 minimized" id="livechat-minimized">
							<i class="material-icons icon icon-folded" onclick="folde('livechat')">
								add
							</i>
							<h1 class="folded block-title mt-1 text-center">Live Chat</h1>
					</div>
					
					<!-- MAXIMIZED -->
					<div class="col col-livechat col-md-12 p-2 mb-3 border rounded border-info" id="livechat-maximized">
						<i class="material-icons icon" onclick="folde('livechat')">remove</i>
						<h1 class="h4 block-title my-1 text-center">Live chat</h1>
						<hr class="d-none d-sm-block w-25 mx-auto mt-0">
					
						<div class="col col-10 live-chat offset-1 mb-3 ">
							<ul class="nav nav-tabs ">
								<li class="nav-link border border-primary active" id="chat-home"><a class="" data-toggle="tab" href="#home-inner">Game chat</a></li>
								<li class="nav-link border border-secondary" id="chat-trade"><a data-toggle="tab" href="#menu1">Trade</a></li>
								<li class="nav-link border border-secondary" id="chat-quest"><a data-toggle="tab" href="#menu2">Quests</a></li>
							</ul>
						
							<div class="tab-content p-2">
								<div id="home-inner" class="tab-pane fade show active">
									<table class="table table-sm table-gamechat col-5 mx-0 p-0 my-0">
									<tbody id="gamechat-inner">
										
									</tbody>
									</table>
						
									
									<?PHP
									
									?>

								</div>
							
								<div id="menu1" class="tab-pane fade">
									<table class="table table-sm table-gamechat col-5 mx-0 p-0 my-0">
									<tbody id="tradechat-inner">
										
									</tbody>
									</table>
								</div>
							
								<div id="menu2" class="tab-pane fade">
									<table class="table table-sm table-questchat col-5 mx-0 p-0 my-0">
									<tbody id="questchat-inner">
										
									</tbody>
									</table>
								</div>
							</div>
						
						</div>
					</div>
					<!-- NEW ACCOUNT TAB -->
					<!-- MINIMIZED -->
					<div class="col col-info mb-3 border rounded border-primary p-2 minimized" id="newaccount-minimized">
							<i class="material-icons icon icon-folded" onclick="folde('newaccount')">
								add
							</i>
							<h1 class="folded block-title mt-1 text-center">New Account</h1>
					</div>
					<!-- MAXIMIZED -->
					<div class="col col-newaccount col-md-12 p-2 mb-3 border rounded border-info" id="newaccount-maximized">
						
						<i class="material-icons icon" onclick="foldeNewAccount()">
							remove
						</i>
						<h1 class="h4 block-title mt-1 mb-2 text-center">New Account</h1>
						<div>
							<hr class="d-none d-sm-block w-25 mx-auto mt-0">
						</div>
						
						<div class="row m-3">
						<form class="mb-2" action="zaloguj.php" method="post">
							<div class="form-group">
								<label for="inputUsername">Account name:</label>
								<input type="text" class="form-control" id="inputUsernameNew" aria-describedby="emailHelp" placeholder="Your account name:" value="" name="login">
							</div>
							<div class="form-group">
								<label for="inputPassword">Password:</label>
								<input type="password" class="form-control" id="inputPasswordNew" placeholder="Password:" value="" name="password">
							</div>
							<div class="d-flex d-md-block d-xl-flex justify-content-around text-md-center">
								<button class="btn btn-success btn-outline-dark mt-3 float-left p-2 p-md-2" id=""><b>Make Account</b></button>
							</div>
						</form>
								
						<div class="col-1row">
							By creating new account, you agree to the <a href="#" data-toggle="modal" data-target="#rulesWindow"><b>server rules</b></a>. Not following them may result in temporary/permanent account or character suspension.
						</div>
						</div>
					</div>
					
					
					<!-- ACCOUNT -->
					
					<!-- MINIMIZED -->
					<div class="col col-info mb-3 border rounded border-primary p-2 minimized" id="account-minimized">
							<i class="material-icons icon icon-folded" onclick="folde('account')">
								add
							</i>
							<h1 class="folded block-title mt-1 text-center">Account Details</h1>
					</div>
					
					<!-- MAXIMIZED -->
					<div class="col col-md-12 mb-3 col-account border rounded border-primary p-2" id="account-maximized">
						<i class="material-icons icon" onclick="folde('account')">remove</i>
						<h1 class="h4 block-title mt-3 mb-2 text-center">Account Details</h1>
						<hr class="d-none d-sm-block w-25 mx-auto mt-0">
				
					<!-- PREMIUM -->
					<div class="col mb-2 mb-md-3 server-info-box my-1 col-md-11 m-auto p-2">
						<p class="title">PREMIUM</p>
						<div class="row mb-3 mx-0">
							
							<div class="col-md-4 my-1 text-center">
								<div class="test2 my-3">
									<figure class="m-0 py-2">
									<img class="m-0 p-0" src="img/coins.png" width=85 height=85></img>
									<figcaption>Buy PP</figcaption>
									</figure>
								</div>
							</div>
							
							<div class="col-md-4 my-1 text-center">
								<p class="my-3 test2 justify-content-center align-items-center">Premium Points: 0</p>
								<p class="my-3 test2 justify-content-center align-items-center">VIP hours: 0</p>
								<p class="my-3 test2 justify-content-center align-items-center">SHOP OFFER</p>
							</div>
							
							<div class="col-md-4 my-1 text-center">
								<div class="test2 my-3">
									<figure class="m-0 py-2">
									<img class="full" src="img/vip-diamond.png" width=85 height=85></img>
									<figcaption>Get VIP</figcaption>
									</figure>
								</div>
							</div>
							
							
							
						</div>
					</div>
				
				
				<!-- GENERAL -->
					<div class="col mb-2 mb-md-3 server-info-box my-1 col-md-11 m-auto p-2">
						<p class="title">GENERAL</p>
						
						<table class="table table-striped table-dark">
						  <tbody>
							<tr>
							  <th scope="row">Email:</th>
							  <td>eqwqwe@wp.pl</td>
							</tr>
							<tr>
							  <th scope="row">Created:</th>
							  <td>12-12-2013</td>

							</tr>
							<tr>
							  <th scope="row">Last Login:</th>
							  <td>13-14-2014</td>
							</tr>
							<tr>
							  <th scope="row">Vip:</th>
							  <td class="bg-success">TRUE</td>
							</tr>
						  </tbody>
						</table>
					</div>
				
				<!-- CHARACTERS -->
					<div class="col mb-2 mb-md-3 server-info-box my-1 col-md-11 m-auto p-2">
						<p class="title">CHARACTERS</p>
						
						
						
						<div class="row mb-3 mx-auto col-12">
							

						
							<table class="table table-sm table-char col-5 mx-0 p-0 my-0">
							  <thead class="table-dark">
								<tr>
								  <th scope="col" class="order" style="width: 5%">#</th>
								  <th scope="col" class="gender" style="width: 5%">Sex</th>
								  <th scope="col" class="level" style="width: 10%">Level</th>
								  <th scope="col" class="name" style="width: 42.5%">Name</th>
								   
								   <th scope="col" class="vocation" style="width: 42.5%">Vocation</th>
								</tr>
							  </thead>
							  <tbody id="table-char-body">
							  </tbody>
							</table>
							
						</div>
						<div class="row mb-2" class="col-12">
							<input type="button" id="" value="Create character" class="col-4 offset-1">
							<input type="button" id="" value="Delete character" class="col-4 offset-2">
						</div>
					</div>
				
					</div>	
					
					
					<!-- INFO -->
					<!-- MINIMIZED -->
					<div class="col col-info mb-3 border rounded border-primary p-2 minimized" id="info-minimized">
							<i class="material-icons icon icon-folded" onclick="foldeInfo()">
								add
							</i>
							<h1 class="folded block-title mt-1 text-center">Server Info</h1>
					</div>
					
					<div class="col col-md-12 col-info mb-3 border rounded border-primary p-2" id="info-maximized">
						<i class="material-icons icon" onclick="foldeInfo()">
							remove
						</i>
						
						<h1 class="h4 block-title mt-1 mb-2 text-center">Server Info</h1>
						<hr class="d-none d-sm-block w-25 mx-auto mt-0">
						
						<div class="row col-10 offset-1 mb-3">
							<div class="mx-3 mb-2 mb-md-0 col-md server-info-box my-1">
								<p class="title">SMART STAGES</p>
								
								<p class="description">Doswiadczenie rozłożone tak, by osiąganie każdego kolejnego poziomu było przyjemne.</p>
							</div>
							
							<div class="mx-1 mb-2 mb-md-0 col-md server-info-box my-1">
								<p class="title">TIBIA 8.6</p>
								<p class="description">Do uruchomienia gry wymagany klient serwerowy - klasyczny 8.6 z dodatkową grafiką.</p>
							</div>
							
							<div class="mx-3 mb-2 mb-md-0 col-md server-info-box my-1">
								<p class="title">PURE FUN</p>
								<p class="description">Baw się Tibią. Stwórz postać pvp, pvp-hardcore, lub no-pvp. Wybór należy do ciebie.</p>
							</div>
						</div>
					</div>
					
					<!-- LATEST NEWS -->
					<!-- MINIMIZED -->
					<div class="col col-info mb-3 border rounded border-primary p-2 minimized" id="news-minimized">
							<i class="material-icons icon icon-folded" onclick="folde('news')">
								add
							</i>
							<h1 class="folded block-title mt-1 text-center">Latest News</h1>
					</div>
					
					<div class="col col-main col-md-12 border rounded border-primary p-2 mb-0" id="news-maximized">
						<i class="material-icons icon" onclick="folde('news')">remove</i>
						<h1 class="h4 block-title my-1 text-center">Latest News</h1>
						<hr class="d-none d-sm-block w-25 mx-auto mt-0">
						
						<div class="col-md-12">
							<div class="date d-block text-center mx-3">
								4.12.2021 - 19:00
							</div>
							<blockquote class="blockquote block-news mx-3">
								<header class="news-title">
									<p class="mb-0 mx-3 mt-1">Witamy</p>
								</header>
								
								<p class="mx-5 mb-1 news-text">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec semper finibus felis in blandit. Sed ut nisl a turpis aliquam convallis. In bibendum quam in sem commodo ultricies. Duis imperdiet erat ac pulvinar egestas. Praesent at lorem et nulla fringilla dictum. Morbi vulputate blandit eros at iaculis. Donec elementum, orci sed pellentesque lobortis, elit erat tincidunt leo, vitae suscipit augue sem nec quam. Integer pulvinar ullamcorper est in rutrum. Nulla mattis dictum hendrerit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam neque eros, aliquam quis lorem non, tincidunt vehicula odio. Pellentesque placerat neque nec auctor rhoncus. Nullam nec sapien quis ante efficitur euismod sit amet at augue.
								</p>
							</blockquote>
							
							<div class="date d-block text-center mx-3">
								4.12.2021 - 18:00
							</div>
							<blockquote class="blockquote block-news mx-3">
								<p class="mb-0 mx-3 mt-1">Początek prac!</p>
								
								<p class="mx-5 mb-1 news-text">
									Prace nad budową strony zostały rozpoczęte!
								</p>
							</blockquote>	
						</div>
						
						<footer class="footer my-3 text-center">Copyright @ 2021 funots.com. All rights reserved</footer>
					</div>
					
					
					
					
					
					
					
				</div>
				
				<!-- RIGHT CONTAINERS  -->
				<div class="col-12 col-right col-md-3 px-3 mb-3">
					<!-- SOCIAL BOX  -->
					
					<!-- MINIMIZED -->
					<div class="col col-info mb-3 border rounded border-primary p-2 minimized" id="social-minimized">
							<i class="material-icons icon icon-folded" onclick="folde('social')">
								add
							</i>
							<h1 class="folded block-title mt-1 text-center">Social</h1>
					</div>
					<div class="col-12 col-box p-2 mb-3" id="social-maximized">
						<i class="material-icons icon" onclick="folde('social')">remove</i>
						<h1 class="h4 block-title mt-1 mb-2 text-center">Social</h1>
						<hr class="d-none d-sm-block w-25 mx-auto mt-0">
					</div>
					
					<!-- MINIMIZED -->
					<div class="col col-info mb-3 border rounded border-primary p-2 minimized" id="mainland-minimized">
							<i class="material-icons icon icon-folded" onclick="folde('mainland')">
								add
							</i>
							<h1 class="folded block-title mt-1 text-center">Mainland</h1>
					</div>
					<div class="col-12 col-box p-2" id="mainland-maximized">
						<i class="material-icons icon" onclick="folde('mainland')">remove</i>
						<h1 class="h4 block-title mt-1 mb-2 text-center">Mainland</h1>
						<hr class="d-none d-sm-block w-50 mx-auto mt-0">
					</div>
				</div>
			
			
			
			</div>
		</div>

	
		<!-- BOOSTRAP SCRIPTS -->
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"
		integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
		crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
		<script src="js/bootstrap.min.js"></script>
		
		<script>
			
			$(function(){
				$('body').on('click', '#chat-trade', function(){
					$('#chat-home').removeClass('active');
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
		</script>
		<script src="js/folde.js"></script>
		<script src="js/ajaxlogin.js" type="text/javascript"></script> <!-- AJAX LOGIN -->
		<script src="js/ajaxlogout.js" type="text/javascript"></script> <!-- AJAX LOGOUT -->
		<script src="js/ajaxnewaccount.js" type="text/javascript"></script> <!-- AJAX NEWACC -->
		<script src="js/ajaxrefresh.js" type="text/javascript"></script> <!-- AJAX REFRESH -->
		<?PHP
			makeStyleChangesIfLogged();
		?>
	</body>
	
	
</html>
