<?php


function write_table($arr, $header = false) {

    $rez = '<table border="1">' . "\n";

    if ($arr && $header) {
        array_unshift($arr, array_keys(current($arr)));
    }

    foreach ($arr as $key => $val) {
        // write table rows
        $rez .= "\n" . '<tr>' . "\n";

        foreach ($val as $v) {
            $rez .= '<td>' . $v . '</td>';
        }

        $rez .= "\n" . '</tr>' . "\n";
        // end table rows
    }

    $rez .= '</table>';

    echo $rez;
}