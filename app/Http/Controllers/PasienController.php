<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\RumahSakit;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index()
    {
        $pasiens = Pasien::with('rumahSakit')->get();
        $rumahSakits = RumahSakit::all();
        return view('admin.pasien', compact('pasiens', 'rumahSakits'));
    }

    public function create()
    {
        $rumahSakits = RumahSakit::all();
        return view('admin.pasien_new', compact('rumahSakits'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_pasien' => 'required|string|max:255',
            'alamat' => 'required|string',
            'no_telpon' => 'required|string',
            'rumah_sakit_id' => 'required|exists:rumah_sakits,id',
        ]);

        Pasien::create($validated);
        return redirect()->route('pasiens.index')->with('success', 'Pasien berhasil ditambahkan');
    }

    public function edit(Pasien $pasien)
    {
        $rumahSakits = RumahSakit::all();
        return view('admin.pasien_edit', compact('pasien', 'rumahSakits'));
    }

    public function update(Request $request, Pasien $pasien)
    {
        $validated = $request->validate([
            'nama_pasien' => 'required|string|max:255',
            'alamat' => 'required|string',
            'no_telpon' => 'required|string',
            'rumah_sakit_id' => 'required|exists:rumah_sakits,id',
        ]);

        $pasien->update($validated);
        return redirect()->route('pasiens.index')->with('success', 'Pasien berhasil diperbarui');
    }

    public function destroy(Pasien $pasien)
    {
        $pasien->delete();
        return response()->json(['success' => 'Pasien berhasil dihapus']);
    }
}
