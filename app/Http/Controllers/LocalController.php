<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Local;


class LocalController extends Controller
{
    public function index()
    {
        $locais = Local::all();
        return view('locais', compact('locais'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Local::create($request->all());
        return redirect()->route('locais.index')->with('success', 'Local criado com sucesso!');
    }

    public function update(Request $request, Local $local)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $local->update($request->all());
        return redirect()->route('locais.index')->with('success', 'Local atualizado com sucesso!');
    }

    public function destroy(Local $local)
    {
        $local->delete();
        return redirect()->route('locais.index')->with('success', 'Local excluído com sucesso!');
    }
}
