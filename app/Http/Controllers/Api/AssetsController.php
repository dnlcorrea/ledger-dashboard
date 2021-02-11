<?php

namespace App\Http\Controllers\Api;

use App\Events\LedgerUpdated;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AssetsController extends Controller
{
    public function index()
    {
       return LedgerUpdated::dispatch("TEST");
    }
}
