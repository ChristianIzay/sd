<?php

namespace App\Http\Controllers;

use App\Models\Cours;
use App\Models\Enseignant;
use Illuminate\Http\Request;

class EnseignantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
      //  $enseignant = Enseignant::with('cours')->get();

        //$cours = Cours::all();
        /*$enseignantcours = Enseignant::join("cours_enseignant","cours_enseignant.cours_id","=","cours.id")
            ->where("cours_enseignant.enseignant_id")
            ->get();

        return view('cours.index',compact('cours','enseignantcours'));*/
        //return view('cours.index',compact('enseignant'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Enseignat  $enseignat
     * @return \Illuminate\Http\Response
     */
    public function show(Enseignant $enseignat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Enseignat  $enseignat
     * @return \Illuminate\Http\Response
     */
    public function edit(Enseignant $enseignat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Enseignat  $enseignat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enseignant $enseignat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Enseignat  $enseignat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enseignant $enseignat)
    {
        //
    }
}
