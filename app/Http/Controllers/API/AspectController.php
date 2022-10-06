<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Aspect;
use Illuminate\Http\Request;

class AspectController extends Controller
{
    public function add(Request $request){
        $request->validate([
            'name'=>['required','string','max:255'],
        ]);

       $aspect =  Aspect::create([
            'name'=>$request->name,
        ]);
        return ResponseFormatter::success(
            $aspect,
            "Success post aspect"
        );
    }

    public function all(Request $request){
        $id = $request->input('id');

        if($id){
            $aspect = Aspect::all()->find($id);
            if($aspect){
                return ResponseFormatter::success($aspect,"Success get disease");
            }else{
                return ResponseFormatter::error(null,"id not found");
            }
        }

        $aspect = Aspect::all();

        return ResponseFormatter::success($aspect,"success get aspect");

    }
}
