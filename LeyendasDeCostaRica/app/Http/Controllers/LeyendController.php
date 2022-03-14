<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\leyend;
use App\Models\location;
class LeyendController extends Controller
{
    /***********************
    ******* Displays *******
    ***********************/

    // Display leyends list
    public function index(){
        $leyends = leyend::all();
        $locations = location::all();
        return view('leyends', ['leyends' => $leyends], ['locations' => $locations]);
    }

    // Display specific leyend
    public function show($id){
        $leyend = [];
        $leyend = leyend::find($id);
        $locations = location::all();
        return view('details-leyend', ['leyend' => $leyend], ['locations' => $locations,]);
    }

    // Display leyends list filter
    public function indexFilterbyProvince($id){
        $leyends = leyend::all()
            ->where('location', '=', $id);

        $locations = location::all();
        return view('leyends', ['leyends' => $leyends,], ['locations' => $locations,]);
    }

    /**********************
    ******** CRUDS ********
    **********************/

    // Add a new leyend
    public function add(){
        $locations = location::all();
        return view('add-leyend', ['locations' => $locations,]);
    }
    
    public function store(Request $request){        
        $query = DB::table('leyends')->insert([
            'name' => request('name'),
            'image_url' => request('image_url'),
            'location' => request('location'),
            'description' => request('description'),
        ]);
        if($query){
            return redirect('/');
        }  
    }

    // Delete specific leyend 
    public function delete($id){
        $query = DB::table('leyends')
            ->where('id', $id)
            ->delete();
        if($query){
            return redirect('/');
        }
    }

    // Update specific leyend 
    public function edit($id){
        $leyend = leyend::find($id);
        $locations = location::all();
        return view('edit-leyend', ['leyend' => $leyend], ['locations' => $locations]);
    }

    public function update(Request $request){   
        $query = DB::table('leyends')
            ->where('id', $request->input('id'))
            ->update([
                'name'=>$request -> input('name'),
                'location'=>$request -> input('location'),
                'image_url'=>$request -> input('image_url'),
                'description'=>$request -> input('description')
            ]);
    
            return redirect('/');
    }
}
