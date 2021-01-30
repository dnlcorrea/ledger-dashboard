<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AssetsController extends Controller
{
    public function index()
    {
        $arr = [];
        exec('ledger bal Assets', $arr);

        return response()->json(
            collect($arr)->map(function ($line) {
                return preg_split('/ +/', trim($line));
            })
        );
    }
}
