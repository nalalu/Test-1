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
//Ë³Ðò´òÂÒ
$poke_new=[];
for($i=0;$i<54;$i++){
$temp=rand(0,53-$i);
  $val=array_splice($poke,$temp,1);
  array_push($poke_new,$val[0]);
}
//·¢ÅÆ4¸öÍæ¼Ò
$p=[[],[],[],[],];
for($i=0;$i<4;$i++){
  array_push($p[0],$poke_new[$i*4]);
  array_push($p[1],$poke_new[$i*4+1]);
  array_push($p[2],$poke_new[$i*4+2]);
  array_push($p[3],$poke_new[$i*4+3]);
}
//Ê£ÏÂµ×ÅÆ
$dp=array_slice($poke_new,48,6);

showarray($poke_new);
showarray($dp);
function showarray($obj){
  echo '<pre>';
  print_r($obj);
  echo '</pre>';
}