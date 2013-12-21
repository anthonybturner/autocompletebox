<?php
include_once '../../inc/_global.php';
@$action = $_REQUEST['action'];
@$format = $_REQUEST['format'];
@$errors = null;


switch ($action) {
	
	case 'list':
		
		$view = 'list.php';
		$title = "Search";
		break;
	
	case 'terms':
		
		$text = $_GET['term'];
		$column = $_GET['column'];
		$model = ZipCodes::GetSpecial($text, $column);
		$view 	= 'search.php';
	break;
	
	case 'search':
		
		$city = $_POST['city'];
		$state = $_POST['state'];
		$result = ZipCodes::GetAddress($city, $state);

		foreach ($result as $key => $value) {
				
			$model[] = ( ZipCodes::GetUser($value['Users_id']));
		}

		$view = 'list.php';
		$title = "Search";
		break;
		
	default:	
	
		$model = ZipCodes::Get();
		$view 	= 'home.php';
		$title	= 'My Website';		
		break;
}

//The layout to show
switch ($format) {
	
	case 'json':
		echo json_encode(array('model'=> $model, 'errors'=> $errors));
		break;
	
	case 'plain':
		include $view;
		break;
	
	default:
		include '../Shared/_PublicLayout.php';		
		break;
}
