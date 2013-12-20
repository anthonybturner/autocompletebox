<?php
include_once '../../inc/_global.php';
@$action = $_REQUEST['action'];
@$format = $_REQUEST['format'];
@$errors = null;


switch ($action) {
	
	case 'terms':
		
		$text = $_GET['term'];
		$column = $_GET['column'];
		$model = ZipCodes::GetSpecial($text, $column);
		$view 	= 'search.php';

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
