<? 

$json = '[';
$first = true;
while($row = $model->fetch_assoc() ){
	
    if (!$first) { $json .=  ','; } else { $first = false; }
    $json .= '{"value":"'.$row[$column].'"}';
}
$json .= ']';
echo($json);
