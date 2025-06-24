<?php

namespace App\Http\Controllers;
use App\Models\Smk;
use Illuminate\Http\Request;

class SmkController extends Controller
{
    public function index()
    {
        $smks = Smk::with('fotos')->get();
        return view('smk.index', compact('smks'));
    }

    public function show($id)
    {
        $smk = Smk::with('fotos')->findOrFail($id);
        return view('smk.show', compact('smk'));
    }
}