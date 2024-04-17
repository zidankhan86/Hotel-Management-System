<?php

namespace App\Http\Controllers;

use App\Models\facilities;
use Illuminate\Http\Request;

class FacilitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.features_and_facilities.facilities');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        facilities::create([
            'name' => $request->name,
            'description' => $request->description,

        ]);

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(facilities $facilities)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(facilities $facilities)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, facilities $facilities)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(facilities $facilities)
    {
        //
    }
}
