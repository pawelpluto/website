<?PHP
session_start();

// if (!isset($_SESSION['user']))
	// return 0;
	
require('../includes/functions.php');
require('../includes/sql.php');

$gamechatRow = getTradechat();

$i = 1;
$result = "";

if ($gamechatRow == NULL)
	exit();

foreach ($gamechatRow as $row)
{
	$result = $result .
	'
	<tr class="tr-chat">
		<td class="td-chat tr-chat-date" style="width: 20%">'.htmlspecialchars(date('d-m-y H:m:s', $row['write_date'])).'</td>
		<td class="td-chat td-chat-name" style="width: 20%">'.htmlspecialchars(playerIdToName($row['player_id'])).': </td>
		<td class="td-chat td-chat-text" style="width: 60%">"'.htmlspecialchars($row['text']).'"</td>
	</tr>';

	// $i++;
}

	exit($result);
	// exit('xd');
?>