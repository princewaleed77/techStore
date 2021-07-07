<?php
require_once("app.php");
// require_once "Classes/requests.php";
// require_once "Classes/sessions.php";
// require_once "Classes/Db.php";
// require_once "Classes/Models/product.php";
// require_once "Classes/Models/order.php";
// require_once "Classes/Validation/ValidationRule.php";
// require_once "Classes/Validation/numeric.php";
// require_once "Classes/Validation/Email.php";
// require_once "Classes/Validation/Max.php";
// require_once "Classes/Validation/Required.php";
// require_once "Classes/Validation/Str.php";
// require_once "Classes/Validation/Validator.php";

// $request = new Request;
// $sess = new Sessions;
// $sess->set('name', 'waleed');
// echo $sess->get('name');
// echo $sess->has('name');
// $sess->remove('name');
// var_dump($sess->has('name'));
// print_r($_SESSION);
use techstore\Classes\Models\Product;
// $prod = new Product;
// $res = $prod-> sellectWhere('name = "sony ps4"');
// echo "<pre>";
// print_r($res);
// echo "</pre>";

// ---------------------------
use techstore\Classes\Models\Order;
use techstore\Classes\Request;
use techstore\Classes\Cart;
// $ord = new Order;
// $re = $ord->sellectWhere("name like 'waleed%'");
// echo '<pre>';
// var_dump($re);
// echo '</pre>';

// $v = new Validator;
// $v->validate('age', '8', ['required', 'Numeric']);

// echo '<pre>';
// print_r($v->getErrors());
// echo '</pre>';

//  echo $request->get("name");
// $ct=new Cart;
// $cont=$ct->count();
// echo $cont;

echo '<pre>';
print_r($_SESSION['cart']);
echo '</pre>';


// $session->destroy('cart');

// echo '<pre>';
// print_r($_SESSION['cart']);
// echo '</pre>';



?>