<?php
namespace App;
use illuminate\Database\Eloquent\Model;

class MProducts extends Model {
	public $fillable=['name','details','MProduct_id','Supplier'];
	protected $table ='MProducts';
	
}

?>