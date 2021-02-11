<?php


namespace App\Services;

use App\DataObjects\Assets as Data;

class Assets
{

    public static function totals()
    {
        $arr = [];
        exec('ledger bal Assets', $arr);

        return new Data($arr);
    }

}
