<?php

namespace App\Http\Controllers;

use App\Models\Panier;
use App\Http\Requests\StorePanierRequest;
use App\Http\Requests\UpdatePanierRequest;
use App\Models\ProductPanier;
use App\Models\Produit;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PanierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paniers = Auth::user()->panier;
        $paniers= ProductPanier:: where('paniers_id', $paniers->id)->get();
        // dd($paniers);
        return view('Frontend.pages.panier', compact('paniers'));
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
     * @param  \App\Http\Requests\StorePanierRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePanierRequest $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Panier  $panier
     * @return \Illuminate\Http\Response
     */
    public function show(Panier $panier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Panier  $panier
     * @return \Illuminate\Http\Response
     */
    public function edit(Panier $panier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePanierRequest  $request
     * @param  \App\Models\Panier  $panier
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePanierRequest $request, Panier $panier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Panier  $panier
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $panier = ProductPanier::find($id);
        $product = Produit::find($panier->produits_id);
        $product->quantity += $panier->quantity;
        $product->save();
        $panier->delete();
        return redirect()->back();
    }

    public function add(StorePanierRequest $request,$id){
        $panier =  Auth::user()->panier;
        $product = Produit::find($id);

        if ( ProductPanier::where('paniers_id',$panier->id)->where('produits_id',$id)->count() > 0 ){
            $productPanier = ProductPanier::where('paniers_id',$panier->id)->where('produits_id',$id)->first();
            $productPanier->quantity += $request->quantity;

            $productPanier->save();

        }
        else{
            $productPanier = new ProductPanier();
            $productPanier->paniers_id = $panier->id;
            $productPanier->produits_id = $id;
            $productPanier->quantity = $request->quantity;
            $productPanier->save();
        }
        $product->quantity -= $request->quantity;
        $product->save();

        // dd($product);
        return redirect()->back();
    }

}
