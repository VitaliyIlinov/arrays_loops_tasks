<?php
/**
Дан массив с элементами 26, 17, 136, 12, 79, 15. С помощью цикла foreach найдите сумму квадратов элементов этого массива.
 */
$arr=array(26, 17, 136, 12, 79, 15);
$result=0;
foreach($arr as $ar){
$result += $ar  ;
}
echo $result*$result;
