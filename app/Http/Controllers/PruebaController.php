<?php

namespace App\Http\Controllers;

class PruebaController extends Controller {
    public function nombre($n){
        return "Hola ".$n;
    }


}