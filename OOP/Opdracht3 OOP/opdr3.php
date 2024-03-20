<?php
class Figure {
  protected $vorm;
  protected $kleur;
  public function __construct($vorm, $kleur) {
    $this->vorm = $vorm;
    $this->kleur = $kleur;
  }

  public function generateSVG() {
    return "";
  }
}

class Cirkel extends Figure {
  private $straal;

  public function __construct($kleur, $straal) {
    parent::__construct('cirkel', $kleur);
    $this->straal = $straal;
  }

  public function generateSVG() {
    return "<circle cx='50' cy='50' r='{$this->straal}' fill='{$this->kleur}' />";
  }
}

class Rechthoek extends Figure {
  private $breedte;
  private $hoogte;

  public function __construct($kleur, $breedte, $hoogte) {
    parent::__construct('rechthoek', $kleur);
    $this->breedte = $breedte;
    $this->hoogte = $hoogte;
  }

  public function generateSVG() {
    return "<rect x='120' y='20' width='{$this->breedte}' height='{$this->hoogte}' fill='{$this->kleur}' />";
  }
}

class Vierkant extends Figure {
  private $zijde;

  public function __construct($kleur, $zijde) {
    parent::__construct('vierkant', $kleur);
    $this->zijde = $zijde;
  }

  public function generateSVG() {
    return "<rect x='220' y='20' width='{$this->zijde}' height='{$this->zijde}' fill='{$this->kleur}' />";
  }
}

class Driehoek extends Figure {
  private $zijde1;
  private $zijde2;
  private $zijde3;

  public function __construct($kleur, $zijde1, $zijde2, $zijde3) {
    parent::__construct('driehoek', $kleur);
    $this->zijde1 = $zijde1;
    $this->zijde2 = $zijde2;
    $this->zijde3 = $zijde3;
  }

  public function generateSVG() {
    return "<polygon points='320,20 360,80 280,80' fill='{$this->kleur}' />";
  }
}

$figuren = array(
  new Cirkel("red", 40),
  new Rechthoek("blue", 80, 60),
  new Vierkant("green", 60),
  new Driehoek("orange", 40, 60, 40)
);
?>

<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Drie op een rij</title>
</head>
<body>
  <svg width="400" height="400">
    <?php
    foreach ($figuren as $figuur) {
      echo $figuur->generateSVG();
    }
    ?>
  </svg>
</body>
</html>