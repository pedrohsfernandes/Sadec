<?php

namespace App\Http\Controllers;


use id;
use App\Models\truck;
use Illuminate\Http\Request;

class TruckController extends Controller
{
    public readonly Truck $truck;
    public function __construct()
    {
        $this->truck = new Truck();
    }
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
        $created = $this->truck->create ([

            'placa'=> $request->input ('placa'),
            'modelo'=> $request->input ('modelo'),
            'ano'=> $request->input ('ano'),
            'user_id'=> $request->input ('user_id'),
        ]);
           
        if ($created)
        {
            return view('company');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(truck $truck)
    {
        return view('card',['truck'=>$truck]);
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
    public function destroy(string $id)
    {
        $this->truck->where('id', $id)->delete();

        return redirect()->route('dashboard.index');
    }
}
