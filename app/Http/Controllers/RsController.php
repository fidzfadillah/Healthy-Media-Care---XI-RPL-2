<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RsController extends Controller
{
    public function index()
    {
      $data['rs'] = \DB::table('t_rs_rujukan')->get();
      return view('adminrs',$data);
    }
    public function create()
    {
    	return view('rs.form');
    }

    public function store(Request $request)
    {
    	$rule = [
    		'id' => 'required|numeric|unique:rumah_sakit',
    		'nama_rs' => 'required',
    		'alamat' => 'required',
    		'no_telp' => 'required',
    		'alamat_web' => 'required'
    	];
    	$this->validate($request, $rule);

    	$input = $request->all();
    	unset($input['_token']);
    	$status = \DB::table('t_rs_rujukan')->insert($input);

    	if ($status) {
    		return redirect('/rs')->with('success', 'Data berhasil ditambahkan.');
    	}

    	else {
    		return redirect('/rs/create')->with('error', 'Data gagal ditambahkan.');
    	}
    }

    public function edit(Request $request, $id)
    {
        $data['rs'] = \DB::table('t_rs_rujukan')->find($id);
        return view('rs.form', $data);
    }

    public function update(Request $request, $id)
    {
        $rule = [
            'nama_rs' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'alamat_web' => 'required'
        ];
        $this->validate($request, $rule);

        $input = $request->all();
        unset($input['_token']);
        unset($input['_method']);
        $status = \DB::table('t_rs_rujukan')->where('id', $id)->update($input);

        if ($status) {
            return redirect('/rs')->with('success', 'Data berhasil diubah.');
        }

        else {
            return redirect('/rs/create')->with('error', 'Data gagal diubah.');
        }
    }

    public function destroy(Request $request, $id)
    {
        $status = \DB::table('t_rs_rujukan')->where('id', $id)->delete();

        if ($status) {
            return redirect('/rs')->with('success', 'Data berhasil dihapus');
        } else {
            return redirect('/rs/create')->with('error', 'Data gagal dihapus');
        }
    }
}
