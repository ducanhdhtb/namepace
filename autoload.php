<?php 
	function __autoload($class){
	$name=str_replace("\\","/",$class);
	require "$name.php";
}


 ?>
