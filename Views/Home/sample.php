<link rel="stylesheet" href="/resources/demos/style.css">
<? 
	global $isShowing; 
	$isShowing = false;
?>
	
<style>
	
	div{
		
		margin-bottom: 20px;
	}
		
</style>

<div class="container">

<div id="table-wrapper" class="col-md-12">
		<table class="table table-hover table-bordered table-striped">
			<thead>
				<tr>
					<th>Zip   </th>
					<th>City</th>
					<th>County</th>
					<th>State</th> 
					<th>Area Code</th>
					<th>Fips</th> 
					<th>Time zone</th> 
					<th>Dst</th> 
 					<th>Lat</th> 
					<th>lon</th> 

				</tr>
			</thead>
			<tbody>
				
				
			</tbody>
		</table>
	</div>
</div>


<div id="details">
	
</div>

<div>
	<button class="btn-primary" id="button" onclick="populateDetails()">Get Values</button>
	<button class="btn-primary" id="button-clear" onclick="clearDetails()">Clear Values</button>

</div>


<div class="ui-widget">
		<label for="tags">Tags: </label>
		<input id="tags">
</div>
	

<script id="row-template" type="text/x-handlebars-template">
                <td>{{zip}}</td>
                <td>{{city}}</td>
                <td>{{county}}</td>
                 <td>{{state}}</td>
                <td>{{areacode}}</td>
                <td>{{fips}}</td>
                 <td>{{timezone}}</td>
                <td>{{dst}}</td>
                <td>{{lat}}</td>
				<td>{{lon}}</td>   
</script>

<script id="tbody-template" type="text/x-handlebars-template">
        {{#each .}}
                <tr>
                        {{> row-template}}
                </tr>
        {{/each}}
</script>


<script>

	function clearDetails(){

		document.getElementById('details').innerHTML = '' ;
				//$("#details").html('');					
	}
	
	function populateDetails(){
		
		var source = $( "#tags" ).autocomplete( "option", "source" );
		
		var values = "";
		for (var i=0; i < source.length; i++) {
			
				values += source[i] + " | " ;
		}
		
		document.getElementById('details').innerHTML = values ;
		//$("#details").html(values);

	}
	
</script>

<? Scripts(); ?>
 
<? function Scripts(){ ?>

	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<script type="text/javascript">
	
	
	// var templateRow = Handlebars.compile($("#row-template").html());
     // Handlebars.registerPartial("row-template", templateRow);                                
     //var tableTemplate = Handlebars.compile($("#tbody-template").html());
     
      // $(".table tbody").html(tableTemplate())        
     // $(".table").dataTable();
     
     
     /*$( "#autocomplete" ).autocomplete({
		source: function( request, response ) {
					var matcher = new RegExp( "^" + $.ui.autocomplete.escapeRegex( request.term ), "i" );
					response( $.grep( tags, function( item ){
						return matcher.test( item );
				}) );
			}
		});*/
	
		$(function() {
			var availableTags = [
			"ActionScript",
			"AppleScript",
			"Asp",
			"BASIC",
			"C",
			"C++",
			"Clojure",
			"COBOL",
			"ColdFusion",
			"Erlang",
			"Fortran",
			"Groovy",
			"Haskell",
			"Java",
			"JavaScript",
			"Lisp",
			"Perl",
			"PHP",
			"Python",
			"Ruby",
			"Scala",
			"Scheme"
			];
		$( "#tags" ).autocomplete({ source: "cs.newpaltz.edu" });
		});
	</script>

<? } ?>