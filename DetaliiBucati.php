<?php
/**
 * Created by PhpStorm.
 * User: soarebianca
 * Date: 14/02/2018
 * Time: 11:08
 */



class DetaliiBucati
{
    /**
     * Calculati:
     * 1. numarul total de bucati;
     * @param $produse
     * @return int
     */
    public function totalBucati($produse)
    {
        $total = 0;
        foreach ($produse as $key=>$value) {
            $total += $value["bucati"];
        }

        return $total;
    }

    /**
     * Calculati:
     * 2. numarul de bucati pe categorii(ex. 'categ mma 10 bucati' etc);
     * @param $produse
     * @return array
     */
    public function bucatiPeCategorii($produse)
    {
        $totalBucati= array();
        foreach ($produse as $key=>$value) {
            if (!isset($totalBucati[$value['categorie']] )) {
                $totalBucati[$value['categorie']] = 0;
            }
            $totalBucati[$value['categorie']] += $value["bucati"];
        }
        return $totalBucati;
    }

    /**
     * Calculati:
     * 3. numarul de bucati din fiecare produs(ex. produs manusi 390 bucati);
     * @param $produse
     * @return array
     */
    public function bucatiPeProdus($produse)
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

    /**
     * @param $produse
     * @return array
     * Calculati:
     * 4. formati array-uri pentru fiecare categorie: box, mma, karate, judo
     * exemplu:
     * $box = array(
     *                  array('produs'=>'manusi', 'bucati'=>'34'),
     *                  array('produs'=>'sort', 'bucati'=>'19'),
     *                  array('produs'=>'casca protectie', 'bucati'=>'14'),
     *              );
     */
    public function totaluriPerCategorie($produse)
    {
        $perCategorie = [];
        foreach ($produse as $key=>$value) {
            $categorie = $value['categorie'];
            unset($value['categorie']);
            $perCategorie[$categorie][] = $value;
        }
        return $perCategorie;
    }
}

