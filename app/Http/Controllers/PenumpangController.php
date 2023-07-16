<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Penumpang;

class PenumpangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Penumpang::all();
        return view('penumpang.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('penumpang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Penumpang::create([
            'pen_nama' => $request->pen_nama,
            'pen_asal' => $request->pen_asal,
            'pen_hp' => $request->pen_hp,
            'pen_gender' => $request->pen_gender,
        ]);

        return redirect('penumpang');
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
        $row = Penumpang::find($id);
        return view('penumpang.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
                $row = Penumpang::findOrFail($id);

                $row->update([
                    'pen_nama' => $request->pen_nama,
                    'pen_asal' => $request->pen_asal,
                    'pen_hp' => $request->pen_hp,
                    'pen_gender' => $request->pen_gender,
                ]);
        
                return redirect('penumpang');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Penumpang::findOrFail($id);

        $row->delete();

         return redirect('penumpang');
    }
}
