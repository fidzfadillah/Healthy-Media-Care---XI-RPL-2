<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Call_centerController extends Controller
{
    public function index()
    {
      $data['cc'] = \DB::table('t_callcenter')->get();
      return view('admincc',$data);
    }
    public function create()
    {
    	return view('cc.form');
    }

    public function store(Request $request)
    {
    	$rule = [
    		'id' => 'required|numeric|unique:call_center',
    		'nama_kota' => 'required',
    		'call_center' => 'required',
    		'hotline' => 'required'
    	];
    	$this->validate($request, $rule);

    	$input = $request->all();
    	unset($input['_token']);
    	$status = \DB::table('t_callcenter')->insert($input);

    	if ($status) {
    		return redirect('/cc')->with('success', 'Data berhasil ditambahkan.');
    	}

    	else {
    		return redirect('/cc/tambah')->with('error', 'Data gagal ditambahkan.');
    	}
    }

        public function edit(Request $request, $id)
    {
        $data['cc'] = \DB::table('t_callcenter')->find($id);
        return view('cc.form', $data);
    }

    public function update(Request $request, $id)
    {
        $rule = [
            'nama_kota' => 'required',
            'call_center' => 'required',
            'hotline' => 'required'
        ];
        $this->validate($request, $rule);

        $input = $request->all();
        unset($input['_token']);
        unset($input['_method']);
        $status = \DB::table('t_callcenter')->where('id', $id)->update($input);

        if ($status) {
            return redirect('/cc')->with('success', 'Data berhasil diubah.');
        }

        else {
            return redirect('/cc/tambah')->with('error', 'Data gagal diubah.');
        }
    }

    public function destroy(Request $request, $id)
    {
        $status = \DB::table('t_callcenter')->where('id', $id)->delete();

        if ($status) {
            return redirect('/cc')->with('success', 'Data berhasil dihapus');
        } else {
            return redirect('/cc/tambah')->with('error', 'Data gagal dihapus');
        }
    }
}
