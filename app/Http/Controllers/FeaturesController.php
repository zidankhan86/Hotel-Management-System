<?php

namespace App\Http\Controllers;

use App\Models\Features;
use Illuminate\Http\Request;

class FeaturesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $features= Features::all();
        return view('backend.features_and_facilities.features',compact('features'));
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
        Features::create([
            'name' => $request->name,
        ]);

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Features $features)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Features $features)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Features $features)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Features $features)
    {
        //
    }
}
