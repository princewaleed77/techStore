<?php
namespace techstore\Classes;

use mysqli;

// انا هنا باعمل كل المعادلات المطلوبة بشكل مبسط بحيث انى اجمعهم مرة واجدة
//  بدل ما لااستخدمهم كل شوية 
// فا انا بحط  كل الخصائص والمتغيرات والدوال داخل كلاس 
//   وبعدين اعمل فانكشنز  تشغلهم مرة واحدة

abstract class Db
{

    //  المتغيرات المطلوبة عملتها بروتكت عشان تتورث
   protected  $conn; // هاخزن فيه بيانات الاتصال للتسهيل عليا فى شغلى
   protected $table;//  هاستخدمة عشان يكون هو اسم الجدول بتاعى اللى عاوزة من قاعدة البيانات
// ===================================== connection to database =====================================
//    الاتصال بقاعدة البيانات
    public function connect()
    {
      $this->conn =  mysqli_connect(DB_SERVERNAME, DB_USERNAME,DB_PASSWORD,DB_NAME);
    }
// ========================================= display and search database ==============================
    // عرض او البحث داخل الجدول وعرض كل الصفوف
    // ممكن احطلهابراميتر بقيمة افتراضية 
    public function sellectAll($fields = "*")
    {
        $sql = "select $fields from $this->table";
        $result = mysqli_query($this->conn, $sql);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    // ابحث ب الاى دى مع باقى البراميترز
    public function sellectId($id , $fields = "*")
    {
        $sql = "select $fields from $this->table where id = $id" ;
        $result = mysqli_query($this->conn, $sql);
        return mysqli_fetch_assoc($result);
    }
    
    // ابحث  باى كونديشن مع باقى البراميترز
    // = has problem
    public function sellectWhere($conds , $fields = "*")
    {
        $sql = "select $fields from $this->table where $conds " ;
        $result = mysqli_query($this->conn, $sql);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
        
    }
// ============================================ count rows =================================
    public function getCount($fields = '*')
    {
        $sql = "select count($fields) as cnt from $this->table " ;
        $result = mysqli_query($this->conn, $sql);
        return mysqli_fetch_assoc($result)['cnt'];
        
    }
// ============================================= sum of rows =============================
    public function getTotal($fields = '*')
    {
        $sql = "select sum($fields) as sum from $this->table " ;
        $result = mysqli_query($this->conn, $sql);
        return mysqli_fetch_assoc($result)['sum'];
    }
// ===================================== insert into tables in database ===============================

public function insert(string $fields ,string $values):bool
    {
        $sql = "insert into $this->table ($fields) values ($values) " ;
        return mysqli_query($this->conn, $sql);         
    }

//  get last id 
public function insertAndGetId(string $fields ,string $values)
    {
        $sql = "insert into $this->table ($fields) values ($values) " ;
        mysqli_query($this->conn, $sql);  
        return mysqli_insert_id($this->conn);     
    }
// ============================================== update ===============================
    // used for primary key only ???????
public function update(string $fields , $id):bool
    {
        $sql = "update $this->table set $fields where id = $id " ;
        return mysqli_query($this->conn, $sql);           
    }
// ======================================== delete ========================================
    public function delete($id)
    {
        $sql = "delete from $this->table where id = $id" ;
        return $result = mysqli_query($this->conn, $sql);
    }

}
?>