<?php

namespace App\Http\Controllers;

use App\Scenario;
use App\USer;
use Auth;
use Session;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Http\Requests;

class ScenariosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);
    }

    // public function paginate($items, $perPage){
    //     $pageStart = Request::get('index', 1);

    //     $offset = ($pageStart* $perPage) - $perPage;

    //     $itemsForCurrentPage = array_slice($items, $offset, $perPage, true);

    //     return new LengthAwarePaginator($itemsForCurrentPage, count($items), $perPage, Paginator::resolveCurrentPage(), array('path' => Paginator::resolveCurrentPath()));
    // }

    public function index(){

    	$scenarios = Scenario::orderBy('created_at', 'DESC')->get();
        $scenarios->load('words.user','user');

    	$texts = $scenarios->where('type', 0);
    	$pictures = $scenarios->where('type', 1);
        
    	return view('scenarios.index', compact('scenarios','texts','pictures'));
    }/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createpost');   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $scenario = new Scenario($request->all());

        $user = Auth::user();
        $user->scenarios()->save($scenario);

        flash('Scenario added successful', 'success');
          return redirect("scenario/$scenario->id");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Scenario $id){
        $scenario = $id;

        return view('scenarios.postpage', compact('scenario'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Scenario $id)
    {
        $scenario = $id;

        return view('editpost', compact('scenario'));   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Scenario $id)
    {
        $scenario = $id;
        $scenario->update($request->all());

        flash('Scenario updated successful', 'success');
         return redirect("scenario/$scenario->id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Scenario $id)
    {
       $id->words()->delete('words.scenario'); 
       $id->delete();

       flash('Scenario deleted successful', 'success');
       return redirect('/');
    }
}

