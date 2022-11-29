<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// import model pembayaran
use App\Models\Pembayaran;
// use DB;
use PDF;
use App\Exports\ExportPembayaran;
use Maatwebsite\Excel\Facades\Excel;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     
    public function index()
    {
        $pembayaran = Pembayaran::all();
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
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