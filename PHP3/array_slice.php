<?php
$sport = array ('football','Basketball','Handball','Voleyball');
$output1 = array_slice($sport, 2);
$output2 = array_slice($sport, -2, 1);
$output3 = array_slice($sport, 0, 3);
var_dump($output1, $output1, $output1)
?>