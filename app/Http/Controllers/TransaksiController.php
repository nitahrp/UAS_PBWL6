<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\Transaksi;
use App\Models\Penumpang;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Transaksi::with('bus', 'penumpang')->get();
        return view('transaksi.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rowsPenumpang = Penumpang::all();
        $rowsBus = Bus::all();
        return view('transaksi.create', compact('rowsBus', 'rowsPenumpang'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Transaksi::create([
            'tran_bangku' => $request->tran_bangku,
            'tran_id_bus' => $request->tran_id_bus,
            'tran_id_pen' => $request->tran_id_pen,
            'tran_ongkos' => $request->tran_ongkos,
            'tran_hari' => $request->tran_hari,
            'tran_jam' => $request->tran_jam,
        ]);

        return redirect('transaksi');
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
        $row = Transaksi::find($id);
        return view('transaksi.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
                $row = Transaksi::findOrFail($id);

                $row->update([
                    'tran_bangku' => $request->tran_bangku,
                    'tran_id_bus' => $request->tran_id_bus,
                    'tran_id_pen' => $request->tran_id_pen,
                    'tran_ongkos' => $request->tran_ongkos,
                    'tran_hari' => $request->tran_hari,
                    'tran_jam' => $request->tran_jam,
                ]);
        
                return redirect('transaksi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Transaksi::findOrFail($id);

        $row->delete();

         return redirect('transaksi');
    }
}
