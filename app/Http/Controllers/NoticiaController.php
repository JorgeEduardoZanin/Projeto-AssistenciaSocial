<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;
use App\Models\Entidade;

class NoticiaController extends Controller
{
    public function index()
    {
        $noticias = Noticia::all();
        return view('noticiaDash', compact('noticias'));
    }

    public function store(Request $request)
    {
        // Validar os dados do formulário
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:500',
            'photos' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'entidades' => 'required|array', // Validação para garantir que entidades é um array
            'entidades.*' => 'exists:entidades,id', // Validação para garantir que cada entidade exista no banco de dados
        ]);

        // Verifica se foi enviada uma imagem
        if ($request->hasFile('photos')) {
            // Obtém a imagem do request
            $photos = $request->file('photos');
            // Define um nome único para a imagem
            $nomeImagem = time().'.'.$photos->getClientOriginalExtension();
            // Define o caminho onde a imagem será armazenada
            $caminhoImagem = $photos->storeAs('public/images/noticias/', $nomeImagem);
            // Adiciona o caminho da imagem aos dados validados
            $validatedData['image'] = $caminhoImagem;
        }

        // Cria a notícia com os dados validados
        $noticia = Noticia::create($validatedData);

        // Associar as entidades selecionadas à notícia
        $noticia->entidades()->sync($request->entidades);

        // Retorna uma resposta de sucesso
        return redirect()->route('dashboard')->with('success', 'Notícia criada com sucesso.');
    }

    public function show($entidade)
    {
        $entidade = Entidade::findOrFail($entidade);
        $noticias = $entidade->noticias;
        return view('noticias', compact('noticias'));
    }

    public function create()
    {
        $entidades = Entidade::all();

        return view('noticiaCreate', compact('entidades'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
        ]);

        $noticia = Noticia::findOrFail($id);
        $noticia->update($request->all());


        if ($request->has('entidades')) {
            $noticia->entidades()->sync($request->entidades);
        }

        return response()->json($noticia, 200);
    }

    public function destroy(Noticia $noticia)
    {
        $noticia->delete();

        return redirect()->back()->with('success', 'Noticia excluída com sucesso.');
    }
}
