<?php

namespace App;
use Auth;

use Illuminate\Database\Eloquent\Model;

class Scenario extends Model
{
    protected $fillable = ['content', 'type'];
    public function words()
    {
    	return $this->hasMany(Word::class);
    }
    public function addWord(Word $word, User $user)
    {
        $user->words()->save($word);
    	return $this->words()->save($word);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function checkUser(){
        if ($this->user_id == Auth::id()) 
        {
            return true;
        }
        return false;
    }
}
