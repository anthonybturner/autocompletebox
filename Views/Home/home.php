<style>
	
	h2{
		
		text-align: center;
	}
	div{
		
		margin-bottom: 20px;
	}
	
	
</style>

<div class="container">
	<div id="table-wrapper" class="col-md-12">
		<header>
			<h2 class="well">jQuery Autocomplete</h2>
		</header>
			<table class="table table-hover table-bordered table-striped">
				<thead>
					<tr>
						<th>City </th>
						<th>State </th> 
						<th>Zip </th>
						<th>County </th>
						<th>Area Code </th>
						<th></th>
					</tr>
				</thead>

				<tbody>
					<div>
						<tr>
							<td><input data-col="City" id="city-tag"> </td>
							<td><input data-col="State" id="state-tag"></td>
							<td><input data-col="Zipcode" id="Zipcode-tag"> </td>
							<td><input data-col="other" id="tags"> </td>
							<td><input data-col="other" id="tags"> </td>
							<td><button data-col="btn" id ="search" class="btn-primary">Search</button></th>	
						</tr>
					
					</div>
				</tbody>
			</table>
			<div class="well" id="details"></div>
		</div>
</div>


<? function Scripts(){ ?>

	<? global $model; ?>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<script type="text/javascript">
				
		//Add autocomplete to each cell
		$('tr td input').each(function(){
				
			var id = "#" + this.id ;
			var column = $(this).data('col');
			
			$(id).autocomplete(
		    {
		        source: "?action=terms&column="+column+"&format=plain",
		        minLength: 1
		    });
		});

		$( "#search" ).on( "click", function(e){
					
			//Add autocomplete to each cell
		
			var info;	
			
			var city = $("#city-tag").val() ;
			var state =  $("#state-tag").val();
			var zip = $("#Zipcode-tag").val();
			
			$("#details").load("?action=search", {city: city, state: state, format: "plain"});
			
		});
	
	</script>

<? } ?>