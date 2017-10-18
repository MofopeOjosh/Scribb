<?php

namespace App;
use Auth;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
	protected $fillable = ['name', 'usage'];
    public function scenario(){
    	
    	return $this->belongsTo(Scenario::class);
    }
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
    public function checkUser(){
    	if ($this->user_id == Auth::id()) {
    		return true;
    	}
		return false;
    }
}
