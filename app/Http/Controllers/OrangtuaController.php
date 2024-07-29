<?php

namespace App\Http\Controllers;

use App\Models\casis;
use Illuminate\Http\Request;

class OrangtuaController extends Controller
{
    public function index(Request $request)
{
    $search = $request->input('search');

    $query = casis::query();

    if ($search) {
        $query->where('nama_ortu', 'like', '%' . $search . '%');
    }

    $data = $query->get();

    return view('ortu.index', compact('data', 'search'));
}
}
