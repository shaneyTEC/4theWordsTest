<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\location;

class LocationController extends Controller
{
        //display leyends list
        public function index(){
            $locations = location::all();
            return ['locations' => $locations,];
        }
}
