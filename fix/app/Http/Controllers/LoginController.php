<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use App\User;
use App\Dokumen;
class LoginController extends Controller
{
    public function index(){
    	return view('login');
    }


    public function proses_login (Request $request){

        try {

            if (Sentinel::authenticate($request->all())) {
            $slug=Sentinel::getUser()->roles()->first()->slug;

            if ($slug=='Administrator') {
                return redirect()->action('AdminController@dashboard');
            }

            elseif ($slug=='Anggota') {
                return redirect()->action('LoginController@home_user');
            }
        }
        else {
                return redirect()->back()->with(['error' => 'Email atau password salah !']);
            }
            
        } catch (ThrottlingException $e) {
            $delay= $e->getDelay();

            return redirect()->back()->with(['error' => "Maaf anda salah login lebih dari 3x,Silahkan menunggu selama $delay detik, untuk memulai login kembali."]);
        }
    }

    public function logout(){
    	Sentinel::logout();
    	return redirect('/');

    }

    public function home_user(){
       $key=sentinel::getUser()->id;
       $data=Dokumen::select('upload_cv','status_cv','created_at')->where('id_user',$key)->get();
        return view('anggota.home',compact('data'));
    }

    public function upload_cv(){
        return view('anggota.upload_cv');
    }
}
