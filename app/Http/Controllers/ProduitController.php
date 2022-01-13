<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Http\Requests\StoreProduitRequest;
use App\Http\Requests\UpdateProduitRequest;
use App\Models\Magasin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            return view('Frontend.pages.shopStore');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProduitRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProduitRequest $request)
    {
        $store = new Produit;
        $store->name = $request->name;
        $store->description = $request->description;
        $store->price = $request->price;
        $store->cover_path= $request->file('cover_path')->storePublicly('img/', 'public');
        $store->quantity = $request->quantity;
        // $store->cover_path = $request->file('cover_path')->hashName();
        $store->magasins_id = Auth::user()->magasin->id;
        $store->save();
        return redirect('/shop/'.$store->magasins_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function show(Produit $produit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
$produit = Produit::find($id);
// dd($produit);
    return view('Frontend.pages.updateShop', compact('produit'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProduitRequest  $request
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProduitRequest $request, $id)
    {
        // dd($request);
        $produit = Produit::find($id);

        $produit->name=$request->name;
        $produit->description=$request->description;
        $produit->price=$request->price;
        // dd($request->file('cover_path'));
        $produit->cover_path= Storage::disk('public')->put('img', $request->file('cover_path'));
        // $produit->cover_path=$request->cover_path;
        $produit->save();

        return redirect('/shop/'.$produit->magasins_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produit = Produit::find($id);
        // dd($produit);
        $produit->delete();
        return redirect()->back();
    }
}
