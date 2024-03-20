<?php
namespace App\Products;

class ProductList
{
    protected $products = [];

    public function addProduct(Product $product)
    {
        $this->products[] = $product;
    }

    public function displayProducts()
    {
        $table = "Category | Name | Verkoopprijs | Info\n";
        $categories = ['Music', 'Movie', 'Game'];

        foreach ($this->products as $product) {
            $category = $categories[get_class($product) == 'App\Products\Music' ? 0 : (get_class($product) == 'App\Products\Movie' ? 1 : 2)];
            $name = $product->name;
            $verkoopprijs = $product->purchasePrice + $product->tax;
            $info = $product->getInfo();

            $table .= "{$category} | {$name} | {$verkoopprijs} | {$info}\n";
        }

        return $table;
    }
}