<?php

require_once "array.php";

echo "<h5>~ calculate the number of pieces per category ~</h5>";
/**
 * Calculati:
 * 2. numarul de bucati pe categorii(ex. 'categ mma 10 bucati' etc);
 */

/**
 * @param $produse
 * @return array
 */
function bucatiPeCategorii($produse)
{
    $totalBucati = array();
    foreach ($produse as $key=>$value) {
        if (!isset($totalBucati[$value['categorie']] )) {
            $totalBucati[$value['categorie']] = 0;
        }
        $totalBucati[$value['categorie']] += $value["bucati"];
    }
    return $totalBucati;
}
var_dump(bucatiPeCategorii($produse));

$categorie = bucatiPeCategorii($produse);
echo "<br/><b>Lista bucati/categorie:</b> $categorie[box] bucati box, $categorie[karate] bucati karate, $categorie[mma] bucati mma, $categorie[judo] bucati judo";
/*
foreach ($categorie as $key=>$value) {
    $$key = $value;
}
echo $box;
*/


