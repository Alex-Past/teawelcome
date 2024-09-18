<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">

		<link rel="stylesheet" href="style.css" type="text/css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		<link rel="icon" href="images/teafavicon.ico" type="image/x-icon">
		<link rel="shortcut icon" href="images/teafavicon.ico" type="image/x-icon"> 

		<title>teawelcome</title>

	</head>

		<body>

			<div class="header">

				<div class="logo">

					<img id="mini" src="images/mini.png"> TeaWelcome.ru 

						</div>

							<div class="welcome">Добро пожаловать на чай!</div>

						<div>

							<form id="form" method="post">					
							    <p>    
							   		<input id="d" type="number" step="1" min="1" max="31" value="<?=forma ('day', 18)?>" name="day" required/>	
									<input id="m" type="number" step="1" min="1" max="12" value="<?php if (isset($_POST['month'])) echo $_POST['month']; else echo "01";?>" name="month" required/>								
									<input id="y" type="number" step="1" min="1912" max="<?php echo date('Y');?>" value="<?=forma ('year', 1990)?>" name="year" required/></br>
							       М<input id="s" name="sex" type="radio" value="m" required checked>
									<input id="s" name="sex" type="radio" value="w" required>Ж
				    		    </p>
						   	    <p>
								   	<div class="button">
								        	<button id="button" type="submit">ВКЛ</button>
								    </div>
							    </p>				   				   
							</form>

				</div>
			
			</div>	


				
				

							
															
					


			