<?PHP
session_start();

if (!isset($_SESSION['user']))
	return 0;
	
require('../includes/functions.php');
require('../includes/sql.php');

$accId = getAccId($_SESSION['user']);
$playerRows = getPlayerRows($accId);
$i = 1;
$result = "";
foreach ($playerRows as $row)
{
	$result = $result . 
	'									
	<tr class="table-secondary">
	<th scope="row" class="order">'.$i.'</th>
	<td scope="col" class="gender" style="width: 5%">'.getSexFromRow($row).' <a href="">(change)</a></td>
	<td class="level">'.getLevelFromRow($row).'</td>
	<td class="name">'.getNameFromRow($row).' <a href="">(change)</a></td>
	<td class="vocation">'.getVocationFromRow($row).'</td>
	<td class="delete"><a href="">[DELETE]</a></td>
	</tr>';
	$i++;
}

	exit($result);
?>