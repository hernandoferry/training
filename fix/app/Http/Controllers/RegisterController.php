<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class RegisterController extends Controller
{
    public function daftar(){
    	return view('daftar');
    }

    public function simpan_pendaftaran(Request $request){
    	$simpan=Sentinel::registerAndActivate($request->all());
    	// dd($simpan);
        $role=Sentinel::findRoleBySlug('Anggota');//cari role berdasarkan kolom slug pada tabl role
        $role->users()->attach($simpan);
        return view('reg_success');

    }

    
}
