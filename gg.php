<?php
// include "Myclass.php";
$redis = new Redis(); #实例化redis类
$redis->connect('127.0.0.1'); #连接服务器  
$redis->set('key', 'hello '); #调用方法，设置string类型值 
echo $redis->get('key');