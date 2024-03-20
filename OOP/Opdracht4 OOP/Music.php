<?php
namespace App\Products;

class Music extends Product
{
    protected $artist;
    protected $tracks = [];

    public function __construct($name, $purchasePrice, $tax, $description, $artist)
    {
        parent::__construct($name, $purchasePrice, $tax, $description);
        $this->artist = $artist;
    }

    public function addTrack($track)
    {
        $this->tracks[] = $track;
    }

    public function getInfo()
    {
        $info = "Artist: {$this->artist}\n";
        $info .= "Tracks:\n";
        foreach ($this->tracks as $track) {
            $info .= "- {$track}\n";
        }

        return $info;
    }
}