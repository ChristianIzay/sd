<?php

namespace App\Http\Controllers;

use App\Models\Cours;
use App\Models\Prof;
use Illuminate\Http\Request;

class ProfController extends Controller
{
    //
    public function index()
    {
        $prof = Prof::get();
        //foreach($prof as $profs){
        $coursprof = Cours::join("cours_prof","cours_prof.cours_id","=","cours.id")
            ->where("cours_prof.prof_id")
            ->get();
        //}
        return view('cours.index',compact('prof', 'coursprof'));
    }
}
