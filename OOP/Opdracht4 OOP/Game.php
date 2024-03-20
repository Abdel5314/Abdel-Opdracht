<?php
namespace App\Products;

class Game extends Product
{
    protected $genre;
    protected $minimumHardwareRequirements;

    public function __construct($name, $purchasePrice, $tax, $description, $genre, $minimumHardwareRequirements)
    {
        parent::__construct($name, $purchasePrice, $tax, $description);
        $this->genre = $genre;
        $this->minimumHardwareRequirements = $minimumHardwareRequirements;
    }

    public function getInfo()
    {
        $info = "Genre: {$this->genre}\n";
        $info .= "Minimum Hardware Requirements:\n";
        $info .= "- {$this->minimumHardwareRequirements}\n";

        return $info;
    }
}