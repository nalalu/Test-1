<?php
$api = getIndex($_GET, 'api');

if(0){
}
elseif($api == 'postmsg'){
  $msg = getIndex($_POST, 'msg');
  file_put_contents("test.js", 'a="'.$msg.'"');
  $obj = ['code' => 1];
  echo json_encode($obj);
}
elseif($api == 'getmsg'){
  $msg = file_get_contents("test.js");
  $obj = ['code' => 1, 'msg' => $msg];
  echo json_encode($obj);
}


function getIndex($obj, $value, $default = ''){
  return isset($obj[$value]) ? $obj[$value] : $default;
}

function showarr($obj){
  echo '<pre>';
  print_r($obj);
  echo '</pre>';
}