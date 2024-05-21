<?php

namespace App\Http\Controllers;

use App\Models\truck;
use Illuminate\Http\Request;

class TruckController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('truck.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(truck $truck)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(truck $truck)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, truck $truck)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(truck $truck)
    {
        //
    }
}
