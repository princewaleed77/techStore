<?php
namespace techstore\Classes\Models;
use  techstore\Classes\Db;


class Order extends Db
{
    public function __construct()
    {
        $this->table = " orders";
        $this->connect();
    }



}




?>