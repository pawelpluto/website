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
	
	<body>
		<?PHP
			// include_once 'layout/layout.php';
		?>
		
		<div class="container-fluid col-4 offset-md-4 page" id="info-maximized">
			<div class="row">
				<div class="col-1 test">
					TESTTESTTES1212222222
				</div>
			</div>
		</div>
		
		<!-- ---------------------------------LOGIN BOX---------------------------- -->
		<!-- MAXIMIZED  -->
		
		
		
		
		<!-- ACCOUNT TAB -->
		
		<!-- MINIMIZED -->
		<div class="container main-content mt-1 mt-md-5 px-5 col-xl-6 col-md-8 offset-md-3  minimized" id="account-minimized">
			<div class="tab row mb-3 mx-0">
				<i class="material-icons icon icon-folded" onclick="foldeAccount()">
					add
				</i>
				<h1 class="folded block-title mt-3 text-center">Account Details</h1>
			</div>
		</div>
		
		<!-- MAXIMIZED -->
		<div class="container main-content mt-1 mt-md-5 px-5 col-xl-6 col-md-8 offset-md-3 mt-sm-1" id="account-maximized">
			<div class="row mb-3 mx-0">
			<i class="material-icons icon" onclick="foldeAccount()">
				remove
			</i>
				<h1 class="h4 block-title mt-3 mb-2 text-center">Account Details</h1>
				<div>
					<hr class="d-none d-sm-block w-25 mx-auto mt-0">
				</div>
				
				<!-- PREMIUM -->
				<div class="premium row mb-3">
					<div class="mx-md-1 mb-2 mb-md-0 col-md server-info-box my-1">
						<p class="title">PREMIUM</p>
						<div class="row mb-3 mx-0 test">
							
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
				</div>
				
				<!-- GENERAL -->
				<div class="row">
					<div class="mx-md-1 mb-2 mb-md-0 col-md server-info-box my-1">
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
				</div>
				
				<!-- CHARACTERS -->
				<div class="row">
					<div class="mx-md-1 mb-2 mb-md-0 col-md server-info-box my-1">
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
				
			</div>
		</div>
		
		<!-- CREATE ACCOUNT -->
		
		<!--  MINIMIZED -->
		<div class="container main-content mt-1 mt-md-5 px-5 col-xl-6 col-md-8 offset-md-3  minimized" id="newaccount-minimized">
			<div class="tab row mb-3 mx-0">
				<i class="material-icons icon icon-folded" onclick="foldeNewAccount()">
					add
				</i>
				<h1 class="folded block-title mt-3 text-center">New Account</h1>
			</div>
		</div>
		<!--  MAXIMIZED -->
		
		<div class="container main-content mt-1 mt-md-5 px-5 col-xl-6 col-md-8 offset-md-3 mt-sm-1" id="newaccount-maximized">
			<div class="row mb-3 mx-0">
				<i class="material-icons icon" onclick="foldeNewAccount()">
					remove
				</i>
				<h1 class="h4 block-title mt-3 mb-2 text-center">New Account</h1>
				<div>
					<hr class="d-none d-sm-block w-25 mx-auto mt-0">
				</div>
				
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

			<!-- Modal -->
			<div class="modal fade" id="rulesWindow" tabindex="-1" role="dialog" aria-labelledby="rulesWindowTitle" aria-hidden="true">
			  <div class="modal-dialog" role="document">
				<div class="modal-content">
				  <div class="modal-header">
					<h5 class="modal-title text-center" id="rulesWindowTitle">Server Rules</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>
				  <div class="rules modal-body mx-0 p-3">
					<ol>
						<li class="mb-1">
							In augue lorem, sodales vitae pulvinar ut, maximus eu massa. Donec sagittis libero quis semper pellentesque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Maecenas eu turpis fringilla, blandit turpis dictum, molestie dolor. Mauris dui mi, ultrices bibendum urna eu, rhoncus mollis tellus. Fusce ut ex vel urna varius tristique eget in eros.
						</li>
						<li class="mb-1">
							Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed eu sodales dui. Nullam purus enim, lacinia vel fringilla at, laoreet sed ex. Fusce porta justo id tellus consequat ullamcorper.
						</li>
						<li class="mb-1">
							Nulla ac congue felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tempus sem non ornare eleifend. Vivamus erat tellus, pellentesque nec diam ac, volutpat gravida elit. Praesent fermentum, arcu a malesuada convallis, dolor enim interdum ante, a rutrum diam lacus eu lectus.
						</li>
						<li class="mb-1">
							Aenean id elementum justo. Praesent viverra mauris ex, sodales tempus enim condimentum sed. Ut fermentum, leo at ornare efficitur, urna erat rhoncus tellus, eget fermentum lorem sem vel lacus. Ut tempus lacinia est, nec eleifend libero sollicitudin in. Aliquam semper risus eu lorem tempor, eget finibus purus faucibus. Nam eleifend dictum massa.
						</li>
						<li class="mb-1">
							Nullam at est eget lectus auctor pharetra. Fusce quis sapien ultrices, auctor tellus at, egestas arcu. Nullam ornare ipsum ut faucibus cursus. Pellentesque justo arcu, scelerisque in semper in, molestie non enim.
						</li>
						<li class="mb-1">
							In ac lobortis magna. Proin sit amet rutrum ex. Mauris justo ipsum, dictum non massa ut, luctus elementum nulla. Etiam accumsan, magna ornare pretium faucibus, orci sem tristique diam, vel tincidunt quam arcu ac nisl.
						</li>
						<li class="mb-1">
							In cursus nisi id porta ullamcorper. Etiam aliquam tempor metus sit amet fringilla. Sed sagittis urna sed mauris dapibus, ut tempor ex lacinia. Donec urna felis, vestibulum quis tempus vel, finibus non velit.
						</li>
						<li class="mb-1">
							Morbi fringilla tellus lacinia, ultricies ipsum eget, fermentum libero. Donec id diam metus. Curabitur feugiat est non pretium bibendum. Aenean dui nibh, accumsan at vestibulum sit amet, commodo vel est. Aenean sed metus vel mauris pellentesque lacinia eu sit amet lectus.
						</li>
						<li class="mb-1">
							In efficitur tristique ipsum, in convallis augue faucibus ac. Donec in egestas ligula, ac molestie enim. Proin efficitur aliquam molestie. Suspendisse commodo eleifend bibendum. In ullamcorper tellus velit, eget tempus tortor dignissim id. Vivamus ullamcorper est nunc, sit amet rutrum diam feugiat non.
						</li>
						<li class="mb-1">
							Nam maximus sit amet odio eu auctor. Curabitur nisl dolor, accumsan ut mauris a, pulvinar semper elit. Aliquam porta tincidunt faucibus. 
						</li>
						<li class="mb-1">
							Proin dictum neque a condimentum aliquam. Phasellus pharetra leo semper lorem congue, ac vestibulum risus aliquet. Sed a elit pretium, elementum mauris ac, gravida nulla. Etiam finibus ipsum venenatis porta sollicitudin.
						</li>
						<li class="mb-1">
							Sed molestie fringilla accumsan. In nec fringilla ligula, ullamcorper dictum augue. Donec tincidunt felis sit amet quam varius, sed congue sapien tristique. Aliquam blandit ornare arcu in suscipit.
						</li>
						<li class="mb-1">
							Aliquam lacus ex, tempus ut ex a, congue viverra ligula. Nullam nec augue quam. Nullam et tristique neque. Donec vitae convallis eros. Donec fermentum id risus non vulputate. Quisque et dictum ipsum. Donec nec libero eget est pellentesque egestas nec id lectus.
						</li>
						<li class="mb-1">
							Vivamus iaculis eros odio, sit amet mollis libero blandit quis. Suspendisse feugiat leo eget lacus ornare, vitae lacinia lorem tempus. Pellentesque sit amet congue quam. Nulla cursus, turpis pulvinar feugiat ultrices, ante sem ullamcorper ex, id blandit augue leo ut velit.
					</ol>
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				  </div>
				</div>
			  </div>
			</div>
			
		</div>
		
		<!-- SOCIAL BOX  -->
		<div class="container mx-0">
			<div class="row social col-md-2 d-lg-block mt-xl-5 offset-lg-9 ">
				<i class="material-icons social-icon" onclick="foldeSocial()">remove</i>
				<h1 class="h4 block-title mt-3 mb-2 text-center">Social</h1>
				<hr class="d-none d-sm-block w-25 mx-auto mt-0">
			</div>
		</div>
		
		<!-- NEWS TAB -->
		
		<!-- Server Info -->
		<!-- MINIMIZED -->
		<div class="container main-content mt-1 mt-md-5 px-5 col-xl-6 col-md-8 offset-md-3 minimized" id="info-minimized">
			<div class="tab row mb-3 mx-0">
				<i class="material-icons icon icon-folded" onclick="foldeInfo()">
					add
				</i>
				<h1 class="folded block-title mt-3 text-center">Server Info</h1>
			</div>
		</div>
		
		<!-- MAXIMIZED -->
		
		
		<!-- LATEST NEWS -->
		<!-- MINIMIZED -->
		<div class="container main-content mt-1 mt-md-2 px-5 col-xl-6 col-md-8 offset-md-3 minimized" id="news-minimized">
			<div class="tab row mb-3 mx-0">
				<i class="material-icons icon icon-folded" onclick="foldeNews()">
					add
				</i>
				<h1 class="folded block-title mt-3 text-center">Latest News</h1>
			</div>
		</div>
		
		<!-- MAXIMIZED -->
		<div class="container main-content mt-1 mt-md-2 col-xl-6 col-md-8 offset-md-3" id="news-maximized">
			<div class="row latest-news">
				<i class="material-icons icon" onclick="foldeNews()">
					remove
				</i>
				<h1 class="h4 block-title my-3 text-center">Latest News</h1>
				<div>
					<hr class="d-none d-sm-block w-25 mx-auto mt-0">
				</div>
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
		

	
		<!-- BOOSTRAP SCRIPTS -->
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"
		integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
		crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
		<script src="js/bootstrap.min.js"></script>
		<!-- <script src="js/scroll.js"></script> -->
		<script src="js/folde.js"></script>
		<script src="js/ajaxlogin.js" type="text/javascript"></script> <!-- AJAX LOGIN -->
		<script src="js/ajaxlogout.js" type="text/javascript"></script> <!-- AJAX LOGOUT -->
		<script src="js/ajaxnewaccount.js" type="text/javascript"></script> <!-- AJAX NEWACC -->
		<script src="js/ajaxrefresh.js" type="text/javascript"></script> <!-- AJAX REFRESH -->
		<script>
			

		</script>
	
		<?PHP
			makeStyleChangesIfLogged();
		?>
	</body>
	
	
</html>