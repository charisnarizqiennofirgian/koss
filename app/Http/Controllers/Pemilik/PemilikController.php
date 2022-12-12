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
        ->join('kost', 'kost.id_user', '=', 'users.id')
        ->join('fasilitas', 'fasilitas.id', '=', 'kost.id_fasilitas')
        ->select('*')
        ->where('role', 'pemilik')
        ->get();
        // dd($pemilik_kost);

        // $pemilik_kost = Kost::all();
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
        $pemilik_kost = DB::table('users')
        ->join('kost', 'kost.id_user', '=', 'users.id')
        ->join('fasilitas', 'fasilitas.id', '=', 'kost.id_fasilitas')
        ->select('*')
        ->where('role', 'pemilik')
        ->get();

        $detail = collect($pemilik_kost);
        $d = $detail->firstWhere('id', '==', $id);
        return view('landingpage.detail_kamar_pemilik', compact('d'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pemilik_kost = DB::table('users')
        ->join('kost', 'kost.id_user', '=', 'users.id')
        ->join('fasilitas', 'fasilitas.id', '=', 'kost.id_fasilitas')
        ->select('*')
        ->where('role', 'pemilik')
        ->get();

        $detail = collect($pemilik_kost);
        $d = $detail->firstWhere('id', '==', $id);
        // $kost_pemilik = Kost::find($id);
        return view('landingpage.form_edit_pemilik',compact('d'));
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
        // proses input data kost
        $request->validate([
            'nama_kost' => 'required|max:45',
            'luas_kamar' => 'required|max:45',
            'harga_kamar' => 'required|max:45',
            'keterangan' => 'required|max:45',
            'kota_id' => 'numeric|required',
            'alamat_kost' => 'nullable|string|min:10',
            'id_fasilitas' => 'required|max:45'
        ]);

        /**
         * Lakukan update data dari request form edit
         */
        DB::table('kost')->where('id',$id)->update(
            [
                'nama_kost' => $request->nama_kost,
                'luas_kamar' => $request->luas_kamar,
                'harga_kamar' => $request->harga_kamar,
                'keterangan' => $request->keterangan,
                'alamat_kost' => $request->alamat_kost,
                'kota_id' => $request->kota_id,
                'id_fasilitas' => $request->id_fasilitas,
                'updated_at'=>now(),
            ]);

        return redirect('/dashboard-kos'.'/'.$id)
                        ->with('success','Data kost berhasil di Update!');
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