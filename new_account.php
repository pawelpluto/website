<html lang="en">
	<head>
		<title>OTS</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-Ua-Compatible" content="IE=edge">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
		
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	  
		<link rel="icon" href="icon.gif" type="image/gif" sizes="16x16">
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
			include_once 'layout/layout.php';
		?>
				
		<div class="container main-content mt-1 mt-md-5 px-5 col-xl-6 col-md-8 offset-md-3 mt-sm-1" id="newaccount-maximized">
			<div class="row mb-3 mx-0">
				<i class="material-icons icon">
					<a href="./">home</a>
				</i>
				<h1 class="h4 block-title mt-3 mb-2 text-center">New Account</h1>
				<div>
					<hr class="d-none d-sm-block w-25 mx-auto mt-0">
				</div>
				
				<form class="mb-2" action="zaloguj.php" method="post">
					<div class="form-group">
						<label for="inputUsername">Account name:</label>
						<input type="text" class="form-control" id="inputUsername" aria-describedby="emailHelp" placeholder="Your account name:" value="" name="login">
					</div>
					<div class="form-group">
						<label for="inputPassword">Password:</label>
						<input type="password" class="form-control" id="inputPassword" placeholder="Password:" value="" name="password">
					</div>
					<div class="d-flex d-md-block d-xl-flex justify-content-around text-md-center">
						<button class="btn btn-success btn-outline-dark mt-3 float-left p-2 p-md-2" id="btn-submit"><b>Make Account</b></button>
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
		


	<!-- BOOSTRAP SCRIPTS -->
		 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scroll.js"></script>
		<script src="js/folde.js"></script>
	</body>
</html>