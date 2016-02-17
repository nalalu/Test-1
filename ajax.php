<?php
showarr($_GET);
showarr($_POST);
function showarr($obj){
  echo '<pre>';
  print_r($obj);
  echo '</pre>';
}