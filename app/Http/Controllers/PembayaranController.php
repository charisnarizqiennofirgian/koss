<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// import model pembayaran
use App\Models\Pembayaran;
use DB;
use PDF;
use App\Exports\ExportPembayaran;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\User;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     /**
     * Controller untuk APIs pembayaran
     */
    // ======================================

    public function pembayaranIndex(){
        $pembayaran = Pembayaran::all();

        if($pembayaran){
            $data = [
                "message" => "Get All Resource - Pembayaran",
                "data" => $pembayaran 
            ];
            return response()->json($data, 200);
        }else{
            $data = [
                "message" => "Data Not Found",
                 
            ];
            return response()->json($data, 404);
        }
        
    }

    public function pembayaranShow($id){
        $pembayaran = Pembayaran::find($id);

        if($pembayaran){
            $data = [
                "message" => "Get All Resource - Pembayaran",
                "data" => $pembayaran 
            ];
            return response()->json($data, 200);
        }else{
            $data = [
                "message" => "Data Not Found",
                 
            ];
            return response()->json($data, 404);
        }
    }

    // ============================================

     
    public function index()
    {
        // $pembayaran = Pembayaran::select('*')
        // ->join('users', 'users.id', '=', 'pembayaran.id_user')
        // ->join('kost', 'kost.id', '=', 'pembayaran.id_kamar')
        // ->get();

        $pembayaran = Pembayaran::all();
        // dd($pembayaran);
        return view('admin.pembayaran.pembayaran', compact('pembayaran'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //lakukan insert data dari request form
        DB::table('pembayaran')->insert(
            [
                'kode_bayar' => $request->kode_bayar,
                'tanggal_masuk' => $request->tanggal_masuk,
                'tanggal_keluar' => $request->tanggal_keluar,
                'total_bayar' => $request->total_bayar,
                'id_kamar' => $request->id_kamar,
                'id_user' => $request->id_user,
                'created_at'=>now()
            ]);
       
        return back()->with('success','Pembayaran sedang di proses silahkan bayar sesuai total pembayaran!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pembayaran_id = Pembayaran::all();
        $data = collect($pembayaran_id)->firstWhere('id', '==', $id);
        return view('admin.pembayaran.detailPembayaran',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        // dd($id);
        $test = DB::table('pembayaran')
        ->where('id', $id)
        ->update(['status_pembayaran'=>$request->status_pembayaran]);
        // dd($test);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fasilitas = Pembayaran::find($id);
        Pembayaran::where('id', $id)->delete();

        return back()
        ->with('success', 'Data pembayaran berhasil dihapus!');
    }

    public function pembayaranPDF(){
        $title = ['No', 'Kode Bayar', "Id Kamar", "Id User", "Tanggal Masuk", "Tanggal Keluar", "Total Bayar"];
        $pembayaran = Pembayaran::orderBy('id', 'DESC')->get();
        // $d_fasilitas = Fasilitas::all();
        // dd($kost);
        $pdf = PDF::loadView('admin.pembayaran.pembayaranPDF', compact('pembayaran' , 'title' ));
        return $pdf->download('data_pembayaran.pdf');
    }

    public function pembayaranExcel(Request $request){
        return Excel::download(new ExportPembayaran, 'pembayaran.xlsx');
    }
}