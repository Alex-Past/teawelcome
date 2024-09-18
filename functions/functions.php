<?php




// Функция чтобы форма не сбрасывалась зараза такая.

function forma ($c, $l)
{
	if (isset($_POST[$c])) echo $_POST[$c]; else echo $l;
	
}

// Функция подсчета 1/12 человек в мире:

function people ()

{

	$today = time(); 

	$p = 7546187300 + (($today - 1504088031) * 2.865);

	return $people = floor($p / 12);
}


// Функция характеристики пола:

function sex ($sex, $d, $m)

{

if ($sex == 'm') 
    {
        return bd ('man', 'characters', 'id_s', get_sign_index($d, $m));
    }
if ($sex == 'w')
    {
        return bd ('woman', 'characters', 'id_s', get_sign_index($d, $m));
    }
}


function ending ($sex)

{

if ($sex == 'm') 
    {
        echo "ся ";
    }
if ($sex == 'w')
    {
        echo "ась ";
    }
}


// Самая главная и важная функция!!!

function bd($a, $b, $c, $d) {
    // Получаем подключение из функции start()
    $conn = start();

    // Формируем SQL-запрос
    
	$query = "SELECT $a FROM $b WHERE $c = $d";

    // Выполняем запрос с использованием mysqli_query (не mysql_query)
    $res = mysqli_query($conn, $query);

    // Проверяем, выполнен ли запрос успешно
    if (!$res) {
        die("Ошибка запроса: " . mysqli_error($conn)); // mysqli_error вместо mysql_error
    }

    // Извлекаем строку результата
    $row = mysqli_fetch_row($res);

    // Возвращаем значение первой колонки
    return $row[0];
}


// Показать день рождения:

function show_birthday($m, $d, $y)
{
if ($m ==1)
echo "$d января $y года";
if ($m ==2)
echo "$d февраля $y года";
if ($m ==3)
echo "$d марта $y года";
if ($m ==4)
echo "$d апреля $y года";
if ($m ==5)
echo "$d мая $y года";
if ($m ==6)
echo "$d июня $y года";
if ($m ==7)
echo "$d июля $y года";
if ($m ==8)
echo "$d августа $y года";
if ($m ==9)
echo "$d сентября $y года";
if ($m ==10)
echo "$d октября $y года";
if ($m ==11)
echo "$d ноября $y года";
if ($m ==12)
echo "$d декабря $y года";
}

// Функции для интересных фактов:

function life($m, $d, $y, $l) 
		{
			$now = time();

			$birthday = mktime(0, 0, 0, $m, $d, $y);

			$life = round(((($now - $birthday) / $l) / 31536000), 1);

			return $life;			
		}


	function life_week($l) 
		{
			
			$today = date("z");

			$today = (int)$today;

			$this_week = round((($today / $l) / 7), 1);

			return $this_week;
		}	


		function life_day($l) 
		{
			
			$today = date("z");

			$today = (int)$today;

			$this_day = round(($today / $l), 1);

			return $this_day;
		}	

//Функция получения возраста:

function age($m, $d, $y)
	{	
		$today = time();	
		$birthday = mktime(0, 0, 0, $m, $d, $y);
		$age = ($today - $birthday);
		$year = $age / 31536000;
		$year_a = round(($year), 1);
		// $week = ($age - ($year_a * 31536000)) / 604800;
		// $week_a = floor($week);	
		// $day = ($week - $week_a) * 7;
		// $day_a = floor($day);	
		echo $year_a;
	}

//Функция для получения номера знака восточного календаря по году:


	 function get_east_yar_index($y)
	 {

	 	$e_y = array();
	 	$e_y[1912] = 1;

	 	for ($i=0; $i < 16; $i++) 
		 	{ 			
					$e_y[] = 2;
					$e_y[] = 3;
					$e_y[] = 4;
					$e_y[] = 5;
					$e_y[] = 6;
					$e_y[] = 7;
					$e_y[] = 8;
					$e_y[] = 9;
					$e_y[] = 10;
					$e_y[] = 11;
					$e_y[] = 12;
					$e_y[] = 1;	
	 		}

 		return $e_y[$y];
 	}

//Конец


