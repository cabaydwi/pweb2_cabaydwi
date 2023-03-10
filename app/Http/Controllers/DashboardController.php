<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_konsultasi;

class DashboardController extends Controller
{
    public function tampil(){
        $tb_konsultasi = tb_konsultasi::all();
        
        return view('sneat.html.index',compact(['tb_konsultasi']));
    }
    public function delete(string $id_konsul)
    {
        tb_konsultasi::where('id_konsul',$id_konsul)->delete();
        return redirect()->to('dashboard')->with('success');
    }
   
}
