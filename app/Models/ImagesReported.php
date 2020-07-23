<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImagesReported extends Model {

	protected $guarded = array();
	public $timestamps = false;
	
	public function user(){
		return $this->belongsTo('App\Models\User')->first();
	}
	 
	 public function image(){
		return $this->belongsTo('App\Models\Images')->first();
	}

}