<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
	return $this->hasMany('App\MProducts');

}
