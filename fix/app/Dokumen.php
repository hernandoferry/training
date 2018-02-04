<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model

{
	public $fillable=['id','id_user','upload_cv','status_cv','created_at'];
	protected $table ='dokumen';
    public function user(){
    	return $this->belongsTo('App\User','id_user');
    }
}
