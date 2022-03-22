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

    // Get All Data

    public function getAllleyends(){
        $leyends = leyend::all();
        $response = [
            'leyends' => $leyends
        ];
        return response()->json($response);
    }

    // Get All Data By Name Or ID
    public function getleyendsById($id){
        return leyend::find($id);
    }

    public function getAllleyendsbyProvince($location){
        return leyend::all()
            ->where('location', '=', $location);
    }

    // Display index information
    public function index(){
        return ([
            'leyends' =>$this->getAllleyends()
        ]);
    }

    // Display index information - leyend by ID /for the update form
    public function indexFilterByID($id){
        return ([
            'leyend' =>$this->getleyendsById($id)
        ]);
    }

    // Display index information - Filter leyend by province
    public function indexFilterByProvince($location){
        return ([
            'leyend' =>$this->getAllleyendsbyProvince($location)
        ]);
    }

    /**********************
    ******** CRUDS ********
    **********************/

    // Add a new leyend    
    public function postLeyend(Request $request){       
        $leyend = new Leyend(); 
        $leyend -> content = $request->input('name', 'description', 'image_url', 'location');
        $leyend -> save();
        return response()->json(['leyend' => $leyend], 201);
    }

    // Delete specific leyend 
    public function deleteLeyend($id){
        $leyend = Leyend::find($id);
        $leyend->delete();
        return response()->json(['message' => 'Leyenda Eliminada']);
    }

    // Update specific leyend 
    public function putLeyend(Request $request, $id){   
        $leyend = leyend::find($id);
        if (!$leyend) {
            $this->postLeyend($request);
        }
        $leyend->content = $request->input('content');
        $leyend->save();
        return response()->json(['leyend' => $leyend], 200);
    }
}
