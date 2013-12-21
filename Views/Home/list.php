<div class="container">
	<h2>Results</h2>
	<div id="table-wrapper" class="col-md-12">
		<table class="table table-hover table-bordered table-striped">
			<thead>
				<tr>
					<th>First Name</th>
					<th>Last Name</th>
				</tr>
			</thead>
			
			<tbody id="data-table">
				
			</tbody>
		</table>
	</div>
</div>

<div id="details"></div>
<script id="usersTemplate" type="autoComplete/template">
	
	<tr> 
		<td>{{FirstName}}</td>
		<td>{{LastName}}</td>
	</tr>
	
</script>


<?Scripts();?>
<? function Scripts(){ ?>
<?global $model; ?>
<script src="http://code.jquery.com/jquery.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

<script type="text/javascript">

		
		var template = $.trim( $('#usersTemplate').html() );
		
		var data= new Array();
		<?foreach ($model as $key => $value):?>
		
			data.push({FirstName:'<?=$model[$key]['FirstName'] ?>', LastName:'<?=$model[$key]['LastName']?>'});	
				
		<?endforeach;?>
		
		$.each( data, function(index, obj){
			var temp = template.replace( /{{FirstName}}/ig, obj.FirstName)
								.replace(/{{LastName}}/ig, obj.LastName);
			$("#data-table").append(temp);
			
		});
</script>
<? }?>