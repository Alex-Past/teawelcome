<!--</script>

	<script type="text/javascript">
	window.onload = function()
	{
	window.scrollTo(0, 900);
	}
	
</script>-->


	
	<!--<div class="static">

		Родил<?php ending ($sex); show_birthday($m, $d, $y);?>

	</div>-->

	<div class="up">

			<form action="index.php">	

				<div>

					<button id="up" type="submit">ВЫКЛ</button>

				</div>	

			</form>

	</div>	



<div class="content">

	<div id="tea">Green</div>

		<div class="box green">

			
			<div id="h">Лет потрачено</div>

				<div class="bort">

					<?php age($m, $d, $y)?></br>

				</div>

			<div id="h">Родил<?=ending($sex)?> в год</div>

				<div class="bort">

					<?=$east_sign = bd ('sign_y', 'eastyear', 'id_y', get_east_yar_index($y))?>

				</div>

			

			<div id="h">Под знаком зодиака</div>

				<div class="bort">

					<?=$sign = bd ('sign', 'characters', 'id_s', get_sign_index($d, $m))?>

				</div>
				
			

			<div id="h">Стихия соответственно</div>

				<div class="bort">

					<?=bd ('element', 'characters', 'id_s', get_sign_index($d, $m))?>
				
				</div>
				
		</div>




	<div id="tea">Black</div>

		<div class="box black">

			<div id="h">Восточный календарь знак <?=$east_sign?></div>

				<div class="bort">

					<?=bd ('char_east_year', 'eastyear', 'id_y', get_east_yar_index($y))?>

				</div>
				
			

			<div id="h"><?=$sign?></div>

				<div class="bort">

					<?=sex ($sex, $d, $m)?></br>

				</div>	

			<!--<div id="h">Хорошие стороны</div>

				<div class="bort">

					<?=bd ('plus', 'characters', 'id_s', get_sign_index($d, $m))?>.

				</div>-->

			<div id="h">Не лучшие стороны знака</div>

				<div class="bort">

					<?=bd ('minus', 'characters', 'id_s', get_sign_index($d, $m))?>

				</div>	

		</div>


	<div id="tea">White</div>

		<div class="box white">

			<div id="h">Биоритмы:</div>

				<div id="w">

						Период физического цикла завершен на 
						<?php if (phys_beat($m, $d, $y) == 0)echo 100;
						else echo  phys_beat($m, $d, $y);?> %. </br> Другими словами
				</div>

				<div class="bort"> 

					<?=bd ('phys', 'biobeat', 'id_b', phsy_char_index (phys_beat ($m, $d, $y)))?>

				</div>


				<div id="w">

						Период эмоционального цикла завершен на 
						<?php if (emo_beat($m, $d, $y) == 0)
						echo 100;else echo  emo_beat($m, $d, $y);?> %. </br> То есть
				
				</div>

				<div class="bort">

					 <?=bd ('emo', 'biobeat', 'id_b', phsy_char_index (emo_beat ($m, $d, $y)))?>

				</div>


				<div id="w">

						Период интеллектуального цикла завершен на 
						<?php if (int_beat($m, $d, $y) == 0)
						echo 100;else echo  int_beat($m, $d, $y);?> %. </br> Можно сказать

				</div>

				<div class="bort">

					 <?=bd ('intel', 'biobeat', 'id_b', phsy_char_index (int_beat ($m, $d, $y)))?>

				</div>

		</div>	

</div>






<!--

h3>"Научные" догадки:</h3>

<div class="test">
	За всю жизнь проведено во сне примерно лет: <?=life($m, $d, $y, 3)?></br>
	А в этом году: недель <?=life_week($m, $d, $y, 3)?> 
	(дней: <?=life_day($m, $d, $y, 3)?>)

	</br>

	<h3>Гороскоп на сегодня:</h3> 

	Здесь должен был быть гороскоп на сегодня, но мы подумали вы сами можете его найти. В другом месте. </br>  
	P.S.: Вы правда думаете, что 1/12 части населения земли звезды улыбаются одинаково?</br>  
	А ведь это примерно <?=people ()?> человек... </br></br> 
</div>
-->



