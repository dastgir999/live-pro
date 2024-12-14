<?php

function URL($key = null){
		$arr= explode("/",trim($_GET['url'] ?? 'home',"/"));


	if(!is_numeric($key))
	return $arr;

    return $arr[$key] ?? '';

}




define('ROOT', 'http://localhost/live-pro');

// echo "<pre>";

// print_r(URL());

// echo "page name is:".URL(0);

$file = URL(0).'.php';
if(file_exists($file)){
	require $file;
}else{
	require '404.php';
}



echo "</pre>";

// require URL(0) .'.php';

// echo "<pre>";
// print_r($_GET);


?>





