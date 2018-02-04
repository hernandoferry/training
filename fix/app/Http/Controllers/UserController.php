<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class UserController extends Controller
{
   public function index(){

   	return view('anggota.home');

   }



   public function upload_cv(){

   	return view('anggota.upload_cv');
   }
}
