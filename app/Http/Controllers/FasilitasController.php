<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// import model Fasilitas
use App\Models\Fasilitas;
// import DB, untuk update pakai query builder
use DB;
use PDF;
use App\Exports\ExportFasilitas;
use Maatwebsite\Excel\Facades\Excel;

class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     /**
      * Controller untuk APIs data fasilitas
      */
    //   ===================================
    public function fasilitasIndex(){
        $fasilitas = Fasilitas::all();

        if($fasilitas){
            $data = [
                "message" => "Get All Resource - Fasilitas",
                "data" => $fasilitas 
            ];
            return response()->json($data, 200);
        }else{
            $data = [
                "message" => "Data Not Found",
                 
            ];
            return response()->json($data, 404);
        }
        
    }

    public function fasilitasShow($id){
        $fasilitas = Fasilitas::find($id);

        if($fasilitas){
            $data = [
                "message" => "Get All Resource - Fasilitas",
                "data" => $fasilitas 
            ];
            return response()->json($data, 200);
        }else{
            $data = [
                "message" => "Data Not Found",
                 
            ];
            return response()->json($data, 404);
        }
        
    }

    public function fasilitasStore(Request $request){
        $input = [
            'fasilitas' => $request->fasilitas,
        ];

        $fasilitas = Fasilitas::create($input);
            $data = [
                "message"=>"Fasilitas is Created!",
                "data" => $fasilitas,
            ];
            return response()->json($data, 201);
    }

    public function fasilitasUpdate(Request $request, $id){
        $fasilitas = Fasilitas::find($id);

        if($fasilitas){
            $input = [
                'fasilitas' => $request->fasilitas ?? $fasilitas->fasilitas,
                'created_at' => $request->created_at ?? $fasilitas->created_at,
                'updated_at' => $request->updated_at ?? $fasilitas->updated_at,
            ];
            $fasilitas->update($input);

            $data = [
                'message' => 'Resource is update successfully',
                'data' => $fasilitas
            ];

            return response($data, 200);
        }else{
            $data = [
                'message' => 'Resource not found',
            ];
            return response()->json($data, 404);
        }
    }

    public function fasilitasDestroy($id){
        $fasilitas = Fasilitas::find($id);

        if($fasilitas){
        $fasilitas->delete();

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

    
    public function index()
    {
        $fass = Fasilitas::all();
        return view('admin.fasilitas.fasilitas', compact('fass'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.fasilitas.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'fasilitas' => 'required|max:45'
        ]);
      
        $fasilitas = Fasilitas::create($request->all());
       
        return redirect()->route('fasilitas.index')
                        ->with('success','Fasilitas Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fasilitas_edit = Fasilitas::find($id);
        return view('admin.fasilitas.form_edit',compact('fasilitas_edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $request->validate([
             'fasilitas' => 'required|max:45'
         ]);

         DB::table('fasilitas')
         ->where('id',$id)
         ->update(['fasilitas' =>$request->fasilitas,'updated_at'=>now(),]);

         return redirect()->route('fasilitas.index')->with(['success' => 'Data Berhasil Diubah!']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fasilitas = Fasilitas::find($id);
        Fasilitas::where('id', $id)->delete();

        return back()
        ->with('success', 'Data fasilitas berhasil dihapus!');
    }

    public function fasilitasPDF(){
        $fass = Fasilitas::orderBy('id', 'DESC')->get();
        // dd($kost);
        $pdf = PDF::loadView('admin.fasilitas.fasilitasPDF', compact('fass'));
        return $pdf->download('data_fasilitas.pdf');
    }

    public function fasilitasExcel(Request $request){
        return Excel::download(new ExportFasilitas, 'fasilitas.xlsx');
    }
}