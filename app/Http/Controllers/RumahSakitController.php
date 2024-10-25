<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RumahSakit;

class RumahSakitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rumahSakits = RumahSakit::all();
        return view('admin.rumahsakit', compact('rumahSakits'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.rumahsakit_new');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'nama_rumah_sakit' => 'required|string|max:255',
            'alamat' => 'required|string',
            'email' => 'required|email|unique:rumah_sakits,email',
            'telepon' => 'required|string',
        ]);

        RumahSakit::create($validated);
        return redirect()->route('rumah-sakits.index')->with('success', 'Rumah Sakit berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(RumahSakit $rumahSakit)
    {
        //
        return view('rumah-sakit.show', compact('rumahSakit'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RumahSakit $rumahSakit)
    {
        //
        return view('admin.rumahsakit_edit', compact('rumahSakit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RumahSakit $rumahSakit) 
    {
        //
        $validated = $request->validate([
            'nama_rumah_sakit' => 'required|string|max:255',
            'alamat' => 'required|string',
            'email' => 'required|email|unique:rumah_sakits,email,' . $rumahSakit->id,
            'telepon' => 'required|string',
        ]);

        $rumahSakit->update($validated);
        return redirect()->route('rumah-sakits.index')->with('success', 'Rumah Sakit berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RumahSakit $rumahSakit)
    {
        //
        $rumahSakit->delete();
        return redirect()->route('rumah-sakits.index')->with('success', 'Rumah Sakit berhasil dihapus');
    }
}
