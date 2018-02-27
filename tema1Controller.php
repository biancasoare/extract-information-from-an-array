<?php
/**
 * Created by PhpStorm.
 * User: soarebianca
 * Date: 14/02/2018
 * Time: 11:24
 */


require_once "bazaDeDate.php";

require_once "DetaliiBucati.php";

$detaliiBucati = new DetaliiBucati();


echo "<h5>pct 1</h5>";
echo "In magazin se afla ".$detaliiBucati->totalBucati($produse)." articole."."<br/>";


echo "<h5>pct 2</h5>";
print_r($detaliiBucati->bucatiPeCategorii($produse));
$categorie = $detaliiBucati->bucatiPeCategorii($produse);
echo "<br/><b>Lista bucati/categorie:</b> $categorie[box] bucati box, $categorie[karate] bucati karate, $categorie[mma] bucati mma, $categorie[judo] bucati judo"."<br/>";


echo "<h5>pct 3</h5>";
print_r($detaliiBucati->bucatiPeProdus($produse));
$produs = $detaliiBucati->bucatiPeProdus($produse);
echo "<br/><b>Lista bucati/produs:</b> $produs[manusi] bucati manusi, $produs[tibiere] bucati tibiere, $produs[kimono] bucati kimono, $produs[centuri] bucati centuri, 
$produs[sort] bucati sort, ".$produs["casca protectie"]." bucati casca protectie, $produs[pantaloni] bucati pantaloni";


echo "<h5>pct 4</h5>";
var_dump($detaliiBucati->totaluriPerCategorie($produse));