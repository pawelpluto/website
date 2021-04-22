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
	
		<!-- LEFT CONTAINER  -->
		<!-- LOGIN -->
		<div class="container container-left mt-5 col-12 p-0 test">
			<div class="row col-md-3 gx-0 gy-2" >
				<div class="col col-aside col-12 col-md-12 p-2">
					<i class="material-icons icon" onclick="foldeInfo()">remove</i>
					<h1 class="h4 block-title mt-2 mb-2 text-center">Login</h1>
					<hr class="d-none d-sm-block w-25 mx-auto mt-0">
				</div>
				
				<div class="col col-aside col-12 col-md-12 p-2">
					<i class="material-icons icon" onclick="foldeInfo()">remove</i>
					<h1 class="h4 block-title mt-2 mb-2 text-center">Rookgaard</h1>
					<hr class="d-none d-sm-block w-50 mx-auto mt-0">
					
					<div class="p-2">
						<div class="box col col-12 my-0">
							<h1 class="h5 block-title mt-2 mb-2 text-center">POWERGAMERS</h1>
							<hr class="d-none d-sm-block w-50 mx-auto mt-0">
						</div>
						
						<div class="box col col-12 my-3">
							<h1 class="h5 block-title mt-2 mb-2 text-center">BEST PLAYERS</h1>
							<hr class="d-none d-sm-block w-50 mx-auto mt-0">
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- RIGHT CONTAINER  -->
		<!-- SOCIAL BOX  -->
		<div class="container container-right mt-2 mt-md-5 col-12 p-0">
			<div class="row col-md-3 gx-0 offset-md-9 gy-2">
				<div class="col col-aside col-12 col-md-12 p-2">
					<i class="material-icons icon" onclick="foldeSocial()">remove</i>
					<h1 class="h4 block-title mt-2 mb-2 text-center">Social</h1>
					<hr class="d-none d-sm-block w-25 mx-auto mt-0">
				</div>
				
				<div class="col col-aside col-12 col-md-12 p-2">
					<i class="material-icons icon" onclick="foldeInfo()">remove</i>
					<h1 class="h4 block-title mt-2 mb-2 text-center">Best - Mainland</h1>
					<hr class="d-none d-sm-block w-75 mx-auto mt-0">
				</div>
			</div>
		</div>
	
		<!-- MIDDLE CONTAINER  -->
		<!-- LATEST NEWS -->
		<div class="container container-middle mt-2 mb-5 mt-md-5 px-0 px-md-3">
			<div class="row row-mid col-md-12 gx-0 gy-2">
			
				<div class="col-mid col-md-6 offset-md-3 p-2">
					<i class="material-icons icon" onclick="foldeInfo()">remove</i>
					<h1 class="h4 block-title my-2 text-center">Live chat</h1>
					<hr class="d-none d-sm-block w-25 mx-auto mt-0">
				</div>
				
				<div class="col-mid col-main col-md-6 offset-md-3 p-2">
					<i class="material-icons icon" onclick="foldeInfo()">remove</i>
					<h1 class="h4 block-title my-2 text-center">Latest News</h1>
					<hr class="d-none d-sm-block w-25 mx-auto mt-0">
				</div>

			</div>
		</div>
		
		
		<!-- BOOSTRAP SCRIPTS -->
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"
		integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
		crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
		<script src="js/bootstrap.min.js"></script>

	</body>
	
	
</html>