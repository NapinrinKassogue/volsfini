<?php

namespace App\Http\Controllers;

use App\Models\vol;
use Illuminate\Http\Request;

class VolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //VOL qui est au MODEL ICI
        $avion = vol::all();
        return view('vols.index', compact('avion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('vols.create');
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
        $donnetataw = $request->validate([
            'code_vol'=>'required ',
            'date_depart'=>'required',
            'heure_depart'=>'required', 
            'destination'=>'required',
            'nbre_placeA'=>'required',
            'nbre_placeB'=>'required', 
            'prix_classeA'=>'required',
            'prix_classeB'=>'required',
        ]);
        //VOL qui est au MODEL ICI
        vol::create($donnetataw);
        return redirect('/vols');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $avionkelen = vol::findOrFail($id);
        return view('vols.show', compact('avionkelen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $avionflana = vol::findOrFail($id);
        return view('vols.edit', compact('avionflana'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $donnefalena = $request->validate([
            'code_vol'=>'required ',
            'date_depart'=>'required',
            'heure_depart'=>'required', 
            'destination'=>'required',
            'nbre_placeA'=>'required',
            'nbre_placeB'=>'required', 
            'prix_classeA'=>'required',
            'prix_classeB'=>'required',
        ]);
        vol::whereId($id)->update($donnefalena);
        return redirect('/vols');
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
        $aboye = vol::findOrFail($id);
        $aboye->delete();
        return redirect('/vols');
    }
}
