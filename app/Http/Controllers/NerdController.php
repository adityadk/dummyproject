<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Nerd;

class NerdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all the nerds
        $nerds = Nerd::all();
        // load the view and pass the nerds
        return view('nerds.index', compact('nerds', 'nerds'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   // load the create form (app/views/nerds/create.blade.php)
        // return View::make('nerds.create');
        return view('nerds.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\NerdRequest $request)
    {

// validate // read more on validation at http://laravel.com/docs/validation
        // $rules = array('name' => 'required', 'email' => 'required|email', 'nerd_level' => 'required|numeric');
        // $validator = Validator::make(Input::all(), $rules);
        // process the login
        //  if ($validator->fails()) {
        //      return Redirect::to('nerds/create')->withErrors($validator)->withInput(Input::except('password'));
        //   } else {
        // store
        $nerd = new Nerd;
        $nerd->name = $request['name'];
        $nerd->email = $request['email'];
        $nerd->nerd_level = $request['nerd_level'];
        $nerd->save();
// redirect
        //  Session::flash('message', 'Successfully created nerd!');
        return redirect('nerds');
        //  return view('nerds.create');

        //   }

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // get the nerd
        $nerd = Nerd::find($id);
        // show the view and pass the nerd to it
        //  return View::make('nerds.show')
        //  ->with('nerd', $nerd);
        return view('nerds.show', compact('nerd', 'nerd'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $nerd = Nerd::find($id);
        // show the edit form and pass the nerd
        // return View::make('nerds.edit') ->with('nerd', $nerd);
        return view('nerds.edit', compact('nerd', 'nerd'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\NerdRequest $request, $id)
    {
        //

//        // validate // read more on validation at http://laravel.com/docs/validation
//        $rules = array('name' => 'required', 'email' => 'required|email', 'nerd_level' => 'required|numeric');
//        $validator = Validator::make(Input::all(), $rules);
//        // process the login
//        if ($validator->fails()) {
//            return Redirect::to('nerds/' . $id . '/edit')->withErrors($validator)->withInput(Input::except('password'));
//        } else {
//            // store
//            $nerd = Nerd::find($id);
//            $nerd->name = Input::get('name');
//            $nerd->email = Input::get('email');
//            $nerd->nerd_level = Input::get('nerd_level');
//            $nerd->save();
        // redirect
        $nerd = Nerd::find($id);
        $nerd->name = $request['name'];
        $nerd->email = $request['email'];
        $nerd->nerd_level = $request['nerd_level'];
        $nerd->save();

        //Session::flash('message', 'Successfully updated nerd!');
        return redirect('nerds');
        //}


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //


        $nerd = Nerd::find($id);
        $nerd->delete();
        // redirect
       // Session::flash('message', 'Successfully deleted the nerd!');
        return redirect('nerds');

    }
}
