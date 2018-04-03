<?php
use dafiti\Router;
use dafiti\Product;
include 'dafiti/autoload.php';

//session_destroy();
session_start();
//session_unset();

$action = Router::getRoute();
$params = Router::getParameters();
$product = new Product();

switch ($action[1]) {
	case 'add':
		echo $product->add($params);
		break;
	case 'del':
		echo $product->delete($params);
		break;
	case 'edit':
		echo $product->edit($params);
		break;
}

foreach ($product->list() as $item) {
	isset($item['description']);
	echo '<li> id <span class="id">'.$item['id'] .'</span>' 
				.' <span class="description">'.$item['description'].'</span>' 
				.' $<span class="price">'.$item['price'].'</span>'
				.' <a href="javascript: void(0)" onclick="del(this)">Delete</a>'
				.' <a href="javascript: void(0)" onclick="edit(this)">Edit</a>'
			.'</li>';
}
?>
<!--<ul>
	<li><a href="/">List</a></li>
	<li><a href="/add">Add</a></li>
	<li><a href="/del">Delete</a></li>
	<li><a href="/edit">Edit</a></li>
</ul>-->

<form onsubmit="return check(this)" name="crud">
	<input type="number" name="id" placeholder="Product id" min=0>
	<input type="text" name="description" placeholder="Description">
	<input type="number" name="price" placeholder="Price" min=0>
	<select name="action">
		<!--<option value="/">Get All</option>-->
		<option value="/add">Add</option>
		<!--<option value="/del">Delete</option>-->
		<option value="/edit">Edit</option>
	</select>
	<input type="submit" value="Send">
</form>
<script type="text/javascript">
let x = document.forms['crud']
	var check = ()=>{
		x.setAttribute('action',x['action'].value)
		//console.log(x);
		//return false;
	}

	let del = (a) =>{
		let answer = confirm("Do you really want to delete?")
		if(answer){
			let id = a.parentElement.getElementsByClassName('id')[0].innerHTML
			document.getElementsByName('id')[0].value = id;
			x.setAttribute('action','/del')
			x.submit()
		}
		return false;
	}
	let edit = (a) =>{
		let id = a.parentElement.getElementsByClassName('id')[0].innerHTML
		let description = a.parentElement.getElementsByClassName('description')[0].innerHTML
		let price = a.parentElement.getElementsByClassName('price')[0].innerHTML
		document.getElementsByName('id')[0].value = id;
		document.getElementsByName('description')[0].value = description;
		document.getElementsByName('price')[0].value = price;
		document.getElementsByName('action')[0].value = '/edit'
		x.setAttribute('action','/edit')
		//x.submit()
		return false;
	}

</script>
<style type="text/css">
	select[name=action] {
		display: none;
	}
	input{
		display: block;
	}
</style>