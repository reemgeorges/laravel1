<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\features;

class featureController extends Controller
{
    public function index()
    {
        $features = features::all();

        return view('features.index', compact('features'));
    }

    public function create()
    {
        return view('features.create');
    }

    public function store(Request $request)
    {
        $data = $request->only(['name', 'price']);
        features::create($data);

        return redirect()->route('features.index');
    }
}
