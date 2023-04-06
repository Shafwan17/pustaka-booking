<?php

class Model_aritmatika extends CI_Model
{
    public $nilai1, $nilai2, $hasil;

    public function penjumlahan($n1, $n2)
    {
        $nilai1 = $n1;
        $nilai2 = $n2;
        $hasil = $nilai1 + $nilai2;
        return $hasil;
    }
}
        