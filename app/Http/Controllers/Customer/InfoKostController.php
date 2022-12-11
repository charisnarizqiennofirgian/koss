<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// import model kost
use App\Models\Kost;
use App\Models\Fasilitas;
// import db dan pdf
use DB;
use PDF;

class InfoKostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $kost = Kost::orderBy('id', 'DESC')->get();
        // $d_fasilitas = Fasilitas::all();
        // return view('landingpage.info_kamar', compact('kost', 'd_fasilitas'));
        $rekomendasi = DB::table('rekomendasi_kost')->join('kost', 'rekomendasi_kost.id', '=' , 'kost.id')->get();

        $kost = Kost::all();
        return view('landingpage.home', compact('kost', 'rekomendasi'));
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
        // $d_fasilitas = Fasilitas::all();
        // $kost_id = Kost::find($id);
        

        $data = Kost::select('kost.id', 'kost.nama_kost', 'kost.luas_kamar', 'kost.harga_kamar', 'kost.alamat_kost', 'kost.keterangan', 'kost.id_fasilitas', 'kost.foto_kamar', 'kost.kota_id', 'kost.id_user', 'fasilitas.fasilitas')
        	->join('fasilitas', 'fasilitas.id', '=', 'kost.id_fasilitas')
        	->get();
        // dd($data);
        $kost_id = collect($data)->firstWhere('id', '==' , $id);
        // dd($kost_id);
        return view('landingpage.detail_kamar_customer',compact('kost_id'));
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
}