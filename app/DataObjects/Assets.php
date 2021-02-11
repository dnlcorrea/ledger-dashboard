<?php


namespace App\DataObjects;

class Assets
{
   public $assets;

   public function __construct($assets)
   {
       $this->assets = collect($assets)->map(function ($line) {
           [$asset, $value] = preg_split('/ +/', trim($line));

           return [$asset, $value];
       })->reject(function ($line) {
           return in_array('--------------------', $line);
       });
   }
}
