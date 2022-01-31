<?php

namespace App\Http\Controllers;

use App\Fumetti;
use Illuminate\Http\Request;

class FumettiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fumettis = Fumetti::all();
        return view('fumettis.home', compact('fumettis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fumettis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Salvo dentro data tutti i campi del form inviati nella request
        $data= $request->all();

        $new_fumetto = new Fumetti();
        $new_fumetto->title = $data['title'];
        $new_fumetto->series = $data['series'];
        $new_fumetto->image = $data['image'];
        $new_fumetto->description = $data['description'];
        $new_fumetto->save();
        return redirect()->route('fumettis.show', $new_fumetto);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fumettis= Fumetti::find($id);
        if($fumettis){
        return view('fumettis.show', compact('fumettis'));
        }
        abort(404,'Fumetto non presente nel database');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
