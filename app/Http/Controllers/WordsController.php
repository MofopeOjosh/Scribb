<?php

namespace App\Http\Controllers;

use App\Scenario;
use App\USer;
use App\Word;
use Auth;
use Session;

use Illuminate\Http\Request;

use App\Http\Requests;

class WordsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

	public function create(Scenario $scenario){

		return view('addword', compact('scenario'));
	}
    public function store(Request $request, Scenario $scenario){
    	
    	// $word = new App\Word;
    	// $word->name = $request->name;
    	// $word->usage = $request->usage;

    	// $word = new Word(['name' => $request->name, 'usage' => $request->usage]);
    	// $scenario->words()->save($word);
        $this->validate($request, [
            'name' => 'required', 
            'usage' => 'required'
        ]);

        $word = new Word($request->all());
        
    	$user = Auth::user();
    	$scenario->addWord($word, $user);


        flash('Word added successful', 'success');
    	return redirect("scenario/$scenario->id");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Word $id)
    {
        $word = $id;

        return view('editword', compact('word'));   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Word $id)
    {
        $word = $id;
        $word->update($request->all());
        $scenario_id = $id->scenario_id; 

        flash('Word updated successful', 'success');
        return redirect("scenario/$scenario_id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Word $id)
    {
       $scenario_id = $id->scenario_id; 
       $id->delete();

       flash('Word deleted successful', 'success');
        return redirect("scenario/$scenario_id");
    }
}