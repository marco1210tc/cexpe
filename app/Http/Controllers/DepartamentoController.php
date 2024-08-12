<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    public function show(Departamento $departamento)
    {
        return view('people', [
            'departamento' => $departamento,
            'people' => $departamento->people()
                ->with('departamento')
                ->latest()
                ->paginate(5)
        ]);
    }
}
