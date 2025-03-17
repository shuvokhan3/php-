<?php
// 3. E-commerce System (Basic):

// Create a base class Product with properties like name, price, and stock.

// Define methods in Product to get/set these properties and potentially calculate discounts (implementation can be a placeholder for now).

// Create derived classes Book, Electronics, and Clothing inheriting from Product.

// Add specific properties to derived classes if needed (e.g., author for Book, brand for Electronics).

// In your main script, create instances of each product, set their details, and call their getter/setter methods.
class Product {
    private $name,$price,$stock;
    public function setter($v1 ,$v2 ,$v3){
        $this->name = $v1;
        $this->price= $v2;
        $this->stock= $v3;
    }
    public function getter(){
        return $this->name . $this->price . $this->stock;
    }
    

}
class Books extends Product{
    public function author(){
        echo "jone dou";
    }
}
class Electronics extends Product{
    public function brand(){
        echo "walton";
    }
}
class Clothing extends Product{
    public function brand(){   
        echo "Dymond";
    }
}

$b1 = new Books();
$b1->setter("harry potter","200usd","90%");
$res = $b1->getter();
echo $res;  