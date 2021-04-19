<?php
namespace techstore\Classes\Models;
use  techstore\Classes\Db;

class Product extends Db
{
    // انا هاعمل كونستركت عشان اول ما اعمل اوبجيكت من البرودكت تحطلى الجدول علطول وتتصل اوتوماتيك

    public function __construct()
    {
        $this->table ="products";
        $this->connect();
    }
// تم تعديل دالة سيليكت هلى دي عشان نعرف نجيب اسم الكاتيجورى ونعرضها 
// فكان لازم نعمل ربط بجدول المنتجات والكاتيجورى ونغير الاسماء عشان ميحصلش تضارب
// SELECT products.id AS prodId, products.name AS prodName, 'desc',price, cats_id AS catId, cats.name AS catName
 //FROM `products` JOIN cats ON products.cats_id = cats.id WHERE products.id = ($id);
 public function sellectId($id , $fields = "products.*")
 {
     $sql = "select $fields from $this->table join cats on
      $this->table.cats_id = cats.id where $this->table.id = $id" ;
     $result = mysqli_query($this->conn, $sql);
     return mysqli_fetch_assoc($result);
 }




}





?>