<?php
//echo mt_rand() . "\n";
//echo mt_rand() . "\n";
//
//echo mt_rand(5, 15). "\n";
//echo rand();
$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
$rand_keys = array_rand($input, 1);
echo $input[$rand_keys];
//echo $input[$rand_keys[0]] . "\n";