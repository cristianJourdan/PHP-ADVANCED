<?php
function schrijfkleur($skleur,$acherkleur){

    echo   "<div style=\"color:$acherkleur;\">" . 'Deze tekst is in de kleur' . " " . $skleur . "</div>" ;
    
}
    schrijfkleur("rood","red");
    schrijfkleur("blauw","blue");
    schrijfkleur("groen","green");
    schrijfkleur("geel","yellow");

?>