<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// import models users
use App\Models\User;
use PDF;
use DB;
// buat export excel
use App\Exports\UserExport;
use Maatwebsite\Excel\Facades\Excel;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = ['No', 'Nama', 'Email', 'Role', 'Pekerjaan', 'Dibuat', 'Di Update', 'Aksi'];
        $users = User::all();
        // dd($users);
        return view('admin.users.index', compact('users', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.form');
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
        $user_id = User::find($id);
        return view('admin.users.detail',compact('user_id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user_edit = User::find($id);
        return view('admin.users.form_edit',compact('user_edit'));
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'pekerjaan' => 'required|string|max:255',
            'telp' => 'required|numeric',
        ]);

        // //------------foto lama apabila admin ingin ganti foto kamar-----------
        // $foto = DB::table('kost')->select('foto_kamar')->where('id',$id)->get();
        // foreach($foto as $f){
        //     $namaFileFotoLama = $f->foto_kamar;
        // }

        /**
         * Jika admin ingin ganti foto kamar
         * Jika ada foto lama ada, maka hapus foto lama terlebih dahulu danganti foto baru
         */
        // if(!empty($request->foto_kamar)){
        //     if(!empty($kost_id->foto_kamar)) unlink('admin/img/'.$kost_id->foto_kamar);
        //     $fileName = 'foto_kamar-'.$request->luas_kamar.'.'.$request->foto_kamar->extension();
        //     //$fileName = $request->foto->getClientOriginalName();
        //     $request->foto_kamar->move(public_path('admin/img'),$fileName);
        // }
        /**
         * Jika admin tidak update foto kamar maka, pakai foto lama
         */
        // else{
        //     $fileName = $namaFileFotoLama;
        // }

        /**
         * Lakukan update data dari request form edit
         */
        DB::table('users')->where('id',$id)->update(
            [
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'pekerjaan' => $request->pekerjaan,
            'telp' => $request->telp,
            'password' => $request->password,
            'updated_at'=>now(),
            ]);

        return redirect('/users'.'/'.$id)
                        ->with('success','Data user berhasil di Update!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // sebelum delete foto hapus bersih dulu fisik file fotonya jika ada
        $user = User::find($id);
        if(!empty($user->foto_user)) unlink('admin/img/users/'.$user->foto_user);

        User::where('id', $id)->delete();
        return redirect()->route('users.index')
        ->with('success', 'Data user berhasil dihapus!');
    }

    public function usersPDF(){
        $title = ['NO', 'NAMA', 'EMAIL', 'ROLE','PEKERJAAN', 'AKUN DIBUAT'];
        $users = User::all();
        $pdf = PDF::loadView('admin.users.usersPDF', compact('users', 'title'));
        return $pdf->download('data_users.pdf');
    }


    public function usersExcel(Request $request){
        return Excel::download(new UserExport, 'data_users.xlsx');
    }
}