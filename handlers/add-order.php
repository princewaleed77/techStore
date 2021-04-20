<?php 

require_once "../app.php";

use techstore\Classes\Cart;
use techstore\Classes\Models\Order;
use techstore\Classes\Models\OrderDetail;
use techstore\Classes\Validation\Validator;

if ($request->postHas('submit')) {
    
    $name = $request->post('name');
    $email = $request->post('email');
    $phone = $request->post('phone');
    $address = $request->post('address');

// echo '<pre>';
// var_dump( $address,$name,$email,$phone);
// echo '</pre>';

// validation

    $valid = new Validator;
    $valid->validate('name', $name, ['required', 'str', 'max']);

if(! empty($email)){
   $valid->validate('email', $email, ['email', 'max']); 
}
    $valid->validate('phone', $phone, ['required', 'str', 'max']);

if(! empty($address)){
    $valid->validate('address', $address, ['str', 'max']);
}
// لو فى اخطاء هانقراها ونخزنها فى السيشن
// نروح نعرضها فوق الفورم بتاعنا فى صفحة الكارت
if($valid->hasErrors()){
    $session->set('errors',$valid->getErrors());
    $request->redirect('cart.php');
}else{
    $order = new Order;
    $order->insert("name, email, phone, address", "'$name','$email', '$phone','$address'");
}

}
?>

