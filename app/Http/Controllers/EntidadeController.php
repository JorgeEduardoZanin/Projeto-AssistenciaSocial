<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entidade;

class EntidadeController extends Controller
{
    public function index()
    {
        $entidades = Entidade::all();
        return view('entidade.index', compact('entidades'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'description' => 'required|string',
            'hour' => 'required|string|max:100',
        ]);

        $entidade = Entidade::create($validatedData);

        if ($request->has('locais')) {
            $entidade->locais()->sync($request->locais);
        }

        return redirect()->route('entidade.index')->with('success', 'Entidade criada com sucesso.');
    }

    public function show(Entidade $entidade)
    {
        return view('entidade.show', compact('entidade'));
    }

    public function update(Request $request, Entidade $entidade)
    {
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'description' => 'required|string',
            'hour' => 'required|string|max:100',
        ]);

        $entidade->update($validatedData);

        if ($request->has('locais')) {
            $entidade->locais()->sync($request->locais);
        }

        return redirect()->route('entidade.index')->with('success', 'Entidade atualizada com sucesso.');
    }

    public function destroy(Entidade $entidade)
    {
        $entidade->delete();
        return redirect()->route('entidade.index')->with('success', 'Entidade excluída com sucesso.');
    }
}
