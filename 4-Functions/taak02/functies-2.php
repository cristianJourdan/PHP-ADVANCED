<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function rekenUit($getal1,$getal2,$getal3){
    $antwoord = $getal1 + $getal2 + $getal3;
    echo  "Als ik de getallen $getal1, $getal2 en $getal3 bij elkaar optel, is de uitkomst $antwoord";
    return $antwoord;
}
?>   
    <?php rekenUit(6,12,3);?><br>
    <?php rekenUit(78,13,4);?><br>
    <?php rekenUit(6,25,1);?><br>



</body>
</html>