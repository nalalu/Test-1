<?php
showarr($_GET);
showarr($_POST);
function showarray($obj){
  echo '<pre>';
  print_r($obj);
  echo '</pre>';
}