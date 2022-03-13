<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\leyend;
use App\Models\location;
class LeyendController extends Controller
{
    //display leyends list
    public function index(){
        $leyends = leyend::all();

        return view('leyends', [
            'leyends' => $leyends,
        ]);
    }

    //display specific leyend
    public function show($id){
        $leyend = leyend::find($id);
        return view('details-leyend', ['leyend' => $leyend]);
    }

    //display leyends list filter
    public function indexFilterbyProvince(){
        $valuef = Input::only('selectfilter');
        if ($valuef == 0) {
            return index();
        }  else {
            $leyends = leyend::all()->where('location', '=', 1);
            return view('leyends', [
                'leyends' => $leyends,
            ]);
        };
    }

    //Add a new leyend
    public function add(){
        return view('add-leyend');
    }

    public function create(){
        $leyend = new leyend();
        $leyend->name = request('name');
        $leyend->image_url = request('image_url');
        $leyend->location = request('location');
        $leyend->description = request('description');

        error_log($leyend);
        error_log("entro");
        return redirect('/');
    }

    // Update specific leyend 
    public function edit($id){
        $leyend = leyend::find($id);
        $locations = location::all();
        return view('edit-leyend', ['leyend' => $leyend], ['locations' => $locations]);
    }
}
