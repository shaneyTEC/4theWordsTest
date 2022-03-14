<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\leyend;
use App\Models\location;
class LeyendController extends Controller
{
    //display leyends list
    public function index(){
        $leyends = leyend::all();
        $locations = location::all();
        return view('leyends', ['leyends' => $leyends,], ['locations' => $locations,]);
    }

    //display specific leyend
    public function show($id){
        $leyend = [];
        $leyend = leyend::find($id);
        $locations = location::all();
        return view('details-leyend', ['leyend' => $leyend], ['locations' => $locations,]);
    }

    //display leyends list filter
    public function indexFilterbyProvince($id){
        $leyends = leyend::all()->where('location', '=', $id);
        $locations = location::all();
        return view('leyends', ['leyends' => $leyends,], ['locations' => $locations,]);
    }

    //Add a new leyend
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
            //return redirect('/');
        }
        
    }

    public function destroy(Post $post)
    {
        $post->delete();
    
        return redirect()->route('/');
    }

    // Update specific leyend 
    public function edit($id){
        $leyend = leyend::find($id);
        $locations = location::all();
        return view('edit-leyend', ['leyend' => $leyend], ['locations' => $locations]);
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'name'=>'name',
            'description'=>'required',
            'location'=>'location',
            'image_url'=>'image_url',
        ]);
    
        $post->update($request->all());
    
        return redirect()->route('/');
    }
}
