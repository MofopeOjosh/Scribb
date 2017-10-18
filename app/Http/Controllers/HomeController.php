<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['only' => ['dashboard']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function profile(User $user_id){
        $scenarios = $user_id->scenarios;
        $words = $user_id->words;

        return view('userprofile', compact('scenarios', 'words'));
    }
    public function dashboard(){
        
        $scenarios =  Auth::user()->scenarios;
        $scenarios->load('words.user','user');
        // return $scenarios;
        return view('dashboard', compact('scenarios'));
    }
}
