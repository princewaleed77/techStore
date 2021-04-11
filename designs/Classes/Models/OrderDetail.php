<?php


class OrderDetail extends Db
{
    // انا هاعمل كونستركت عشان اول ما اعمل اوبجيكت من البرودكت تحطلى الجدول علطول وتتصل اوتوماتيك

    public function __construct()
    {
        $this->table ="order_details";
        $this->connect();
    }







}





?>