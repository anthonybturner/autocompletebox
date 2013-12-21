<!-- This is the main global layout for the site -->
<!doctype html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>jQuery UI Autocomplete - Example</title>
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" />
	</head>
	
	<body>
	
	
		<? include $view ?>

	  	<!-- These scripts are global through out the site-->
	  	 <script src="http://code.jquery.com/jquery.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
		<? if(function_exists('Scripts')) Scripts(); ?>
	</body>
</html>