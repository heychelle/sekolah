<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Murid;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mkelas = Kelas::all();
        return view('kelas.indexKelas' , compact('mkelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kelas.addKelas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'kelas'=>'required|string',
            'jurusan_kelas'=>'required|string',
            'wali_kelas'=>'required|unique:kelas'
        ]);
    
        Kelas::create([
            'kelas'=>$data['kelas'],
            'jurusan_kelas'=>$data['jurusan_kelas'],
            'wali_kelas'=>$data['wali_kelas']
        ]);
        // Kelas::create($request->all());
        return redirect()->route('kelas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function show(Kelas $kelas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function edit(Kelas $kela)
    {    
        // $mkelas = Kelas::find($kelas);
        return view('kelas.editKelas', compact('kela'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kelas $kela)
    {
        $kela->update($request->all());
        return redirect()->route('kelas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kelas $kela)
    {
        
        $kela->delete();
        return redirect()->back();
    }
}
