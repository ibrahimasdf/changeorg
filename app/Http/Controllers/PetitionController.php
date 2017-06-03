<?php

namespace App\Http\Controllers;

use App\Http\Requests\PetitionRequest;
use Illuminate\Http\Request;
use App\Petition;
use Illuminate\Support\Facades\Auth;

class PetitionController extends Controller
{
    Public function __construct()
    {
        $this->middleware('auth')->except(['index','show ']);
    }
    Public function index(){
        $petitions = Petition::all();
        return view('petition.index' ,compact('petitions'));
    }
    public function show($id){
        $petitions = Petition::find($id);
        return view('petition.show' ,compact('petitions'));
    }
    public function create()
    {
        // $petition = Petition::find();
        return view('petition.create');

    }





    public function store(PetitionRequest $request)
    {
        $input = $request->input();
        $petition = New Petition($input);
        Auth::user()->petitions()->save($petition);
        //$petition->save();
/*equivalent ama yg diatasatas
        $input = $request->input();
        $petition = Petition($input);
*/
        return redirect(url('petitions'));
    }

    public function edit($id){
    $petition = Petition::find($id);
    return view('petition.edit' ,compact('petition'));

    }
    public function update(PetitionRequest $request, $id){
        $petitions = Petition::find($id);
        $input = $request -> input();
        return view('petition.show' ,compact('petitions'));

    }
    public function destroy($id){
        $petition = Petition::find($id);
        $petition->delete();

        return redirect(url('petitions'));





    }

}

