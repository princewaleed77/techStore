<?php
namespace techstore\Classes\Models;
use  techstore\Classes\Db;


class Cats extends Db
{
    // انا هاعمل كونستركت عشان اول ما اعمل اوبجيكت من البرودكت تحطلى الجدول علطول وتتصل اوتوماتيك

    public function __construct()
    {
        $this->table ="cats";
        $this->connect();
    }







}





?>