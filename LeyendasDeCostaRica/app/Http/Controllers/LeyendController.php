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
        return view('add-leyend');
    }

    public function store(){

        $leyend = new leyend();
        $leyend->name = request('name');
        $leyend->image_url = request('image_url');
        $leyend->location = request('location');
        $leyend->description = request('description');
        error_log(Request::input('name'));
        return redirect('/');
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
            'name' => 'name',
            'description' => 'required',
            'location' => 'location',
            'image_url' => 'image_url',
        ]);
    
        $post->update($request->all());
    
        return redirect()->route('/');
    }
}
