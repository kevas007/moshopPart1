<?php

namespace App\Http\Controllers;

use App\Models\Magasin;
use App\Http\Requests\StoreMagasinRequest;
use App\Http\Requests\UpdateMagasinRequest;
use Illuminate\Support\Facades\DB;

class MagasinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $magasins = Magasin::all();

    return view('Frontend.pages.magasinAll', compact('magasins'));
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
     * @param  \App\Http\Requests\StoreMagasinRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMagasinRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Magasin  $magasin
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = DB::table('magasins')
        ->join('produits','magasins.id','=', 'produits.magasins_id' )
        // ->join('product_paniers', 'produits.id', '=', 'product_paniers.produits_id')
        ->where('magasins.id', $id)
        ->get();
        // dd($show);
        return view('Frontend.pages.magasin', compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Magasin  $magasin
     * @return \Illuminate\Http\Response
     */
    public function edit(Magasin $magasin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMagasinRequest  $request
     * @param  \App\Models\Magasin  $magasin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMagasinRequest $request, Magasin $magasin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Magasin  $magasin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Magasin $magasin)
    {
        //
    }
}
