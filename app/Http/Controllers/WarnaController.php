<?php

namespace App\Http\Controllers;

use App\Models\Warna;
use App\Http\Requests\StoreWarnaRequest;
use App\Http\Requests\UpdateWarnaRequest;

class WarnaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('warna',[
        "title" => "Warna Ready",
        "posts" => Warna::warna()
    ]);
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
     * @param  \App\Http\Requests\StoreWarnaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWarnaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Warna  $warna
     * @return \Illuminate\Http\Response
     */
    public function show(Warna $warna)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Warna  $warna
     * @return \Illuminate\Http\Response
     */
    public function edit(Warna $warna)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWarnaRequest  $request
     * @param  \App\Models\Warna  $warna
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWarnaRequest $request, Warna $warna)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Warna  $warna
     * @return \Illuminate\Http\Response
     */
    public function destroy(Warna $warna)
    {
        //
    }
}
