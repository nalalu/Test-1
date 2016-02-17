<?php
$api = $_GET['api'];
$msg = $_POST['msg'];
if($api=='postmsg'){
  file_put_contents("test.txt", $msg);
  $obj = ['code'=>1];
  echo json_encode($obj);
}

function showarr($obj){
  echo '<pre>';
  print_r($obj);
  echo '</pre>';
}