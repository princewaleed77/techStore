<?php namespace techstore\Classes;



// use techstore\Classes\Models\Product;

class Cart 
{
    public function add(string $id, array $productData)
    {
       $_SESSION['cart'][$id] = $productData;
    }

    public function count()
    {
        // عشان بتعمل خطا لو ما فيش كارت فى السيشن فابعمل تشيك الاول وحوله على حاجة بديل

        if(isset($_SESSION['cart']))
       return count($_SESSION['cart']);
       else
       return 0;
    }
  
    public function total()
    {
        $total = 0;
        // عشان بتعمل خطا لو ما فيش كارت فى السيشن فابعمل تشيك الاول وحوله على حاجة بديل

        if(isset($_SESSION['cart'])){
             foreach($_SESSION['cart'] as $id => $productData) {
            $total +=  $productData['qty'] * $productData['price'];
        }
        }
       
        return $total;
    }

    public function has(string $id):bool
    {
        // عشان بتعمل خطا لو ما فيش كارت فى السيشن فابعمل تشيك الاول وحوله على حاجة تانية

        if(isset($_SESSION['cart'])){
           return array_key_exists($id, $_SESSION['cart']); 
        }else
        {
            return false;
        }
        
    }

    public function getCartItems()
    {
        // عشان بتعمل خطا لو ما فيش كارت فى السيشن فابعمل تشيك الاول وحوله على حاجة فاضية
        if(isset($_SESSION['cart']))
            return $_SESSION['cart'];
        else
            return [];
    }

    public function remove(string $key)
    {
        unset($_SESSION['cart'][$key]);
        
    }
    public function emptyCart()
    {
        $_SESSION['cart'] = [];
    }



}

?>