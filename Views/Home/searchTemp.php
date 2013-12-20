<? 
include_once '../../inc/_global.php';


$mysqli = new mysqli('localhost', 'turnera1', 's627398', 'turnera1_db');

$text = $mysqli->real_escape_string($_GET['term']);
$column = $mysqli->real_escape_string($_GET['column']);

$query = "SELECT * FROM Addresses WHERE $column LIKE '%$text%'";
$result = $mysqli->query($query);

$json = '[';
$first = true;
while($row = $result->fetch_assoc() ){
	
    if (!$first) { $json .=  ','; } else { $first = false; }
    $json .= '{"value":"'.$row[$column].'"}';
}
$json .= ']';
echo($json);
