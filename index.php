<?php
$redis = new Redis();
$redis->connect('redis', 6379);

$allKeys = $redis->keys('*');

$redis->set("key-".count($allKeys), date("H:i:s"));

foreach($allKeys as $key){
  echo $redis->get($key);
}
