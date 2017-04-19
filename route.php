<?php

$request= $_SERVER['REQUEST_URI'];
// echo $request;
$pa=explode('/', $request,3);
$patwo=explode('?', $pa[2],2);
$pa3=explode('&&', $patwo[1]);
$data=array();
foreach ($pa3 as $val) {

$pa4=explode('=', $val);
$data[$pa4[0]]=$pa4[1];
	
}
$params=array(
	'filename'			=>$pa[1],
	'fucntionname'		=>$patwo[0],
	'data'              =>$data,
);
$target = root_path . '/c/' . $params['filename'] . '.php';  
include($target);
// echo $target;
$target_function=$params['fucntionname'];


$get_c=new neng($data);
$get_c->help();
// print_r($data);
