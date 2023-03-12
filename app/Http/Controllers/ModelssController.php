<?php

namespace App\Http\Controllers;

use App\Models\Modelss;
use App\Http\Requests\StoreModelssRequest;
use App\Http\Requests\UpdateModelssRequest;

class ModelssController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('daftar',[
        "title" => "Daftar Harga",
        "models" => Modelss::all()
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
     * @param  \App\Http\Requests\StoreModelssRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreModelssRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Modelss  $modelss
     * @return \Illuminate\Http\Response
     */
    public function show(Modelss $modelss)
    {
        return view('detail',[
        "title" => "Detail Buket",
        //Route model banding -> mengirimkan modelnya tidak lahi id atau slug
        // "model" => Modelss::find($modelss)
        "model" => $modelss
    ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Modelss  $modelss
     * @return \Illuminate\Http\Response
     */
    public function edit(Modelss $modelss)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateModelssRequest  $request
     * @param  \App\Models\Modelss  $modelss
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateModelssRequest $request, Modelss $modelss)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Modelss  $modelss
     * @return \Illuminate\Http\Response
     */
    public function destroy(Modelss $modelss)
    {
        //
    }
}
