<?php

namespace App\Http\Controllers;

use App\Models\reservations;
use Illuminate\Http\Request;

class ReservationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pass = reservations::all();
        return view('reservations.index', compact('pass'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('reservations.create');
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
        $kass = $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'num_piece'=>'required',
            'sexe'=>'required',
            'classe'=>'required',
            'vol_id'=>'required',
        ]);
        reservations::create($kass);
        return redirect('/reservations');
    }
 
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\reservations  $reservations
     * @return \Illuminate\Http\Response
     */
    public function show(reservations $reservations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\reservations  $reservations
     * @return \Illuminate\Http\Response
     */
    public function edit(reservations $reservations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\reservations  $reservations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, reservations $reservations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\reservations  $reservations
     * @return \Illuminate\Http\Response
     */
    public function destroy(reservations $reservations)
    {
        //
    }
}
