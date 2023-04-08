<?php

namespace App\Http\Controllers;

use App\Models\Stagiaire;
use Illuminate\Http\Request;

class StagiaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $stagiaires=Stagiaire::all();
        return view('main.showStagiaires')->with(['stagiaires'=>$stagiaires]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('main.createStagiaires');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'cin'=>'required',
            'filiere'=>'required',
            'date_naissance'=>'required',
            
        ]);
        $stagiaire=new Stagiaire();
        $stagiaire->nom=$request->input('nom');
        $stagiaire->prenom=$request->input('prenom');
        $stagiaire->cin=$request->input('cin');
        $stagiaire->filiere=$request->input('filiere');
        $stagiaire->date_naissance=$request->input('date_naissance');
        $stagiaire->user_id=auth()->user()->id;

        $stagiaire->save();
        return redirect('/stagiaires')->with(['success'=>'Stagiaire ajoute']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Stagiaire $stagiaire)
    {
        //
        return view('main.showStagiaire')->with(['stagiaire'=>$stagiaire]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Stagiaire $stagiaire)
    {
        //
        return view('main.editStagiaire')->with(['stagiaire'=>$stagiaire]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Stagiaire $stagiaire)
    {
        //
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'cin'=>'required',
            'filiere'=>'required',
            'date_naissance'=>'required',
            
        ]);

        $stagiaire->update([
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'cin'=>$request->cin,
            'filiere'=>$request->filiere,
            'date_naissance'=>$request->date_naissance,
        ]);
        return redirect('/stagiaires')->with(['success'=>'Stagiaire modifier']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stagiaire $stagiaire)
    {
        //
        $stagiaire->delete();
        return redirect('/stagiaires')->with(['success'=>'Stagiaire supprimer']);
    }
}
