<?php

require_once "Classes/requests.php";
require_once "Classes/sessions.php";
require_once "Classes/Db.php";
require_once "Classes/Models/product.php";
require_once "Classes/Models/order.php";
require_once "Classes/Validation/ValidationRule.php";
require_once "Classes/Validation/numeric.php";
require_once "Classes/Validation/Email.php";
require_once "Classes/Validation/Max.php";
require_once "Classes/Validation/Required.php";
require_once "Classes/Validation/Str.php";
require_once "Classes/Validation/Validator.php";

// $request = new Request;
// $sess = new Sessions;
// $sess->set('name', 'waleed');
// echo $sess->get('name');
// echo $sess->has('name');
// $sess->remove('name');
// var_dump($sess->has('name'));
// print_r($_SESSION);

// $prod = new Product;
// $res = $prod-> sellectAll('price');
// echo "<pre>";
// print_r($res);
// echo "</pre>";

// ---------------------------

// $ord = new Order;
// $re = $ord->delete(2);
// echo '<pre>';
// var_dump($re);
// echo '</pre>';


$v = new Validator;
$v->validate('age', '8', ['required', 'Numeric']);

echo '<pre>';
print_r($v->getErrors());
echo '</pre>';




?>