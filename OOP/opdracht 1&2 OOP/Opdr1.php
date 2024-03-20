<?php
class Huis {
    private $floor;
    private $rooms;
    private $width;
    private $height;
    private $depth;
    private $volume;

    public function __construct($floor, $rooms, $width, $height, $depth) {
        $this->floor = $floor;
        $this->rooms = $rooms;
        $this->width = $width;
        $this->height = $height;
        $this->depth = $depth;
        $this->setVolume();
    }

    private function setVolume() {
        $this->volume = $this->width * $this->height * $this->depth;
    }

    public function getPrice() {
        return 1000 * $this->volume;
    }

    public function getHouse() {
        return "Dit huis heeft " . $this->floor . " verdiepingen, " . $this->rooms . " kamers en heeft een volume van " . $this->volume . " m3";
    }
}


$huis1 = new House(2, 4, 5, 5, 5);
$huis2 = new House(3, 6, 6, 6, 6);
$huis3 = new House(2, 3, 4, 4, 4);

echo $huis1->getHouse() . "<br>";
echo "De prijs van het huis word: " . $huis1->getPrice() . "<br>";

echo $huis2->getHouse() . "<br>";
echo "De prijs van het huis word: " . $huis2->getPrice() . "<br>";

echo $huis3->getHouse() . "<br>";
echo "De prijs van het huis word: " . $huis3->getPrice() . "<br>";

?>