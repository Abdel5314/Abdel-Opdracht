<?php
namespace App\Products;

class Movie extends Product
{
    protected $quality;

    public function __construct($name, $purchasePrice, $tax, $description, $quality)
    {
        parent::__construct($name, $purchasePrice, $tax, $description);
        $this->quality = $quality;
    }

    public function getInfo()
    {
        return "Quality: {$this->quality}\n";
    }
}