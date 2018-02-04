<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dokumen;
use App\User;
use Sentinel;

class AdminController extends Controller
{
   public function dashboard(){
   	$cv_sum= Dokumen::count();
   	return view('admin.dashboard')->with('jml_cv',$cv_sum);
   
   }

  
   public function mnj_user(){
   	$data=User::all();
   	return view('admin.mnj_user',compact('data'));
   }


   public function kelola_cv(){
      $data=Dokumen::with(array('user' => function($query){
            $query->select('first_name');

      }))->select('upload_cv','status_cv','created_at')->get();

   	return view('admin.kelolacv',compact('data'));
   }

   public function daftar_admin(Request $request){
      $simpan=Sentinel::registerAndActivate($request->all());
      // dd($simpan);
        $role=Sentinel::findRoleBySlug('Administrator');//cari role berdasarkan kolom slug pada tabl role
        $role->users()->attach($simpan);
        //return redirect()->back()->with(['success'=>'Anggota Berhasil disimpan']);

        return view('admin.mnj_user');
   }

   public function delet_user($id){
         User::destroy($id);
         return back();
   }

   public function delet_dok($id){
      Dokumen::destroy($id);
      return back();
   }

   public function update_dok(Request $request,$id){
   $upd=Dokumen::findOrFaul($id)->update($request->all());
   return back();
   }



 



   
}
