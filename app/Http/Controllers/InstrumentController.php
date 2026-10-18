<?php

namespace App\Http\Controllers;

use App\Models\Instrument;
use Illuminate\Http\Request;

class InstrumentController extends Controller
{
    // Beranda: hero + semua alat musik
    public function home()
    {
        $instruments = Instrument::orderBy('id')->get();

        return view('home', compact('instruments'));
    }

    // Halaman daftar alat musik (bisa difilter berdasarkan jenis/type)
    public function index(Request $request)
    {
        $type = $request->query('type');
        $types = Instrument::select('type')->distinct()->orderBy('type')->pluck('type');

        $instruments = Instrument::when($type, fn ($q) => $q->where('type', $type))
            ->orderBy('id')
            ->get();

        return view('instruments.index', compact('instruments', 'types', 'type'));
    }

    // Halaman detail alat musik
    public function show(Instrument $instrument)
    {
        $others = Instrument::where('id', '!=', $instrument->id)->inRandomOrder()->take(4)->get();

        return view('instruments.show', compact('instrument', 'others'));
    }
}
