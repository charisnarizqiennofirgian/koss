<?php

namespace App\Http\Controllers;
// import traits
use App\Traits\WablasTrait;

use Illuminate\Http\Request;

class FormController extends Controller
{
    // FUNGSI" UNTUK WHATSAPP GATEWAY
    public function index()
    {
        return view('form_send');
    }

    public function store()
    {

        $kumpulan_data = [];
        // dari sini
        $data['phone'] = request('no_wa');
        $data['message'] = request('pesan');
        $data['secret'] = false;
        $data['retry'] = false;
        $data['isGroup'] = false;
        array_push($kumpulan_data, $data);

        $data['phone'] = request('no_wa2');
        $data['message'] = request('pesan');
        $data['secret'] = false;
        $data['retry'] = false;
        $data['isGroup'] = false;
        array_push($kumpulan_data, $data);
        // sampai sini

        WablasTrait::sendText($kumpulan_data);
        return redirect()->back();
    }
}