<?php

namespace Models\Product;

use Models\Model\Model;

class Product extends Model
{
    
    const ORDER_BY_PRICE_ASC = 'price-asc';
    const ORDER_BY_PRICE_DESC = 'price-desc';

    public $id;
    public $title;
    public $description;
    public $img;
    public $price;
    public $category;
    public $type;
    public $stars;
    public $status;

    public function __construct($product)
    {
        $this->id = $product['id'];
        $this->title = $product['title'];
        $this->description = $product['description'];
        $this->img = $product['img'];
        $this->price = $product['price'];
        $this->category = $product['category'];
        $this->type = $product['type'];
        $this->stars = $product['stars'];
        $this->status = $product['status'];
    }

    public static function getAllProducts()
    {
        parent::connection('products_tb');
        $allProducts = [];
        if (self::$db_status) { //self se odnosi na klasu, uneti self ili naziv klase je isto.
            foreach (parent::fetchAll() as $product) {
                $allProducts[] = new self($product);
            }
        }
        return $allProducts;
    }

    public static function getAvailableProducts()
    {
        $availabaleProducts = [];
        foreach (self::getAllProducts() as $product) { //self koristimo kada je metoda koju pozivamo staticka.
            if ($product->status == true) {
                $availabaleProducts[] = $product;
            }
        }
        return $availabaleProducts;
    }

    public static function filteredProducts($term, $products = [])
    {
        $filteredProducts = [];
        $products = !empty($products) ? $products : self::getAvailableProducts();
        foreach ($products as $product) {
            if (str_contains(strtolower($product->title), strtolower($term)) || str_contains(strtolower($product->type), strtolower($term))) {
                $filteredProducts[] = $product;
            }
        }
        return $filteredProducts;
    }

    public static function sortProductBy($sortBy, $products = [])
    {
        $products = !empty($products) ? $products : self::getAvailableProducts();
        switch ($sortBy) {
            case self::ORDER_BY_PRICE_ASC:
                usort($products, function ($item1, $item2) {
                    return $item1->price > $item2->price;
                });
                break;
            case self::ORDER_BY_PRICE_DESC:
                usort($products, function ($item1, $item2) {
                    return $item1->price < $item2->price;
                });
                break;
            default:
                break;
        }
        return $products;
    }   

    public static function getPopularProducts() 
        {
        $popular = [];
        $products = self::getAvailableProducts();
        shuffle($products);
        foreach ($products as $product) {
            if($product->stars == 5) {
                $popular[] = $product;
                if(count($popular) >= 4) {
                    break;
                }
            }
        }
        return $popular;
    }

    public static function getOneProductById($id)
    {
        $products = self::getAvailableProducts();
        foreach ($products as $product) {
            if ($product->id == $id) {
                return $product;
            }
        }
    }

    public function getRelatedProducs()
    {
        $related = [];
        $products = self::getAvailableProducts();
        foreach ($products as  $product) {
            if ($product->type == $this->type && $this->id != $product->id) {
                $related[] = $product;
                if (count($related) >= 3) {
                    break;
                }
            }
        }
        return $related;
    }

    public function getPrevProductId()
    {
        $products = self::getAvailableProducts();
        foreach ($products as $key => $product) {
            if ($product->id == $this->id) {
                if ($key == 0) {
                    return $products[count($products) - 1]->id;
                } else {
                    return $products[$key - 1]->id;
                }
            }
        }
    }

    public function getNextProductId()
    {
        $products = self::getAvailableProducts();
        foreach ($products as $key => $product) {
            if ($product->id == $this->id) {
                if ($key == (count($products) - 1)) {
                    return $products[0]->id;
                } else {
                    return $products[$key + 1]->id;
                }
            }
        }
    }
}

?>