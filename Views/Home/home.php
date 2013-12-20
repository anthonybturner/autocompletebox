<link rel="stylesheet" href="/resources/demos/style.css">
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
					<th>City <input id="city-tag"></th>
					<th>State <input id="state-tag"></th> 
					<th>Zip <input id="Zipcode-tag"></th>
					<th>County <input id="tags"></th>
					<th>Area Code <input id="tags"></th>

				</tr>
			</thead>
			<tbody>
				
				
			</tbody>
		</table>
	</div>
</div>

<div class="well" id="details">




	
</div>

<? function Scripts(){ ?>

	<? global $model; ?>
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<script type="text/javascript">
	
		
		$(document).ready(function()
		{
		    $('#city-tag').autocomplete(
		    {
		        source: "?action=terms&column=City&format=plain",
		        minLength: 1
		    });
		});
		
				
		$(document).ready(function()
		{
		    $('#state-tag').autocomplete(
		    {
		        source: "?action=terms&column=State&format=plain",
		        minLength: 3
		    });
		});
		

		$(document).ready(function()
		{
		    $('#Zipcode-tag').autocomplete(
		    {
		        source: "?action=terms&column=Zipcode&format=plain",
		        minLength: 2
		    });
		});

	</script>

<? } ?>