<?php

namespace App\Http\Controllers;

use App\Ingrediente;
use App\Pizza;
use Illuminate\Http\Request;

class IngredientiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ingredienti = Ingrediente::all();
        return view('ingredienti.index', compact('ingredienti'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ingredienti.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $newingrediente = new Ingrediente();

        $newingrediente->name = $data['name'];
        $newingrediente->save();

        return redirect()->route('ingredienti.show', $newingrediente->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ingrediente = Ingrediente::findOrFail($id);
        $pizze = $ingrediente->pizze;
        return view('ingredienti.show', compact('ingrediente', 'pizze'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ingrediente = Ingrediente::find($id);

        return view('ingredienti.edit', compact('ingrediente'));
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
        $ingrediente = Ingrediente::findOrFail($id);
        $data = $request->all();
        $ingrediente->update($data);

        return redirect()->route('ingredienti.show', $ingrediente->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ingrediente = Ingrediente::find($id);
        $ingrediente->delete();
        return redirect()->route('ingredienti.index');
    }
}
