<?php
/**
Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а
текущий день выведите курсивом. Текущий день должен храниться в переменной $day.</p>
 */
$arr = array(1, 2, 3, 4, 5, 6, 7);
foreach ($arr as $ar) {
    $day = date('N');
    if ($ar == $day) {
        echo "<b>$ar</b><br>";
    } else {
        echo $ar . "<br>";
    }
}
$i=1;