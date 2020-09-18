<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persons;

class CompareController extends Controller
{
    public function getAll(Request $request){
        $persons = Persons::all();

        return response()->json($persons);
    }
    
    public function getCompare(Request $request){
        $persons = Persons::all();
        $busqueda = $request->nombres;
        foreach ($persons as $key => $value) {
            similar_text($busqueda,$value->nombre,$percent);
            $value->coincidencia =round($percent);
            $result[] = $value;
        }
        return response()->json($result);
    }
    
    public function getComparePorc(Request $request){
        $persons = Persons::all();
        $busqueda = $request->nombres;
        $result=[];
        foreach ($persons as $key => $value) {
            similar_text($busqueda,$value->nombre,$percent);
            $value->coincidencia =round($percent);
            if ($request->porcentaje == $value->coincidencia) {
                $result[] = $value;
            }
            
        }
        return response()->json($result);
    }
}