//Функция получения номера знака зодиака по номеру месяца и дня:

	function get_sign_index($d, $m)

	{

		$today = mktime(0, 0, 0, $m, ($d + 1), 1970);

		$number_day = ceil($today  / 86400);

		
		if ($number_day > 356 or $number_day < 21)

			$sign = 10;

		if ($number_day > 20 && $number_day < 51)

			$sign = 11;

		if ($number_day > 50 && $number_day < 80)

			$sign = 12;
		if ($number_day > 79 && $number_day < 111)

			$sign = 1;
		
		if ($number_day > 110 && $number_day < 142)

			$sign = 2;
		
		if ($number_day > 141 && $number_day < 173)

			$sign = 3;
		
		if ($number_day > 172 && $number_day < 204)

			$sign = 4;
		
		if ($number_day > 203 && $number_day < 234)

			$sign = 5;
		
		if ($number_day > 233 && $number_day < 267)

			$sign = 6;

		if ($number_day > 266 && $number_day < 297)

			$sign = 7;
		
		if ($number_day > 296 && $number_day < 327)

			$sign = 8;
		
		if ($number_day > 326 && $number_day < 357)

			$sign = 9;

		return $sign;

	}


//Конец
	
// Функции для вычисления процентов цикла физического, эмоционального и интеллектуального:


	function phys_beat ($m, $d, $y)	

		{

		 $birthday = mktime(0, 0, 0, $m, $d, $y);

		 $today = time();

		 $sum_day = floor(($today - $birthday) / 86400);

		return $phys = floor(((round(($sum_day /23), 2)) - (floor($sum_day /23))) * 100);

		}


	function emo_beat ($m, $d, $y)	

		{

		 $birthday = mktime(0, 0, 0, $m, $d, $y);

		 $today = time();

		 $sum_day = floor(($today - $birthday) / 86400);

		 return $emo = floor(((round(($sum_day /28), 2)) - (floor($sum_day /28))) * 100);

		}


	function int_beat ($m, $d, $y)	

		{

		 $birthday = mktime(0, 0, 0, $m, $d, $y);

		 $today = time();

		 $sum_day = floor(($today - $birthday) / 86400);

		 return $int = floor(((round(($sum_day /33), 2)) - (floor($sum_day /33))) * 100);

		}



// Конец.


// Функции для получения номера id цикла биоритмов:



	//$phys_beat = phys_beat ($m, $d, $y);

	function phsy_char_index ($phys_beat)

	{

		if ($phys_beat >= 0 && $phys_beat <= 6)
			return $phys_i = 1;

		if ($phys_beat > 6 && $phys_beat <= 19)
			return $phys_i = 125;

		if ($phys_beat > 19 && $phys_beat <= 31)
			return $phys_i = 25;

		if ($phys_beat > 31 && $phys_beat <= 44)
			return $phys_i = 375;

		if ($phys_beat > 44 && $phys_beat <= 56)
			return $phys_i = 50;

		if ($phys_beat > 56 && $phys_beat <= 69)
			return $phys_i = 625;

		if ($phys_beat > 69 && $phys_beat <= 81)
			return $phys_i = 75;

		if ($phys_beat > 81 && $phys_beat <= 94)
			return $phys_i = 875;

		if ($phys_beat > 94 && $phys_beat < 100)
			return $phys_i = 100;

	}	

	
	//$emo_beat = emo_beat ($m, $d, $y);

	function emo_char_index ($emo_beat)

	{

		if ($emo_beat >= 0 && $emo_beat <= 6)
			return $emo_i = 1;

		if ($emo_beat > 6 && $emo_beat <= 19)
			return $emo_i = 125;

		if ($emo_beat > 19 && $emo_beat <= 31)
			return $emo_i = 25;

		if ($emo_beat > 31 && $emo_beat <= 44)
			return $emo_i = 375;

		if ($emo_beat > 44 && $emo_beat <= 56)
			return $emo_i = 50;

		if ($emo_beat > 56 && $emo_beat <= 69)
			return $emo_i = 625;

		if ($emo_beat > 69 && $emo_beat <= 81)
			return $emo_i = 75;

		if ($emo_beat > 81 && $emo_beat <= 94)
			return $emo_i = 875;

		if ($emo_beat > 94 && $emo_beat < 100)
			return $emo_i = 100;

	}	


	//$int_beat = int_beat ($m, $d, $y);

	function int_char_index ($int_beat)

	{

		if ($int_beat >= 0 && $int_beat <= 6)
			return $int_i = 1;

		if ($int_beat > 6 && $int_beat <= 19)
			return $int_i = 125;

		if ($int_beat > 19 && $int_beat <= 31)
			return $int_i = 25;

		if ($int_beat > 31 && $int_beat <= 44)
			return $int_i = 375;

		if ($int_beat > 44 && $int_beat <= 56)
			return $int_i = 50;

		if ($int_beat > 56 && $int_beat <= 69)
			return $int_i = 625;

		if ($int_beat > 69 && $int_beat <= 81)
			return $int_i = 75;

		if ($int_beat > 81 && $int_beat <= 94)
			return $int_i = 875;

		if ($int_beat > 94 && $int_beat < 100)
			return $int_i = 100;

	}	


//Конец.	


?>