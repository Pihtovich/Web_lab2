<?php
/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";


// Write your code here:
$order = &$very_bad_unclear_name; // new variable as a reference


$order .= " and 1 can of Coke"; // extension string

// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name.";

/** Numbers */
$intVariable = 8;

$floatVariable = 1.5;

$last_month = 1187.23;
$this_month = 1089.98;
$difference = abs($last_month-$this_month);

$message = <<<message

Насколько больше я потратил в прошлом месяце, чем в этом месяце? 
В прошлом месяце я потратил {$last_month}, а в этом месяце я потратил {$this_month}.
Тогда разница между расходами в прошлом месяце и в этом месяце равна {$difference}.
message;

echo "\n$intVariable";
echo "\n";
echo $floatVariable;
echo "\n$intVariable * $floatVariable"; // output = 12
echo "\n$message";

/** Multiplication and division */
$num_languages = 4;
$months = 11;
$days = 16;
$days_per_language = $months * $days / $num_languages;

echo "\nВ среднем на изучение каждого языка у нее ушло: $days_per_language";

/** Degree */
echo "\n";
echo 8 ** 2;

/** Assignment operators */
$my_num = 25;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;

echo "\n$answer"; // output = 1

/** Math functions */
// mod
$a = 10;
$b = 3;
$mod = $a % $b;

echo "Если А = $a, a В = $b, тогда А % B ";
if ($mod === 0)
    echo "делится нацело";
else
    echo "делится с остатком $mod";

// Exponentiation: sqrt and pow
$st = 2 ** 10;
echo "\n2 в 10 степени = $st";

$ko = sqrt(245);
echo "\nКвадратный корень из 245 = $ko";

$array = [4, 2, 5, 19, 13, 0, 10];
$sum = 0;
foreach ($array as $value) {
    $sum += $value ** 2;
}

echo "\nКорень из суммы квадратов элементов array(4, 2, 5, 19, 13, 0, 10) = ", sqrt($sum);

// Rounding functions: round, ceil, floor
echo "\nКорень квадратный из 379";
echo "\nРезультат округлен до целых: ", round(sqrt(379));
echo "\nРезультат округлен до десятых: ", round(sqrt(379), 1);
echo "\nРезультат округлен до сотых: ", round(sqrt(379), 2);
echo "\nКорень квадратный из 587";

$round = ["floor" => floor(sqrt(587)), "ceil" => ceil(sqrt(587))];

echo "\nРезультат округлен в меньшую сторону: ", $round["floor"];

echo "\nРезультат округлен в большую сторону: ", $round["ceil"];

// min and max
$numbers = [4, -2, 5, 19, -130, 0, 10];
echo "\nДан массив numbers(4, -2, 5, 19, -130, 0, 10)";
echo "\nЭлемент с наименьшим значением: ", min($numbers);
echo "\nЭлемент с наибольшим значением: ", max($numbers);

// Random
echo rand(1, 100);
$randomArray = [];
$count = 0;

echo "\nМассив из 10 рандомных чисел: \n[";
while ($count < 10) {
    Array_push($randomArray, rand()); // filling in the array
    $count += 1;
}

foreach($randomArray as $value) echo "$value "; // array output
echo "]";
echo "\nМодуль разности $a и $b: ", abs($a - $b);
echo "\nМодуль разности $b и $a: ", abs($b - $a);
$absolute = [1, 2, -1, -2, 3, -3];
$absolute = array_map('abs', $absolute); // changing the values of the elements to positive

echo "\nДан массив absolute(1, 2, -1, -2, 3, -3)";
echo "\nНовый массив: [";
foreach($absolute as $value) echo "$value "; // array output
echo "]";

// Other
$dividers = [];
$num = 50;
for ($i = 1; $i <= $num; $i++){
    if ($num % $i == 0) // search for dividers
        array_push($dividers, $i);
}

echo "\nДелители числа $num: ";
foreach($dividers as $value) echo "$value "; // array output

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;
$count = 0;
while ($sum<=10){
    $sum += $numbers[$count];
    $count += 1;
}
echo "\nДан массив numbers(1, 2, 3, 4, 5, 6, 7, 8, 9, 10)";
echo "\nНужно сложить $count первых элементов, чтобы сумма была больше 10";