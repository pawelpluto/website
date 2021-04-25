<?PHP
session_start();

// if (!isset($_SESSION['user']))
	// return 0;
	
require('../includes/functions.php');
require('../includes/sql.php');

$gamechatRow = getGamechat();

$i = 1;
$result = "";

if ($gamechatRow == NULL)
	exit();

foreach ($gamechatRow as $row)
{
	$result = $result .
	'
	<tr class="tr-chat">
		<td class="td-chat tr-chat-date" style="width: 100%">'.htmlspecialchars(date('d-m-y H:m:s', $row['write_date'])).' '.htmlspecialchars(playerIdToName($row['player_id'])).': '.htmlspecialchars($row['text']).'</td>
	</tr>';

	// $i++;
}

	exit($result);
	// exit('xd');
?>