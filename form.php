	

	<div class="form">

		<form method="post" >
		
		    <p>    
		   		
				<input id="d" type="number" step="1" min="1" max="31" value="<?=forma ('day', 18)?>" name="day" required/>	
				
				<input id="m" type="number" step="1" min="1" max="12" value="<?php if (isset($_POST['month'])) echo $_POST['month']; else echo "01";?>" name="month" required/>								
				
		        <input id="y" type="number" step="1" min="1912" max="2100" value="<?=forma ('year', 1990)?>" name="year" required/></br>
		        
		        М<input id="s" name="sex" type="radio" value="m" checked>

				<input id="s" name="sex" type="radio" value="w">Ж

		    
		    </p>

		   
			    <p>
			    	<div>

			        	<button id="button" type="submit">ВКЛ</button>

			    	</div>

			    </p>

		     

		    
		</form>

	</div>
