<?php
$api = $_GET['api'];
$msg = $_POST['msg'];
if(0){}
elseif($api=='postmsg'){
  file_put_contents("test.txt", $msg);
  $obj = ['code'=>1];
  echo json_encode($obj);
}
elseif($api=='getmsg'){
  $msg = file_get_contents("test.txt");
  $obj = ['code'=>1, 'msg'=>$msg];
  echo json_encode($obj);
}
elseif($api=='postmsg'){}
elseif($api=='postmsg'){}
elseif($api=='postmsg'){}
elseif($api=='postmsg'){}
elseif($api=='postmsg'){}
elseif($api=='postmsg'){}
elseif($api=='postmsg'){}



function showarr($obj){
  echo '<pre>';
  print_r($obj);
  echo '</pre>';
}