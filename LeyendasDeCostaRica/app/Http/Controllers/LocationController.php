<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationController extends Controller
{
        //display leyends list
        public function index(){
            $leyends = leyend::all();
    
            return ['leyends' => $leyends,];
        }
}
