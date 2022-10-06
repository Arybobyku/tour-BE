<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\TouristAttraction;
use Illuminate\Http\Request;

class TouristAttractionController extends Controller
{

    public function add(Request $request){
        $request->validate([
            'id_kabupaten'=>['required','string','max:255'],
            'name'=>['required','string','max:255'],
            'description'=>['required','string','max:255'],
            'location'=>['required','string','max:255'],
            'latitude'=>['required','string','max:255'],
            'longitude'=>['required','string','max:255'],
        ]);


        $image = $request->file('image')->store('images');
        $file = $request->file('image') ;
        $destinationPath = public_path().'/images' ;
        $file->move($destinationPath,$image);
    

       $touristAttraction =  TouristAttraction::create([
            'id_kabupaten'=>$request->id_kabupaten,
            'name'=>$request->name,
            'description'=>$request->description,
            'location'=>$request->location,
            'latitude'=>$request->latitude,
            'longitude'=>$request->longitude,
            'image'=>$image
        ]);
        return ResponseFormatter::success(
            $touristAttraction,
            "Success post tourist attraction"
        );
    }

    public function all(Request $request){
        $id = $request->input('id');

        if($id){
            $touristAttraction = TouristAttraction::all()->find($id);
            if($touristAttraction){
                return ResponseFormatter::success($touristAttraction,"Success get disease");
            }else{
                return ResponseFormatter::error(null,"id not found");
            }
        }

        $touristAttraction = TouristAttraction::all();

        return ResponseFormatter::success($touristAttraction,"success get tourist attraction");

    }
}
