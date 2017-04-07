<?php

namespace App\Http\Controllers;

use App\TypeDoc;
use Illuminate\Http\Request;

class TypeDocController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typeDoc = TypeDoc::all();

        return $typeDoc->toJson();
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TypeDoc  $typeDoc
     * @return \Illuminate\Http\Response
     */
    public function show(TypeDoc $typeDoc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TypeDoc  $typeDoc
     * @return \Illuminate\Http\Response
     */
    public function edit(TypeDoc $typeDoc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TypeDoc  $typeDoc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TypeDoc $typeDoc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TypeDoc  $typeDoc
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypeDoc $typeDoc)
    {
        //
    }
}
