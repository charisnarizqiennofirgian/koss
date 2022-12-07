<?php

namespace App\Http\Controllers\Pemilik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
/**
 * import query builder
 * import models
 * - kost
 * - user/role
 * - rekomendasi kost
 */
use DB;
use App\Models\Kost;
use App\Models\User;
use App\Models\RekomendasiKost;

class PemilikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pemilik_kost = DB::table('users')
        ->leftJoin('kost', 'kost.id_user', '=', 'users.id')
        ->leftJoin('rekomendasi_kost', 'rekomendasi_kost.id', '=', 'users.id')
        ->select('users.name', 'users.role', 'users.telp', 'kost.nama_kost', 'kost.luas_kamar', 'kost.harga_kamar', 'kost.alamat_kost', 'kost.keterangan', 'kost.foto_kamar', 'kost.kota_id')
        ->where('role', 'pemilik')
        ->get();
        // dd($pemilik_kost);
        return view('landingpage.dashboard-kos', compact('pemilik_kost'));
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
}