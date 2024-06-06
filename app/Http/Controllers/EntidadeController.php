<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entidade;
use App\Models\Local;

class EntidadeController extends Controller
{
    public function index()
    {
        $entidades = Entidade::all();
        return view('entidadeDash', compact('entidades'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'description' => 'required|string|max:500',
            'hour' => 'required|string|max:100',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'local_id' => 'required|exists:locals,id'
        ]);

        // Verifica se foi enviada uma imagem
        if ($request->hasFile('image')) {
            // Obtém a imagem do request
            $imagem = $request->file('image');
            // Define um nome único para a imagem
            $nomeImagem = time().'.'.$imagem->getClientOriginalExtension();
            // Define o caminho onde a imagem será armazenada
            $caminhoImagem = $imagem->storeAs('public/images/entidades/', $nomeImagem);
            // Adiciona o caminho da imagem aos dados validados
            $validatedData['image'] = $caminhoImagem;
        }

        // Cria a entidade com os dados validados
        $entidade = Entidade::create($validatedData);

        // Verifica se foi enviado um local
        if ($request->has('local_id')) {
            // Associa a entidade ao local
            $entidade->local()->associate($request->local);
            // Salva a associação
            $entidade->save();
        }

        return redirect()->route('dashboard')->with('success', 'Entidade criada com sucesso.');
    }



    public function show($local)
    {
        $local = Local::findOrFail($local);
        $entidades = $local->entidades;
        return view('entidades', compact('entidades'));
    }

    public function create()
    {
        $locais = Local::all();

        return view('entidadeCreate', compact('locais'));
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

        return redirect()->back()->with('success', 'Entidade excluída com sucesso.');
    }
}
