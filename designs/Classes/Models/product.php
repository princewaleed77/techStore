<?php


class Product extends Db
{
    // انا هاعمل كونستركت عشان اول ما اعمل اوبجيكت من البرودكت تحطلى الجدول علطول وتتصل اوتوماتيك

    public function __construct()
    {
        $this->table ="products";
        $this->connect();
    }







}





?>