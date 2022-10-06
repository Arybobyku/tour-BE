<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Kabupaten;
use Illuminate\Http\Request;

class KabupatenController extends Controller
{
    public function add(Request $request){
        $request->validate([
            'name'=>['required','string','max:255'],
        ]);

       $kabupaten =  Kabupaten::create([
            'name'=>$request->name,
        ]);
        return ResponseFormatter::success(
            $kabupaten,
            "Success post kabupaten"
        );
    }

    public function all(Request $request){
        $id = $request->input('id');

        if($id){
            $kabupaten = Kabupaten::all()->find($id);
            if($kabupaten){
                return ResponseFormatter::success($kabupaten,"Success get disease");
            }else{
                return ResponseFormatter::error(null,"id not found");
            }
        }

        $kabupaten = Kabupaten::all();

        return ResponseFormatter::success($kabupaten,"success get kabupaten");

    }

}
