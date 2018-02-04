<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Dokumen;
use App\User;
use Sentinel;

class UploadController extends Controller
{
   public function upload(Request $request)
    {
    	$this->validate($request,[
    		'upload_cv' => 'required|mimes:pdf|max:1000',

    	]);

    	$dok=new Dokumen($request->input());

    	if($request->hasFile('upload_cv'))
    	{
    		$file=$request->file('upload_cv');
    		$filename=$file->getClientOriginalName();
    		$path=public_path().'/pdf/';
    		$file->move($path,$filename);
    		$dok->id_user=sentinel::getUser()->id;
    		$dok->upload_cv=$filename;
    		$dok->status_cv="Unread";
    		$dok->save();
    	return redirect()->back()->with(['error'=>"File $filename berhasil di upload."]);
    	}
    	else {
    		return redirect()->back()->with(['error'=>'Gagal mengupload file pastikan tipe file adalah pdf atau ukuran maksimal 1Mb.' ]);
        }
    }
}
