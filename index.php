<?php

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels great to relax.
|
*/

require __DIR__.'/vendor/autoload.php';

use App\Sort;

$data = [10,2,1,7,8,5,6,9,4,3];
$insertion = Sort::insertion($data);
$bubble = Sort::bubble($data);

print_r($bubble);