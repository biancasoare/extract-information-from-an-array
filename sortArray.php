<?php
/**
 * sortati array-ul in urmatoarea ordine: categorie, produs, bucati.
 */

require_once "array.php";

require_once "writeTable.php";

$ordine = ['categorie','produs','bucati'];

function compara($v1, $v2)
{
    global $ordine;
    foreach ($ordine as $value) {
        if ($v1[$value]>$v2[$value]) {
            $rez = 1;
            break;
        } elseif ($v1[$value]==$v2[$value]) {
            $rez = 0;
        } else {
            $rez = -1;
            break;
        }
    }
    return $rez;
}


function orderProduse(&$array, $sens = "desc")
{
    if ($sens != "asc") {
        $sens = "desc";
    }
    usort($array, "compara");
    if ($sens == "desc") {
        krsort($array);
    }
}


orderProduse($produse,"asc");
write_table($produse, true);