<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Material_enter;

use Yajra\DataTables\Contracts\DataTable;
use Yajra\DataTables\Facades\DataTables;

class EventController extends Controller
{
    //
    public function index(){

        return view('welcome');
    }

    public function materials(){
        // aula eloquent hora de codar
        $material_enters = Material_enter::all();

        return view('materials', ['material_enters' => $material_enters]);
    }

    public function create_material_view(){
        return view('create/material_enter');
    }

    public function material_enter(Request $request){

        $material_enter = new Material_enter;

        $material_enter->po_number = $request->po_number; 
        $material_enter->order_number = $request->order_number;
        $material_enter->side_mark = $request->side_mark;
        $material_enter->carrier = $request->carrier;
        $material_enter->roll_number = $request->roll_number;
        $material_enter->width = $request->width;
        $material_enter->length = $request->length;
        $material_enter->qnt_sqft = $request->qnt_sqft;
        $material_enter->store = $request->store;
        $material_enter->material_type = $request->material_type;
        $material_enter->Description = $request->Description;

        $material_enter->save();

        return redirect('create/material_enter');
    }

    public function material_view(){
        return view('data_view/view_material_enter');
    }

    public function material(){

        // $material = Material_enter::select();

        // return DataTables::of($material)->make(true);
        return Array();
    }
}
