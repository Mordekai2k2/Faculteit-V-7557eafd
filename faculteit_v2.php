<?php
echo "was is t getal boi\n";
$Numbruv = readline();
if (is_numeric($Numbruv)) {
    $totaal = 1;
    $i = 1;
    while ($i <= ($Numbruv-1)) {
        $i++;
        $totaal = $i * $totaal;
    }
    echo "De faculteit van ", $Numbruv, " is ", $totaal;
}
else {
    echo "AH HELL NAH", exit();
}