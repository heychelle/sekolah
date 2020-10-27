<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Murid;
use App\Models\Kelas;

class PageController extends Controller
{
    //
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $murids = Murid::all();
        $mkelas = Kelas::all();
        return view('list.index' , compact('murids','mkelas'));
    }
}
