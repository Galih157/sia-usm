<?php

namespace App\Helpers;

class HariHelper
{
    protected static $indexHari = [
        1 => 'Senin',
        2 => 'Selasa',
        3 => 'Rabu',
        4 => 'Kamis',
        5 => 'Jumat',
        6 => 'Sabtu',
        7 => 'Minggu',
    ];

    public static function getSemuaHari()
    {
        return self::$indexHari;
    }

    public static function getNamaHari($indexHari)
    {
        return self::$indexHari[$indexHari];
    }
}
