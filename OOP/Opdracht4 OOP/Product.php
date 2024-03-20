<?php
namespace App\Products;

abstract class Product
{
    protected $name;
    protected $purchasePrice;
    protected $tax;
    protected $description;

    public function __construct($name, $purchasePrice, $tax, $description)
    {
        $this->name = $name;
        $this->purchasePrice = $purchasePrice;
        $this->tax = $tax;
        $this->description = $description;
    }

    public function getInfo(){}
}