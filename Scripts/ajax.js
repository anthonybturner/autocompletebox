	
	
	var myRequest;
		
	if( window.XMLHttpRequest){
			
		myRequest = new XMLHttpRequest();
			
	}else if( window.ActiveXObject){
			
		myRequest = new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	
	myRequest.onreadystatechange = function(){
		
		if(myRequest.readyState ==4){
			
			console.log(myRequest.responseText);	
		}
	};
	
	myRequest.open('GET', 'knockoutexamples.php', true);
	myRequest.send(null);	
	 
