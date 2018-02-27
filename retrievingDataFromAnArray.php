<?php

echo "<h4>~  ~</h4>";

$persoane = array(
    8 => array (
        'username' => 'ion',
        'email' => 'ion@gmail.com',
        'varsta' => 29
    ),

    10 => array (
        'username' => 'maria',
        'email' => 'maria@gmail.com',
        'varsta' => 53
    ),

    12 => array (
        'username' => 'bianca',
        'email' => 'bianca@gmail.com',
        'varsta' => 30
    ),

    15 => array (
    'username' => 'catalin',
    'email' => 'catalin@gmail.com',
    'varsta' => 40
    )

);



// functia afiseaza tabel cu detaliile unei singure persoane
/**
 * @param $array
 * @param $cheie
 * @return string
 */
function afiseazaOPersoane($array, $cheie)
{
    foreach ($array as $key => $value) {
        if ($cheie == $key) {
            $tabel = '<table border = "1">';
            foreach ($value as $k=>$v) {
                $tabel .= '<tr>';
                $tabel .= '<td>' . $k . '</td>';
                $tabel .= '<td>' . $v . '</td>';
                $tabel .= '</tr>';
            }
            $tabel .= '</table>';
        }
    }
    return $tabel;
}



// functia afiseaza tabel cu toate persoanele din arrayul $persoane plus inca o coloana noua
/**
 * @param $array
 * @return string
 */
function afiseazaPersoane($array)
{
    /*foreach($array as $key => $detalii) {
        $array[$key]['detalii'] = '<a href="' . $_SERVER['PHP_SELF'] . '?id='.$key.'">detalii</a>';
    }*/

    $header = true;
    $tabel = '<table border = "1">';
    foreach ($array as $key=>$value) {

        if ($header) {
            $tabel .= '<tr>';
            foreach ($value as $k=>$v) {
                $tabel .= '<th>' . $k . '</th>';
            }
            $tabel .= '<th>detalii</th>';
            $tabel .= '</tr>';
            $header = false;
        }

        $tabel .= '<tr>';
        foreach ($value as $v) {
            $tabel .= '<td>' . $v . '</td>';
        }

        $tabel .= '<td><a href="' . $_SERVER['PHP_SELF'] . '?id='.$key.'">detalii</a></td>';
        $tabel .= '</tr>';

    }
    $tabel .= '</table>';
    return $tabel;
}


// preluam $id din GET
if (isset($_GET['id'])) {
    $id = $_GET["id"];
    //var_dump($persoane[$id]);
    echo afiseazaOPersoane($persoane,$id);
    echo '<a href="' . $_SERVER['PHP_SELF'] . '">back</a>';
} else {
    echo afiseazaPersoane($persoane);
}



























