<?php

namespace App\Http\Controllers;

use App\Models\VideoCategory;
use App\Http\Requests\StoreVideogCategoryRequest;
use App\Http\Requests\UpdateVideogCategoryRequest;

class VideogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
     * @param  \App\Http\Requests\StoreVideogCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVideogCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VideogCategory  $videogCategory
     * @return \Illuminate\Http\Response
     */
    public function show(VideogCategory $videogCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VideogCategory  $videogCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(VideogCategory $videogCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVideogCategoryRequest  $request
     * @param  \App\Models\VideogCategory  $videogCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVideogCategoryRequest $request, VideogCategory $videogCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VideogCategory  $videogCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(VideogCategory $videogCategory)
    {
        //
    }
}
