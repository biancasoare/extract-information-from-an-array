<?php

require_once "array.php";

/**
 * Calculati:
 * 3. numarul de bucati din fiecare produs(ex. produs manusi 390 bucati);
 */
echo "<h5>~ calculate the number of pieces in each product ~</h5>";


/**
 * @param $produse
 * @return array
 */
function bucatiPeProdus($produse)
{
    $totalBucati = [];
    foreach ($produse as $key=>$value) {
        if (!isset($totalBucati[$value["produs"]])) {
            $totalBucati[$value["produs"]] = 0;
        }
        $totalBucati[$value["produs"]] += $value["bucati"];
    }
    return $totalBucati;
}
var_dump(bucatiPeProdus($produse));

$produs = bucatiPeProdus($produse);
echo "<br/><b>Lista bucati/produs:</b> $produs[manusi] bucati manusi, $produs[tibiere] bucati tibiere, $produs[kimono] bucati kimono, $produs[centuri] bucati centuri, 
$produs[sort] bucati sort, ".$produs["casca protectie"]." bucati casca protectie, $produs[pantaloni] bucati pantaloni";
//o forma mai simpla de a ne referi direct la fiecare tip de produs:
/*
foreach ($produs as $key=>$value) {
    $$key = $value;
}
echo $kimono;
*/




