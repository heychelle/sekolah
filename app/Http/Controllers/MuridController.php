<?php

namespace App\Http\Controllers;

use App\Models\Murid;
use App\Models\Kelas;
use Illuminate\Http\Request;

class MuridController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $murids = Murid::all();
        return view('murid.indexMurid' , compact('murids'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mkelas = Kelas::all();
        return view('murid.addMurid', compact('mkelas'));
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
            'nis'=>'required|unique:murids',
            'nama_murid'=>'required|string',
            'kelas'=>'required|string',
            'gender'=>'required|string',
            'tanggal_lahir'=>'required|date',
            'alamat'=>'required|string',
            'nomor_telp'=>'required'
        ]);
    
        Murid::create([
            'nis'=>$data['nis'],
            'nama_murid'=>$data['nama_murid'],
            'kelas'=>$data['kelas'],
            'gender'=>$data['gender'],
            'tanggal_lahir'=>$data['tanggal_lahir'],
            'alamat'=>$data['alamat'],
            'nomor_telp'=>$data['nomor_telp']
        ]);
        // Murid::create($request->all());
        return redirect()->route('murid.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Murid  $murid
     * @return \Illuminate\Http\Response
     */
    public function show(Murid $murid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Murid  $murid
     * @return \Illuminate\Http\Response
     */
    public function edit(Murid $murid)
    {
        $mkelas = Kelas::all();
        return view('murid.editMurid', compact('murid','mkelas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Murid  $murid
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Murid $murid)
    {
        $murid->update($request->all());
        return redirect()->route('murid.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Murid  $murid
     * @return \Illuminate\Http\Response
     */
    public function destroy(Murid $murid)
    {
        $murid->delete();
        return redirect()->back();
    }
}
