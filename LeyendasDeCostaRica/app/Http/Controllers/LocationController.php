<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\location;

class LocationController extends Controller
{
    /***********************
    ******* Displays *******
    ***********************/

    // Get All Data

    public function getAlllocation(){
        $locations = location::all();
        $response = [
            'locations' => $locations
        ];
        return response()->json($response);
    }

    public function getlocationById($id){
        return location::find($id);
    }

    public function getlocationByName($name){
        return location::all()
        ->where('name', '=', $name);
    }

    // Display index information
    public function index(){
        return ([
            'locations' =>$this->getAlllocation()
        ]);
    }
}
