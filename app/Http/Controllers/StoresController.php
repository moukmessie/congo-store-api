<?php

namespace App\Http\Controllers;

use App\Http\Resources\EshopsResource;
use App\Models\stores;
use App\Http\Requests\StoreeShopRequest;
use App\Http\Requests\UpdateeShopRequest;
use Illuminate\Http\Request;

class StoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return EshopsResource::collection(stores::all());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreeShopRequest  $request
     * @return string
     */
    public function store(Request $request)
    {
        if (stores::create($request->all())) {
            return response()->json([
                'success'=>'Boutique créée avec succès!'
            ]);

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\stores  $eShop
     * @return EshopsResource
     */
    public function show(stores $eShop)
    {
        return new EshopsResource($eShop);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateeShopRequest  $request
     * @param  \App\Models\stores  $eShop
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateeShopRequest $request, stores $eShop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\stores  $eShop
     * @return \Illuminate\Http\Response
     */
    public function destroy(stores $eShop)
    {
        //
    }
}
