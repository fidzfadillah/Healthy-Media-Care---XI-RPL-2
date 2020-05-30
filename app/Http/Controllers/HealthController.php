<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HealthController extends Controller
{
    public function indexKontak()
    {
        $data['call_center'] = \DB::table('t_callcenter')->get();
        $data['rs_rujukan'] = \DB::table('t_rs_rujukan')->get();

        return view('kontak', $data);
    }
}
