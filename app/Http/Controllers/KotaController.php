<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// import models
use App\Models\Kota;

class KotaController extends Controller
{
     /**
      * Controller untuk APIs data kota
      */
    //   ===================================
    public function kotaIndex(){
        $kota = Kota::all();

        if($kota){
            $data = [
                "message" => "Get All Resource - Kota",
                "data" => $kota 
            ];
            return response()->json($data, 200);
        }else{
            $data = [
                "message" => "Data Not Found",
                 
            ];
            return response()->json($data, 404);
        }
        
    }

    public function kotaShow($id){
        $kota = Kota::find($id);

        if($kota){
            $data = [
                "message" => "Get All Resource - Kota",
                "data" => $kota 
            ];
            return response()->json($data, 200);
        }else{
            $data = [
                "message" => "Data Not Found",
                 
            ];
            return response()->json($data, 404);
        }
        
    }

    public function kotaStore(Request $request){
        $input = [
            'nama_kota' => $request->nama_kota
        ];

        $kota = Kota::create($input);
        
            $data = [
                "message"=>"Kota is Created!",
                "data" => $kota,
            ];
            return response()->json($data, 201);
    }

    public function kotaUpdate(Request $request, $id){
        $kota = Kota::find($id);

        if($kota){
            $input = [
                'kota' => $request->kota ?? $kota->kota,
                'created_at' => $request->created_at ?? $kota->created_at,
                'updated_at' => $request->updated_at ?? $kota->updated_at,
            ];
            $kota->update($input);

            $data = [
                'message' => 'Resource is update successfully',
                'data' => $kota
            ];

            return response($data, 200);
        }else{
            $data = [
                'message' => 'Resource not found',
            ];
            return response()->json($data, 404);
        }
    }

    public function kotaDestroy($id){
        $kota = Kota::find($id);

        if($kota){
        $kota->delete();

            $data = [
                "message" => "Resource is delete successfully",
            ];
        } else{
            $data = [
                'message' => 'Resource not found',
            ];
        
            return response()->json($data, 404);
        }
            return response()->json($data, 200);
    }
    

    // ======================================

    public function index(){
        $kota = Kota::all();
        $title = ['No', 'Kota'];
        // dd($kota);
        return view('admin.kota.index', compact('kota', 'title'));
    }

    public function create(){
        return view('admin.kota.form');
    }
}