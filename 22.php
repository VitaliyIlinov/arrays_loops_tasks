<?php
/**
Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.<br><br>
xx<br>
xxxx<br>
xxxxxx<br>
xxxxxxxx<br>
xxxxxxxxxx</p>
 */

$i=1;
$k=1;
while($i<=5){
    $k=1;
    while($i>=$k){
        echo 'xx';
        $k++;
    }
    echo "\n";
    $i++;
}
