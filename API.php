<?php
$Jan = $_GET ["length"];
header('Content-Type: application/json');
$MerelArray = []; //aray
for ($i = 0; $i<$Jan; $i++){ // 25 keer vanwege 25 nummers
    
    $randomNumbers = mt_rand (0,150);
    $NumberArray = [$i,$randomNumbers];
    array_push($MerelArray,$NumberArray); // random nummers te verkrijgen
}

echo json_encode($MerelArray); //om deze nummers te pushen

?>
