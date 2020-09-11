<?php
$student  = array(
    "voornaam"    => "cristian",
    "achternaam"  => "jourdan",
    "klas"        => "9A",
    "Leeftijd"    => 16,
    "Woonplaats"  => "aalsmeer"
  );

foreach($student as $key => $value) {
  echo $key." ".$value ;
}

?>