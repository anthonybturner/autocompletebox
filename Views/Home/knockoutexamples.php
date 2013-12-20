
<div>
	<h2>Your seat reservations</h2>
	
	<table>
	    <thead><tr>
	        <th>Passenger name</th><th>Meal</th><th>Surcharge</th><th></th>
	    </tr></thead>
	    <!-- Todo: Generate table body -->
	    <tbody data-bind="foreach: seats">
	    
	        <tr>
	        
	            <td data-bind="text: name"> </td>
	            <td data-bind="text: meal().mealName"> </td>
	            <td data-bind="text: meal().price"> </td>
	        </tr>
	    
	    </tbody>
	</table>
</div>

<? function Scripts(){ ?>
	
	<script src="//cdnjs.cloudflare.com/ajax/libs/knockout/3.0.0/knockout-min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/knockout.mapping/2.4.1/knockout.mapping.js"></script>
	<script>
			// Class to represent a row in the seat reservations grid
		function SeatReservation(name, initialMeal) {
		    var self = this;
		    self.name = name;
		    self.meal = ko.observable(initialMeal);
		}
		
		// Overall viewmodel for this screen, along with initial state
		function ReservationsViewModel() {
		    var self = this;
		
		    // Non-editable catalog data - would come from the server
		    self.availableMeals = [
		        { mealName: "Standard (sandwich)", price: 0 },
		        { mealName: "Premium (lobster)", price: 34.95 },
		        { mealName: "Ultimate (whole zebra)", price: 290 }
		    ];    
		
		    // Editable data
		    self.seats = ko.observableArray([
		        new SeatReservation("Steve", self.availableMeals[0]),
		        new SeatReservation("Bert", self.availableMeals[0])
		    ]);
		}
		
		ko.applyBindings(new ReservationsViewModel());
	
	</script>
	
<? } ?>