<?php

// =========================================

// paths & urls absolute path
//the bath from the root folder of your project
// <!-- باستخدم الباس فى الانكلود والاسيتس  -->
// <!--  باستخدم اليو ار ال فى الصفحات والاتش ريف  والهيدر لوكيشن -->
// <!-- $path = __DIR__."/"; -->

define("PATH", __DIR__."/");
define("URL", "http://localhost/techstore/");
define("AURL", "http://localhost/techstore/admins/");
define("APATH", __DIR__."/admins/");
 
// ===========================================================

// db credentials

define("DB_SERVERNAME", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "techstore");

// ==============================================================
// include classes , include all files
// ده ليه مشاكل بس هانحلة لما نعمل اوتولودين مع نيمسبيس


// ده الاوتو لودينج بنسطبه بالكمبوزر
require_once(PATH."vendor/autoload.php");

// require_once "Classes/requests.php";
// require_once "Classes/sessions.php";
// require_once "Classes/Db.php";
// require_once "Classes/Models/Product.php";
// require_once "Classes/Models/Order.php";
// require_once "Classes/Models/OrderDetail.php";
// require_once "Classes/Models/Cats.php";
// require_once "Classes/Validation/ValidationRule.php";
// require_once "Classes/Validation/numeric.php";
// require_once "Classes/Validation/Email.php";
// require_once "Classes/Validation/Max.php";
// require_once "Classes/Validation/Required.php";
// require_once "Classes/Validation/Str.php";
// require_once "Classes/Validation/Validator.php";

// ======================================================

//objects
// عملت اوبجيكت عشان اشتغل علطول وكل العمليات تكون متاحة من الكلاسات ده
use techstore\Classes\Request;
use techstore\Classes\Session;
$request = new Request;
$session = new Session;


?>