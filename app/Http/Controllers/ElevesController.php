<?php

namespace App\Http\Controllers;

use App\Models\Eleves;
use App\Models\Promotions;
use Illuminate\Http\Request;

class ElevesController extends Controller
{
    protected $eleves;
    protected $promotion;

    public function __construct(Eleves $eleves, Promotions $promotion)
    {
        $this->eleves = $eleves;
        $this->promotion = $promotion;
    }
    /**
     * Display a listing of the resource.
     *@ \App\Models\Eleves $eleves
     *@ \App\Models\Promotions $promotion
     * @return \Illuminate\Http\Response
     */
    public function index($promotion_id)
    {
        //

        if(!$promotion = $this->promotion->find($promotion_id))
        {
            return redirect()->back();
        }
        //$promotion=Promotions::all();

         $eleves = $promotion->eleves()->get();

        return view('promotions.index', compact('promotion', 'eleves'));
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
     * @param  \App\Models\Eleves  $eleves
     * @return \Illuminate\Http\Response
     */
    public function show(Eleves $eleves)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Eleves  $eleves
     * @return \Illuminate\Http\Response
     */
    public function edit(Eleves $eleves)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Eleves  $eleves
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Eleves $eleves)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Eleves  $eleves
     * @return \Illuminate\Http\Response
     */
    public function destroy(Eleves $eleves)
    {
        //
    }
}
