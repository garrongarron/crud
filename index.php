<?php
use dafiti\Router;
use dafiti\Product;
include 'dafiti/autoload.php';
$action = Router::getRoute();
$params = Router::getParameters();
$product = new Product();
switch ($action[1]) {
	case '':
		var_dump($product->list());
		break;
	case 'add':
		var_dump($product->add($params));
		break;
	case 'del':
		var_dump($product->delete($params));
		break;
	case 'edit':
		var_dump($product->edit($params));
		break;
	
	default:
		# code...
		break;
}
/*var_dump($product);
var_dump(Router::getParameters());
var_dump(Router::getRoute());*/
?>
<ul>
	<li><a href="/">List</a></li>
	<li><a href="/add">Add</a></li>
	<li><a href="/del">Delete</a></li>
	<li><a href="/edit">Edit</a></li>
</ul>