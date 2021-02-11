<?php


namespace App\DataObjects;

class Assets
{
   public $assets;

   public function __construct($assets)
   {
       $this->assets = collect($assets)->map(function ($line) {
           return preg_split('/ +/', trim($line));
       });
   }
}
