<?php

require_once "array.php";

echo "<h5>~ make arrays for each category: box, mma, karate, judo ~</h5>";

/**
 * @param $produse
 * @return array
 */
function totaluriPerCategorie($produse)
{
    $perCategorie = [];
    foreach ($produse as $key=>$value) {
        $categorie = $value['categorie'];
        unset($value['categorie']);
        $perCategorie[$categorie][] = $value;
    }
    return $perCategorie;
}
var_dump(totaluriPerCategorie($produse));

//listare array cu detalii doar pt o anumita categorie de sport
$perCategorii = totaluriPerCategorie($produse);
foreach ($perCategorii as $key => $categorie) {
    $$key = $categorie;
}
var_dump($judo);
var_dump($mma);




