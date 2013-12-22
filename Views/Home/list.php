<div class="container">
	<h2>Results</h2>
	<div id="table-wrapper" class="col-md-12">
		<table class="table table-hover table-bordered table-striped">
			<thead>
				<tr>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Last Updated</th>
				</tr>
			</thead>
			
			<tbody id="data-table">
				
			</tbody>
		</table>
	</div>
</div>

<div id="details"></div>
<script id="usersTemplate" type="text/x-handlebars-template">
	
	{{#each this}}
	<tr> 
		<td>{{FirstName}}</td>
		<td>{{LastName}}</td>
		<td>{{updated_at}}</td>

	</tr>
	{{/each}}
</script>


<?Scripts();?>
  <? function Scripts(){ ?>
<? global $model; ?>
	<script src="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/jquery.dataTables.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/handlebars.js/1.1.2/handlebars.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
	<script src="handlebars-v1.1.2.js"></script>

	<script type="text/javascript">

		
		var template = $.trim( document.getElementById("usersTemplate").innerHTML);
		var template = Handlebars.compile( $("#usersTemplate").html() );
		$("#data-table").append(template(<?=json_encode($model);?>));
		
		
</script>
<? }?>