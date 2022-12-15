<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RekomendasiKost;
use App\Models\Kost;
use App\Models\User;

class RekomendasikanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = ['No', 'Kost', 'Pemilik', 'Aksi'];
        $rekomendasi = RekomendasiKost::select('*')
                                        ->join('kost', 'kost.id', '=', 'rekomendasi_kost.kost_id')
                                        ->join('users', 'users.id', '=', 'kost.id_user')->get();
        // dd($rekomendasi);
        return view('admin.rekomendasi.rekomendasi_index', compact('rekomendasi', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rekomendasi = RekomendasiKost::all();
        $kost = Kost::all();
        // dd($kost);
        return view('admin.rekomendasi.form', compact('rekomendasi', 'kost'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request);
        RekomendasiKost::create($request->all());

        return redirect()->route('rekomendasi.index')
                        ->with('success','Kost Berhasil Direkomendasikan');
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
        RekomendasiKost::find($id);
        RekomendasiKost::where('id', $id)->delete();
        return redirect()->route('rekomendasi.index')
        ->with('success', 'Data rekomendasi kost berhasil dihapus!');
    }
}