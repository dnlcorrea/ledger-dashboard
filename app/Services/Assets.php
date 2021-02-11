<?php


namespace App\Services;

class Assets
{

    public static function totals()
    {
        exec('ledger --no-total bal Assets', $arr);

        $final = [];

        foreach ($arr as $line) {
            [$value, $asset] = preg_split('/  +/', trim($line));

            $final[$asset] = $value;
        }

        return $final;
    }
}
