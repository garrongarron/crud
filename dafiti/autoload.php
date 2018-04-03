<?php
spl_autoload_register(function($class_name){
	$prefix = 'dafiti';
	$base_directory = str_replace($prefix, '', __DIR__);
	$file =  $base_directory . str_replace('\\', '/', $class_name).'.php';
	if(file_exists($file)){
		require $file;
	} else {
		throw new Exception("Imposible find $file", 1);
	}
});
