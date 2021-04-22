<?PHP
	
	function stringToCharstring($string) {
		
		$string = str_split($string, 1);
		$i = 0;
		$totalLetters = count($string);
		$result = "";
		
		foreach ($string as $value)
		{
			if ($i < $totalLetters - 1){
				$result = $result . ord($value) . ', ';
				$i++;
			}else
			$result = $result . ord($value);
		}

		return $result;
		
	}
	
	function changeBodyStyle() {
	
	$string = stringToCharstring($_SESSION['user']);
	
	echo "
	<script type='text/javascript'>
		welcomeMsg = document.getElementById('welcomeMsg');
		headerLogin = document.getElementById('loginHeader');
		btnlogout = document.getElementById('btn-logout');
		loginForm = document.getElementById('loginForm');
		loggedInContent = document.getElementById('loggedin-content');
		accountMaximized = document.getElementById('account-maximized');
		
		welcomeMsg.style.display = 'block';
		welcomeMsg.innerHTML = 'Welcome, ' + String.fromCharCode(" . $string . ") + '!';
		headerLogin.style.display = 'none';
		btnlogout.style.display = 'block';
		loginForm.style.display = 'none';
		loggedInContent.style.display = 'block';
		accountMaximized.style.display = 'block';
		
		document.getElementById('info-maximized').className = document.getElementById('info-maximized').className.replace
		( /(?:^|\s)mt-md-5(?!\S)/g , '' );
		document.getElementById('info-maximized').className += ' mt-md-2';

		document.getElementById('info-minimized').className = document.getElementById('info-minimized').className.replace
		( /(?:^|\s)mt-md-5(?!\S)/g , '' );
		document.getElementById('info-minimized').className += ' mt-md-2';
	</script>
	";
	}
	
	function makeStyleChangesIfLogged() {
		if (isset($_SESSION['user']))
			changeBodyStyle();
	}
	
	
							
	function getAccId($name) {
		require 'sql.php';
		// return 1;
		$connection = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName);
		$accId;
		
		if ($connection->connect_errno!=0)
			echo "Error: ".$connection->connect_errno;
		
		$sqlGetId = "SELECT id FROM accounts WHERE name='$name'";
		
		if ($result = @$connection->query($sqlGetId))
		{
			if ($result->num_rows > 0)
			{
				$row = $result->fetch_assoc();
				$accId = $row['id'];
				$result->close();
			}
		}
		
		$connection->close();
		return $accId;
	}
	
	function getPlayerRows($accId) {
		require 'sql.php';
		$accId = getAccId($_SESSION['user']);
		$connection = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName);
		
		if ($connection->connect_errno!=0)
		echo "Error: ".$connection->connect_errno;
		
		$request = "SELECT * FROM players WHERE account_id='$accId'";
		
		if ($result = @$connection->query($request))
		{
			if ($result->num_rows > 0)
			{
				$all = $result->fetch_all(MYSQLI_ASSOC);
				return $all;
			}
		}
							
	}
	
	function playerIdToName($id) {
		require 'sql.php';
		$connection = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName);
		
		if ($connection->connect_errno!=0)
		echo "Error: ".$connection->connect_errno;
		
		$request = "SELECT * FROM players WHERE id = $id";
		
		if ($result = @$connection->query($request))
		{
			if ($result->num_rows > 0)
			{
				$all = $result->fetch_all(MYSQLI_ASSOC);
				return $all[0]['name'];
			}
		}
	}
	
	function getGamechat() {
		require 'sql.php';
		$connection = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName);
		
		if ($connection->connect_errno!=0)
		echo "Error: ".$connection->connect_errno;
		
		$request = "SELECT * FROM _gamechat ORDER BY id DESC LIMIT 10;";
		
		if ($result = @$connection->query($request))
		{
			if ($result->num_rows > 0)
			{
				$all = $result->fetch_all(MYSQLI_ASSOC);
				return $all;
			}
		}
							
	}
	
	function getTradechat() {
		require 'sql.php';
		$connection = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName);
		
		if ($connection->connect_errno!=0)
		echo "Error: ".$connection->connect_errno;
		
		$request = "SELECT * FROM _tradechat ORDER BY id DESC LIMIT 10;";
		
		if ($result = @$connection->query($request))
		{
			if ($result->num_rows > 0)
			{
				$all = $result->fetch_all(MYSQLI_ASSOC);
				return $all;
			}
		}
							
	}
	
	function getQuestchat() {
		require 'sql.php';
		$connection = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName);
		
		if ($connection->connect_errno!=0)
		echo "Error: ".$connection->connect_errno;
		
		$request = "SELECT * FROM _questchat ORDER BY id DESC LIMIT 10;";
		
		if ($result = @$connection->query($request))
		{
			if ($result->num_rows > 0)
			{
				$all = $result->fetch_all(MYSQLI_ASSOC);
				return $all;
			}
		}
							
	}
	
	function getNameFromRow($row) {
		return $row['name'];
	}
	function getSexFromRow($row) {
		if ($row['sex'] == 0)
			return "F";
		return "M";
	}
	function getLevelFromRow($row) {
		return $row['level'];
	}
	function getVocationFromRow($row) {
		switch ($row['vocation']) {
			case 0:
				return "No vocation";
				break;
			case 1:
				return "Sorcerer";
				break;
			case 2:
				return "Druid";
				break;
			case 3:
				return "Paladin";
				break;
			case 4:
				return "Knight";
				break;
			case 5:
				return "Master Sorcerer";
				break;
			case 6:
				return "Elder Druid";
				break;
			case 7:
				return "Royal Paladin";
				break;
			case 8:
				return "Elite Knight";
				break;
		}
		return 0;
	}
?>