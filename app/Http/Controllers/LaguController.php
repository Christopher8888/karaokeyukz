<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\lagu;

class LaguController extends Controller
{
    function index() 
    {
           //ambil seluruh data di databse lalu masukan ke variable di table_siswa
            $data_lagu = \App\lagu::all();

        return view('index', ['data_lagu'=> $data_lagu]);
    }

    function create(Request $request)
    {
        $request->validate([
            'judul_lagu' => 'required|min:5|max:20',
            'penyanyi' => 'required|min:3|max:15',
            'lirik_lagu'=>'required',
            'tahun_lagu' => 'required|numeric|min:2000|max:2020',
            
        ]);
        //masukan ke database 
        lagu::create($request->all());


     
        
        //habis berhasil input akan redirect ke /lagu 
        return redirect('/lagu')->with('sukses', 'lagu berhasil ditambahkan');
  
    }

    function edit($id) 
    {
        //untuk menyebutkan id di url
        $lagu =\App\lagu::find($id);

                            //parameter tampilkan hasil inputan
       return view('edit', ['lagu' => $lagu]);
    }

    function update( Request $request, $id)
    {
        $lagu =\App\lagu::find($id);
        $lagu->update($request->all());
        return redirect('/lagu')->with('sukses', 'lagu berhasil diupdate');
  
    }

    function delete($id)
    {
        $lagu =\App\lagu::find($id);
        $lagu->delete($lagu);
        return redirect('/lagu')->with('sukses', 'lagu berhasil dihapus');
    }


}
