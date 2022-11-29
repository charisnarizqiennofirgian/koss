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
        return redirect()->route('fasilitas.index')
        ->with('success', 'Data fasilitas berhasil dihapus!');
    }

    public function fasilitasPDF(){
        $fass = Fasilitas::orderBy('id', 'DESC')->get();
        // dd($kost);
        $pdf = PDF::loadView('admin.fasilitas.fasilitasPDF', ['fass' => $fass]);
        return $pdf->download('data_fasilitas.pdf');
    }

    public function exportExcel(Request $request){
        return Excel::download(new ExportFasilitas, 'fasilitas.xlsx');
    }
}