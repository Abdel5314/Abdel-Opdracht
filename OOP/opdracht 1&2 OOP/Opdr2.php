<?php
 
class Room {
    private $length;
    private $width;
    private $height;
 
    public function __construct($length, $width, $height) {
        $this->length = $length;
        $this->width = $width;
        $this->height = $height;
    }

    public function getLength() {
        return $this->length;
    }

    public function getWidth() {
        return $this->width;
    }
 
    public function getHeight() {
        return $this->height;
    }
 
    public function getVolume() {
        return $this->length * $this->width * $this->height;
    }
}
 
class House {
    private $rooms = array();
 
    public function addRoom($room) {
        $this->rooms[] = $room;
    }

    public function getRooms() {
        return $this->rooms;
    }
 
    public function getTotalVolume() {
        $totalVolume = 0;
        foreach ($this->rooms as $room) {
            $totalVolume += $room->getVolume();
        }
        return $totalVolume;
    }
 
    public function getPrice() {
        $pricePerCubicMeter = 3000;
        $totalVolume = $this->getTotalVolume();
        return $pricePerCubicMeter * $totalVolume;
    }
}
 
// Maak de kamers
$room1 = new Room(5.2, 5.1, 5.5);
$room2 = new Room(4.8, 4.6, 4.9);
$room3 = new Room(5.9, 2.5, 3.1);

// Maak een huis
$house = new House();
 
// Voeg kamers toe
$house->addRoom($room1);
$house->addRoom($room2);
$house->addRoom($room3);
 
$totalVolume = $house->getTotalVolume();
$price = $house->getPrice();

echo "Inhoud van de kamers: \n";
echo "<br>";

foreach ($house->getRooms() as $room) {
    echo "Lengte: " . $room->getLength() . "m, Breedte: " . $room->getWidth() . "m, Hoogte: " . $room->getHeight() . "m\n";
    echo "<br>";}
    echo "<br>";
echo "Totaal volume is: " . $totalVolume . "m^3\n";
echo "<br>";
echo "<br>";
echo "Prijs van het huis is: " . $price . " euro\n";
?>