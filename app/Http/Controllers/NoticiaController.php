<?php

namespace App\Http\Controllers;

use App\Models\Local;
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
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:500',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'entidade_id' => 'required|exists:entidades,id'
        ]);

        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('images'), $imageName);

            $validatedData['image'] = $imageName;
        }

        $noticia = Noticia::create($validatedData);

        if ($request->has('entidade_id')) {
            $noticia->entidades()->associate($request->entidade_id);
            $noticia->save();
        }

        return redirect()->route('dashboard')->with('success', 'Noticia criada com sucesso.');
    }


    public function show($entidade)
    {
        $entidade = Entidade::findOrFail($entidade);
        $noticias = $entidade->noticias()->paginate(4);
        return view('noticias', compact('noticias'));
    }

    public function create()
    {
        $entidades = Entidade::all();

        return view('noticiaCreate', compact('entidades'));
    }

    public function update(Request $request, Noticia $noticia)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:500',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'entidade_id' => 'required|exists:entidades,id'
        ]);

        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('images'), $imageName);

            $validatedData['image'] = $imageName;
        }

        $noticia->update($validatedData);

        if ($request->has('entidade_id')) {
            $noticia->entidades()->associate($request->entidade_id);
            $noticia->save();
        }

        return redirect()->route('dashboard')->with('success', 'Noticia atualizada com sucesso.');
    }

    public function edit(Noticia $noticia)
    {
        $entidades = Entidade::all();
        return view('noticiaEdit', compact('noticia', 'entidades'));
    }

    public function destroy(Noticia $noticia)
    {
        $noticia->delete();

        return redirect()->back()->with('success', 'Noticia excluída com sucesso.');
    }
}
