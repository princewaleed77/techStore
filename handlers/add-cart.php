<?php 

require_once("../app.php");

use techstore\Classes\Cart;
if ($request->postHas('submit')) {
//    $qty =  $request->post('');

$id = $request->post('id');
$qty = $request->post('qty');
$name = $request->post('name');
$price = $request->post('price');
$img = $request->post('img');


$productData =

[
    'qty'=>$qty,
    'name'=>$name,
    'price'=>$price,
    'img'=>$img
];

$cart= new Cart;
$cart->add($id, $productData);
$request->redirect("products.php");
}

?>