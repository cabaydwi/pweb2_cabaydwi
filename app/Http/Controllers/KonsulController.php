<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_konsultasi;

class KonsulController extends Controller
{
    public function index()
    {
       
        $konsultasi = tb_konsultasi::all();
        return view('sneat.html.form',compact(['konsultasi']));
    }
    public function create()
    {
        return view('/konsultasi');
    }
    public function store(Request $request)
    {
       //dd($request->all());
        tb_konsultasi::create($request->except(['_token','submit']));
        return redirect('/konsultasi');
    }
    public function edit($id)
    {
        $konsultasi = Konsultasi::find($id); 
        return view('konsultasi.edit');
    }
    public function update($id, Request $request)
    {
        $konsultasi = konsultasi::find($id);
        $konsultasi->update($request->except(['_token','submit']));
        return redirect('/konsultasi');

    }
}
