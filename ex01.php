<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/2/17
 * Time: 9:40
 */
$a=['A',2,3,4,5,6,7,8,9,10,'J','Q','K'];
$b=['R','B','F','S'];
$poke=['L','S'];

for($i=0;$i<4;$i++){
  for($j = 0; $j <13 ; $j++){
    array_push($poke,$b[$i].$a[$j]);
  }
}


showarray($a);
showarray($poke);
function showarray($obj){
  echo '<pre>';
  echo '\n';
  print_r($obj);
  echo '</pre>';
}