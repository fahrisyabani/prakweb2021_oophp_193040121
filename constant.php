<?php

// define tidak bisa disimpan didalam class
// define('NAMA', 'Fahri Syabani');
// echo NAMA;

// echo "<br>";

// const UMUR = 32;
// echo UMUR;


// const bisa disimpan didalam class
// class Coba
// {
//     const NAMA = 'Fahri Syabani';
// }

// echo Coba::NAMA;


// echo __FILE__;


// function coba()
// {
//     return __FUNCTION__;
// }
// echo coba();


class Coba
{
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;
