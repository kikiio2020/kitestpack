<?php 

use Kikiio\KiTestPack\Greetr;

\Route::get('kitestpackpack/{name}', function($name){
    $g = new Greetr();
    return $g->greet($name);
});