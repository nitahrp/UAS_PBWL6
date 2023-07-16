<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Bus;

class BusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Bus::all();
        return view('bus.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bus.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Bus::create([
            'bus_nomor' => $request->bus_nomor,
            'bus_rute' => $request->bus_rute,
            'bus_jenis' => $request->bus_jenis,
        ]);

        return redirect('bus');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = Bus::find($id);
        return view('bus.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
                $row = Bus::findOrFail($id);

                $row->update([
                    'bus_nomor' => $request->bus_nomor,
                    'bus_rute' => $request->bus_rute,
                    'bus_jenis' => $request->bus_jenis
                ]);
        
                return redirect('bus');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Bus::findOrFail($id);

        $row->delete();

         return redirect('bus');
    }
}
