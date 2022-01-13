<?php

namespace App\Http\Controllers;

use App\Models\ProductPanier;
use App\Http\Requests\StoreProductPanierRequest;
use App\Http\Requests\UpdateProductPanierRequest;

class ProductPanierController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductPanierRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductPanierRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductPanier  $productPanier
     * @return \Illuminate\Http\Response
     */
    public function show(ProductPanier $productPanier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductPanier  $productPanier
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductPanier $productPanier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductPanierRequest  $request
     * @param  \App\Models\ProductPanier  $productPanier
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductPanierRequest $request, ProductPanier $productPanier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductPanier  $productPanier
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductPanier $productPanier)
    {
        //
    }
}
