<?php

require_once "array.php";

echo "<h5>~ calculate the total number of pieces ~</h5>";
/**
 * Calculati:
 * 1. numarul total de bucati;
 */
$total = 0;
foreach ($produse as $key=>$value) {
    $total += $value["bucati"];
}
echo "In magazin se afla $total articole!";

echo "<hr/>";