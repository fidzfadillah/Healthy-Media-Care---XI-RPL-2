<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BeritaController extends Controller
{
    public function index()
    {
      $data['berita'] = \DB::table('t_berita')->get();
      return view('adminberita',$data);
    }

    public function create()
    {
    	return view('berita.form');
    }

    public function store(Request $request)
    {
    	$rule = [
    		'id' => 'required|numeric|unique:t_berita',
            'judul' => 'required',
            'tanggal' => 'required',
    		'isi' => 'required'
    	];
    	$this->validate($request, $rule);

    	$input = $request->all();
    	unset($input['_token']);
    	$status = \DB::table('t_berita')->insert($input);

    	if ($status) {
    		return redirect('/berita')->with('success', 'Data berhasil ditambahkan.');
    	}

    	else {
    		return redirect('/berita/tambah')->with('error', 'Data gagal ditambahkan.');
    	}
    }

    public function edit(Request $request, $id)
    {
        $data['berita'] = \DB::table('t_berita')->find($id);
        return view('berita.form', $data);
    }

    public function update(Request $request, $id)
    {
        $rule = [
            'judul' => 'required',
            'tanggal' => 'required',
            'isi' => 'required'
        ];
        $this->validate($request, $rule);

        $input = $request->all();
        unset($input['_token']);
        unset($input['_method']);
        $status = \DB::table('t_berita')->where('id', $id)->update($input);

        if ($status) {
            return redirect('/berita')->with('success', 'Data berhasil diubah.');
        }

        else {
            return redirect('/berita/tambah')->with('error', 'Data gagal diubah.');
        }
    }

    public function destroy(Request $request, $id)
    {
        $status = \DB::table('t_berita')->where('id', $id)->delete();

        if ($status) {
            return redirect('/berita')->with('success', 'Data berhasil dihapus');
        } else {
            return redirect('/berita/create')->with('error', 'Data gagal dihapus');
        }
    }
}